<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $num=20;

    if(($num%3)==0){
        $msg=$num."은 3의 배수입니다.";
    }else if(($num%5)==0){
        $msg=$num."은 3의배수는 아니지만 5의 배수입니다.";
    }else{
        $msg=$num."은 3의배수도 5의 배수도 아닙니다.";
    }
    echo $msg."<br>";
    ?>
</body>
</html>