<?php

function gymfitnnes_ubicacion( $atts ){
    $ubicacion = get_field( 'ubicacion' );
    
    ?>

    <div class="ubicacion">
        <input type="hidden" id="latitud" value="<?php echo $ubicacion['lat']; ?>">
        <input type="hidden" id="lng" value="<?php echo $ubicacion['lng']; ?>">
        <input type="hidden" id="address" value="<?php echo $ubicacion['address']; ?>">

        <div id="map"></div>
    </div>  

    <?php
} 

add_shortcode('mapa', 'gymfitnnes_ubicacion'); 