<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manage extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    public function index() {
        echo 'manage/index';
    }
    public function login() {
        echo 'manage/login';
    }
    public function logout() {
        echo 'manage/logout';
    }
}
