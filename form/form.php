<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$form1 = $_POST['form1'];
$form2 = $_POST['form2'];
$form3 = $_POST['form3'];
$form4 = $_POST['form4'];
$form5 = $_POST['form5'];
$form6 = $_POST['form6'];
$form7 = $_POST['form7'];
$text = $_POST['text'];
$redir = "form1.php";
header("Location:$redir?form1=$form1&form2=$form2&form3=$form3&select=$select&text=$text&form4=$form4&form5=$form5&form6=$form6&form7=$form7");
?>
</body>
</html>
