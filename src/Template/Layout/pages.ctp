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
    <?= $this->fetch('script_head') ?>

    <?php
        // Does not work
        // Method WyriHaximus\Ratchet\View\Helper\WampHelper::init does not exist
        $this->Wamp->init();
    ?>
</head>
<body>
    <header>
        <ul>
            <?php $nav = [
                'index' => 'Home',
                'test' => 'Test',
                'example' => 'Example',
                'vuejs' => 'Vue.js'
            ]; ?>
            <?php foreach($nav as $link => $text): ?>
                <li>
                    <?php if($link === $page): ?>
                        <span><?= $text ?></span>
                    <?php else: ?>
                        <?= $this->Html->link($text, ['controller' => 'pages', 'action' => $link]) ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
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
