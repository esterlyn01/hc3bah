<?php
/*nota hay configurar los margenes de la hoja del navegador en 0.1 pulgadas*/

   $tablas=tablas();

	function tablas(){
	$tablas="<table border='0' width='100%'>
	<tr><th>".tabla_1(1,'#00FFFF')."</th><th>".tabla_1(2, '#00FFFF')."</th></tr>
	<tr><th>".tabla_1(3, '#FFFF00')."</th><th>".tabla_1(4,'#FFFF00')."</th></tr>
	<table>";
	return ($tablas);
	}


	function tabla_1($s, $ls) {
	$marca="JESR<br/>MRM;
   $marca="marly<br/>gasddd";
	$co=1;
	$ra1=1;
	$ra2=15;
	 do{
		  //columna 1
	      for($t2=1;$t2<=5;$t2++){

			//fila 1
			if($t2==1){
			$num[$s][1][$co]= rand($ra1,$ra2);
			}
			//fila 2
			if($t2==2){
			do{
			  $num[$s][2][$co]= rand($ra1,$ra2);
			  }while($num[$s][2][$co] == $num[$s][1][$co]);
			  }
			//fila 3
			if($t2==3){
			 do{
			  $num[$s][3][$co]= rand($ra1,$ra2);
			  }while($num[$s][3][$co] == $num[$s][1][$co] || $num[$s][3][$co] == $num[$s][2][$co]);
			}
			//fila 4
			if($t2==4){
			do{
			  $num[$s][4][$co]= rand($ra1,$ra2);
			  }while($num[$s][4][$co]==$num[$s][1][$co] or $num[$s][4][$co]==$num[$s][2][$co]
			          or $num[$s][4][$co]==$num[$s][3][$co]);
			}
			//fila 5
			if($t2==5){
			do{
			  $num[$s][5][$co]= rand($ra1,$ra2);
			  }while($num[$s][5][$co]==$num[$s][1][$co] or $num[$s][5][$co]==$num[$s][2][$co]
			          or $num[$s][5][$co]==$num[$s][3][$co] or $num[$s][5][$co]==$num[$s][4][$co]);

			}}
			$co=$co+1;
			$ra1=$ra1+15;
	        $ra2=$ra2+15;
			}while($co!=6);





	@$tabla_1.="<h1><table border='1' width='75%' BORDER BGCOLOR='".$ls."' contenteditable='true'>
	   <tr><th width='70' height='70'><h1><b><center>B.</center></b></h1></th><th><h1><center>I.</center></h1></th>
	   <th><h1><center>N.</center></h1></th><th><h1><center>G.</center></h1></th><th><h1><center>O.</center></h1></th></tr>

	   <tr><th width='75' height='75'><h1><center>".$num[$s][1][1]."</center></b></h1></th><th width='75'><h1><center>".$num[$s][1][2]."<center/></b></h1></th>
	   <th width='75'><h1><center>".$num[$s][1][3]."<center/></h1></th><th width='75'><h1>".$num[$s][1][4]."</b></h1></th>
	   <th width='75'><h1>".$num[$s][1][5]."</b></h1></th></tr>

	   <tr><th width='75' height='75'><h1><center>".$num[$s][2][1]."</center></b></h1></th><th width='75'><h1>".$num[$s][2][2]."</b></h1></th>
	   <th width='75'><h1>".$num[$s][2][3]."</b></h1></th><th width='75'><h1>".$num[$s][2][4]."</b></h1></th>
	   <th width='75'><h1>".$num[$s][2][5]."</b></h1></th></tr>

	   <tr><th width='75' height='75'><h1><center>".$num[$s][3][1]."</center></b></h1></th><th width='75'><h1>".$num[$s][3][2]."</b></h1></th>
	   <th><center>".$marca."</center></th><th width='75'><h1>".$num[$s][3][4]."</b></h1></th>
	   <th width='75'><h1>".$num[$s][3][5]."</b></h1></th></tr>

	   <tr><th width='75' height='75'><h1><center>".$num[$s][4][1]."</center></b></h1></th><th width='75'><h1>".$num[$s][4][2]."</b></h1></th>
	   <th width='75'><h1>".$num[$s][4][3]."</b></h1></th><th width='75'><h1>".$num[$s][4][4]."</b></h1></th>
	   <th width='75'><h1>".$num[$s][4][5]."</b></h1></th></tr>

	   <tr><th width='75' height='75'><h1><center>".$num[$s][5][1]."</center></b></h1></th><th width='75'><h1>".$num[$s][5][2]."</b></h1></th>
	   <th width='75'><h1>".$num[$s][5][3]."</b></h1></th><th width='75'><h1>".$num[$s][5][4]."</b></h1></th>
	   <th width='75'><h1>".$num[$s][5][5]."</b></h1></th></tr>

	   </table></h1>";


	return (@$tabla_1);
	}

?>


