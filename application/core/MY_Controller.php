<?php
/**
 * Class MY_Controller
 */
class MY_Controller extends CI_Controller
{
    /**
     * @var array
     */
    public $data = array();
    /**
     *
     */
    function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = ucfirst(uri_string());
    }
    /**
     * Set subview and load layout
     * @param string $subview
     */
    public function load_view($subview)
    {
    }
    /**
     * @param $subview
     */
    public function load_old_view($subview)
    {
        if (!isset($this->data['head_title'])) {
            $this->data['head_title'] = 'There is Always MORE';
        }
        $this->data['subview'] = $subview;
        $this->load->view('layout/header',$this->data);
        $this->load->view('layout/nav', $this->data);
        $this->load->view($subview, $this->data);
        $this->load->view('layout/footer');
    }
}