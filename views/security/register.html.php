
    <?php

echo $test;

?>

<!-- -----------------------------------------------------------CONTAINER -->
<div class="container">
<div class="row">
   <div class="col-md-5 my-2 offset-3">

       <div class="card alert-secondary">

           <form method="post" action="/login">
               <div class="card-body text-center">

                   <img src="user.png" width="50%" class="logo" />
                   <h3 class="card-title">Se connexion</h3>
                   <p class="slogan">pour acceder aux fonctionnalités</p>
                       
                            <div class="form-group form-inline">
                                <label  class="mr-5">Nom</label>
                                <input type="text"  name="username" class="form-control w-75"  placeholder="Entrer votre email">
                           </div>
                           <div class="form-group form-inline">
                                <label  class="mr-4">Prenom</label>
                                <input type="text"  name="username" class="form-control w-75"  placeholder="Entrer votre email">
                           </div>
                            <div class="form-group form-inline">
                                <label for="username" class="mr-5">Email</label>
                                <input type="text" id="username" name="username" class="form-control w-75"  placeholder="Entrer votre email">
                            </div>

                            <div class="form-group form-inline">
                                <label for="username" class="mr-5">Email</label>
                                <textarea class="form-control w-75" name="" id="" rows="3"></textarea>
                            </div>

                            <div class="form-group form-inline">
                                <label for="password" class="mr-3">Password</label>
                                <input type="password" id="password" name="password" class="form-control w-75" placeholder="entrer votre mot de passe">
                            </div>

                            <div class="card-foter text-right">
                                <button type="submit" class="btn btn-primary btn-sm" style="width: 140px;">Connexion</button>
                            </div>

               </div>
           </form>

       </div>

   </div>
</div>
</div>
