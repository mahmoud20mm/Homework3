<?php
$num1 = 97;
$num2 = 99;
$closer = 100;
$bb1 = abs($num1-$closer);
$bb2 = abs($num2-$closer);
if($bb1<$bb2 ){
    echo "الرقم الاقرب هو" .$num1;
}
elseif($bb2<$bb1){
    echo "الرقم الاقرب هو" .$num2;
}
else{
    echo "الرقم الاول والرقم الثاني متساويات في القرب" ;
}
?>
