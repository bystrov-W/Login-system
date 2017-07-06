<?php
header('Content-Type: text/html; charset=utf-8');

$dir ='C:\xampp\htdocs\Test_folder';
$list=scandir($dir);
$z=count(scandir('C:\xampp\htdocs\Test_folder\Tests'))-1;
$x=2;
do {
    echo $list[$x],"  ", " ", "Файл номер - ", $x-1, "</br>"; 
    
}   while ($x++<$z);
    
 
 
$file = file_get_contents('test2.json'); 
$fileDecode = json_decode($file, true); 

 
 

 
$label = $fileDecode['calculate']['label'];
$type = $fileDecode['calculate']['input']['type'];
$result = $fileDecode['calculate']['result'];
 
echo '<br>';
echo '<br>';
echo '<br>';
 ?>



<p> Перейти к тесту </p>

<?php 
  if (isset($_GET['name'])) { 
    echo '<h1>Привет, <b>' . $_GET['name'] . '</b></h1>!'; 
  } 
?> 
<form action="test.php""> 
Введите Ваше имя: <input type="text" name="name"> 
<br/> 
<input type="submit" value="OK"> 
<form enctype="multipart/form-data" action="test.php" method="POST">
 <input type="submit" value="КНОПКА" />
</form> 
</body> 
</html>




 
