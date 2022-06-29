
<html>
    <head>
    <link rel="stylesheet" href='<?php echo e(url("css/page.css")); ?>'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='<?php echo e(url("js/cerca.js")); ?>' defer="true"></script>
    <script type="text/javascript"> 
    const URL_salva= '<?php echo e(url("cerca_salva")); ?>/';
    </script>
    
        <title>
          Music Store
        </title>
    </head>
    <body>
    
    
    
    <nav>
    <a href='<?php echo e(url("home")); ?>'class='home'>Home</a>
    <a href='<?php echo e(url("nuove")); ?>' class="nuove">Nuovi Album</a>
    <a href='<?php echo e(url("playlist")); ?>' class='play'>Playlist</a>
    <a href='<?php echo e(url("logout")); ?>' class='log'>Logout</a>
    <a class='menu'>--</a>
  </nav>
        <img class="copertina" src="img/cerca tu.png" />
        


   <form id="due">
      <input type='text' id='album' placeholder='Nome Album'>
      <input type='submit' id='submit' value='Cerca'>
    </form>

    <section id="album-view">
   
    </section>
    
    </body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/cerca.blade.php ENDPATH**/ ?>