<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Students extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model("Student_Model");
		$this->load->helper('url','form');
		$this->load->database();
	}

	public function index(){
		$this->load->view('list_student');
	}

	public function list_students(){
		$data=$this->Student_Model->list_students();
		echo json_encode($data);
	}

	public function add_student(){
		$data=$this->Student_Model->add_student();
		echo json_encode($data);
	}
	
	public function update_student(){
		$data=$this->Student_Model->update_student();
		echo json_encode($data);
	}

	public function delete_student(){
		$data=$this->Student_Model->delete_student();
		echo json_encode($data);
	}
}
