<?php

/* Template Name: Tout les Projets */ 

function add_meta_description()
{
    ?>
    <meta name="description" content="Découvrez Glocal, le site qui vous permet d'agir localement pour des conséquences globale. Si vous souhaitez améliorer notre monde concernant certains domaine mais vous ne savez pas par où commencer, vous êtes au bon endroit !">
<?php
}

add_action('wp_head', 'add_meta_description');


get_header();
?>
<body>

<?php
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_content();
    endwhile;
endif;
?>

<main>
<?php

$args = array(
    'post_type' => 'projet',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
);
$projet_query = new WP_Query($args);

   if ($projet_query->have_posts()) :
       while ($projet_query->have_posts()) : $projet_query->the_post();

?>

<div class="all-projet">
    <div class="projet">
        <div class="projetimage">
            <?php the_post_thumbnail('full'); ?>
        </div>
        <div class="contenu-projet">
            <h2 class="titre-projet"><?php the_title(); ?></h2>
            <a href="<?php the_permalink(); ?>" class="projetlink">Voir le projet</a>
        </div>
        <div class="caracteristiques">
            <div class="technologie">
                <h3 class="title_techno"> Technologie utilisées : </h3>
                <?php the_field('technologie'); ?>
            </div>
            <div class="participant">
                <h3 class="title_participant"> Participant : </h3>
                <?php the_field('participant'); ?>
            </div>
        </div>
    </div>
</div>


<?php
endwhile;
endif;
wp_reset_postdata();
?>

</main>

<?php get_footer(); ?>



<style>

    .all-projet {
        display: flex;
        justify-content: center; /* Répartit l'espace disponible entre les éléments et les marges latérales */
    }
    .titre-projet {
        color: #FFFFFF;
        margin-left: 2vh;
    }

    .projet {
    margin: 2vh;
    background-color: #475569;
    border-radius: 2vh;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    width: 70%;
    min-height: 80%; /* Changé de 'height' à 'min-height' */
    overflow: hidden;
}

.caracteristiques {
    max-height: 0; /* Commence avec une max-height de 0 pour être caché */
    opacity: 0; /* Commence caché */
    transition: max-height 0.8s ease, opacity 0.8s ease; /* Transition douce pour max-height et opacity */
    overflow: hidden; /* Empêche le contenu de déborder */
    color: #FFFFFF;
}

.title_techno, .title_participant {
    margin-right: 2vh;
}

.technologie, .participant {
    margin-left: 1vh;
    margin-right: 1vh;
    margin-bottom: 1vh;
    color: #FFFFFF;
    display: flex;
    align-items: baseline;
}

.projet:hover .caracteristiques {
    max-height: 500px; /* Augmente la max-height pour afficher le contenu - ajustez selon le contenu */
    opacity: 1; /* Rend le contenu entièrement visible */
}

    .projet:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5); 
    transform: scale(1.05);
    
    /* Ajoutez des propriétés pour ajuster la hauteur si nécessaire */
}

    .projetimage {
        display: flex; 
        justify-content: center;
        overflow: hidden;
    }

    .projetimage img {
        border-radius: 2vh 2vh 0 0;
        object-fit: cover;
        width: 100%;

    }


    .projetlink:hover {
        background-color: #E76F51;
    }

    .projetlink {
        font-weight: bold;
        text-decoration: none;
        color: #000000;
        margin: 2vh;
        background-color: #F4A261;
        border-radius: 2vh;
        border: none;
        padding: 1vh;
        text-align: center;
        align-self: flex-start;

    }

    .projetlink:visited {
        color: #000000;
    }

    .contenu-projet {
        display: flex;
        justify-content: space-between;
    
    }

    main {
        display: grid;
        grid-template-columns: repeat(2, 1fr); 
        align-items: start;
        
    }

    @media screen and (max-width: 768px) {
        main {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media screen and (max-width: 480px) {
        main {
            grid-template-columns: 1fr;
        }
    }

    @keyframes slideInFromRight {
  0% {
    opacity: 0;
    transform: translateY(-10%); 
  }
  100% {
    opacity: 1;
    transform: translateY(0); 
  }
}

.all-projet {
  animation: 0.7s ease-out 0s 1 slideInFromRight;
}
</style>