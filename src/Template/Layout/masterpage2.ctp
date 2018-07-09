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
    <?= $this->Html->css('masterpage2.css') ?>
    <?= $this->Html->script("jquery-3.3.1.min.js"); ?>
    <?= $this->Html->script("base.js"); ?>
	<?= $this->Html->script("fontawesome-all.js"); ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<header>
    <div id="logo"><img src="/img/logo.png"></div>
    <div class="wrap">
   <div class="search">
      <input type="text" class="search-term" placeholder="Encuentra los mejores descuentos">
      <button type="submit" class="search-button">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
    
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