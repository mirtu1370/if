
<?php

$mes = date("F",time());
echo "Mês: ". $mes . "<br>";
if($mes == "August"){
	echo "Está calor";
}else{
echo "Não está calor";	
}

?>