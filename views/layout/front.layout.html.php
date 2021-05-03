<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Template</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ml-1 mr-1">
      <a class="navbar-brand" href="#">FrameWork MVC By Wane </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarColor01"
        aria-controls="navbarColor01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mes Réservations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Creer un Compte</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="text"
            placeholder="Rechercher un article..."
          />
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">
            Rechercher
          </button>
        </form>
        <ul class="navbar-nav mr-o ml-4">
            
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                href="#"
                role="button"
                aria-haspopup="true"
                aria-expanded="false"
                >Parametres</a
              >
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Mon Profil</a>
                <a class="dropdown-item" href="#">Se Connecter</a>
                <a class="dropdown-item" href="#">Se Deconnecter</a>
              </div>
            </li>
          </ul>
      </div>
    </nav>
    <!-- -----------------------------------------------------------NAV BAR -->
    <div class="">
      <div class="jumbotron text-center p-3">
        <h1 class="display-3">Réservez un Bien</h1>
        <p class="lead">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit
          culpa eaque ad blanditiis voluptatem. Iste dicta atque quas temporibus
          deserunt!
        </p>
        <hr class="my-4" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora,
          sapiente?
        </p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button"
            >Créer un compte</a
          >
        </p>
      </div>
    </div>
          <?php echo $content_for_layout; ?>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>