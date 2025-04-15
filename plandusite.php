<?php
require_once("./include/functions.inc.php");
$pageTitle = "Plan du Site";
$pageDescription = "Page plan du site web Ma Météo - projet L2-Informatique S2 - Développement Web";

include("./include/header.inc.php");
?>

<main>
    <h1>Plan du site</h1>
    <section class="plan-du-site">
        <h2>Sommaire</h2>
        <ul>
            <?php
            $files = getPHPFiles('.');
            sort($files); // Trier les fichiers par ordre alphabétique
            
            foreach ($files as $file) {
                $title = getPageTitle($file);
                echo '<li><a href="' . $file . '">' . $title . '</a></li>';
            }
            ?>
        </ul>
    </section>
</main>

<?php
include("./include/footer.inc.php");
?>