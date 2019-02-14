<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {
	public function index()
	{
		$this->data['head_title'] = 'Contact | Universal Gas';
        $this->load_old_view('contact');
	}
	
}
