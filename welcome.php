<?php
              
if(isset($_POST['name']))
{
$data=$_POST['name'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['email']))
{
$data=$_POST['email'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

?>
 

