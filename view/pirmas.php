<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bebru Uztvanka</title>
    </head>

    <body>

        <h2>Juodieji: <?= getBebrai()['juodieji'] ?></h2>
        <h2>Rudieji: <?= getBebrai()['rudieji'] ?></h2>
        <form action="http://localhost/New2/BebruUztvanka.php?route=prideti-juodus" method="post">
            <div>
                <label>Prideti juodus : </label><input type="text" name="j_plus">
                <button type="submit">+</button>
            </div>
        </form>
        <form action="http://localhost/New2/BebruUztvanka.php?route=atimti-juodus" method="post">
            <div>
                <label>Atimti juodus : </label><input type="text" name="j_minus">
                <button type="submit">-</button>
            </div>
        </form>
        <form action="http://localhost/New2/BebruUztvanka.php?route=prideti-rudus" method="post">
            <div>
                <label>Prideti rudus : </label><input type="text" name="r_plus">
                <button type="submit">+</button>
            </div>
        </form>
        <form action="http://localhost/New2/BebruUztvanka.php?route=atimti-rudus" method="post">
            <div>
                <label>Atimti rudus : </label><input type="text" name="r_minus">
                <button type="submit">-</button>
            </div>

        </form>

        <style>
            div {
                border-radius: 5px;
                margin: 15px;
                padding: 10px;
                border: 1px solid;
                width: 400px;
                height: 50px;
            }

            input {
                border-radius: 5px;
                width: 100px;
                height: 30px;

            }

            button {
                width: 40px;
                font-size: 18px;
                font-weight: 700;
                background: green;
                color: white;
                border: none;
                border-radius: 5px;
            }
        </style>

    </body>

    </html>