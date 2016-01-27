<?php 
	function show_star($count){
		$return ="";
		for ($i=0; $i < $count; $i++) {
			$return .= '<i class="fa fa-star"></i>';
		}
		return $return;
	}
	function show_extra_content($string){
		$return = mb_substr($string, 0,100);
		return $return;
	}
 ?>
