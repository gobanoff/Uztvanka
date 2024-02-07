<?php
require __DIR__ . '/virsus.php' ?>
<form action="<?= URL ?>?route=login" method="post"id="l">
    

    <div class="form-floating">
        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput"> email</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword"> password</label>
    </div>

    <button class="btn btn-primary" type="submit">LOGIN</button>
</form>
<?php require __DIR__ . '/apacia.php' ?>