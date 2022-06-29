<html>



    <head>
    <link rel="stylesheet" href='{{ url("css/page.css") }}'/>
    <script src='{{ url("js/playlist.js") }}' defer="true"></script>
    <script type='text/javascript'>const LINK = '{{ url("stampa") }}'; </script> 
    <script type='text/javascript'>const LINK2 = '{{ url("elimina") }}/'; </script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>
          Music Store
        </title>
    </head>
    <body>
    
    
    
    <nav>
    <a href='{{ url("home") }}' class='home'>Home</a>
    <a href='{{ url("nuove") }}' class="nuove">Nuovi Album</a>
    <a href='{{ url("cerca") }}' class ='cerca'>Cerca tu</a>
    <a href='{{ url("logout") }}' class='log'>Logout</a>
    <a class='menu'>--</a>
  </nav>
        <img class="copertina" src="img/playlist.png" />
        

        <p class="testo">Ecco la tua playlist ♫ </p>

        <section id="notizie">
        </section>
    

    
    </body>
</html>
