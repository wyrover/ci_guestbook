<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    public function index() {
        echo 'manage/user/index';
    }
    public function add() {
        echo 'manage/user/add';
    }
    public function delete() {
        echo 'manage/user/delete';
    }
    public function edit() {
        echo 'manage/user/edit';
    }    
}
