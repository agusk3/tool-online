<?php
echo'
<html language="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpamMessage.Ga Trang Spam Tin Nhắn Miễn Phí</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        
        body {
            background: #2b2b2b;
            font: 400 16px sans-serif;
            color: #dadada;
        }
        
        form {
            box-sizing: border-box;
            width: 100%;
            max-width: 500px;
            min-width: 350px;
            margin: 5px auto;
            padding: 15px;
            background-color: #1b1b1b;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1);
            font: 400 14px sans-serif;
            text-align: center;
            webkit-box-shadow: 0 0 10px rgba(120, 120, 120, 0.5);
            box-shadow: 0 0 10px rgba(120, 120, 120, 0.5);
        }
        
        form .form-row {
            text-align: left;
        }
        
        form .form-title-row {
            margin: 0 auto 40px auto;
            text-align: left;
        }
        
        form h1 {
            display: block;
            box-sizing: border-box;
            color: #dadada;
            font-size: 24px;
            padding: 0 0 3px;
            margin: 0;
            border-bottom: 2px solid #dadada;
        }
        
        form .form-row>label span {
            display: block;
            box-sizing: border-box;
            color: #dadada;
            padding: 0 0 10px;
            font-weight: 700;
        }
        
        form input {
            color: #5f5f5f;
            box-sizing: border-box;
            box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, .08);
            padding: 12px 18px;
            border: 1px solid #dbdbdb;
            margin-bottom: 10px;
        }
        
        form input[type=email],
        form input[type=password],
        form input[type=text],
        form textarea {
            width: 100%;
        }
        
        form input[type=number] {
            width: 100%;
        }
        
        form input[type=checkbox],
        form input[type=radio] {
            box-shadow: none;
            width: auto;
        }
        
        form textarea {
            color: #5f5f5f;
            box-sizing: border-box;
            box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, .08);
            padding: 12px 18px;
            border: 1px solid #dbdbdb;
            resize: none;
            min-height: 80px;
        }
        
        form select {
            background-color: #fff;
            color: #5f5f5f;
            box-sizing: border-box;
            width: 240px;
            box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, .08);
            padding: 12px 18px;
            border: 1px solid #dbdbdb;
        }
        
        form .form-radio-buttons>div {
            margin-bottom: 10px;
        }
        
        form .form-radio-buttons label span {
            margin-left: 8px;
            color: #5f5f5f;
        }
        
        form .form-radio-buttons input {
            width: auto;
        }
        
        form button {
            border-radius: 2px;
            background-color: #6caee0;
            color: #fff;
            font-weight: 700;
            box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, .08);
            padding: 14px 22px;
            border: 0;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form action="/spam.php" method="get">
        <div class="form-title-row">
            <h1>SpamMessage.Ga</h1>
        </div>
        <div class="form-row">
            <label>
                <span>Enter Phone Number:</span>
                <input type="number" name="phone" placeholder="84***" required>
            </label>
        </div>
        <div class="form-row">
            <button type="submit">Start</button>
        </div>
        <br/>
    </form>

    </div>
</body>

</html>
';
?>
