<?php
$value = 10;
$result = ($value < 20) ? '$valueは２０より小さいです' : '$valueは２０と同様、または大きいです。';

echo $result;

for($i=1;$i<=12;$i++){
    $array[] = $i;
    // echo $array[$i];
}
echo "今月は{$array[7]}月です。";
?>