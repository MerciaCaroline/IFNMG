<?php
		#if((isset(%_POST["codigo"]))
		  $preco = $_POST["preco"];
		  $codigo = $_POST["codigo"];
		  
		  function um($preco){
			 $des= $preco * 0.2;
			 return $des;
			 }
		  function dois($preco){
		     $des= $preco * 0.1;
			 return $des;
			  }
		  function tres($preco){
		      $parca = $preco/2;
			  return $parc;
			  }
		  function quatro($preco){
			  $jur= $preco * 0.1;
			  return $jur;
			  }
			  
			  
		  if($codigo==1){
		      $desconto = um($preco);
			  $final = $preco - $desconto;
			  print" O valor de etiqueta é: R$". number_format($preco,2);
			  print"<br>O valor final com desconto à vista é:R$" .number_format($final,2);
	      }
		  elseif($codigo==2){
		     $desconto = dois($preco);
			 $final = $preco - $desconto;
			 print" O valor de etiqueta é: R$". number_format($preco,2);
			 print"<br>O valor final com desconto no cartão é: R$". number_format($final,2);
		  }
		  elseif($codigo==3){
		     $parcela = tres($preco);
			 print" O valor de etiqueta é: R$". number_format($preco,2);
			 print"<br>O valor final  é: R$". number_format($preco,2)."em duas parcelas de R$". number_format($parcela,2);
		  }
		  elseif($codigo==4){
		     $juros = quatro($preco);
			 $final = $preco + $juros;
			 $parcela = $final/2;
			 
			 print" O valor de etiqueta é: R$". number_format($preco,2);
			 print"<br>O valor final  é: R$".number_format($final,2)."em duas parcelas de R$". number_format($parcela,2);
		  }
		  else{
		     print"Codigo inexistente. Digite novamente.";}
			 
?>