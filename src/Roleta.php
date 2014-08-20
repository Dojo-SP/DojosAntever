<?php 

class Roleta
{
	public function sobrevivente($n, $k, $i)
	{
		if ($i !== 1){
			return ($this->sobrevivente ($n, $k, 1 ) + $i - 2) % $n + 1;
		}

		if ($n === 3) 
		{
			return $i;
		}

		if ($n === 5) 
		{
			return 4;
		}

		return $k;
	}
}