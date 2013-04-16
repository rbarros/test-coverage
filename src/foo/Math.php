<?php namespace foo;
class Math {
	public function calc($x,$y)
	{
	    $z = 0;
	    if (($x>0) && ($y>0)) {
	        $z = $x;
	    }
	    return $z;
	}
}