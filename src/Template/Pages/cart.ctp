    <?= $this->Html->css('pages/cart.css') ?>
    <?= $this->Html->script("pages/products_list.js"); ?>
<div id="lateral_nav">
	<div class="search_container">
		<input type="type" name="search" id="search" placeholder="Buscar Producto">
		<button><span class="fas fa-search"></span></button>
	</div>

	<div class="filter">
		<label>Categoría</label>
		<select>
			<option selected disabled>Seleccione Categoría</option>
			<option>Carnes</option>
			<option>Carnes</option>
			<option>Carnes</option>
			<option>Carnes</option>
			<option>Carnes</option>
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
<div id="list_of_products">
	<h1>Productos</h1>

	<table id="table_products" class="table">
		<thead>
			<tr>
				<th>Marca</th>
				<th>Producto</th>
				<th>Peso</th>
				<th>Precio</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="product_brand">Kunstmann</td>
				<td class="product_name"><a href="/pages/product">Cerveza Doppel Bock Botella</a></td>
				<td>350 cc</td>
				<td><span class="fas fa-dollar-sign"></span> <span class="price">2.000</span></td>
				<td><button><span class="fas fa-plus"></span> Agregar </button></td>
			</tr>
		</tbody>
	</table>

</div>
<div id="best_cart">
	<h3>Carro Actual</h3>
	<table id="table_cart">
		<thead>
			<tr>
				<th>Qty</th>
				<th>Producto</th>
				<th>Precio</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="number" name="qty" class="item_cart_qty"></td>
				<td>Cerveza Doppel Bock Botella</td>
				<td><span class="fas fa-dollar-sign"></span class="item_cart_price">2.000</td>
				<td><button class="btn_delete delete_product_cart"><span class="fas fa-times"></span></button></td>
			</tr>
		</tbody>
	</table>
	<table id="table_total">
		<tr>
			<th>Total</th>
			<td id="total_price">2000</td>
		</tr>
	</table>
	<a id="next" class="button" href="/pages/resume">Analizar Carros</a>
</div>
