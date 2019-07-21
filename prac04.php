<?php
// ----------------------------
// Task1
// ----------------------------
function double($val){
    return $val * 2;
}
echo double(3)."\n"."\n";
// ----------------------------
// Task2
// ----------------------------
function sum($a, $b){
    return $a + $b;
}
echo sum(100,390)."\n"."\n";
// ----------------------------
// Task3
// ----------------------------
function array_multi($arr){
    $result = 1;
    foreach($arr as $ar){
        $result *= $ar;
    }
    return $result;
}
$arr = array(1, 3, 5, 7, 9);
echo array_multi($arr)."\n"."\n";

// ----------------------------
// Task4
// ----------------------------
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        //どうしたらいいかわからない・・・・
        if($a > $max_number){
         $max_number = $a;
        }
    }
    return $max_number;
}
$arr = array(1, 3, 8, 92, 78, 9873, 99999, 297, 8);

echo max_array($arr)."\n"."\n";

// ----------------------------
// Task5
// ----------------------------
$sample_url="<p><a href='http://yahoo.co.jp'>Yahoo!</a></p>";
echo strip_tags($sample_url)."\n"."\n";

$chara = array("ryu", "ken", "chunri", "guile");
array_push($chara,"honda", "dulshim");

print_r($chara);

$sf1_char = array("ryu", "ken");
$sfd_char = array("vega", "sagat");
$sf_char = array_merge($sf1_char, $sfd_char);

print_r($sf_char);

$time = time();
echo "現在のUNIXタイムスタンプは{$time}になります。"."\n"."\n";

// -------------------------Î
// time()との使い分けがわからないです。
// -------------------------Î
$mktime = mktime(0,0,0,2,32);
echo $mktime."\n";

$current_year = date("Y")."年";
$current_year .= date("m")."月";
$current_year .= date("d")."日";

echo "現在、".$current_year."です。\n";
?>