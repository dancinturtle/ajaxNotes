<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Note');
	}

	public function index(){

	 	$this->load->view('index');
	}
	public function all(){
		$allNotes['notes'] = $this->Note->getAll();
		$this->load->view("partials/notes", $allNotes);
	}
	public function create(){
		$creation = $this->input->post();
		$this->Note->create($creation);
		redirect('/notes/all');

	}
	public function delete(){
		$toDelete = $this->input->post();
		$this->Note->delete($toDelete);
		redirect('/notes/all');
	}
}
