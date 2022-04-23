<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feature extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_feature');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['feature'] = $this->Model_feature->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_feature',$data);
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
			$this->form_validation->set_rules('content', 'Content', 'trim|required');
			//$this->form_validation->set_rules('icon', 'Icon', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

             $path     = $_FILES['photo']['name'];
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
		         $error .= 'You must have to select a photo for this feature<br>';
		      }
		    
		    if($valid == 1) 
		    {
		       $final_name = 'feature-'.mt_rand(0,100).time().'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        $form_data = array(
					'name'    => $_POST['name'],
					'content' => $_POST['content'],
					'icon'    => 'fa fa-box',
					'photo'   => $final_name,
					'lang_id' => $_POST['lang_id']
	            );
	            $this->Model_feature->add($form_data);

		        $success = 'Feature is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/feature');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/feature/add');
		    }
            
        } else {
            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_feature_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
    	$tot = $this->Model_feature->feature_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/feature');
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
			  $has_file = false;

			  $path = $_FILES['photo']['name'];
		      $path_tmp = $_FILES['photo']['tmp_name'];

             if($path!='') {
			        $ext = pathinfo( $path, PATHINFO_EXTENSION );
			        $file_name = basename( $path, '.' . $ext );
			        $ext_check = $this->Model_common->extension_check_photo($ext);
			        $has_file =1;

			        if($ext_check == FALSE) {
			            $valid = 0;
			            $error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
			        }
			    } 

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('content', 'Content', 'trim|required');
			//$this->form_validation->set_rules('icon', 'Icon', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }
	    
		    if($valid == 1) 
		    {

		    	
		    	

		    	$data['feature'] = $this->Model_feature->getData($id);

	    		$form_data = array(
					'name'    => $_POST['name'],
					'content' => $_POST['content'],
					'icon'    => $_POST['icon'],
					'lang_id' => $_POST['lang_id']
	            );

	            if($has_file){
		    	  $final_name = 'portfolio-'.mt_rand(0,100).time().'.'.$ext;
		          move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
		          $form_data['photo'] = $final_name;
		        }

	            $this->Model_feature->update($id,$form_data);
				
				$success = 'Feature is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/feature');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/feature/edit/'.$id);
		    }
           
		} else {
			$data['feature'] = $this->Model_feature->getData($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_feature_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
    	$tot = $this->Model_feature->feature_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/feature');
        	exit;
    	}

		if(PROJECT_MODE == 0) {
			$this->session->set_flashdata('error',PROJECT_NOTIFICATION);
			redirect($_SERVER['HTTP_REFERER']);
		}

        $data['feature'] = $this->Model_feature->getData($id);
        if($data['feature']) {
            unlink('./public/uploads/'.$data['feature']['photo']);
        }

        $this->Model_feature->delete($id);
        $success = 'Feature is deleted successfully';
        $this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/feature');
    }

}