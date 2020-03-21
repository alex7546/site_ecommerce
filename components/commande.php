<?php
if(!isset($_SESSION['total'])){
	header('location: index.php');
}

if(isset($_POST['email'])){
    $to = $_SESSION['email'];
    $subject = "Recu de votre commande";
    $txt = "
    <html>
    <head>
        <title>Recu de votre commande</title>
    </head>
    <body>
        <center><h1 style='color:red'>Recu de votre commande</h1></center>
        <h2><b>Bonjour ".$_SESSION['nom']." .Ceci est un recu de votre commande sur notre store.Merci pour votre Commande!</b></h2>
        <table class='table table-striped' border='2' style='text-align:center;font-size:18px'>
					<tr>
						<th>Nom Complet </th>
						<td>".$_SESSION['nom']."</td>
					</tr>

					<tr>
						<th>Email </th>
						<td>".$_SESSION['email']."</td>
					</tr>

					<tr>
						<th>Adresse de la livraison </th>
						<td>".$_SESSION['adresse']."</td>
					</tr>
				</table>
    </body>
    </html>
    ";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: smi6@fsa.ma";
    if(mail($to,$subject,$txt,$headers)){
        echo "un email a été envoyé !";
    }else{
        echo "erreur ! email n'est pas envoyé : Veuillez réssayer";
    }
}
 ?>

<div class="text-center display-4 mt-3">Commande</div>
<div class="container mt-3">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-12">
			<?php 
			if(!isset($_SESSION['connected'])){
				echo "<div class='alert alert-danger'>Vous devez se connecter pour terminer l'achat</div>";
				echo "Pour se connecter <a href='connexion.php'>clique ici</a><br><br>";
				echo "Vous n'avez pas de comptes ?<a href='inscription.php'>clique ici pour s'inscrire</a>";
			} 
			else{
				echo "<div class='font-weight-bold mb-3'>Détails de la Commande : </div>
				<table class='table table-striped'>
					<tr>
						<th>Nom Complet </th>
						<td>".$_SESSION['nom']."</td>
					</tr>

					<tr>
						<th>Email </th>
						<td>".$_SESSION['email']."</td>
					</tr>

					<tr>
						<th>Adresse de la livraison </th>
						<td>".$_SESSION['adresse']."</td>
					</tr>
				</table>
				";
			}
			?>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-12">
			<table class="table table-striped">
				<th>Total a Payer : </th>
				<td><?php 
				if(isset($_SESSION['total'])){echo $_SESSION['total']." DH";}
				?></td>
			</table>
			<?php if(isset($_SESSION['total']) && isset($_SESSION['connected'])){echo "
			<form action='".$_SERVER['PHP_SELF']."' method='post'>
			
			<button class='btn btn-primary submit' name='email' style='width:100%'>Payer</button>
			
			</form>";} ?>
		</div>
	</div>
</div>