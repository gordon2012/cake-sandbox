<?php
    $this->assign('title', 'Example');
?>

<h1>Example</h1>

<?= $this->element('article', ['title' => 'Lorem Ipsum', 'items' => [] ]) ?>
