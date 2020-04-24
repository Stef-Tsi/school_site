
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="slidemenu positie">

    <!-- Item 1 -->
    <input type="radio" name="slideItem" id="slide-item-1" class="slide-toggle" checked />
    <label for="slide-item-1" onclick="delayLink('home.php',0)">                                                                        <!--####### EACH NAVIGATION LINK WILL NOW TRIGGER A FUNCTION AND SEND A VALUE OF THE MARGIN OF THE BAR -->
        <p class="icon">🏠</p><span>Home</span>
    </label>

    <!-- Item 2 -->
    <input type="radio" name="slideItem" id="slide-item-2" class="slide-toggle" />
    <label for="slide-item-2" onclick="delayLink('regristratie.php',20)">
        <p class="icon">✍</p><span>Regestreren leerling</span>
    </label>

    <!-- Item 3 -->
    <input type="radio" name="slideItem" id="slide-item-3" class="slide-toggle" />
    <label for="slide-item-3" onclick="delayLink('status.php',40)">
        <p class="icon">💻</p><span>Overzicht leerlingen</span>
    </label>

    <!-- Item 4 -->
    <input type="radio" name="slideItem" id="slide-item-4" class="slide-toggle" />
    <label for="slide-item-4" onclick="delayLink('ziekmelden.php',60)">
        <p class="icon">✅</p><span>Status leerlingen</span>
    </label>

    <!-- Item 5 -->
    <input type="radio" name="slideItem" id="slide-item-5" class="slide-toggle" />
    <label for="slide-item-5" onclick="delayLink('inlog.php',80)">
        <p class="icon">🔑</p><span>Login</span>
    </label>

    <div class="clear"></div>

<!-- Bar -->
<div class="slider">
    <div class="bar"></div>
</div>

</nav>
    <section class="hero">
        <div class="content">
            <form autocomplete='off' method="post" class='form'>
                <div class='control'>
                    <h1>
                        Sign In
                    </h1>

                    </div>
                <form method="post">
                    <div class='control block-cube block-input'>
                        <input name='username' placeholder='Username' type='text2'>
                        <div class='bg-top'>
                            <div class='bg-inner'></div>
                        </div>
                        <div class='bg-right'>
                            <div class='bg-inner'></div>
                        </div>
                        <div class='bg'>
                            <div class='bg-inner'></div>
                        </div>
                    </div>
                    <div class='control block-cube block-input'>
                        <input name='password' placeholder='Password' type='password'>
                        <div class='bg-top'>
                            <div class='bg-inner'></div>
                        </div>
                        <div class='bg-right'>
                            <div class='bg-inner'></div>
                        </div>
                        <div class='bg'>
                            <div class='bg-inner'></div>
                        </div>
                    </div>
                    <button class='btn block-cube block-cube-hover' name="log" type='submit'>
                        <div class='bg-top'>
                            <div class='bg-inner'></div>
                        </div>
                        <div class='bg-right'>
                            <div class='bg-inner'></div>
                        </div>
                        <div class='bg'>
                            <div class='bg-inner'></div>
                        </div>
                        <div class='text2'>
                            Log In
                        </div>
                    </button>
                </form>
            </form>

            <div class="waves"></div>
    </section>














    <script>
        //juiste positie
        var bar = document.getElementsByClassName("bar")[0]
            bar.style.marginLeft = "80%"

         //delay functie)
        function delayLink(URL, margin) {
            bar.style.marginLeft = margin + '%';
            setTimeout(function() {
                window.location = URL
            }, 500)
        }
    </script>



</body>
</html>

<?php
include("config.php");

if(isset($_POST['log'])) {


    $gebruikersnaam = $_POST['username'];
    $wachtwoord = $_POST['password'];


    $query = "SELECT * FROM inlog WHERE gebruiker = '$gebruikersnaam' AND wachtwoord = '$wachtwoord'";
    $stm = $pconn->prepare($query);
    $stm->execute();
    $inlog = $stm->fetch(PDO::FETCH_OBJ);

    if($inlog != null) {
        $_SESSION['log'] = $inlog;
        Header("location: ziekmelden.php");
    } else {
        echo ("foute gebruikersnaam of wachtwoord ingevuld, probeer het opnieuw!");
    }

}
?>