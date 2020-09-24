<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/styles.css">
        <title>Hi</title>
    </head>
    <body>
        <script src="../js/konami.js"></script>
        <div class ="l1">
            <div class="formbox">
                <div class="bbox">
                    <div id ="btn"></div>
                    <button type="button" class="tbtn" onclick="login()">Connexion</button>
                    <button type="button" class="tbtn" onclick="register()">Inscription</button>
                </div>
                <form id="login" class="inputg" method="get" action="php/admin.php">
                    <input type="text" name="userlog" class="inputf" placeholder="Nom d'utilisateur" required>
                    <input type="password" name="pswlog" class="inputf" placeholder="Mot de passe" required>
                    <button type="submit" class="sbt">Connexion</button>
                </form>
                <!--Inscription-->
                <form id="register" class="inputg" method="get" action="php/lg.php">
                    <input type="text" name="semail" class="inputf" placeholder="Saissisez votre adresse email" requred>
                    <input type="text" name="susername" class="inputf" placeholder="Saissisez votre prénom" required>
                    <input type="password" name="psswd" class="inputf" placeholder="Mot de passe" required>
                    <input type="password" name="spsswd" class="inputf" placeholder="Repetez votre mot de passe" required>>
                    <button type="submit" name="sgbtn" class="sbt">Inscrit toi</button>
                </form>
            </div>
        </div>
        <script>

            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn")

            function register(){
                x.style.left="-400px";
                y.style.left="50px";
                z.style.left="130px"; 
            }

            function login(){
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0"; 
            }

        </script>
    </body>
    
</html>