
<html>
    <head>
    <link rel="stylesheet" href='{{ url("css/page.css") }}'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='{{ url("js/cerca.js") }}' defer="true"></script>
    <script type="text/javascript"> 
    const URL_salva= '{{ url("cerca_salva") }}/';
    </script>
    
        <title>
          Music Store
        </title>
    </head>
    <body>
    
    
    
    <nav>
    <a href='{{ url("home") }}'class='home'>Home</a>
    <a href='{{ url("nuove") }}' class="nuove">Nuovi Album</a>
    <a href='{{ url("playlist") }}' class='play'>Playlist</a>
    <a href='{{ url("logout") }}' class='log'>Logout</a>
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
</html>