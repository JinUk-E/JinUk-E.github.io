<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>postlogin</title>
</head>
<body>

</body>
<?php

if(isset($_POST['code'])){
    $response = $_POST['code'];
    header("LOCATION: ?status=success&code={$response}");
}else{
    echo '문제 발생! 다시 시도해주세요!';
    header("LOCATION: fail");
    die();
}
?>

</html>