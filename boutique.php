<?php

$base_données = mysqli_connect("localhost", "root", "", "ivoiretechnologies");
$requete = mysqli_query($base_données, "SELECT * FROM produits");

?>

<!DOCTYPE html>

<html lang="fr">
    <head>
        <title>Ivoire Technologies</title>

        <meta charset="utf-8">
        <meta name="description" content="Ivoire Technologies est une entreprise de prestations informatiques, spécialisée dans la maintenance informatique,
        l'installation et le cablage réseau et les formations logiciels. Nous garantissons une prestation de qualité
        et nous nous engageons à une obligation de résultats, à un tarif forfaitaire, quelle que soit la durée de l'intervention.
        Notre savoir-faire et notre expérience nous permet de proposer aux PME, PMI, professions libérales, TPE et particuliers un
        partenariat informatique efficace, réactif et fiable">
        <meta name="author" content="IvoireDev">
        <meta name="keywords" content="informatique,maintenance,réseaux,installation,logiciels,conseils">

        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <nav class="w3-bar w3-top">
            <span class="w3-bar-item">Ivoire Technologies</span>
            <span style="float:right">
                <a href="index.html#acceuil" class="w3-bar-item">Acceuil</a>
                <a href="index.html#a-propos" class="w3-bar-item">A propos</a>
                <a href="index.html#services" class="w3-bar-item">Services</a>
                <a href="boutique.php" class="w3-bar-item">Boutique</a>
                <a href="index.html#contact" class="w3-bar-item">Contact</a>
            </span>
        </nav>

        <header class="w3-padding-64" id="acceuil">
            <h1>Ivoire Technologies</h1>
            <hr>
            <p>Bienvenue dans notre boutique en ligne.</p>
        </header>

        <section class="w3-container w3-padding-64" id="produits" style="text-align: center">
            <div class="w3-row w3-content">
                <?php while ($produit = mysqli_fetch_assoc($requete)) { ?>
                    <div class="w3-col l4">
                        <p><img src="<?php echo $produit['image'] ?>" style="width:80%"></p>
                        <p><?php echo $produit['nom'] ?></p>
                        <p><?php echo $produit['prix'] ?> FCFA</p>
                        <p><a href="#">Ajouter au panier</a></p>
                    </div>
                <?php } ?>
            </div>
        </section>

        <section class="w3-container w3-padding-64" id="contact">
			<h1>CONTACTEZ-NOUS</h1>
            <h5>Besoin de nos services? N'hésitez pas à nous contacter</h5>
            <hr>
		</section>

        <section class="w3-center" id="section-contact">
            <div class="w3-container w3-row">
                <div class="w3-col l6">
				    <form>
				      	<input class="w3-input w3-section" type="text" name="name" placeholder="Votre nom" required>
				      	<input class="w3-input w3-section" type="email" name="email" placeholder="Votre email" required>
				      	<textarea class="w3-input w3-section" type="text" name="message" cols="6" rows="4" placeholder="Votre message" required></textarea>
				      	<input type="submit" value="Envoyer" class="w3-padding-large w3-margin-bottom">
				    </form>
				</div>

				<div class="w3-col l6 w3-large w3-left-align">
					<p class="w3-margin-left">Téléphone: (+225) 00000000 / 00000000</p>
					<p class="w3-margin-left">Email: info@ivoiretechnologies.com</p>
                    <p class="w3-margin-left">Siège: Daloa (Tazibouo 1)</p>
				</div>
            </div>
        </section>

        <footer class="w3-container">
            <div class="w3-padding">
                Copyright &copy; 2019 - Ivoire Technologies
            </div>
        </footer>
    </body>
 </html>
