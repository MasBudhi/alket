<?php
class Test extends CI_Controller {
  
  public function index() {
    $this->load->view('test_view');
  }
  
  // add record to db
  public function add() {
     // do your logics here
     $this->session->set_flashdata('item', array('message' => 'Record created successfully','class' => 'success'));
     $this->redirect('/test/index');
  }
 
  // edit record
  public function edit() {
  	 // do your logic here
     $this->session->set_flashdata('item', array('message' => 'Record updated successfully','class' => 'success'));
     $this->redirect('/test/index');
  }
 
  // delete record
  public function delete($id) {
	// do your logic here
     $this->session->set_flashdata('item', array('message' => 'Record updated successfully','class' => 'success'));
     $this->redirect('/test/index');
  }
 

  if(true) 
  	{
	  $this->session->set_flashdata('item', array('message' => 'Record updated successfully','class' => 'success'));
	} 
	else 
	{
	  $this->session->set_flashdata('item', array('message' => 'please try again!','class' => 'error'));
	}

}
?>