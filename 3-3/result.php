<?php
// step2:結果を表すページを作成

$number = $_POST['number'];
$luck = ['凶', '小吉', '小吉', '小吉', '中吉', '中吉', '中吉', '吉', '吉', '大吉'];

// formから受け取った数列から一文字抜き出す
$len = strlen($number) - 1;
$i = mt_rand(0, $len);
$x = substr($number, $i, 1);

if (is_numeric($x)) {
    // step3:今日の日付と結果を表示する。
    echo date('Y/m/d') . 'の運勢は' . '<br>';
    echo '選ばれた数字は' . $x . '<br>';
    echo $luck[$x] . '<br>';
} else {
    echo '半角数字を入力して下さい。';
}
