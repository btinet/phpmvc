<?php
/*
 * Copyright (c) 2022. Benjamin Wagner
 */

/**
 * @var int|null $number Glücksnummer
 * @var int $luckyNumber Neue Glücksnummer
 * @var object|null $meta enthält Meta-Daten der Website
 */

/**
 * Übergeordnetes Template
 */
$this->layout('_layout.standard.html',['meta'=>$meta]);

?>

<?php $this->start('main') ?>
    <h1>Lucky Number</h1>
    <?php if($number): ?>
        <p class="lead">Deine Glücksnummer lautet: <?=$number?></p>
    <?php endif ?>
    <a href="https://<?=$_SERVER['SERVER_NAME'].'/'.$luckyNumber?>" class="btn btn-outline-dark">Würfeln</a>
<?php $this->stop() ?>
