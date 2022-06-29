<html>



    <head>
    <link rel="stylesheet" href='<?php echo e(url("css/page.css")); ?>'/>
    <script src='<?php echo e(url("js/playlist.js")); ?>' defer="true"></script>
    <script type='text/javascript'>const LINK = '<?php echo e(url("stampa")); ?>'; </script> 
    <script type='text/javascript'>const LINK2 = '<?php echo e(url("elimina")); ?>/'; </script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>
          Music Store
        </title>
    </head>
    <body>
    
    
    
    <nav>
    <a href='<?php echo e(url("home")); ?>' class='home'>Home</a>
    <a href='<?php echo e(url("nuove")); ?>' class="nuove">Nuovi Album</a>
    <a href='<?php echo e(url("cerca")); ?>' class ='cerca'>Cerca tu</a>
    <a href='<?php echo e(url("logout")); ?>' class='log'>Logout</a>
    <a class='menu'>--</a>
  </nav>
        <img class="copertina" src="img/playlist.png" />
        

        <p class="testo">Ecco la tua playlist ♫ </p>

        <section id="notizie">
        </section>
    

    
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\hw2\resources\views/playlist.blade.php ENDPATH**/ ?>