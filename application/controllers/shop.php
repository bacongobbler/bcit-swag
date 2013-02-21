<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 * 
 * @author Matthew Fisher <matt.fisher6@gmail.com>
 * @author Jason Bolanos <john.doe@example.com>
 */
class Shop extends Application {

    public function index() {
        $this->data['pagebody'] = "homepage";
        $this->data['data'] = "Hello, World!";
        $this->render();
    }

}

?>