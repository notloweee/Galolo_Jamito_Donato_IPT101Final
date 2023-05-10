<html>
    <title>Form Sumbmission</title>
<head>
    <style>
        html {font-family:"century gothic";}
        body {text-align:center; background-color: #FFFFFF;}
        input {
            width: 400px;
            padding: 10px 10px;
            margin: 4px 0;
            box-sizing: border-box;
            border: 3px solid gray;
            border-radius: 6px;
            font-size: 20px;
        }
        input[type=submit] {
            width: 100px;
            padding: 2px 4px;
            margin: 2px 0;
            box-sizing: border-box;
            border: 1px solid gray;
            border-radius: 6px; 
            font-size: 20px;
            background-color: #FFFFFF;
            cursor: pointer;
        }
        label {
            display: inline-block;
            width: 400px;
            font-size: 30px;
            text-align: left;
        }
        h1 {font-size: 30px;}
    </style>
</head>
    <body>
        <p>
            <br>
        <form action="qrapi.php" method="POST">
            <label for="link">Enter Link</label> <br>
                <input type="url" name="link" id="link" required> <br>
                <br><input type="submit" value="Submit">
        </form>
        </p>
    </body>
</html>