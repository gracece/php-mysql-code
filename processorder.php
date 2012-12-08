<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title>Grace's Auto Parts --Order Results</title>
</head>
<body>
<h1>Grace's Auto Parts</h1>  
<h2>Order result</h2>
<?php
echo "<p> Order processed at".date ('H:i,Y-m-d ')."</p>\n";
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$totalqty = $tireqty +$sparkqty + $oilqty;
$totalamount = 0.00;
define('TRICEPRICE',100);
define('OILPRICE',10);
define('SPARKPRICE',4);
$totalamount = $tireqty * TRICEPRICE 
              + $oilqty * OILPRICE
              + $sparkqty * SPARKPRICE;
$taxrate = 0.10;
echo ' <p>Ur ouder is as follows:</p> ';
echo $tireqty.' tires <br /> ';
echo $oilqty.' oils  <br /> ';
echo $sparkqty.' sparks <br /> ';

echo "total:".$totalqty." items</br>";
echo "Subtotal:".number_format($totalamount,2)."</br>";
$totalamount *= (1+$taxrate);
echo "total including tax:".number_format($totalamount,2)."</br>";


?>
</body>
</html>


