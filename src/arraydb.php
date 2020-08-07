<?php
class arraydb{
	/*
	* 主要针对sql查询所得结果，且结果含主键，将主键设为对应键值
	*/
	function arr_rekey($arr,$k){
			if($arr){
					$ch = array();
					foreach($arr as $key=>$val){
							$ch[$val[$k]] = $val;
					}
					$arr = $ch;
					unset($ch);
			}
			return $arr;
	}
	
	function p( $data = '', $no_die = 0 ){
		echo "<pre>";
		print_r( $data );
		echo "</pre>";
		if( $no_die == 0 ){
			die;
		}
	}


	function v( $data = '', $no_die = 0 ){
		echo "<pre>";
		var_dump( $data );
		echo "</pre>";
		if( $no_die == 0 ){
			die;
		}
	}

}