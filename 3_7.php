<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<b>대학 데이터베이스(univ)생성</b></p>

    <?php
    $conn = mysqli_connect("localhost","root","adminpw");

    if(mysqli_connect()){
        printf("MySQL 서버 연결 실패!<Br>[%d]%s",mysqli_connect_errno(),mysqli_connect_erro());
        exit();
    }else{
        $sql="CREATE DATABASE univ";
        $result=mysqli_query($conn,$sql);

        if($result){
            printf("대학 데이터베이스 생성 성공!<Br>");
        }else{
            printf("대학 데이터베이스 생성 실패!!<Br>[%d]%s",mysqli_connect_errno($conn),mysqli_error($conn));
        }
    }
    mysqli_close($conn);

    ?>
</body>
</html>