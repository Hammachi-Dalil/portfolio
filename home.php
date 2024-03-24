<?php

/* Template Name: Home Page */

get_header();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- Inclure ici vos balises meta, liens vers les styles CSS, etc. -->

</head>
<body>
<?php
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_content();
    endwhile;
endif;
 ?>

    <!-- Contenu principal -->

    <div class="wrapper">
        <div class="container">
            <input type="radio" name="slide" id="c1" checked>
            <label for="c1" class="card">
                <div class="row">
                    <div class="icon">1</div>
                    <div class="description">
                        <h4>Développeur</h4>
                        <p>Un développeur web sérieux et assidu</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c2" >
            <label for="c2" class="card">
                <div class="row">
                    <div class="icon">2</div>
                    <div class="description">
                        <h4>Designer</h4>
                        <p>Créatif et inventif
                        </p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c3" >
            <label for="c3" class="card">
                <div class="row">
                    <div class="icon">3</div>
                    <div class="description">
                        <h4>Communiquant</h4>
                        <p>Pour assurer une viabilité sans faille</p>
                    </div>
                </div>
            </label>
        </div>
    </div>

    </body>

    <!-- Inclure ici vos scripts JavaScript, liens vers les fichiers JS, etc. -->



</body>
</html>

<style>
    .wrapper {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 5vh;
    margin-bottom: 5vh;
}

.container {
    height: 400px;
    display: flex;
    flex-wrap: nowrap;
    justify-content: start;
}

.card {
    width: 80px;
    border-radius: .75rem;
    background-size: cover;
    cursor: pointer;
    overflow: hidden;
    border-radius: 2rem;
    margin: 0 10px;
    display: flex;
    align-items: flex-end;
    transition: .6s cubic-bezier(.28,-0.03,0,.99);
    box-shadow: 0px 10px 30px -5px rgba(0,0,0,0.8);
}

.card:hover{
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5); 
        transform: scale(1.05);
    }

.card > .row {
    color: white;
    display: flex;
    flex-wrap: nowrap;
}

.card > .row > .icon {
    background: #223;
    color: white;
    border-radius: 50%;
    width: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 15px;
}

.card > .row > .description {
    display: flex;
    justify-content: center;
    flex-direction: column;
    overflow: hidden;
    height: 80px;
    width: 520px;
    opacity: 0;
    transform: translateY(30px);
    transition-delay: .3s;
    transition: all .3s ease;
}

.description p {
    color: #FFFFFF;
    padding-top: 5px;
    margin-top: -15px;
}

.description h4 {
    text-transform: uppercase;
}

input {
    display: none;
}

input:checked + label {
    width: 600px;
}

input:checked + label .description {
    opacity: 1 !important;
    transform: translateY(0) !important;
}

.card[for="c1"] {
    background-image: url('<?php echo get_template_directory_uri(); ?>/img/dev.png');
}
.card[for="c2"] {
    background-image: url('<?php echo get_template_directory_uri(); ?>/img/design.png');
}
.card[for="c3"] {
    background-image: url('<?php echo get_template_directory_uri(); ?>/img/communiquant.png');
}

/* Styles existants... */

/* Responsive adjustments */
@media (max-width: 768px) {
    .wrapper {
        height: auto; /* Adjust height for mobile devices */
        padding: 20px 0; /* Add some padding on the top and bottom */
    }

    .container {
        flex-direction: column; /* Stack cards vertically */
        height: auto; /* Adjust container height for a vertical layout */
        align-items: center; /* Center cards horizontally */
    }

    .card {
        width: calc(100% - 20px); /* Make card width responsive with some padding */
        margin: 10px; /* Reduce margin between cards */
        flex-direction: column; /* Stack icon and description vertically */
        align-items: center; /* Align items in the center */
    }

    .card > .row {
        flex-direction: column; /* Stack icon and description vertically in the row */
        width: 100%; /* Full width to match the card */
    }

    .card > .row > .icon {
        margin: 10px 10; /* Adjust icon margin for vertical layout */
        width: 3vh;
        height: 3vh;
    }

    .card > .row > .description {
        width: 100%; /* Full width to match the card */
        height: auto; /* Adjust height automatically */
        padding: 0 15px; /* Add some padding for the text */
    }

    input:checked + label {
        width: calc(100% - 20px); /* Adjust width on checked */
    }

    .description h4, .description p {
        text-align: center; /* Center align the text */
    }
}

.btn:visited {
    color: #000000;
}

body {
    font-family: 'Roboto', sans-serif;
}

</style>

<?php
get_footer();
?>

