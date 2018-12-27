<?php
class Process extends CI_Controller{

public function home(){
   if(!$this->session->userdata('encrypt_count')){
      $this->session->set_userdata('encrypt_count', 0);
       }
   if(!$this->session->userdata('decrypt_count')){
      $this->session->set_userdata('decrypt_count', 0);
       }
   $this->load->view('users/home.php');
}
public function encrypt_text(){

   $text=$this->input->post('text',true);    // Null is every thing in the post .....
   $this->load->library('encryption');
   $array['encryptext']=$this->encryption->encrypt($text);
                   //session part voor count massege
   $encrypt_count= $this->session->userdata('encrypt_count');
   $this->session->set_userdata('encrypt_count', $encrypt_count+1);
   $array['encrypt_count']=$this->session->userdata('encrypt_count');


   $this->load->view('users/encrypt.php',$array);
}
public function decrypt_text(){

   $text=$this->input->post('text',true);    // Null is every thing in the post .....
   $this->load->library('encryption');
   $array['decryptext']=$this->encryption->decrypt($text);
   //session part voor count massege
   $decrypt_count= $this->session->userdata('decrypt_count');
   $this->session->set_userdata('decrypt_count', $decrypt_count+1);
   $array['decrypt_count']=$this->session->userdata('decrypt_count');

   $this->load->view('users/decrypt.php',$array);
}

}
?>