<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Guestbook extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
        $this->load->driver('cache');
        $this->load->model('Guestbook_model');
        $key = 'testmckey23';
		$data = array();
		$data["posted"] = false;
		if( $this->input->post("submit") ) {
			$data = array(
				"name" => $this->input->post("name"),
				"url" => $this->input->post("url"),
				"comment" => $this->input->post("comment")
			);
			if( $this->Guestbook_model->insert( $data ) ) {
				$data["posted"] = true;

                $data["entries"] = $this->Guestbook_model->view();
                $this->cache->memcached->save($key, $data["entries"], 60);
			}
		}       
        

        if ($this->cache->memcached->is_supported()) {
            
            $data["entries"] =  $this->cache->memcached->get($key);
            //var_dump($data["entries"]);
            if (!is_array($data["entries"])) {
                $data["entries"] = $this->Guestbook_model->view();
                $this->cache->memcached->save($key, $data["entries"], 60);
            }   
    
        }

        
		$this->load->view("guestbook.php", $data); 
        
	}

    
}

