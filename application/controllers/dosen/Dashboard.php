<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function index()
    {
        return $this->load->view('dosen/dashboard');
    }

}

/* End of file Dashboard.php */
