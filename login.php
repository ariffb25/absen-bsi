<!DOCTYPE html>
<HTML lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            transition: 1s;
        }

        .box {
            width: 300px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #191919;
            animation: blackblock 2s ease alternate forwards;
            text-align: center;
        }

        .theme {
            background-color: grey;
            transition: 1s;
        }

        .theme2 {
            animation: blockblack 2s ease alternate forwards;
        }

        @keyframes blackblock {
            0% {}

            100% {
                box-shadow: 20px 20px 0 black;
            }
        }

        @keyframes blockblack {
            0% {}

            100% {
                box-shadow: -20px -20px 0 black;
            }
        }

        .box h1 {
            color: white;
            text-transform: uppercase;
            font-weight: 500;
        }

        .box input[type="text"],
        .box input[type="password"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #1498db;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }

        .box input[type="text"]:focus,
        .box input[type="password"]:focus {
            width: 280px;
            border-color: #2ecc71;
        }

        .box button[type="submit"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }

        .box button[type="submit"]:focus {
            background: #2ecc71;
        }

        .buttontheme {
            position: absolute;
            top: 95%;
            left: 13px;
        }

        div.buttontheme button {
            padding: 7px;
        }
    </style>
</head>

<body>
    <div class="buttontheme">
        <button type="submit" onclick="document.body.classList.toggle('theme');var form = document.getElementsByTagName('form')[0];form.classList.toggle('theme2');"></button>
    </div>
    <form class="box">
        <h1>Login</h1>
        <input type="text" name="username" placeholder="Username" autocomplete="off">
        <input type="password" name="password" placeholder="Password" autocomplete="off">
        <button type="submit">Login</button>
    </form>



</body>

</HTML>