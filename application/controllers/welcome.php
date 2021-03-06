<?php

if (!defined('APPPATH'))
    exit('No direct script access allowed');

/**
 * controllers/welcome.php
 *
 * Entry page to the webapp.
 *
 * @author		JLP
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function index() {
        $this->data['pagebody'] = "homepage";
        $this->data['data'] = "Hello, World!";
        $this->render();
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */