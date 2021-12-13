<footer>
    <div class="conteneur bg-orange">
        <p>
        <?php 
        setlocale(LC_ALL, 'fr_FR');
        echo strftime("%A %e %B %Y");
        echo ' - ';
        date_default_timezone_set("Europe/Paris");
        echo date('H:i:s');
        ?>


        </p>
    </div>
</footer>

