<?php
//генерируем массив случайных чисел
define ("n",5);

for($i=0; $i<n; $i++) {
    $arr[$i] = rand(0,10);
}

print_r($arr);
echo "<br>";

$max=$arr[0];
for ($i=0; $i<n; $i++) {
    if ($max < $arr[$i])
        $max = $arr[$i];
}

echo "<br> $max";
?>