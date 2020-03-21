<?php 
	session_start();

	$myDB = new mysqli('localhost','id10301324_root','96d5e6e2c9AA!!','id10301324_test2');

	class produits{
		public $id;
		public $nom;
		public $prix;
		public $quantite;

		function __construct($id,$nom,$prix,$quantite) {
    		$this->id = $id;
    		$this->nom = $nom;
    		$this->prix = $prix;
    		$this->quantite = $quantite;
  		}

  		function get_id(){return $this->id;}
  		function get_nom(){return $this->nom;}
  		function get_prix(){return $this->prix;}
  		function get_quantite(){return $this->quantite;}

  		function add_quantite($q){
  			$this->quantite += $q;
  		}
	}


	if(isset($_GET['ajouter']) && isset($_GET['quantite'])){
		//operation d'ajout d'un produit

		$id_produit = $_GET['ajouter']; 

		$sql = "select * from produits where id = ".$id_produit.";";
		$response = $myDB->query($sql);

		if($response->num_rows > 0){
			//si il existe au moins une ligne

			$data = $response->fetch_assoc();

			$nom_produit = $data['name'];
			$prix_produit = $data['prix'];
			$quantite_produit = $_GET['quantite'];

			//on va ajouté ce produit dans Array session
			if(isset($_SESSION['produits'])){
				$added = false;
				foreach ($_SESSION['produits'] as $elt) {
					if($elt->get_id() == $id_produit){
						$elt->add_quantite($quantite_produit);
						$added = true;
					}
				}
				if(!$added){
					array_push($_SESSION['produits'], new produits($id_produit,$nom_produit,$prix_produit,$quantite_produit));
				}
			}
			else{
				$_SESSION['produits'] = [];
				array_push($_SESSION['produits'], new produits($id_produit,$nom_produit,$prix_produit,$quantite_produit));
			}
		}
		header('location: index.php?message=produit ajouté (quantité = '.$quantite_produit.')');
	}

	else if(isset($_GET['supprimer'])){
		//operation de suppression d'un produit
	}

	else if(isset($_GET['viderPanier'])){
		//vider tous le panier
		session_destroy();
		header('location: panier.php');
	}
	
 ?>

<?php include('components/header.html') ?>

<?php include('components/navbar.php') ?>

<?php include('components/panier.php') ?>

<?php include('components/footer.html') ?>

