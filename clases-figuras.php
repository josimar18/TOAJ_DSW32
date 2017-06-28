<?php
class figura{
	public $nombre;
	public $color;
	
	function __construct(){
		$this->nombre="";
		$this->color="";
		}
	}
	
 class cuadrado extends figura{
	 public $lado;
	  
	  function __construct(){
		  $this->lado=0;
		  }
	  function area(){
		  return $this->lado*$this->lado;
		  }
	  function inicializar($n,$c,$lado){
		  $this->nombre=$n;
		   $this->color=$c;
		    $this->lado=$lado;
		  }
	 }
	 $figura=new cuadrado();
	 $figura->inicializar("cuadradito","#CCA326",270);
	 echo $figura->area();
	 
class triangulo extends figura{
	public $base;
	public $altura;
	
	function __construct(){
		$this->altura=0;
		$this->base=0;
		}
		
		function area(){
			return $this->base*$this->altura/2;
			}
		
		function inicializar1($no,$ba,$al,$col){
			$this->nombre=$no;
			$this->base=$ba;
			$this->altura=$al;
			}	
	}
	$figura=new triangulo();
	$figura->inicializar1("triangulito",12,25,"#cb45bb");
	echo $figura->area();
?>