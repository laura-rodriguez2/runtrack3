<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <title>materialize</title>
</head>

<body>
    <header>

        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Materialize</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Job01</a></li>
                </ul>
            </div>

            <script type="text/javascript" src="js/materialize.min.js"></script>

        </nav>
    </header>

    <main>
        <section>
            <p>Civilité</p>
            <label>
                <input class="with-gap" name="group3" type="radio" checked />
                <span>M.</span>
            </label>
            <label>
                <input class="with-gap" name="group3" type="radio" checked />
                <span>Mme.</span>
            </label>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Prénom</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Nom</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="adresse" type="text" class="validate">
                            <label for="adress">Adresse</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Mot de passe</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Validation du mot de passe</label>
                        </div>
                    </div>
            </div>

            <label>
                <input type="checkbox" />
                <span>Informatique</span>
            </label>
            <label>
                <input type="checkbox" />
                <span>Voyages</span>
            </label>
            <label>
                <input type="checkbox" />
                <span>Sport</span>
            </label>
            <label>
                <input type="checkbox" />
                <span>Lecture</span>
            </label>

            
  <button class="btn waves-effect waves-light" type="submit" name="action">Valider
  </button>
        
            </form>
            </div>

        </section>
    </main>

    <footer>

        <footer>
            
    <nav class="navbar-fixed">
      <div class="nav-wrapper">
        <ul class="right hide-on-med-and-down">
          <li><a href="sass.html">Accueil</a></li>
          <li><a href="sass.html">Inscription</a></li>
          <li><a href="badges.html">Connexion</a></li>
          <li><a href="sass.html">Rechercher</a></li>
        </ul>
      </div>
    </nav>
        </footer>
    </footer>
</body>

</html>