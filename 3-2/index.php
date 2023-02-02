<?php
//りんご、みかん、桃それぞれの単価と個数をもとに料金を計算する

//step1.それぞれの単価の連想配列と個数の配列
$fruits_price = ['りんご'=>150,'みかん'=>30,'桃'=>300];
$fruits_num = [3,10,5];

//step2.合計金額を計算する関数を定義
function total_price($price, $num) {
    return $price*$num;
}

//step3.それぞれのフルーツの料金を書き出す
$i = 0;
$x = 0;
foreach ($fruits_price as $key => $value) {
    $x = total_price($fruits_price[$key],$fruits_num[$i]);
    echo "${key}は${x}円です。<br>";
    $i++;
}
?>