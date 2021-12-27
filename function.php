<HTML>
 <HEAD>
  <TITLE> PHP 함수 </TITLE>
 </HEAD>

 <BODY>
  <?PHP

  function fn_1($su1, $su2){
      $result=0;
      $result =$su1 + $su2;
      echo "함수내에서 값은".$result."입니다.<br>";
      return $result;  
  }

  $num1 = 5;
  $num2 =10;
  $sum=0;

  echo "처음 함수밖에서 값은".$sum."입니다.<br>";
  $sum =fn_1($num1, $num2);
  echo "반환 후 값은".$sum."입니다.<br>";
  echo "20171174 배준성.";
  ?>
 </BODY>
</HTML>
