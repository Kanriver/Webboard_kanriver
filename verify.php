<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 style="text-align: center;">WebBoard GoodGame</h1>
    <hr>
    <div style="text-align: center;">
        <?php
            $name = $_POST['user'];
            $pwd = $_POST['pwd'];
            if($name=='admin'&&$pwd=='ad1234'){
                echo "ยินดีต้อนรับคุณ ADMIN";
                echo "<br><a href=index.php> กลับไปยังหน้าหลัก </a>";
            }
            elseif($name=='member'&&$pwd=='mem1234'){
                echo "ยินดีต้อนรับคุณ MEMBER";
                echo "<br><a href=index.php> กลับไปยังหน้าหลัก </a>";
            }
            else{
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
                echo "<br><a href=index.php> กลับไปยังหน้าหลัก </a>";
            }
        ?>
</body>
</html>