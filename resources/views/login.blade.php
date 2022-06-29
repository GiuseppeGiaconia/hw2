<html>
<link rel="stylesheet" href='{{ url("css/login.css") }}'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <body>
        <div class='sfondo'>
        <main>
        
            <form class="row" name="login" method='post'>
             
                
                <div class="colm-form">
                    <div class="form-container">
                    <p><h2>Music Store</h2> </p>
                    @if($error == 'empty_fields')
                    <section class='error'>Riempire tutti i campi*</section>
                     @elseif($error == 'wrong')
                     <section class='error'>Credenziali non valide</section>
                     @endif
                    @csrf
                    <div class="username">
                        <label for="username"></label>
                        <input type="text" name="username" placeholder="Username" value='{{ old("username") }}'>
                        </div>
                        <div class="password">
                            <label for="Password"></label>
                        <input type="password" name="password" placeholder="Password">
                        </div>
                    
                        <input type="submit" class="btn-login" value="Login"/>
                        <p class="scritta">Se non hai un account, <a href='{{ url("register") }}'>registrati</a> </p>

                        
            </form>
        </main>
        </div >
    </body>
    </html>