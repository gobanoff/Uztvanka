<?php
require __DIR__ . '/virsus.php' ?>
 <?php if (isLog()) : ?>
<form action="<?= URL ?>?route=nauja" method="post">

    <button class="a" type="submit">Sukurti nauja uztvanka</button>

</form>
<?php endif ?>
<?php
require __DIR__ . '/apacia.php' ?>