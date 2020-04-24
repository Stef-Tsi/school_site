
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
<label for="slide-item-1">                                                                         <!--####### EACH NAVIGATION LINK WILL NOW TRIGGER A FUNCTION AND SEND A VALUE OF THE MARGIN OF THE BAR -->
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


<!--####### hero -> content = mijn stuk waar ik me content in stop en kan bewerken zonder dat ik me achtergrond verpest -->

    <section class="hero">
        <div class="content">
            <div class="contentcard">
                <div class="cardcont">
                    <div class="cardcont__side cardcont__side--front">
                        <!-- Front Content -->
                        <div class="cardcont__cont">
                            <span ></span>
                        </div>
                    </div>
                    <div class="cardcont__side cardcont__side--back">
                        <!-- Back Content -->
                        <div class="cardcont__cta">
                            <b><span class="cyan">Locatie</span>
                                <br />
                                <span class="cyan">Adres</span><span class="cyan">:</span> <span class="cyan"> Knipplein 11</span>,
                                <br/>
                                <span class="cyan">Postcode</span><span class="cyan">:</span> <span class="cyan">4702 GN Roosendaal</span>',
                                <br/>
                                <span class="cyan">Email</span><span class="cyan">:</span> <span class="cyan">'Curio.rsd@hotmail.com</span>',
                                <br/>
                                <span class="cyan">Telefoon</span><span class="cyan">:</span> <span class="cyan">0165 590 100</span>,
                                <br/>

                            </b>
                        </div>
                    </div>
                </div>

        </div>
        <div class="waves"></div>
    </section>
















    <script>
        // delay functie zodat hij animatie kan doen voordat ie naar ander pagina gaat//
        function delayLink(URL) {
            setTimeout(function() {
                window.location = URL
            }, 500)
        }
    </script>

</body>