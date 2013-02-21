<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 * 
 * @author Matthew Fisher <matt.fisher6@gmail.com>
 * @author Jason Bolanos <john.doe@example.com>
 */
class Roster extends Application {

    public function index() {
        $this->load->helper('display_helper');
        $this->data['pagebody'] = "roster";
        $this->data['myxml'] = display_file('./data/roster.xml');
        $this->data['mydtd'] = display_file('./data/roster.dtd');
        $this->render();
    }

}

?>