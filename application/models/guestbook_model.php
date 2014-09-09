<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Guestbook_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function view() {
        $sql = "SELECT * FROM comments ORDER BY comment_id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function insert($data = array()) {
        $data["name"] = $this->db->escape_str($data["name"]);
        $data["url"] = $this->db->escape_str($data["url"]);
        $data["comment"] = $this->db->escape_str($data["comment"]);
        $data["name"] = htmlspecialchars($data["name"]);
        $data["url"] = htmlspecialchars($data["url"]);
        $data["comment"] = htmlspecialchars($data["comment"]);
        $sql = "INSERT INTO comments (comment_id, name, url, comment) VALUES ('null', '" . $data["name"] . "', '" . $data["url"] . "', '" . $data["comment"] . "')";
        return $this->db->query($sql);
    }
}
