<html>



    <head>
    <link rel="stylesheet" href='<?php echo e(url("css/page.css")); ?>'/>
    <script src='<?php echo e(url("js/preferiti.js")); ?>' defer="true"></script>
    <script type='text/javascript'>const LINK = '<?php echo e(url("stampa")); ?>'; </script> 
    <script type='text/javascript'>const LINK2 = '<?php echo e(url("elimina")); ?>/'; </script> 
    
        <title>
          Music Store
        </title>
    </head>
    <body>
    
    
    
    <nav>
    <a href='<?php echo e(url("home")); ?>'>Home</a>
    <a href='<?php echo e(url("nuove")); ?>' class="nuove">Nuovi Album</a>
    <a href='<?php echo e(url("cerca")); ?>'>Cerca tu</a>
    <a href='<?php echo e(url("preferiti")); ?>'>Preferiti</a>
    <a href='<?php echo e(url("logout")); ?>'>Logout</a>
  </nav>
        <img class="copertina" src="img/music.png" />
        

        <p class="testo">Ecco i tuoi preferiti ♫ </p>

        <section id="notizie">
        </section>
    

    
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\hw2\resources\views/preferiti.blade.php ENDPATH**/ ?>