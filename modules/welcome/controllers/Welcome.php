<?php
class Welcome extends Trongate {

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