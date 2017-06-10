<?php
    $this->assign('title', 'Index');
    $this->Html->script('script', ['block' => true]);
    $this->set('footer_text', 'qwerty');
?>

<h1>Home</h1>


<?= $this->element('article', ['title' => 'Lorem Ipsum', 'items' => ['One', 'Two', 'Three']]) ?>
