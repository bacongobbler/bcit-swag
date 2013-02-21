<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 * 
 * @author Matthew Fisher <matt.fisher6@gmail.com>
 * @author Jason Bolanos <john.doe@example.com>
 */
class Schedule extends Application {

    public function index() {
        $this->load->helper('display_helper');
        $this->data['pagebody'] = "schedule";
        $this->data['myxml'] = display_file('./data/schedule.xml');
        $this->render();
    }

}

?>