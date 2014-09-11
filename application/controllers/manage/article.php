<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    public function index() {
        echo 'manage/article/index';
    }
    public function add() {
        echo 'manage/article/add';
    }
    public function delete() {
        echo 'manage/article/delete';
    }
    public function edit() {
        echo 'manage/article/edit';
    }    
}
