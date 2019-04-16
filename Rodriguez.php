<?php  

/*$var = 'hola bb, ';
echo "$var como estas<br>";
echo '$var como estas';

//declaracion de arreglos
$arr = $arrayName = array('key1' => 'value1' , 
						'key2' => 'value2' ,
						'key3' => 'value3' ,
						'key4' => array('4.1', '4.2') ,
						'key5' => 5 ,
						);
$arr1 = $arrayName = array(1, 2, 3, 4, 5);
echo '<br>';
echo '<pre>';
print_r($arr);
echo '</pre>';

echo '<br>';
echo '<pre>';
print_r($arr1);
echo '</pre>';

//foreach
foreach ($arr as $key => $value) {
	echo $key . ' ';
	print_r($value);
	echo '<br>';
}*/

$tabla = array(array('Carlos', 'Almeida', 32),
				array('Juan', 'Correa', 21),
				array('Maria', 'Martinez', 22)
		 );

echo '<br>';
echo '<pre>';
print_r($tabla);
echo '</pre>';
echo '<br>';

foreach ($tabla as $key => $value) {
	print_r($value);
	echo '<br>';
}

echo '<br>';

$margen = '<table border="2">';

		$margen .='<tr>';
            $margen .= '<td>Nombre</td>';
            $margen .='<td>Apellido</td>';
            $margen .='<td>Edad</td>';
        $margen .= '</tr>';

foreach ( $tabla as $key1 ) {
        $margen .= '<tr>';
        foreach ( $key1 as $key2 ) {
                $margen .= '<td>'.$key2.'</td>';
        }
        $margen .= '</tr>';
}
$margen .= '</table>';
echo $margen;

?>
