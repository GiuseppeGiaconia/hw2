<html>
<link rel="stylesheet" href='{{ url("css/login.css") }}'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <body>
        <div class='sfondo'>
        <main>
        <form class="row" name="login" method='post'>
             
                
             <div class="colm-form">
                 <div class="form-container">
                 <p><h2 class='d1'>Music Store</h2> </p>
                 <p class='descr'>Accedi o Registrati subito a Music Store, che ti permetterà di creare la playlist che si adatta di più a te e restare sempre aggiornato sulle utlime news musicali</p>
                     <p class="scritta">Se già hai un account, <a href='{{ url("login") }}'>accedi</a> </p>
                     <p class="scritta">Se non hai un account, <a href='{{ url("register") }}'>registrati</a> </p>

                     
         </form>
        
        </main>
        </div >
    </body>
    </html>