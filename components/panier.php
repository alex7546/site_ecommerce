<div class="container">
	<div class="text-center display-4">Mon Panier</div>
</div>

<div class="container mt-3">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-12 col-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nom produit</th>
						<th>Prix</th>
						<th>quantité</th>
						<th>Total</th>
					</tr>
				</thead>
				<?php 
				if(isset($_SESSION['produits'])){
					$total = 0;
					foreach ($_SESSION['produits'] as $elt) {
						echo "<tr>
							<td>".$elt->get_nom()."</td>
							<td>".$elt->get_prix()." DH"."</td>
							<td>".$elt->get_quantite()."</td>
							<td>".$elt->get_prix()*$elt->get_quantite()." DH "."</td>
						</tr>";
						$total += $elt->get_prix()*$elt->get_quantite();
						$_SESSION['total'] = $total;
					}
				}
				?>
			</table>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div>Total du Panier</div>
			<hr>
			<table class="table table-striped">
				<tr>
					<th>Total en DH</th>
					<td><?php if(isset($total)){echo $total;} else echo 0; ?> DH</td>
				</tr>
			</table>
			<a href="panier.php?viderPanier=1"><button class="btn btn-danger">Vider le Panier</button></a>
			<?php if(isset($_SESSION['total'])){echo "<a href='commande.php'><button class='btn btn-primary mt-2'>Valider ma commande</button></a>";} ?>
		</div>
	</div>


</div>
