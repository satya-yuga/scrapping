    <?= $this->Html->css('pages/products_list.css') ?>
    <?= $this->Html->script("pages/products_list.js"); ?>
<div id="lateral_nav">
	<div class="search_container">
		<form action="/pages/productsList/" method="GET">
		<input type="type" name="search" id="search" value = "<?= $name ?>" placeholder="Buscar Producto">
		<button id="search_btn"><span class="fas fa-search"></span></button>
		</form>
	</div>

	<div class="filter">
		<label>Categoría</label>
		<select>
			<option selected disabled>Seleccione Categoría</option>
			<?php foreach ($tags as $key => $value): ?>
				<option value = "<?= $value->id ?>"><?= $value->name ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="filter">
		<label>Supermercado</label>
		<select>
			<option selected disabled>Seleccione Supermercado</option>
			<option>Lider</option>
			<option>Jumbo</option>
			<option>Tottus</option>
			<option>Telemercados</option>
		</select>
	</div>

	<button><span class="fas fa-filter"></span> Filtrar</button>

	
</div>
<div id="products">

	<?php foreach ($products as $product): ?>
			<div class="product">

<!--
		<div class="store_logo">
			<img src="/img/logo_jumbo.png">
		</div>

	-->
		<div class="product_img">
			<span><img src="https://images.lider.cl/wmtcl?set=imageSize[medium],imageURL[file:/productos/<?= $product->ean ?>a.jpg],options[progressive]&call=url[file:catalog/sizing.chain]&sink=format[jpg],options[progressive]"></span>
		</div>
		<div class="product_info">
			<p><?= $product->name ?></p>
			<small><?= $product->description ?></small>
		</div>
		<div class="button_ctn">
			<a href="" class="button"><span class="fas fa-plus"></span> Agregar</a>
		</div>
		<div class="product_totals">

			<table>
				<tbody>
					<tr>
						<td class = "green">L</td> <td class = "yellow">J</td> <td class = "yellow">U</td> <td class = "red">T</td>
					</tr>
					<tr>
						<td class = "green">$1000</td> <td class = "yellow">$1500</td> <td class = "yellow">$1300</td> <td class = "red">$2000</td>
					</tr>
				</tbody>
			</table>	
		</div>
		</div>
	<?php endforeach ?>

	


</div>

