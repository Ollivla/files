<?php

/**
 * @var string $rout
 * @var string $dir
 * @var string $name
 * @var string $content
 */

?>
<div class="row">
    <div class="col-lg-12">
        <a href="/?rout=<?= $dir ?>" class="btn btn-success">Go back</a>
        <a href="/files/edit?rout=<?= $dir ?>" class="btn btn-warning">Edit</a>
        <a href="/files/delete?rout=<?= $dir ?>" class="btn btn-danger">Delete</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?= nl2br($content) ?>
    </div>
</div>