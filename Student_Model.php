<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student_Model extends CI_Model{
	

 	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

# ****************************************** Display Entire Student List ********************************* #
	public function list_students(){
		$hasil=$this->db->get('students');
		return $hasil->result();
	}

#***************************** Inserts new student record into the MySQL database.********************************#
	public function add_student(){
		$data = array(
				'student_code' 	=> $this->input->post('student_code'), 
				'student_name' 	=> $this->input->post('student_name'), 
				'contact_no' 	=> $this->input->post('contact_no'), 
				'class' 	=> $this->input->post('class'), 
				'date_of_birth' 	=> $this->input->post('date_of_birth'), 
				'subject' 	=> $this->input->post('subject'), 
				'address' 	=> $this->input->post('address'), 
				'city' => $this->input->post('city'), 
			);
		$result=$this->db->insert('students',$data);
		return $result;
	}

	
#***************************** Gets the data of the student with respect to its id ******************************#
/*	public function get_by_id($id){
		$this->db->from($this->table);
		$this->db->where('student_code',$id);
		$query = $this->db->get();
		return $query->row();
	}
*/
#**************************************** Update the values of the student ************************************#
	function update_student(){
		$student_code = $this->input->post('student_code');
		$student_name = $this->input->post('student_name');
		$contact_no = $this->input->post('contact_no');
		$class = $this->input->post('class');
		$date_of_birth = $this->input->post('date_of_birth');
		$subject = $this->input->post('subject');
		$address = $this->input->post('address');
		$city = $this->input->post('city');

		$this->db->set('student_name', $student_name);
		$this->db->set('contact_no', $contact_no);
		$this->db->set('class', $class);
		$this->db->set('date_of_birth', $date_of_birth);
		$this->db->set('subject', $subject);
		$this->db->set('address', $address);
		$this->db->set('city', $city);
		$this->db->where('student_code', $student_code);
		$result=$this->db->update('students');
		return $result;
	}

#************************************* Delete the particular student's record ************************************#
	public function delete_student(){
		$student_code=$this->input->post('student_code');
		$this->db->where('student_code', $student_code);
		$result=$this->db->delete('students');
		return $result;
	}


}
