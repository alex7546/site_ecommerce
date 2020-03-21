<?php 
	session_start();
	$myDB = new mysqli('localhost','id10301324_root','96d5e6e2c9AA!!','id10301324_test2');

	if(isset($_SESSION['connected'])){
		if($_SESSION['connected'] == true){
			header('location: index.php');
		}
	}

	$x = false;
	$y = false;
	$z = false;

	function alert_danger($msg){
		echo "<div class='container'><div class='mt-2 mb-2 alert alert-danger'>".$msg."</div></div>";
	}

	function alert_success($msg){
		echo "<div class='container'><div class='mt-2 mb-2 alert alert-success'>".$msg."</div></div>";
	}

	if(isset($_POST['submit'])){

		$nom = $_POST['nom_complet'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password2 = $_POST['comfirmation_password'];
		$adresse = $_POST['adresse'];

		//on va voir sir email existe deja
		$sql = "select * from users where email='".$email."';";
		$response = $myDB->query($sql);

		if($response->num_rows > 0){
			//l'email existe deja
			$x = true;
		}
		else if($password != $password2){
			//les mots de passe ne sont pas identiques
			$y = true;
		}
		else{
			//tous est bien
			$sql = "insert into users(nom,email,password,adresse)values('".$nom."','".$email."','".$password."','".$adresse."');";

			if($myDB->query($sql) === true){
				$z = true;
			}
			else{
				echo "erreur base donnée";
			}
		}
	}
?>

<?php include('components/header.html') ?>

<?php include('components/navbar.php') ?>

<?php if($x){alert_danger("email existe deja");} ?>

<?php if($y){alert_danger("les 2 mot de passes entré ne sont pas identiques !");} ?>

<?php if($z){alert_success("vous êtes inscrit ! <a href='connexion.php'>clique ici pour se connecter</a>");} ?>

<?php include('components/inscription.html') ?>

<?php include('components/footer.html') ?>