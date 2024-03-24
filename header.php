<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="wrap">
    <header>
      <div class="header-top">
        <div class="logo">
          <a href="<?php echo esc_url( home_url() ); ?>">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="Logo">
          </a>
        </div>

        <div class="menu">
          <?php wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'container' => 'nav',
              'container_class' => 'main-nav'
            )
          ); ?>
        </div>
        <!-- Bouton hamburger -->
        <button type="button" class="hamburger" onclick="toggleMenu()">&#9776;</button>
      </div>
    </header>
  </div>

  <script>
    function toggleMenu() {
      var menu = document.querySelector('.menu');
      menu.classList.toggle('active');
      document.body.classList.toggle('no-scroll');
    }
  </script>
</body>
</html>

<style>

header {
  background-color: #475569; 
}

.main-nav a {
  position: relative; /* Ajoutez cette ligne */
  text-decoration: none;
  color: #FFFFFF;
  font-size: 18px;
  padding: 5px 0; /* Ajout pour assurer de l'espace pour le soulignement */
  overflow: hidden; /* Empêche le pseudo-élément de déborder */
  display: inline-block; /* Assurez-vous que le lien a un format bloc pour contenir le pseudo-élément */
}

.main-nav a::after {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 2px;
  width: 0%;
  background-color: #FFFFFF;
  transition: width 0.5s ease-in-out;
  transform: translateX(0%);
}

.main-nav a:hover::after {
  width: 100%;
}

.header-top {
  display: flex;
  justify-content: space-between; 
  align-items: center;
  padding: 10px;
}

.logo {
  width: 100px; 
  height: 100px; 
  border-radius: 50%; 
  overflow: hidden; 
  display: flex;
  justify-content: center; 
  align-items: center; 
}

.logo img {
  max-width: 100%; 
  max-height: 100%; 
  object-fit: cover; 
  object-position: center; 
}

.menu {
  list-style: none;
  margin: 0; 
}

.main-nav {
  display: flex;
  justify-content: flex-end; 
}

.main-nav ul {
  list-style: none;
  padding: 0; 
  margin: 0; 
  display: flex;
  gap: 20px; 
  text-align: center; 
  margin-right: 2vh;
}



/* Styles pour le bouton hamburger */
.hamburger {
  display: none; 
  font-size: 24px; 
  background: none;
  border: none;
  color: #FFFFFF;
  z-index: 1000; 
}

/* Styles pour le menu déroulant */
.main-nav.active {
  display: block;
}

/* Quand le menu est actif, il est affiché en tant que bloc vertical */
.menu.active {
    display: flex;
    position: fixed; 
    top: 0;
    left: 0; 
    width: 100%; 
    height: 100vh; 
    flex-direction: column;
    z-index: 1000; 
    background: #475569; 
    justify-content: center; 
    width: 100%;
    height: 100%;
}

/* Media query pour les appareils mobiles */
@media (max-width: 980px) {
  .hamburger {
    display: block; 
  }

  .menu {
        display: none; 
        flex-direction: column; 
        width: 100%; 
    }

   .main-nav ul {
      list-style: none;
      display: flex;
      gap: 30px;
      margin: 0;
}

.main-nav a {
  text-decoration: none;
  color: #FFFFFF;
  font-size: 24px;
}

.main-nav ul li a:hover {
  /* color: #C2A850;  */
}
}

.no-scroll {
    overflow: hidden;
    height: 100%; 
}

@keyframes SlideInFromLeft {
  from {
    transform: translateX(-100%);
  }
  to {
    transform: translateX(0);
  }
}

@keyframes slideInFromRight {
  0% {
    opacity: 0;
    transform: translateX(100%); 
  }
  100% {
    opacity: 1;
    transform: translateX(0); 
  }
}

.main-nav li {
  animation: slideInFromRight 0.5s ease-in-out;
}


.logo {
  animation: SlideInFromLeft 0.5s ease-out;
}


</style>