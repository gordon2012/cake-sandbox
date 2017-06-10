<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= h($this->fetch('title')) ?></title>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('pages.css') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <header>
        <ul><?php
            foreach(['index' => 'Home', 'test' => 'Test', 'example' => 'Example'] as $link => $text) {
                echo '<li>';
                echo $link === $page
                    ? '<span>'. $text .'</span>'
                    : $this->Html->link($text, ['controller' => 'pages', 'action' => $link]);
                echo '</li>';
            }
        ?></ul>
    </header>
    <main>
        <?= $this->fetch('content') ?>
    </main>
    <footer><div>
        <?= isset($footer_text) ? $footer_text : null // Probably better as block ?>
    </div></footer>
    
    <?= $this->fetch('script') ?>
</body>
</html>
