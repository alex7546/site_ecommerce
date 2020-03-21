<!-- Titre de la page -->

<div class="container-fluid pt-3" style="background:url('https://images.wallpaperscraft.com/image/man_hoodie_fog_137313_2560x1080.jpg');background-size:cover;height:400px;background-position:center">
	<div class="text-center display-4 text-primary">Home</div>
</div>

<!-- Les produits -->

<div class="container">
	<?php 
	if(isset($_GET['message'])){
		echo "<div class='alert alert-success mt-2'>".$_GET['message']."<a href='panier.php' class='ml-3'><strong>voir panier</strong></a></div>";
	}
	?>
	<div class="text-center display-4 mt-1 mb-3">Nos Produits</div>
	<div class="row mt-3">
		<div class="col-lg-3 col-md-4 col-sm-6 col-12">
			<div class="produit" id="produit1">
				<form action="panier.php" method="get">
					<input type="text" name="ajouter" value="1" style="display: none">
					<div class="d-inline-flex">
						<button class="btn-primary btn_ajout_panier submit">Ajouter</button>
						<input type="number" name="quantite" value="1" class="input_quantite">
					</div>
				</form>
				<div class="text-center text-light price font-weight-bold mt-3" style="font-size:20px">150 DH</div>
			</div>
		</div>
		
		<div class="col-lg-3 col-md-4 col-sm-6 col-12">
			<div class="produit" id="produit2">
				<form action="panier.php" method="get">
					<input type="text" name="ajouter" value="2" style="display: none">
					<div class="d-inline-flex">
						<button class="btn-primary btn_ajout_panier submit">Ajouter</button>
						<input type="number" name="quantite" value="1" class="input_quantite">
					</div>
				</form>
				<div class="text-center text-light price font-weight-bold mt-3" style="font-size:20px">200 DH</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6 col-12">
			<div class="produit" id="produit3">
				<form action="panier.php" method="get">
					<input type="text" name="ajouter" value="3" style="display: none">
					<div class="d-inline-flex">
						<button class="btn-primary btn_ajout_panier submit">Ajouter</button>
						<input type="number" name="quantite" value="1" class="input_quantite">
					</div>
				</form>
				<div class="text-center text-light price font-weight-bold mt-3" style="font-size:20px">100 DH</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6 col-12">
			<div class="produit" id="produit4">
				<form action="panier.php" method="get">
					<input type="text" name="ajouter" value="4" style="display: none">
					<div class="d-inline-flex">
						<button class="btn-primary btn_ajout_panier submit">Ajouter</button>
						<input type="number" name="quantite" value="1" class="input_quantite">
					</div>
				</form>
				<div class="text-center text-light price font-weight-bold mt-3" style="font-size:20px">70 DH</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6 col-12">
			<div class="produit" id="produit5">
				<form action="panier.php" method="get">
					<input type="text" name="ajouter" value="5" style="display: none">
					<div class="d-inline-flex">
						<button class="btn-primary btn_ajout_panier submit">Ajouter</button>
						<input type="number" name="quantite" value="1" class="input_quantite">
					</div>
				</form>
				<div class="text-center text-light price font-weight-bold mt-3" style="font-size:20px">75 DH</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6 col-12">
			<div class="produit" id="produit6">
				<form action="panier.php" method="get">
					<input type="text" name="ajouter" value="6" style="display: none">
					<div class="d-inline-flex">
						<button class="btn-primary btn_ajout_panier submit">Ajouter</button>
						<input type="number" name="quantite" value="1" class="input_quantite">
					</div>
				</form>
				<div class="text-center text-light price font-weight-bold mt-3" style="font-size:20px">230 DH</div>
			</div>
		</div>
	</div>
</div>

