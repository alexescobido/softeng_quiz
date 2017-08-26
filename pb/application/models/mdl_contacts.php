<?php 

class MdL_contacts extends CI_models{
	function addnewcontact ($data){
		$this-db->insert('tblcontact',$data);
	}
	function getallcontacts(){
		$q =$this->get->('tbcontacts');
		return $q->result();
		
	}
}