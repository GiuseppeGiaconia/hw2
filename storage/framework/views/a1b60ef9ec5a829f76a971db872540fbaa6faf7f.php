<html>



    <head>
        <script>
            const BASE_URL ="<?php echo e(url('/')); ?>";
        </script>
    <link rel="stylesheet" href='<?php echo e(url("css/page.css")); ?>'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='<?php echo e(url("js/home.js")); ?>' defer="true"></script> 
    <script type="text/javascript"> 
    const URL= '<?php echo e(url("home_api")); ?>/';
    </script>
    
        <title>
          Music Store
        </title>
    </head>
    <body>
    
    
    
    <nav>
    <a href='<?php echo e(url("nuove")); ?>' class="nuove">Nuovi Album</a>
    <a href='<?php echo e(url("cerca")); ?>' class= 'cerca'>Cerca tu</a>
    <a href='<?php echo e(url("playlist")); ?>' class= 'play'>Playlist</a>
    <a href='<?php echo e(url("logout")); ?>' class= 'log'>Logout</a>
    <a class='menu'>--</a>
  </nav>
        <img class="copertina" src="img/Home.png" />
        
        <p class="testo">Benvenuto/a! <?php echo e($username); ?> ♥</p>

        <p class="testo"> Ecco le ultime news sulla musica ♫ </p>

        <section id="notizie">
        </section>

    
    </body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/home.blade.php ENDPATH**/ ?>