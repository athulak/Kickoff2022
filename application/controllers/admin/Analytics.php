<?php

class Analytics extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('madmin/m_analytics', 'manalytics');

    }

  function index(){
        $data['analytics']=$this->manalytics->getAnalytics();
        $this->load->view('admin/header');
        $this->load->view('admin/analytics', $data);
      $this->load->view('admin/footer');
  }


}

?>