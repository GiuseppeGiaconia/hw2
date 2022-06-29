<html>
    <head>
    <link rel="stylesheet" href='{{ url("css/page.css") }}'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='{{ url("js/nuove.js") }}' defer="true"></script>
    <script type="text/javascript"> 
    const URL_salva= '{{ url("nuove_salva") }}/';
    </script>
    
        <title>
          Music Store
        </title>
    </head>
    <body>
    
    
    
    <nav>
    <a href='{{ url("home") }}'class='home'>Home</a>
    <a href='{{ url("cerca") }}'class ='cerca'>Cerca tu</a>
    <a href='{{ url("playlist") }}'class ='play'>Playlist</a>
    <a href='{{ url("logout") }}'class='log'>Logout</a>
    <a class='menu'>--</a>
  </nav>
        <img class="copertina" src="img/album.png" />
        
        <p class="testo">Ultimi Usciti ♫</p>

    <section id="album-view">
   
    </section>
    
    </body>
</html>
