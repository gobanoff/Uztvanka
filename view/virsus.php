<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Bebru Uztvanka</title>
</head>

<body>
    <nav>
        <a href="<?= URL ?>">Sarašas</a>
        <a href="<?= URL ?>?route=nauja">Nauja užtvanka</a>
        <a href="<?= URL ?>?route=login">Loginas</a>
    </nav>

    <style>
        .form-floating {
            width: 400px;
            height: 60px;
            border: none;
        }


        .form-control {
            width: 400px;
            margin: 0;
        }

        #l {
            margin-top: 50px;
            margin-left: 50px;
        }

        .btn-primary {
            margin-top: 10px;
            margin-left: 10px;
            width: 400px;
            height: 50px;
        }

        .b {
            background: red;
            width: 100px;
            height: 25px;
        }

        div {
            margin-left: 50px;
            border-radius: 5px;
            margin: 5px;
            padding: 5px;
            border: 1px solid;
            width: 300px;
            height: 35px;
        }

        input {
            margin-left: 10px;
            border: none;
            background-color: lightyellow;
            border-radius: 5px;
            width: 50px;
            height: 20px;

        }

        .cart {
            height: 350px;
            width: 400px;
            background-color: lightcyan;
            margin-left: 30px;
            margin-top: 30px;
        }

        button {
            height: 25px;
            width: 40px;
            font-size: 18px;
            font-weight: 700;
            background: green;
            color: white;
            border: none;
            border-radius: 5px;
        }

        nav a {
            color: white;
            padding-left: 50px;
            text-decoration: none;
        }

        nav {
            font-size: 30px;
            background: blue;
            color: white;
            padding-top: 20px;
        }
    </style>