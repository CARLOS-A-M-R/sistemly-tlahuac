<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 


$xcantidad1 = 4;
$xcantidad2 = 5;
$xcantidad3 = 6; 
$xcantidad4 = 7; 


$renglones = 3;
$elementos = 4;
for($i=1; $i <= $renglones; $i++){
    for($n=1; $n <= $elementos; $n++){
        ${"xrenglon$i"}[] = ${"xcantidad$n"};
		
    }
	
}

print_r($xrenglon1);

foreach ($xrenglon2 as $k => $v)
{
	$op = $v + 4;
	$op *= $op;
	$array = explode(",", $op);
	
	print_r($array);
    
}


    ?>
</body>
</html>   