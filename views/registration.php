<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <?php
        if(isset($_GET['userType']) && $_GET['userType'] == 'student'){
            require_once('r_student.html');
            if(isset($_GET['msg']) && $_GET['msg'] == 'error'){
                echo "Reg Error";
            }
        }else{
            echo 'errror';
        }
    ?>
</body>

</html>