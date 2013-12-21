<?php 
/*
Copyright (c) 2013 John Atkinson (jga)
*/

class ModelPaymentGlobe extends Model {
  	public function getMethod($address) {
		$this->load->language('payment/globe');
		
		if ($this->config->get('globe_status')) {
        	$status = TRUE;
		} else {
			$status = FALSE;
		}
		
		$method_data = array();
	
		if ($status) {  
      		$method_data = array( 
        		'code'         	=> 'globe',
        		'title'      	=> $this->language->get('text_title'),
				'sort_order' 	=> $this->config->get('globe_sort_order'),
      		);
    	}
   
    	return $method_data;
  	}
}
?>
