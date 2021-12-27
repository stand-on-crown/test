<HTML>
 <HEAD>
  <TITLE> PHP 반복문 </TITLE>
 </HEAD>

 <BODY>
  <?PHP
  $i;
  $sum=0;
  $fact=1;
  $num = $ori = 5;
  for($i=0; $i<=$num; $i++){
      $sum +=$i;
  }
  echo "1에서".$num."까지의 합은".$sum."입니다.<br>";

  while($num){
      $fact*=$num;
      $num--;
  }
  echo " ".$ori."팩토리얼 값은".$fact."입니다.<br>";
  echo "20171174 배준성";
  ?>
 </BODY>
</HTML>
