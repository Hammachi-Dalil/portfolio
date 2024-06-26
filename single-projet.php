<?php
get_header(); // Inclut l'en-tête de votre thème
?>

<div id="primary" class="content-area"> 
    <main id="main" class="site-main"> 
    <?php while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    ?>

    <div class="titres_projet">
        <?php the_field('titre_1'); ?>
    </div>

  <div class="description-projet">
    <?php ;
    the_field('description');
     ?>
  </div>

  <div class="titres_projet">
        <?php the_field('titre_2'); ?>
  </div>
  

      <div class="description-projet">
      <?php ;
      the_field('description_2');
      ?>
    </div>
</div>

      <div class="titres_projet">  
        <?php the_field('titre_3'); ?>
      </div>

      <div class="description-projet">
        <?php ;
        the_field('description_3');
        ?> 

        <div class="iframe-container">
        <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" 
    width="800" 
    height="450" 
    src= <?php the_field('url_figma'); ?> allowfullscreen>
  </iframe>
      </div>
      </div> 

      <div class="titres_projet">
        <?php the_field('titre_4'); ?>
      </div>

      <div class="description-projet">
        <?php ;
        the_field('description_4');
        ?>
      
      <div class="div_button">
        <button>
          <a href="<?php the_field('url_projet'); ?>" class="btn2"><span class="spn2">Voir le projet</span></a>
        </button>
      </div>


    </main><!-- #main -->
</div><!-- #primary -->

<?php 
get_footer(); // Inclut le pied de page de votre thème
?>


<style>

  .iframe-container {
    display: flex;
    margin: 3% 10%;
    justify-content: center; /* Centre horizontalement */
    align-items: center; /* Centre verticalement, si vous avez une hauteur définie pour le conteneur */
  }

  .section1 {
    display: flex;
    }
.section1 .image img {
  width: 100%; /* Ou une valeur fixe, par exemple 500px */
  height: auto; /* Maintient le ratio aspect de l'image */
}

.image {
  margin: 0 2%;
}
.section1 .description-projet {
  margin-left: 15%;
  color: #FFFFFF;
  font-size: 1.2em;
}

  .all-projet {
    display: flex;
    justify-content: center; /* Répartit l'espace disponible entre les éléments et les marges latérales */

}
  .titres_projet {
    margin: 2vh 15%;
    color: #FFFFFF;
    font-size: 2.5em;
    font-weight: bold;
  }
  .description-projet {
    margin: 0 15%;
    margin-bottom: 14vh;
    color: #FFFFFF;
    font-size: 1.2em;
    text-align: justify;
  }



    .iframe-container {
    display: flex;
    justify-content: center; /* Centre horizontalement */
    align-items: center; /* Centre verticalement, si vous avez une hauteur définie pour le conteneur */
}


.technologie, .participant{
    margin: 0px 100px;
    color: #FFFFFF;
    display: flex;
    align-items: baseline;
}

.title_techno, .title_participant {
    margin-right: 10px;
    margin-top: 0.5vh;
    margin-bottom: 0.5vh;
}

    .titre-projet {
        color: #FFFFFF;
        margin-left: 2vh;
    }

    .entry-content {
        margin-left: 2vh;
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
  margin-top: 4vh;
}

    @media (max-width: 768px) {
  .ma-banniere {
    height: auto; /* Ajuste la hauteur */
    width: 100%; /* Permet à l'image de prendre toute la largeur de l'écran */
  }

  .titres_projet {
    font-size: 1.8em;  }

  .section1 {
    flex-direction: column; /* empile les éléments verticalement sur les petits écrans */
  }

  .section1 .description-projet {
    margin: 0 15%; /* Ajoute un espace en haut et en bas du texte */
  }

  .section1 .image {
    margin: 2vh 2vh; /* Ajoute un espace en haut et en bas de l'image */
  }

  .iframe-container {
    display: flex;
    justify-content: center; /* Centre horizontalement */
    align-items: center; /* Centre verticalement, si vous avez une hauteur définie pour le conteneur */
    margin: 20px 20px;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(-20px); }
  to { opacity: 1; transform: translateY(0); }
}

.animated-title {
  opacity: 0; /* Départ invisible pour l'animation */
  animation: fadeIn 1s ease-out forwards; /* Utilisation de l'animation fadeIn */
  animation-delay: 0.5s; /* Délai avant le début de l'animation */
}

	body {
    font-family: 'Roboto', sans-serif;
}

    }

</style>

