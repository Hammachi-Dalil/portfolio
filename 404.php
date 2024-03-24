<?php
/**
 * Le modèle pour afficher les pages d'erreur 404 (Non trouvé)
 */

get_header(); // Inclut le fichier header.php
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section class="error-404 not-found">
            
                <h1 class="page-title"><?php esc_html_e( 'Désolé, cette page n’existe pas.', 'text-domaine-de-votre-theme' ); ?></h1>
           

            <div class="page-content">
                <p class="text-404"><?php esc_html_e( 'Il semble que rien n’a été trouvé à cet emplacement. Peut-être essayer une recherche ou l’un des liens ci-dessous ?', 'text-domaine-de-votre-theme' ); ?></p>

			<button>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn2" >
				<span class="spn2">Page d'Accueil</span>
            </a>
        </button>            </div><!-- .page-content -->
        </section><!-- .error-404 -->

    </main><!-- #main -->
</div><!-- #primary -->

<style>

	html, body {
    height: 100%;
    margin: 0;
}

#primary {
    min-height: 100vh; /* Utilisez min-height pour que le contenu s'étende au-delà de la hauteur de la fenêtre si nécessaire */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center; 
}



.button-404 {
    background-color: #007bff; /* Couleur de fond */
    color: #ffffff; /* Couleur du texte */
    padding: 10px 20px; /* Padding */
    border-radius: 5px; /* Bordures arrondies */
    text-decoration: none; /* Supprime le soulignement du lien */
    font-weight: bold; /* Met le texte en gras */
    transition: background-color 0.3s; /* Animation de fond */
}

.button-404:hover {
    background-color: #0056b3; /* Couleur de fond au survol */
}

.page-title {
	color: White;
}

.text-404 {
	text-align: center;
}

.page-content {
	display: flex;
    flex-direction: column;
}

.error-404 {

}

.btn2 {
  position: relative;
  display: inline-block;
  padding: 15px 30px;
  border: 2px solid #fefefe;
  text-transform: uppercase;
  color: #fefefe;
  text-decoration: none;
  font-weight: 600;
  font-size: 20px;
  transition: 0.3s;
}

.btn2::before {
  content: '';
  position: absolute;
  top: -2px;
  left: -2px;
  width: calc(100% + 4px);
  height: calc(100% - -2px);
  background-color: #475569;;
  transition: 0.3s ease-out;
  transform: scaleY(1);
}

.btn2::after {
  content: '';
  position: absolute;
  top: -2px;
  left: -2px;
  width: calc(100% + 4px);
  height: calc(100% - 50px);
  background-color: #212121;
  transition: 0.3s ease-out;
  transform: scaleY(1);
}

.btn2:hover::before {
  transform: translateY(-25px);
  height: 0;
}

.btn2:hover::after {
  transform: scaleX(0);
  transition-delay: 0.15s;
}

.btn2:hover {
  border: 2px solid #fefefe;
}

.btn2 span {
  position: relative;
  z-index: 3;
  color: white;
}

button {
  text-decoration: none;
  border: none;
  background-color: transparent;
}

.div_button {
  display: flex;
  justify-content: center;
  margin: 4vh;
}
</style>

<?php
get_footer(); // Inclut le fichier footer.php
?>
