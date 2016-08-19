<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Model {
  public function getAll(){
    return $this->db->query("SELECT * FROM posts;")->result_array();
  }
  public function create($creation){
    $query = "INSERT INTO posts(description, created_at, updated_at) VALUES (?, NOW(), NOW());";
    $values = array($creation['postText']);
    return $this->db->query($query, $values);
  }
  public function delete($toDelete){
    $query = "DELETE FROM posts WHERE id=?;";
    $values = array($toDelete['id']);
    return $this->db->query($query, $values);
  }

}
