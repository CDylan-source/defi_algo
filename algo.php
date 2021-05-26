<html>
 <head>
  <title>Algo PHP</title>
 </head>
 <body>
 <?php
function exchange($a, $b, $c){
     $d = $b;
     $b = $a;
     $e = $c;
     $c = $d;
     $a = $e;
     echo $a, " ", $b, " ", $c;
}
echo exchange(1, 250, 7);
function square($x){
     return $x * $x;
}
echo "<br>";
echo square(15);
?>
 </body>
</html>