<?php
class Coche
{
	public $marca="ford";
	public $caballos=1200;


	public function getmarca()

{
	return $this->marca;
}

public function setmarca()
{
	return $this->marca;
	return $this;
}

	public function getcaballos()

{
	return $this->caballos;
}

public function setcaballos()
{
	return $this->caballos;
	return $this;
}


}




?>