<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keyarea extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_keyarea');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['keyarea'] = $this->Model_keyarea->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_keyareas',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['all_lang'] = $this->Model_common->all_lang();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			if(PROJECT_MODE == 0) {
				$this->session->set_flashdata('error',PROJECT_NOTIFICATION);
				redirect($_SERVER['HTTP_REFERER']);
			}

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('short_content', 'Short Content', 'trim|required');
			
			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            $path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error .= 'You must have to select a photo for featured photo<br>';
		    }

		   
		    if($valid == 1) 
		    {
				$next_id = $this->Model_keyarea->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'keyarea-'.$ai_id.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        $form_data = array(
					'name'             => $_POST['name'],
					'short_content'    => $_POST['short_content'],
					'photo'            => $final_name,
					'lang_id'          => $_POST['lang_id']
	            );
	            $this->Model_keyarea->add($form_data);


	            if( isset($_FILES['photos']["name"]) && isset($_FILES['photos']["tmp_name"]) )
		        {
		            $photos = array();
		            $photos = $_FILES['photos']["name"];
		            $photos = array_values(array_filter($photos));

		            $photos_temp = array();
		            $photos_temp = $_FILES['photos']["tmp_name"];
		            $photos_temp = array_values(array_filter($photos_temp));

		            $next_id1 = $this->Model_keyarea->get_auto_increment_id1();
					foreach ($next_id1 as $row1) {
			            $ai_id1 = $row1['Auto_increment'];
			        }

		            $z = $ai_id1;

		            $m=0;
		            $final_names = array();
		            for($i=0;$i<count($photos);$i++)
		            {

		            	$ext = pathinfo( $photos[$i], PATHINFO_EXTENSION );
				        $ext_check = $this->Model_common->extension_check_photo($ext);
				        if($ext_check == FALSE) {
				        	// Nothing to do, just skip
				        } else {
				        	$final_names[$m] = $z.'.'.$ext;
		                    move_uploaded_file($photos_temp[$i],"./public/uploads/".$final_names[$m]);
		                    $m++;
		                    $z++;
				        }
		            }
		        }

		        for($i=0;$i<count($final_names);$i++)
		        {
		        	$form_data = array(
						'keyarea_id' => $ai_id,
						'photo'        => $final_names[$i]
		            );
		            $this->Model_keyarea->add_photos($form_data);
		        }


		        $success = 'keyarea is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/keyarea');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/keyarea/add');
		    }            
        } else {
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_keyareas_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no service in this id, then redirect
    	$tot = $this->Model_keyarea->keyarea_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/keyarea');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
       	$data['all_lang'] = $this->Model_common->all_lang();

		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			if(PROJECT_MODE == 0) {
				$this->session->set_flashdata('error',PROJECT_NOTIFICATION);
				redirect($_SERVER['HTTP_REFERER']);
			}

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('short_content', 'Short Content', 'trim|required');
			
			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            $path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
		        }
		    }

		    
		    if($valid == 1) 
		    {
		    	$data['keyarea'] = $this->Model_keyarea->getData($id);

		    	if($path == '') {
		    		$form_data = array(
						'name'             => $_POST['name'],
						'short_content'    => $_POST['short_content'],
						'lang_id'          => $_POST['lang_id']
		            );
		            $this->Model_keyarea->update($id,$form_data);
				}
				else {
					unlink('./public/uploads/'.$data['keyarea']['photo']);

					$final_name = 'keyarea-'.$id.'.'.$ext;
		        	move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        	$form_data = array(
						'name'             => $_POST['name'],
						'short_content'    => $_POST['short_content'],
						'photo'            => $final_name,
						'lang_id'          => $_POST['lang_id']
		            );
		            $this->Model_keyarea->update($id,$form_data);
				}

				if( isset($_FILES['photos']["name"]) && isset($_FILES['photos']["tmp_name"]) )
		        {
		            $photos = array();
		            $photos = $_FILES['photos']["name"];
		            $photos = array_values(array_filter($photos));

		            $photos_temp = array();
		            $photos_temp = $_FILES['photos']["tmp_name"];
		            $photos_temp = array_values(array_filter($photos_temp));

		            $next_id1 = $this->Model_keyarea->get_auto_increment_id1();
					foreach ($next_id1 as $row1) {
			            $ai_id1 = $row1['Auto_increment'];
			        }

		            $z = $ai_id1;

		            $m=0;
		            $final_names = array();
		            for($i=0;$i<count($photos);$i++)
		            {

		            	$ext = pathinfo( $photos[$i], PATHINFO_EXTENSION );
				        $ext_check = $this->Model_common->extension_check_photo($ext);
				        if($ext_check == FALSE) {
				        	// Nothing to do, just skip
				        } else {
				        	$final_names[$m] = $z.'.'.$ext;
		                    move_uploaded_file($photos_temp[$i],"./public/uploads/".$final_names[$m]);
		                    $m++;
		                    $z++;
				        }
		            }
		        }

		        for($i=0;$i<count($final_names);$i++)
		        {
		        	$form_data = array(
						'keyarea_id' => $id,
						'photo'        => $final_names[$i]
		            );
		            $this->Model_keyarea->add_photos($form_data);
		        }

				$success = 'Keyarea is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/keyarea');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/keyarea/edit/'.$id);
		    }
           
		} else {
			$data['keyarea'] = $this->Model_keyarea->getData($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_keyareas_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
    	$tot = $this->Model_keyarea->keyareas_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/keyarea');
        	exit;
    	}

		if(PROJECT_MODE == 0) {
			$this->session->set_flashdata('error',PROJECT_NOTIFICATION);
			redirect($_SERVER['HTTP_REFERER']);
		}

        $data['keyarea'] = $this->Model_keyarea->getData($id);
        if($data['keyarea']) {
            unlink('./public/uploads/'.$data['keyarea']['photo']);
        }

        $keyarea_photos = $this->Model_keyarea->get_all_photos_by_category_id($id);
        foreach($keyarea_photos as $row) {
			unlink('./public/uploads/'.$row['photo']);
        }

        $this->Model_keyarea->delete($id);
        $this->Model_keyarea->delete_photos($id);

        $success = 'Keyarea is deleted successfully';
        $this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/keyarea');
    }

    

}