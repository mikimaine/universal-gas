<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	public function index()
	{
		$this->data['head_title'] = 'Universal Gas';
        $this->load_old_view('home');
	}
	public function aboutus()
	{
		$this->data['head_title'] = 'Universal Gas';
        $this->load_old_view('aboutus');
	}
	public function contact()
	{
		$this->data['head_title'] = 'Universal Gas';
        $this->load_old_view('contact');
	}
	public function product()
	{
		$this->data['head_title'] = 'Universal Gas';
        $this->load_old_view('product');
	}
}
