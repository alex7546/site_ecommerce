
<nav class="navbar navbar-expand-sm bg-primary">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link text-light" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-light" href="panier.php">Panier</a>
			</li>
			<?php if(isset($_SESSION['connected'])){
				if($_SESSION['connected'] == true){
					echo "
					<li class='nav-item'>
						<a class='nav-link text-warning font-weight-bold' href='connexion.php?deconnexion=true'>Deconnexion</a>
					</li>
					";
				}
			}
			else{
				echo "
					<li class='nav-item'>
						<a class='nav-link text-light' href='inscription.php'>Inscription</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link text-light' href='connexion.php'>Connexion</a>
					</li>";
			} ?>
			
		</ul>
	</nav>