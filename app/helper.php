<?php 
	function show_star($count){
		$return ="";
		for ($i=0; $i < $count; $i++) {
			$return .= '<i class="fa fa-star"></i>';
		}
		return $return;
	}
 ?>
