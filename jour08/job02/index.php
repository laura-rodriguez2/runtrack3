<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <title>materialize</title>

</head>

<body>
    <header>

        <nav>
            <div class="nav-wrapper teal lighten-2">
                <a href="#" class="brand-logo">Materialize</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Job01</a></li>
                </ul>
            </div>

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


            <button class="btn waves-effect waves-light" type="submit" name="action">Valider</button>

            </form>
            </div>

        </section>
    </main>

    <footer>

            <nav class="navbar-fixed">
                <div class="nav-wrapper">
                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php">Inscription</a></li>
                        <li><a href="index.php">Connexion</a></li>
                        <li><a href="index.php">Rechercher</a></li>
                    </ul>
                </div>
            </nav>
        </footer>
    </footer>
</body>

</html>