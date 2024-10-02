<?php
class Tutorial extends Trongate {

	public function index() {
		$this->view('first');
	}

	public function dynamic_sort() {
		$this->view('dynamic_sort');
	}

}