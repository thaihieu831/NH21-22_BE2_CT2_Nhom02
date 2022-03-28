<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        * {
            padding: 0px;
            margin: 0px;
            font-family: sans-serif;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .col-6 {
            float: left;
            width: 50%;
        }

        .margin_b {
            margin-bottom: 7.5px;
        }

        header {
            background-color: #cccccc;
            min-height: 70px;
            padding: 15px;
        }

        main {
            background-color: #dddddd;
            min-height: 300px;
            padding: 7.5px 15px;
        }

        footer {
            background-color: #cccccc;
            min-height: 70px;
            padding: 15px;
        }

        h1 {
            color: #009999;
            font-size: 20px;
            margin-bottom: 30px;
        }

        .register-form {
            width: 100%;
            max-width: 400px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 15px;
            border: 2px dotted #cccccc;
            border-radius: 10px;
        }

        .input-box {
            margin-bottom: 10px;
        }

        .input-box input[type='text'],
        .input-box input[type='password'],
        .input-box input[type='date'] {
            padding: 7.5px 15px;
            width: 100%;
            border: 1px solid #cccccc;
            outline: none;
            font-size: 16px;
            display: inline-block;
            height: 40px;
            color: #666666;
        }

        .input-box select {
            padding: 7.5px 15px;
            width: 100%;
            border: 1px solid #cccccc;
            outline: none;
            font-size: 16px;
            display: inline-block;
            height: 40px;
            color: #666666;
        }

        .input-box option {
            font-size: 16px;
        }

        .input-box input[type='checkbox'] {
            height: 1.5em;
            width: 1.5em;
            vertical-align: middle;
            line-height: 2em;
        }

        .input-box textarea {
            padding: 7.5px 15px;
            width: 100%;
            border: 1px solid #cccccc;
            outline: none;
            font-size: 16px;
            min-height: 120px;
            color: #666666;
        }

        .btn-box {
            text-align: right;
            margin-top: 30px;
        }

        .btn-box button {
            padding: 7.5px 15px;
            border-radius: 2px;
            background-color: #009999;
            color: #ffffff;
            border: none;
            outline: none;
        }
    </style>
</head>

<body>
    <h1>xin chao ban, {{ $firstname }}</h1>
</body>

</html>