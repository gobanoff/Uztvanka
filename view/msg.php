<?php if (!empty($messages)) : ?>

   

            <?php foreach ($messages as $message) : ?>

                <div class="alert alert-<?= $message['type'] ?>" role="alert">

                    <?= $message['msg'] ?>

                </div>

            <?php endforeach ?>
       
<?php endif ?>