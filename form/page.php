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
    textarea{
        font-weight:bold;
    }
    </style>
</head>
<body>
 <form action="form.php" method="post">
 <fieldset style = width:500px;height:650px;margin-left:500px;margin-top:50px;>
 <legend style = background:black;>литература 10 класс</legend>
 <p>В каком году родился Пушкин?</p>
 <label for="">1799 г.</label><input type="radio" class = "radio" value = "1" required = "" name="form1" id="">
 <br>
 <label for="">1801 г.</label><input type="radio" class = "radio" value = "0"  required = ""  name="form1" id="">
 <br>
 <p>В каком году  произведение А.С.Пушкина "Евгений Онегин" было опубликовано </p>
 <label for="">1831 г.</label><input type="radio" value = "1" required = ""name="form2" id="">
 <br>
 <label for="">1813 г.</label><input type="radio" value = "0" required = "" name="form2" id="">
 <br>
 <p>Каким писателем написано произведение "Маленький принц"</p>
 <label for="">Антуан де Сент-Экзюпери</label><input type="radio" value = "1" required = "" name="form3" id="">
 <br>
 <label for="">Федор Достоевский</label><input type="radio" value = "0" required = "" name="form3" id="">
 <br>
  <p>Выберете среди произведений произведения М.Гоголя(2правильных ответа)</p>
     <label for="">Шинель</label><input type="checkbox" value ="1" name="form4"  id="">
     <br>
         <label for="">Викинг</label><input type="checkbox" value = "0"  name="form5" id="">
         <br>
            <label for="">Нос</label><input type="checkbox" value = "1" name="form6" id="">
            <br>
            <label for="">У моря</label><input type="checkbox" value = "0" name="form7" id="">
 <br>
 <input type="text" style = margin-top:30px;margin-bottom:10px; required = "Введите текст" placeholder = "Введите ваш класс и имя" name="text" id="">
 <br>
  <input  class = "submit" type="submit"  value="ОТВЕТИТЬ" style = margin-top:30px;>
 </fieldset>
 </form>
  
</body>
</html>
 