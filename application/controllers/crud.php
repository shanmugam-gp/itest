<?php 

class Crud extends CI_Controller
{
  
	public function index()
	{
	  $this->load->view('index');
	}
	
	
	public function helloworld()
	{
	   echo "hello world";
	}
}
