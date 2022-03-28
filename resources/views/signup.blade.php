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
    <div class="container">
        <div class="register-form">
            <form action="{{ url('signup')}}" method="post">
                @csrf
                <br>
                <label for="dangky">
                    <h1>Sign Up</h1>
                </label>
                <div class="input-box">
                    <div class="col-6">
                        <input type="text" placeholder="First name" name="firstname" value="{{ old('firstname')}}">
                    </div>
                    <div class="col-6">
                        <input type="text" placeholder="Surname" name="surname" value="{{ old('surname')}}">
                    </div>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Mobile number or email address" name="mobileoremail" value="{{ old('mobileoremail')}}">
                </div>
                <div class="input-box">
                    <input type="password" placeholder="New password" name="password" value="{{ old('password')}}">
                </div>
                <div class="input-box">
                    <label for="ngaysinh">Date of birth</label>
                    <br>
                    <div class="col-6">
                        <input type="text" placeholder="day" name="day">
                    </div>
                    <div class="col-6">
                        <input type="text" placeholder="month" name="month">
                    </div>
                    <input type="text" placeholder="year" name="year">
                </div>
                <div class="input-box">
                    <label for="gender">Gender</label>
                    <br>
                    <input type="text" placeholder="Gender" name="gender">
                </div>
                <div class="btn-box">
                    <button type="submit">
                        Sign Up
                    </button>
                </div>
            </form>
        </div>
    </div>
    <h1>Test phuong thuc store</h1>
    <form action="product" method="post">
        @csrf
        <button type="submit">
            Store
        </button>
    </form>
    <h1>Test phuong thuc update</h1>
    <form action="product/12" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <button type="submit">
            update
        </button>
    </form>
</body>

</html>