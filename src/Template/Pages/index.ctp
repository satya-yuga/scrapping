    <?= $this->Html->css('pages/index.css') ?>
    <?= $this->Html->script("pages/index.js"); ?>

    <div id="logo_center">
    	<img src="/img/logo_blue.png">
    </div>
    <form action="/pages/productsList/" method="GET">
<div class="wrap">
   <div class="search">
      <input type="text" class="search-term" placeholder="Encuentra los mejores descuentos">
      <button type="submit" class="search-button button">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>

</form>