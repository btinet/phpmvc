<?php

/**
 * @var object|null $meta enthält Meta-Daten der Website
 */

?>
<!doctype html>
<html lang="<?= $meta->get('lang') ?>" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= $meta->get('description') ?>"
        <meta name="author" content="<?= $meta->get('author') ?>">

        <?php if ($this->section('css')): ?>
            <?=$this->section('css')?>
        <?php else: ?>
            <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
            <script type="javascript" src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
        <?php endif ?>

        <title><?= $meta->get('title') ?></title>
    </head>
    <body class="h-100 d-flex flex-column justify-content-between">
        <?=$this->section('body')?>
    </body>
</html>
