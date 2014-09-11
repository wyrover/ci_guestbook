<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    public function index() {
        echo 'manage/home/index';
    }
    public function login() {
        echo 'manage/home/login';
    }
    public function logout() {
        echo 'manage/home/logout';
    }
    /**
     * 获取系统信息
     */
    public function system() {
        $db_timedf = '8';
        $timestamp = time();
        $data['sysversion'] = PHP_VERSION;
        $data['sysos'] = $_SERVER['SERVER_SOFTWARE'];
        $data['max_upload'] = ini_get('file_uploads') ? ini_get('upload_max_filesize') : 'Disabled';
        $data['max_ex_time'] = ini_get('max_execution_time') . ' seconds';
        $data['sys_mail'] = ini_get('sendmail_path') ? 'Unix Sendmail ( Path: ' . ini_get('sendmail_path') . ')' : (ini_get('SMTP') ? 'SMTP ( Server: ' . ini_get('SMTP') . ')' : 'Disabled');
        $data['ifcookie'] = isset($_COOKIE) ? "SUCCESS" : "FAIL";
        $data['systemtime'] = gmdate("Y-m-d H:i", time() + $db_timedf * 3600);
        $data['altertime'] = gmdate("Y-m-d H:i", $timestamp + $db_timedf * 3600);
        //$data['dbversion'] = $this->db->query("SELECT VERSION() AS dbversion");
        $this->load->view("manage/systeminfo_view", $data);
    }

    public function config() {
        echo 'manage/home/config';
    }
}
