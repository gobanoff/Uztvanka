<?php

if ('POST' == $_SERVER['REQUEST_METHOD']) {

    $from = $_POST['from'] ?? '';
    $to = $_POST['to'] ?? '';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, '' . $from . '|' . $to);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $answer = curl_exec($curl);

    curl_close($curl);

    $data = json_decode($answer);
    $distance = $data->name;
}






?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <form action="http://localhost/New2/dist.php" method="post" class="m-4">


                    <div class="form-group"><label>from</label>
                        <input type="text" name="from" class="form-control">
                        <small class="form-text text-muted">Enter town or city</small>

                    </div>
                    <div class="form-group"><label>to</label>
                        <input type="text" name="to" class="form-control">
                        <small class="form-text text-muted">Enter town or city</small>

                    </div>
                    <button type="submit" class="btn btn-danger">distance</button><h3><?php echo $distance; ?></h3>
                </form>
            </div>
        </div>
    </div>





</body>

</html>