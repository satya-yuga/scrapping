<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('masterpage3.css') ?>
    <?= $this->Html->script("jquery-3.3.1.min.js"); ?>
    <?= $this->Html->script("base.js"); ?>
	<?= $this->Html->script("fontawesome-all.js"); ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<header>
    <div id="logo"><img src="/img/logo_white.png"></div>
    <nav>
        <ul>
            <li><a href="/pages/products_list"><span class="fas fa-home"></span> Home</a></li>
            <li><a href="/pages/cart"><span class="fas fa-shopping-cart"></span> Carrito Ahorro</a></li>
        </ul>
    </nav>
    
</header>
<body>
    <?= $this->Flash->render() ?>
    <div id="main">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>