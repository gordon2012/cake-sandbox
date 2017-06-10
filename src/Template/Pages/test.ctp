<?php
    use Cake\Collection\Collection;
    $this->assign('title', 'Index');
?>

<h1>Test</h1>


<?= $this->element('article', ['title' => 'Fruit', 'items' => ['apple', 'banana', 'cherry', 'mango']]) ?>

<?= $this->element('article', ['title' => 'Links', 'items' => (new Collection(['home', 'test', 'index']))->map(function($v, $k) {
    return $this->Html->link($v, ['controller' => 'pages', 'action' => $v]);
})]) ?>

<?php
    $link_template = '<a href="%s" target="_blank">%s</a>';
    echo $this->element('article', ['title' => 'Template', 'items' => [sprintf($link_template, 'http://google.com', 'Google!')]]);
?>

<article>
    <h3>Debug!</h3>
    <?php
        debug($this->Url);
    ?>
</article>

<?= $this->element('article', ['title' => 'Lorem Ipsum', 'items' => [] ]) ?>
