<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    public function index() {
        echo 'home/index';
    }

    public function signup() {
        echo 'home/signup';
    }

    public function login() {
        echo 'home/login';
    }
    
}
