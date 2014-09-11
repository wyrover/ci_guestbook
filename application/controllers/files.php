<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Files extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper(array('file', 'download', 'directory', 'url'));
        $this->path = realpath(APPPATH . '../test_files') . DIRECTORY_SEPARATOR;
        $this->file = $this->path . "hello.txt";
    }
    public function write_test() {
        $data = "Hello World";
        write_file($this->file, $data);
        echo "finished writing";
    }
    public function read_test() {
        $string = read_file($this->file);
        echo $string;
    }
    public function filenames_test() {
        $files = get_filenames($this->path, TRUE);
        print_r($files);
    }
    public function dir_file_info_test() {
        $files = get_dir_file_info($this->path);
        print_r($files);
    }
    public function file_info_test() {
        $info = get_file_info($this->file, 'date');
        print_r($info);
    }
    public function mime_test() {
        //echo get_mime_by_extension($this->file);
        echo get_mime_by_extension('hello.png');
    }
    public function download_test() {
        $string = "Hello";
        force_download('hello.txt', read_file($this->file));
    }
    public function display() {
        $data['files'] = directory_map(BASEPATH);
        $this->load->view('files', $data);
    }
}
