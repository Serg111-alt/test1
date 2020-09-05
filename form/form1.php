<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    fieldset{
     border:5px solid red;
     background:#077;
     color:white;  
    }
    .submit{
        background:black;
        color:white;
        width:200px;
        height:50px;
        
    }
    .submit:hover{
        background:yellow;
        transition:1s all;
        color:black;
    }
    </style>
</head>
<body>
 <div>
 <form action="form.php" method="post">
 <fieldset style = width:500px;height:650px;margin-left:500px;margin-top:50px;>
 <legend style = background:black;>литература 10 класс</legend>
 <p>В каком году родился Пушкин?</p>
 <strong><label for="" style = color:green;>1799 г.</label></strong>
 <br>
 <strong><label for=""  style = color:red;>1801 г.</label>
 <br>
 <p>В каком году  произведение А.С.Пушкина "Евгений Онегин" было опубликовано </p>
 <strong><label for="" style = color:green;> 1831г.</label></strong>
 <br>
 <strong><label for="" style = color:red;>1813г.</label> </strong>
 <br>
 <p>Каким писателем написано произведение "Маленький принц"</p>
 <strong><label for="" style = color:green;>Антуан де Сент-Экзюпери</label> </strong>
 <br>
 <strong><label for="" style = color:red;>Федор Достоевский</label> </strong>
 <br>
  <p>Выберете среди произведений произведения М.Гоголя(2правильных ответа)</p>
  <strong> <label for="" style = color:green;>Шинель</label> </strong>
     <br>
     <strong> <label for="" style = color:red;>Викинг</label> </strong>
         <br>
         <strong> <label for="" style = color:green;>Нос</label></strong>
         <br>
         <strong> <label for="" style = color:red;>У моря</label></strong>
 <br>
  <?php
    $s = $_GET['form1'];   
    $e = $_GET['form2'];
    $r = $_GET['form3'];
    $c = $_GET['form4'];
    $g = $_GET['form5'];
    $m = $_GET['form6'];
    $x = $_GET['select'];
    $f = $_GET['form7'];
    $text = $_GET['text'];
    $multiplie = $c.$g.$m.$f;
    $token = "1153924704:AAEnLO0p_1Uk3CZNysqhOnbklaM3GL53gxg"; 
    $chat_id = "658599791"; 
     if($g == ''){
       $g = 0;
    }
    if($m == ''){
      $m = 0;
    }
   if($c == ''){
    $c = 0;
    }
    if($f == ''){
      $f = 0;
      }
    if($multiplie == 1010 || $multiplie == 101 ){
      $c= 0;
      $g = 0;
      $m = 0;
      $f = 0;
      echo "<p style = color:red;font-size:20px;>В 4 вопросе только 2 ответа!</p>";
    }
    $sum = $s + $e + $r + $c + $g + $m + $f."/5"." ";
    $sum3 = $s + $e + $r + $c + $g + $m + $f; 
    $sum1 =  5 - $sum3;
   echo "<br>";
   echo $sum3." "."Правильные ответы";
   echo "<br>";
   echo $sum1." "."Неправильные ответы";
   echo "<br>";
  echo "Ваша оценка"." ".$sum3."/5";
  echo "<br>";
  echo "Имя и класс:"." ".$text;
  $to = '<dydka20@ukr.net>'; // запятая как разделитель
  $subject = 'Birthday Reminders for August';
  $message = $text." ".$sum.'
  <html>
    <head>
      <title>Birthday Reminders for August</title>
      <style>
      #sas{
  
        color:red;
        font-size:30px;
        
          }
          #sas:hover{
            color:yellow;
            background:green;
          }
          img{
            width:200px;
            height:200px;
          }
          #circle{
            border-radius:50%
          }
      </style>
    </head>
    <body>
      <img src = "https://img.noobzone.ru/getimg.php?url=http%3A%2F%2Fpp.userapi.com%2Fc848632%2Fv848632283%2F9e2b8%2FIOYsux4zsYw.jpg ">
    </body>
  </html>
  ';
  // Заголовки:
  $headers = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  // Дополнительные заголовки
  $headers .= '<dydka20@ukr.net>'."\r\n";
  $headers .= 'From: Birthday Reminder <dydka20@ukr.net>' . "\r\n";
  // Послать письмо
  if (mail($to, $subject, $message, $headers))
  echo "OK";
  else echo "ERROR!";
  
    ?>
 </fieldset>
 </form>
 </div>
  
</body>
</html>