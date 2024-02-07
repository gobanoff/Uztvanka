<form  action="<?= URL ?>?route=login" method="post">
        <h1 class="h3 mb-3 fw-normal"> LOGIN </h1>

        <div class="form-floating">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput"> email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword"> password</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">LOGIN</button>
    </form>