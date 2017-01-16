<?php
class ChangeString
{
	public function build($cadena)
	{
		$retornar = ''; //se almacena cadena final
		if($cadena != '')
		{
			for ($i=0; $i<strlen($cadena); $i++) {
				//validando si es un texto
				$ascii = ord($cadena[$i]);
				if( ($ascii >= 65 and $ascii <= 90) or ($ascii >= 97 and $ascii <= 122) )
				{
					if($ascii == 90 or $ascii == 122)
						$ascii = $ascii - 25;
					else
						$ascii = $ascii + 1;
				}
				$retornar .= chr($ascii);
			}
		}
		return $retornar;
	}
}

$cs = new ChangeString();
echo $cs->build('123 abcd*3');
echo '<br>';
echo $cs->build('**Casa 52');
echo '<br>';
echo $cs->build('**Casa 52Z');
?>