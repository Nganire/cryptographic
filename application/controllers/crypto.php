<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crypto extends CI_Controller {
	CONST salt='secret text sharedByBothFunctoin';
	public function index(){
		$this->load->helper(array('form'));
		$this->load->view('main');
	}
	public function encrypt(){
		$arr['res'] = array('answer'=> $this->encryption($this->input->post('text')));
		$this->load->view('encrypt',$arr);
   }

	public function decrypt(){
		$text=$this->input->post('text');
		$arr['res'] = array('answer'=> $this->decryption($text));
		$this->load->view('decrypt',$arr);

	}
	private function encryption($text)
	

		{
	    return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, crypto::salt, $text, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB)))));
		}
	private function decryption($text){

		 return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, crypto::salt, base64_decode($text), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB))));
}
	}

