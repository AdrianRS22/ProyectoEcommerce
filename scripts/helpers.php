<?php

class Utils{

	public static function isAdmin(){
		if(!isset($_SESSION['admin'])){
			header("Location: /index.php");
		}else{
			return true;
		}
	}

	public static function statsCarrito(){
		$stats = array(
			'count' => 0,
			'total' => 0
		);
		
		if(isset($_SESSION['carrito'])){
			$stats['count'] = count($_SESSION['carrito']);
			
			foreach($_SESSION['carrito'] as $producto){
				$stats['total'] += $producto['precio']*$producto['unidades'];
			}
		}
		
		return $stats;
	}
}