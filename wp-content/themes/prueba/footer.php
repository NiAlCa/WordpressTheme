<footer class="footer contenedor">
    <?php wp_footer()?>
    <hr>
    <div class="contenido-footer">

    <?php
    $args = array(
        'theme_location' => 'menu-principal',
        'container' => 'nav',
        'container_class' => 'menu-principal'
    );

    wp_nav_menu($args);?>

    <p class='copyright'> Todos los derechos reservados.  <?php echo get_bloginfo('name'). " " . date("Y");?> </p>
    </div>
</footer>

</body>
</html>