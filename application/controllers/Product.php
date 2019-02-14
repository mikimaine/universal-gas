<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

	public function oxygen()
	{
		$this->data['head_title'] = 'Oxygen | Universal Gas';
        $this->load_old_view('oxygen');
	}

	public function nitrogen()
	{
		$this->data['head_title'] = 'Nitrogen | Universal Gas';
        $this->load_old_view('nitrogen');
	}
	public function acetylene()
	{
		$this->data['head_title'] = 'Acetylene | Universal Gas';
        $this->load_old_view('acetylene');
	}
	public function argon()
	{
		$this->data['head_title'] = 'Argon | Universal Gas';
        $this->load_old_view('argon');
	}
	public function cylinders()
	{
		$this->data['head_title'] = 'Cylinders | Universal Gas';
        $this->load_old_view('cylinders');

	}
	
	
	public function aboutus()
	{
		$this->data['head_title'] = 'About Us | Universal Gas';
        $this->load_old_view('aboutus');
    }
        public function contact()
	{
		$this->data['head_title'] = 'Contact | Universal Gas';
        $this->load_old_view('contact');
	}
}
