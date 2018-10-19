<?php

class mod
{
	public static $nst;
	public $a=54;
	public static function setnst($val){
		self::$nst=$val;
	}
	public static function getnst(){
		return self::$nst*$this->a;
	}
	public function getData(){
		return self::$nst*5;
	}

}

$m=new mod();
$m->setnst(54);
mod::getnst()
























?>