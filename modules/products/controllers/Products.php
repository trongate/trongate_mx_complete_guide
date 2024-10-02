<?php
class Products extends Trongate {

	public function browse() {
		$order_by = $this->get_order_by();
		$data['rows'] = $this->model->get($order_by);
		$data['view_file'] = 'browse';
		$this->template('public', $data);
	}

	private function get_order_by() {
		$order_by_val = segment(3);

		switch ($order_by_val) {
			case 'name':
				$order_by = 'name'; 
				break;
			case 'price':
				$order_by = 'price'; 
				break;
			case 'price_desc':
				$order_by = 'price desc'; 
				break;
			case 'rating':
				$order_by = 'rating'; 
				break;
			case 'rating_desc':
				$order_by = 'rating desc'; 
				break;
			default:
				$order_by = 'id';
				break;
		}

		return $order_by;
	}

}