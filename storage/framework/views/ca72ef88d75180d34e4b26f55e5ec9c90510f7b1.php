<html>
<link rel="stylesheet" href='<?php echo e(url("css/login.css")); ?>'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <body>
        <div class='sfondo'>
        <main>
        
            <form class="row" name="login" method='post'>
             
                
                <div class="colm-form">
                    <div class="form-container">
                    <p><h2>Music Store</h2> </p>
                    <?php if($error == 'empty_fields'): ?>
                    <section class='error'>Riempire tutti i campi*</section>
                     <?php elseif($error == 'wrong'): ?>
                     <section class='error'>Credenziali non valide</section>
                     <?php endif; ?>
                    <?php echo csrf_field(); ?>
                    <div class="username">
                        <label for="username"></label>
                        <input type="text" name="username" placeholder="Username" value='<?php echo e(old("username")); ?>'>
                        </div>
                        <div class="password">
                            <label for="Password"></label>
                        <input type="password" name="password" placeholder="Password">
                        </div>
                    
                        <input type="submit" class="btn-login" value="Login"/>
                        <p class="scritta">Se non hai un account, <a href='<?php echo e(url("register")); ?>'>registrati</a> </p>

                        
            </form>
        </main>
        </div >
    </body>
    </html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/login.blade.php ENDPATH**/ ?>