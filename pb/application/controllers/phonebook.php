<?php


class Phonebook extends CI_Controller {

	public function _construct (){
		parent ::_construct();
		$this->load->view('mdl_contacts');
	}

	public function index (){
		$d['contacts'] =$this->Mdl_contacts->getallcontacts();
		$this->load->view("v_dashboard",$d);
	}

	public function aboutme(){
		$this->load->view("aboutme");
	}

	public function contacts (){
		$this->load->view("contacts");
	}
	public function addcontact (){
		$this->load->view("addcontact");
	}

public function savecontacts (){
		$data = array(
			"fullname" => $_POST ['fullname'],
			"contactno" => $_POST ['contacts'],
			);

			$this->mdl_contacts->addnewcontact($data);
			redirect(base-url());
	}



}


