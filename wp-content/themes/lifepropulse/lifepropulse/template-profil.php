<?php
/*
Template Name: profil
*/
$user = wp_get_current_user();
if($user->ID == 0){
    header('location:connexion');
}

get_header();
?>

<section>
    <h1>Mes Informations</h1>

    <p>Bonjour <?= $user->display_name; ?> </p>
    <p>Votre email : <?= $user->user_email; ?> </p>
    <p>Premiére connexion : <?= $user->user_registered; ?> </p>

</section>



<?php
get_footer();