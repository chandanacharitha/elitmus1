<html>
<head>
    <style>
        body {
            margin: 0;
            padding:35px;
            padding-left:450px;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            background-image:url("https://images.pexels.com/photos/3847620/pexels-photo-3847620.jpeg?auto=compress&cs=tinysrgb&w=600");
            background-repeat:no-repeat;
            background-size:1500px 800px;
        }

        form {
            border:2px solid black;
            margin-top: 10%;
            background-color: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0px 2px 10px rgba(0,0,0,0.2);
            width:50%;
            height:auto;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 40px;
            color: #333;
            text-align: center;
        }

        input[type=text] {
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid coral;
            border-radius: 4px;
            background-color:lightgrey;
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }
        input[type=password]
        {
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid coral;
            border-radius: 4px;
            background-color:lightgrey;
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }
        input[type=password]:focus{
            outline: none;
            border-color: black;
        }
        input[type=text]:focus {
            outline: none;
            border-color: black;
        }

        input[type=submit] {
            border:1px solid green;
            width: 50%;
            background-color:black;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease-in-out;
        }

        input[type=submit]:hover {
            background-color: grey;
        }

    </style>
</head>
<body>
    <form action="verify.php" method="post">
        <h1>LOG IN PAGE</h1>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<b>ID:</b>&nbsp &nbsp<input type="text" name="id" id="id"><br>
        <b>PASSWORD:</b>&nbsp<input type="password" name="pass" id="pass">
        <center><input type="submit" value="SUBMIT"></center>
    </form>
</body>
</html>
