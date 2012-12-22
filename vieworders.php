<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title>vier order</title>
</head>
<body>
<?php  
$order = file("./order.txt");
$number = count($order);
if ($number == 0) {
  echo "NO ORDER";
}

echo ' <table>
    <tr>
  <th>Date</th>
  <th>TIR</th>
  <th>OIL</th>
  <th>SPA</th>
  <th>TOTAL</th>
  <th>ADDRESS</th>
    </tr> ';
for ($i=0;i<$number;$i++>) { 
  $line = explode ('\t',$order[$i]);

  //对数字进行转换
  $line[1] = intval($line[1]);
  $line[2] = intval($line[2]);
  $line[3] = intval($line[3]);


  echo ' <tr>
      <td>'.$line[0].'</td>
      <td>'.$line[1].'</td>
      <td>'.$line[2].'</td>
      <td>'.$line[3].'</td>
      <td>'.$line[4].'</td>
      <td>'.$line[5].'</td>
    </tr> ';
}

echo '</table>';


}


?>
</body>
</html>
