<?php
	$pal=$_GET['palabra'];
	$vec=array('alma','almo','alga','algo','amo','ama','aro','animo','arbol','abrir');

	if (strlen($pal)>0){
	  for($f=0;$f<count($vec);$f++){
		  if ($pal==substr($vec[$f],0,strlen($pal)))
			$veciguales[]=$vec[$f];
	  }
	}

	$xml="<?xml version=\"1.0\"?>\n";
	$xml.="<palabras>\n";
		if (isset($veciguales)){
		  for($f=0;$f<count($veciguales);$f++)
			$xml.="<palabra>".$veciguales[$f]."</palabra>\n";
		}
	$xml.="</palabras>\n";
	
	header('Content-Type: text/xml');
	echo $xml;
?>
