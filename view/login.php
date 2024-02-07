<?php
require __DIR__ . '/virsus.php' ?>
<form action="<?= URL ?>?route=login" method="post" id="l">


    <div class="form-floating">
        <input type="text" class="form-control" name="name" id="floatingInput">
        <label for="floatingInput"> name</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" name="pass" id="floatingPassword">
        <label for="floatingPassword"> password</label>
    </div>

    <button class="btn btn-primary" type="submit">LOGIN</button>
</form>
<?php require __DIR__ . '/apacia.php' ?>