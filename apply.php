<html>
    <head>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Itim', cursive;
                background: #FFFFFF;
                position: fixed;  
                top: 50%;  
                left: 50%;  
                margin-top: -170px;  
                margin-left: -180px; }
            h2{
                color: #000000;
                font-family: 'Itim', cursive;
            }
            form{
                border:8px solid #FFCCFF;
                padding:30px 20px; 
                background:#F0F8FF;
                width:100%;
                border-radius:45px; } 
            button{
                font-family: 'Itim', cursive;
                background-color: #00FFFF;
                padding: 15px 20px;
                border: none;
                cursor: pointer;
                width: 40%;
            }
        </style>
    </head>
    <body>
        <div>
            <form align="center"action="next1.php" method="POST" enctype="multipart/form-data">       
                <p>
                    <h2>สมัครสมาชิก</h2> 
                    <b>Email : </b><input type="text" name="email" required><br><br>
                    <b>Password : </b><input type="password" name="psw" required><br><br>
                    <input type="checkbox" name="accept"> ยืนยันการเปิดเผยข้อมูล  <br><br>
                    <button type="submit">เข้าสู่ระบบ</button>
                </p>      
            </form>
        </div>
    </body>
</html>
