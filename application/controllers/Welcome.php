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
        $this->load_old_view('oxygen');
	}
	public function oxygen()
	{
		$this->data['head_title'] = 'Universal Gas';
        $this->load_old_view('oxygen');
	}
	public function nitrogen()
	{
		$this->data['head_title'] = 'Universal Gas';
        $this->load_old_view('nitrogen');
	}
	public function argon()
	{
		$this->data['head_title'] = 'Universal Gas';
        $this->load_old_view('argon');
	}
	public function acetylene()
	{
		$this->data['head_title'] = 'Universal Gas';
        $this->load_old_view('acetylene');
	}
	public function cylinders()
	{
		$this->data['head_title'] = 'Universal Gas';
        $this->load_old_view('cylinders');
	}
	public function other()
	{
		$this->data['head_title'] = 'Universal Gas';
        $this->load_old_view('other');
	}
}
