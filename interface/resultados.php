<?php

    include "templates/tpl_common.php";

    draw_header();
    draw_footer();
?>

<div id="resultados">            
    <?php

    $pesquisa = $_POST['pesquisa'];

    echo "<p> A mostrar resultados para: " . $pesquisa . "<p>"

    ?>
</div>