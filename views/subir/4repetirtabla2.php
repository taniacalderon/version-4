
<?php
//Primero hago la conexion a la base de datos donde debo tener una columna 
//ubicación imagen

//

$z="balanza con voz.png";
//echo "<img src='uploads/$z' width='150' height='150' alt='Alargada' border='0'>";

$x="<img src='uploads/$z' width='150' height='150' alt='Alargada' border='0'>";
$y= $x;


$i=1;
$a=0;
$b=0;
while($i<3)
{
$i=$i+1;
$a=$a+2;
$b=$b+3;
$tbHtml = "<table border='1px'>
             <header>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
              
                  </tr>
            </header>";

echo $tbHtml.'<tr>
		<td>'.$i.'</td>
		<td>'.$y.'</td>
		<td>'.$b.'</td>
	</tr>
	';
	
}
$tbHtml.= "</table>";

?>