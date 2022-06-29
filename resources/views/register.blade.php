

<html>
    <link rel="stylesheet" href='{{ url("css/login.css") }}'/>
    <script src="{{ url('js/register.js') }}" defer="true"></script>
    <script type="text/javascript"> 
    const REGISTER_ROUTE= '{{ url("register") }}/';
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <body>
    <div class='sfondo'>
        <main>
            <div class="row">
                
                <div class="colm-form">
                       

                    <form class="form-container" method='post'>
                       
                        <p class="titolo"><h2>Music Store</h2> </p>
                        @if($error == 'empty_fields')
                        <section class='error'>Riempire tutti i campi*</section>
                        @elseif($error == 'bad_passwords')
                        <section class='error'>Le password non corrispondono</section>
                        @elseif($error == 'short_passwords')
                        <section class='error'>La passoword contiene meno di 8 caratteri</section>
                        @elseif($error == 'email')
                        <section class='error'>Email già utilizzata</section>
                        @elseif($error == 'existing')
                        <section class='error'>Nome utente già esistente</section>
                        @endif
                        @csrf
                        <div class="nome">
                        <input type="text" id="nome" name="nome" placeholder="Nome*" onkeyup="validazione_nome()" value='{{ old("nome") }}'> 
                        <span id="errore_nome"></span>
                        </div> 
                        <div class="cognome">
                        <input type="text" id="cognome" name="cognome"  placeholder="Cognome*" onkeyup="validazione_cognome()" value='{{ old("cognome") }}'>  
                        <span id="errore_cognome"></span>
                        </div> 
                        <div class="username">
                        <input type="text" id="username" name="username" placeholder="Username*" onkeyup="validazione_username()" value='{{ old("username") }}'> 
                        <span id="errore_username"></span>
                        </div> 
                        <div class="email">
                        <input type="email" id="email" name="email" placeholder="Email*" onkeyup="validazione_email()" value='{{ old("email") }}'>  
                        <span id="errore_email"></span>
                        </div> 
                        <div class="password">
                        <input type="password" id="password" name="password" placeholder="Password*" onkeyup="validazione_password()" value='{{ old("password") }}'>  
                        <span id="errore_password"></span>
                        </div>  
                        <div class="confirm_password">
                        <input type="password" name="confirm_password" placeholder="Conferma Password*" value='{{ old("confirm_password") }}'>  
                        </div>  

                        
                      
                        <input type="submit" class="btn-login" value="Sign Up"/>
                        <p class="scritta">Se hai un account, <a href='{{ url("login") }}'>Login</a> </p>
                    </form>    
                </div>
            </div>
        </main>
    </div>
    </body>
    </html>