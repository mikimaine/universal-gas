<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function index()
	{
		$this->data['head_title'] = 'Home | Universal Gas';
        $this->load_old_view('home');
	}
	
}
