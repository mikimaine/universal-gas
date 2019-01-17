<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	public function index()
	{
		$this->data['head_title'] = 'Universal Gas';
        $this->load_old_view('index');
	}
}
