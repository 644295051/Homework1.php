<html>
    <body>
        <head>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
            <style>
                body {                        
                    font-family: 'Itim', cursive;
                    background: #FFFFFF;
                    position: fixed;  
                    top: 50%;  
                    left: 50%;  
                    transform: translate(-50%, -50%);
                }
                form {  
                    border:8px solid #FFCCFF;
                    padding:20px 50px; 
                    background:#F0F8FF;
                    width:50%;
                    border-radius:45px;}
                h2{
                    color: #FF0000;
                }
                button{
                    font-family: 'Itim', cursive;
                    background-color:#00FFFF;
                    padding: 14px 20px;
                    border: none;
                    cursor: pointer;
                    width: 50%;
                }
            
            </style>
            <?php
                $email = $_POST['email'];
                $password = $_POST['psw'];
                if (isset($_POST['accept'])) { 
            ?>
                <form  action="next2.php" method="post" enctype="multipart/form-data">
                    <center><h2>ข้อมูลส่วนตัว</h2></center>
                    ชื่อ : <br><input type="text" name="firstname" ><br><br>
                    นามสกุล : <br><input type="text" name="lastname"><br><br>
                    ที่อยู่ : <br><textarea name="address"></textarea><br><br>
                    รูปบัตรประชาชน : <input type="file" name="id" ><br><br>
                    <center><button type="submit" name="confirm">อัพโหลด</button></center>
                </form>       
            <?php
                } else {
                echo "<center><h2>กรุณายืนยันการเปิดเผยข้อมูล</h2></center>";
                echo "<br>";
            ?>
                <center>
                    <img src="https://e7.pngegg.com/pngimages/261/7/png-clipart-exclamation-mark-computer-icons-acknowledgement-angle-text.png" width="80"> 
                </center>
            <?php
                echo "<br>";
                echo '<center><a href="apply.php">กลับ</a></center>';
                }
            ?>            
    </body>
</html>
