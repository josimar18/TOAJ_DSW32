<?php
$n1=(isset($_REQUEST["n1"])?$_REQUEST["n1"]:0);
$n2=(isset($_REQUEST["n2"])?$_REQUEST["n2"]:0);
$op=(isset($_REQUEST["operacion"])?$_REQUEST["operacion"]:null);

 if($op=="+"){
	$res=$n1+n2;
	   }else {
  if($op=="-"){
	$res=$n1-$n2;
}elseif($op=="*"){
	$res=$n1*$n2;
}elseif($op=="/"){
	$res=$n1/$n2;
}else {
    $res="operación invalida";
					}
	   }
echo $res;
?>