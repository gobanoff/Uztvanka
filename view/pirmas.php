<?php
require __DIR__ . '/virsus.php' ?>
<?php foreach ($bebrai as $bebras) : ?>
    <div class="cart">
        <h3>Uztvanka Nr. <?= $bebras['id'] ?></h3>

        <form action="<?= URL ?>?route=destroy&id=<?= $bebras['id'] ?>" method="post">

            <button class="b" type="submit">Sugriauti</button>
        </form>

        <h4>Juodieji: <?= $bebras['juodieji'] ?></h4>
        <h4>Rudieji: <?= $bebras['rudieji'] ?></h4>

        <form action="<?= URL ?>?route=prideti-juodus&id=<?= $bebras['id'] ?>" method="post">
            <div>
                <label>Prideti juodus: </label><input type="text" name="j_plus">
                <button type="submit">+</button>
            </div>
        </form>
        <form action="<?= URL ?>?route=atimti-juodus&id=<?= $bebras['id'] ?>" method="post">
            <div>
                <label>Atimti juodus: </label><input type="text" name="j_minus">
                <button type="submit">-</button>
            </div>
        </form>
        <form action="<?= URL ?>?route=prideti-rudus&id=<?= $bebras['id'] ?>" method="post">
            <div>
                <label>Prideti  rudus : </label><input type="text" name="r_plus">
                <button type="submit">+</button>
            </div>
        </form>
        <form action="<?= URL ?>?route=atimti-rudus&id=<?= $bebras['id'] ?>" method="post">
            <div>
                <label>Atimti   rudus : </label><input type="text" name="r_minus">
                <button type="submit">-</button>
            </div>

        </form>
    </div>

<?php endforeach ?>

<?php require __DIR__ . '/apacia.php' ?>