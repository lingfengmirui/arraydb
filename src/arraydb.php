<?php
class arraydb{
	/*
	* ��Ҫ���sql��ѯ���ý�����ҽ������������������Ϊ��Ӧ��ֵ
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