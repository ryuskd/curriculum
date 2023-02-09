<link rel="stylesheet" href="index.css">
<?php
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$u_name = $_POST['u_name'];
$answer01 = $_POST['answer01'];
$answer02 = $_POST['answer02'];
$answer03 = $_POST['answer03'];
$correct_answer = $_POST['correct_answer'];
// var_dump($u_name, $answer01, $answer02, $answer03, $correct_answer);

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function check_answer($ans, $correct)
{
    if ($ans == $correct) {
        echo '正解！';
    } else {
        echo '残念・・・';
    }
    echo '<br>';
}

?>
<p><?= $u_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php check_answer($answer01, $correct_answer[0]); ?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php check_answer($answer02, $correct_answer[1]); ?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php check_answer($answer03, $correct_answer[2]); ?>
