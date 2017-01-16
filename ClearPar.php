<?php
class ClearPar
{
	public function build($numeros)
	{
		$retornar = '';
		preg_match_all('/\(\)/', $numeros, $match);
		if($match)
		{
			foreach ($match[0] as $key => $value) {
				$retornar .= $value;
			}
		}
		return $retornar;
	}
}

$cp = new ClearPar();
echo $cp->build('()())()');
echo '<br>';
echo $cp->build('()(()');
echo '<br>';
echo $cp->build(')(');
echo '<br>';
echo $cp->build('((()');
echo '<br>';
?>