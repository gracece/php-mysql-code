<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title>vier order</title>
</head>
<body>
  
<?php 
$fp = @fopen('order.txt','rb');
flock($fp,LOCK_SH);
if (!$fp) {
  echo "No order now!";
  exit;
}

while (!feof($fp))
{
  $order = fgets($fp,999);
  echo $order."<br />";
}

flock($fp,LOCK_UN);
fclose($fp);

?>
</body>
</html>
