<html>
    <head>
        <title>墾丁資旅報名表</title>
        <meta charset="utf-8">
        <style>
            .container {
                display: flex;
                justify-content: space-around;
                align-items: flex-start;
            }
            table {border: 2px solid white;width: 50%;border-collapse: collapse;}
            th,td{border:2px solid rgb(4, 27, 60);padding:8px;text-align: center;}
            img {width:300px;}
            td:first-child { 
            background-color: #3A6EA5;
            color: white;
            font-weight: bold;
            }
            td:last-child { 
            background-color: #D6E6F2;
            color: #2C3E50;
            }
        </style>
    </head>
    <body bgcolor="89A7C2" text="white">
        <center><font face="標楷體" font size="8"><b>高大資管117墾丁資旅報名</b></font></center>
        <hr width="70%" color="C4D7F2">
        <center><font face="標楷體" font size="6"><p><b>活動相關資訊</b></p></font></center>
        <div class="container">
            <table bgcolor="89A7C2">
                <tr><td><b>時間</b></td><td>2025/1/1~2025/12/31</td></tr>
                <tr><td><b>費用</b></td><td>新台幣50000000元整</td></tr>
                <tr><td><b>地點</b></td><td>北韓平壤</td></tr>
                <tr><td><b>交通方式</b></td><td>走路</td></tr>
            </table>
            <img src="封面1 (1).png" alt="封面圖">
        </div>
        
        <center><font face="標楷體" font size="6"><p><b>資料填寫</b></font></p></center>
        <div class="container">
        <form action="info.php" method="POST">
            姓名:<input type="text" name="uName" value="full name"><br>
            性別:<input type="radio" name="uGender" value="男">男
                <input type="radio" name="uGender" value="女">女
                <input type="radio" name="uGender" value="青蛙">青蛙<br>
            身分證字號:<input type="text" name="uID"><br>
            信用卡卡號:<input type="text" name="uNumber"><br>
            有效日期:<input type="date" name="uDate"><br>
            通訊地址:<input type="text" name="uAddress"><br>
            郵遞區號:<input type="text" name="uPostalcode"><br>
            對活動的滿意程度:<input type="range" name="uSatisfaction"><br>
            <input type="hidden" name="uSecret" value="hello"><br>
        <p><input type="submit"><input type="reset"></p>
        </form>
        <img src="封面2.png" alt="封面圖">
        </div>
    </body>
</html>