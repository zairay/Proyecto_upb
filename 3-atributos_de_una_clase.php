<html>
<head>
</head>
<body>
<?php

class menu{
private $enlaces=array();
private $titulos=array();

public function cargarOpcion($en,$tit)
{
	$this->enlaces[]=$en;
	$this->titulos[]=$tit;
	
}

public function mostrar()
{
	for($f=0;$f<count($this->enlaces);$f++)
	{
		echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
		echo " - ";
	}
	
	
}

}

$menu1=new menu();
$menu1->cargarOpcion('http://www.google.com', 'Google');
$menu1->cargarOpcion('http://www.yahoo.com', 'Yahoo');
$menu1->cargarOpcion('http://www.msn.com', 'MSN');
$menu1->mostrar();


?>
</body>
</html>
