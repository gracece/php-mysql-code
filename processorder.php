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
//价格常量
define('TRICEPRICE',100);
define('OILPRICE',10);
define('SPARKPRICE',4);

echo "<p> Order processed at".date ('H:i,Y-m-d ')."</p>\n";
echo $_SERVER['DOCUMENT_ROOT'];
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$find = $_POST['find'];
$totalqty = $tireqty +$sparkqty + $oilqty;
$totalamount = 0.00;

switch($find)
{
case  "regular":
  echo "<p> Regular customer</p>";
  break;
case "tv":
  echo " <p>referred by TV</p> ";
  break;
case "phone":
  echo " <p>referred by phone directory</p>  ";
  break;
case "word":
  echo " <p>referred by word of mouth</p>  ";
  break;
default:
  echo " <p>do not know how you find us</p> ";
  break;
}
if($totalqty == 0)
{
  echo "order nothing!";
}

else
{
  $totalamount = $tireqty * TRICEPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;
  $taxrate = 0.10;
  echo ' <p>Ur ouder is as follows:</p> ';
  if($tireqty >0)
    echo $tireqty.' tires <br /> ';
  if ($oilqty >0)
    echo $oilqty.' oils  <br /> ';
  if ($sparkqty > 0)
    echo $sparkqty.' sparks <br /> ';

  echo "================================</br>";
  echo "total:".$totalqty." items</br>";
  echo "Subtotal:".number_format($totalamount,2)."</br>";
  $totalamount *= (1+$taxrate);
  echo "total including tax:".number_format($totalamount,2)."</br>";
}

?>
  </body>
</html>


