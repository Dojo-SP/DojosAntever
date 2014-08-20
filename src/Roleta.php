<?php 

class Roleta
{
	public function sobrevivente($n, $k, $i)
	{
		if ($n === 3 ) 
		{
			return $i;
		}

		return $k;
	}
}