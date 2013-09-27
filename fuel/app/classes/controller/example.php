<?php

class Controller_Example extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Example &raquo; Index';
		$this->template->content = View::forge('example/index', $data);
	}

	public function action_add()
	{
		$data["subnav"] = array('add'=> 'active' );
		$this->template->title = 'Example &raquo; Add';
		$this->template->content = View::forge('example/add', $data);
	}

}
