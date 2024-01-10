<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 style="text-align: center;">WebBoard GoodGame</h1>
    <hr>
    <div style="text-align: center;">
        ต้องการดูกระทู้หมายเลข <?php echo $_GET['id']; ?> <br>
        <?php
        $n = $_GET['id'];
        if(($n%2)==0){
            echo "เป็นกระทู้หมายเลขคู่";
        }
        else{
            echo "เป็นกระทู้หมายเลขคี่";
        }
        ?>
        <br><br>
    </div>
    <div>
        <table style="border: 2px solid black; width: 40%;" align="center">
            <tr style="background-color: #6CD2FE;"><td colspan="2">แสดงความคิดเห็น</td></tr>
            <tr><td align="center"><textarea name="massage" cols="50" rows="10"></textarea></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
        </table>
    </div><br>
    <div style="text-align: center;">
    <a href="index.php">กลับไปหน้าหลัก</a>
    </div>
</body>
</html>