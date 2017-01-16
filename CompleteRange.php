<?php
class CompleteRange
{
	public function build($numeros)
	{
		$retornar = array(); //se almacena cadena final
		if(is_array($numeros))
		{
			//defino el numero mayor y menor
			$min = min($numeros);
			$max = max($numeros);
			//ahora completo los numeros desde el menor hasta el mayor
			for($i=$min; $i<=$max; $i++)
			{				
				$retornar[] = $i;
			}
		}

		return $retornar;
	}
}

$cr = new CompleteRange();
print_r( $cr->build( [1, 2, 4, 5]) );
echo '<br>';
print_r( $cr->build( [2, 4, 9]) );
echo '<br>';
print_r( $cr->build( [55, 58, 60]) );
?>