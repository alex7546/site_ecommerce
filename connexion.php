<?php 
	session_start();
	$myDB = new mysqli('localhost','id10301324_root','96d5e6e2c9AA!!','id10301324_test2');

	if(isset($_GET['deconnexion'])){
		session_destroy();
		header('location: connexion.php');
	}

	else if(isset($_SESSION['connected'])){
		if($_SESSION['connected'] == true){
			header('location: index.php');
		}
	}

	if(isset($_POST['submit'])){

		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "select * from users where email='".$email."' and password='".$password."';";
		$response = $myDB->query($sql);

		if($response->num_rows > 0){
			$_SESSION['connected'] = true;
			$data = $response->fetch_assoc();
			$_SESSION['nom'] = $data['nom'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['adresse'] = $data['adresse'];
			header('location: commande.php');
		}
		else{
			echo "incorrecte";
		}
	}
?>

<?php include('components/header.html') ?>

<?php include('components/navbar.php') ?>

<?php include('components/connexion.html') ?>

<?php include('components/footer.html') ?>