<?php
class Welcome extends Trongate {

	public function greeting() {
		$data['name'] = segment(3);
		$data['view_module'] = 'welcome';
		$data['view_file'] = 'greeting';
		$this->template('public', $data);
	}

	/**
	 * Renders the (default) homepage for public access.
	 *
	 * @return void
	 */
	public function index(): void {
		sleep(1);
		$this->module('trongate_pages');
		$this->trongate_pages->display();
	}

}