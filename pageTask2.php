<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url("http://www.naessolutions.it/en/tmb/1852_assistenza-it-IT.aspx?width=800&ext=jpg");
   background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
  @media screen and (max-width:420px);
}
input[type=submit] {
  border-color:#00008B;
  border-radius:10px;
  color: #00008B;
  padding: 12px 30px;
  text-decoration: none;
  margin: 8px 1px;
  cursor: pointer;
  margin-left:93px;
}
input.centr{ margin-left:270px;
}
</style>
</head>
<body>
<form action="DB_For_Task2.php"method="post">
<input class="centr" type="submit" name="forward" value="forward" >
<br>
<input type="submit" name="right" value="right">
<input type="submit" name="stop" value="stop">
<input type="submit" name="left" value="left">
<br>
<input class="centr" type="submit" name="backward" value="backward">
<br>
</form> 

</body>
</html>