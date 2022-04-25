<?php

if(!function_exists('old')){

    function old($field){

        $ci   =& get_instance();
        $data = $ci->session->flashdata('data');
       return (isset($data[$field]))?$data[$field]:'';
    }
}


if(!function_exists('truncate')){
    
    function truncate($content,$length=100,$start=0){

        return (strlen($content)>$length)?substr($content, 0,$length)."...":$content;
    }
}

if(!function_exists('trans')){

    function trans($lang_key){
        $ci =& get_instance();
       return $ci->lang->line($lang_key);
    }
}

if(!function_exists('menu_pages')){

    function menu_pages($pageCategoryId){
        $ci =& get_instance();
        $ci->load->model('admin/Model_pages');
        return $ci->Model_pages->pages_by_category($pageCategoryId);
    }
}


if(!function_exists('make_slug')){

    function make_slug($text, string $divider = '-')
    {
      // replace non letter or digits by divider
      $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

      // transliterate
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

      // remove unwanted characters
      $text = preg_replace('~[^-\w]+~', '', $text);

      // trim
      $text = trim($text, $divider);

      // remove duplicate divider
      $text = preg_replace('~-+~', $divider, $text);

      // lowercase
      $text = strtolower($text);

      if (empty($text)) {
        return 'n-a';
      }

      return $text;
    }
}


if(!function_exists('get_counters')){
    function get_counters(){
        $ci =& get_instance();
        $ci->load->model('admin/Model_common');
        return $ci->Model_common->get_counters();
    }
}

if(!function_exists('events_categories')){

    function events_categories(){
        $ci =& get_instance();
        return $ci->db->get('tbl_event_categories')->result();
    }
}



if(!function_exists('publication_types')){

    function publication_types(){
        $ci =& get_instance();
        return $ci->db->get('publication_types')->result();
    }
}


if(!function_exists('send_mail')){
function send_mail($receiver,$message,$title){

        $ci =& get_instance();
        $ci->load->library('email');
        $config=array(
            'charset'=>'utf-8',
            'wordwrap'=> TRUE,
            'mailtype' => 'html'
            );
            
        $ci->email->initialize($config);

        $ci->email->from('no-reply@fitspa.ug', 'FITSPA Website');
        $ci->email->to($receiver);
        $ci->email->subject($title);
        $ci->email->message($message);
        //$ci->email->set_mailtype("html");
        $ci->email->send();
    }
}

if(!function_exists('render_page')){
  function render_page($view,$data){
      $ci =& get_instance();
      $ci->load->view('view_header',$data);
      $ci->load->view('partials/view_menu',$data);
      $ci->load->view($view,$data);
      $ci->load->view('view_footer',$data);
  }
}

if(!function_exists('dd')){

    function dd($data){
        $ci =& get_instance();
        print_r($data);
        exit();
    }
}

if (!function_exists('timeago')) {

function timeago($timestamp)
{
    $time_ago = strtotime($timestamp);
    $current_time = time();
    $time_difference = $current_time - $time_ago;
    $seconds = $time_difference;

    $minutes = round($seconds / 60);           // value 60 is seconds
    $hours = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec
    $days = round($seconds / 86400);          //86400 = 24 * 60 * 60;
    $weeks = round($seconds / 604800);          // 7*24*60*60;
    $months = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60
    $years = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60

    if ($seconds <= 60) {
        return "Just now";
    } else if ($minutes <= 60) {
        if ($minutes == 1) {
            return "1 " . "Minute" . " " . "ago";
        } else {
            return $minutes . " " ."Minutes" . " ago";
        }
    } else if ($hours <= 24) {
        if ($hours == 1) {
            return "1 " . "hour" . " " . "ago";
        } else {
            return $hours . " " . "hours" . " " . "ago";
        }
    } else if ($days <= 30) {
        if ($days == 1) {
            return "1 " . "day" . " " . "ago";
        } else {
            return $days . " " . "days". " " . "ago";
        }
    } else if ($months <= 12) {
        if ($months == 1) {
            return "1 " . "month" . " " . "ago";
        } else {
            return $months . " " . "months" . " " . "ago";
        }
    } else {
        if ($years == 1) {
            return "1 " . "year" . " " . "ago";
        } else {
            return $years . " " . "years". " " . "ago";
        }
    }
}
}


if (!function_exists('recent_news')) {
  function recent_news(){

      $ci =& get_instance();
      $ci->load->model('Model_news');
      return $ci->Model_news->fetch_news(3, 0);
  }

}



?>