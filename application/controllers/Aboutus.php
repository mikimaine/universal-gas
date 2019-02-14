<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends MY_Controller {
	public function index()
	{
		$this->data['head_title'] = 'Aboutus | Universal Gas';
        $this->load_old_view('aboutus');
	}
	
}
