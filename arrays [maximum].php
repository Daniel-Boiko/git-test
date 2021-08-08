<?php
//генерируем массив случайных чисел
$array = [1,30,60];
print_r($array);

$max=$array[0];
for ($i=0; $i<3; $i++) {
    if ($max < $array[$i])
        $max = $array[$i];
}

echo "<br> $max";
?>