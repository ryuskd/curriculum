<link rel="stylesheet" href="index.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$u_name = $_POST['u_name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$question01 = [80, 22, 20, 21];
$question02 = ['PHP', 'Python', 'JAVA', 'HTML'];
$question03 = ['join', 'select', 'insert', 'update'];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$correct_answer = [0, 3, 1];

?>
<p>お疲れ様です<?= $u_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
    foreach ($question01 as $key => $value) {
        echo '<input type="radio" name="answer01" value="' . $key . '" />';
        echo $value;
    }
    ?>

    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
    foreach ($question02 as $key => $value) {
        echo '<input type="radio" name="answer02" value="' . $key . '" />';
        echo $value;
    }
    ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
    foreach ($question03 as $key => $value) {
        echo '<input type="radio" name="answer03" value="' . $key . '" />';
        echo $value;
    }
    ?>

    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <?= '<input type="hidden" name="u_name" value="' . $u_name . '">'; ?>
    <?= '<input type="hidden" name="correct_answer[]" value="' . $correct_answer[0] . '">'; ?>
    <?= '<input type="hidden" name="correct_answer[]" value="' . $correct_answer[1] . '">'; ?>
    <?= '<input type="hidden" name="correct_answer[]" value="' . $correct_answer[2] . '">'; ?>
    <br>
    <input type="submit" value="回答する">
</form>
