<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#authors").change(function() {
                debugger
                var aid = $("#authors").val();
                $.ajax({
                    url: 'data.php',
                    method: 'post',
                    data: 'aid=' + aid
                }).done(function(books) {
                    console.log(books);
                    books = JSON.parse(books);
                    $('#books').empty();
                    books.forEach(function(student){
                        $('#books').append('<option style=\'background: #004971\' class=\'klas\'>'+ student.achternaam +'</option>')
                    })



                })
            })
        })
    </script>

</head>

<body>

    <nav class="slidemenu positie">

        <!-- Item 1 -->
        <input type="radio" name="slideItem" id="slide-item-1" class="slide-toggle" />
        <label for="slide-item-1" onclick="delayLink('home.php',0)">
            <!--####### EACH NAVIGATION LINK WILL NOW TRIGGER A FUNCTION AND SEND A VALUE OF THE MARGIN OF THE BAR -->
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
        <input type="radio" name="slideItem" id="slide-item-4" class="slide-toggle" checked />
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
            <div id="containervcv" class="containercv1">
                <h1 class="hh" style="color: rgba(0,255,50,0.96)">&bull; Afmelden &bull;</h1>
                <div class="underline2">
                </div>
                <div class="icon_wrapper">
                    <svg class="icon2" viewBox="0 0 145.192 145.192">
                        <path d="M126.82,32.694c-2.804,0-5.08,2.273-5.08,5.075v2.721c-1.462,0-2.646,1.185-2.646,2.647v1.995    c0,1.585,1.286,2.873,2.874,2.873h20.577c1.462,0,2.646-1.185,2.646-2.647v-3.041c0-1.009-0.816-1.825-1.823-1.825v-2.722    c0-2.802-2.276-5.075-5.079-5.075h-1.985v-3.829c0-3.816-3.095-6.912-6.913-6.912h-0.589h-20.45c0-2.67-2.164-4.835-4.833-4.835    H56.843c-2.67,0-4.835,2.165-4.835,4.835H34.356v-3.384h-9.563v3.384v1.178h-7.061v1.416c-2.67,0.27-10.17,1.424-13.882,5.972    c-1.773,2.17-2.44,4.791-1.983,7.793c0.463,3.043,1.271,6.346,2.128,9.841c2.354,9.616,5.024,20.515,0.549,28.077    C2.647,79.44-3.125,90.589,2.201,99.547c4.123,6.935,13.701,10.44,28.5,10.44c1.186,0,2.405-0.023,3.658-0.068v9.028h-0.296    c-2.516,0-4.558,2.039-4.558,4.558v4.566h100.04v-4.564c0-2.519-2.039-4.558-4.558-4.558h-0.297V84.631h0.297    c2.519,0,4.558-2.037,4.558-4.556v-0.009c0-2.516-2.039-4.556-4.556-4.556l-36.786-0.009V61.973c0-2.193-1.777-3.971-3.972-3.971    v-4.711h0.456c1.629,0,2.952-1.32,2.952-2.949h14.227V34.459h1.658c2.672,0,4.834-2.165,4.834-4.834h20.45v3.069H126.82z     M34.06,75.511c-2.518,0-4.558,2.04-4.558,4.556v0.009c0,2.519,2.042,4.556,4.558,4.556h0.296v24.12l-0.042-1.168    c-15.994,0.574-26.122-2.523-30.106-9.229C-0.464,90.5,4.822,80.347,6.55,77.423c4.964-8.382,2.173-19.774-0.29-29.825    c-0.843-3.442-1.639-6.696-2.088-9.638c-0.354-2.35,0.129-4.3,1.484-5.958c3.029-3.714,9.509-4.805,12.076-5.1v1.233h7.061v1.49    v2.684c-2.403,1.114-4.153,2.997-4.676,5.237H18.15c-0.584,0-1.056,0.474-1.056,1.056v0.83c0,0.584,0.475,1.056,1.056,1.056h1.984    c0.561,2.18,2.304,3.999,4.658,5.092v0.029c0,0-2.282,20.823,16.479,22.099v1.102c0,1.177,0.955,2.133,2.133,2.133h3.297    c1.178,0,2.133-0.956,2.133-2.133V50.135c0-1.177-0.955-2.132-2.133-2.132h-3.297c-1.178,0-2.133,0.955-2.133,2.132    c-1.575-0.235-5.532-1.17-6.635-4.547c2.36-1.092,4.109-2.913,4.669-5.097h1.308c0.722,0,1.309-0.584,1.309-1.308v-0.578    c0-0.584-0.475-1.056-1.056-1.056h-1.539c-0.542-2.332-2.416-4.271-4.968-5.363v-2.559h17.651c0,2.67,2.166,4.835,4.836,4.835 h2.392v15.88h13.639c0,1.629,1.321,2.949,2.951,2.949h0.899v4.711c-2.194,0-3.972,1.778-3.972,3.971v13.529L34.06,75.511z     M95.188,101.78c0,8.655-7.012,15.665-15.664,15.665c-8.653,0-15.667-7.01-15.667-15.665c0-8.647,7.014-15.664,15.667-15.664    C88.177,86.116,95.188,93.132,95.188,101.78z M97.189,45.669h-9.556c0-0.896-0.726-1.62-1.619-1.62H74.494    c-0.896,0-1.621,0.727-1.621,1.62h-8.967v-11.21h33.283V45.669z">
                        </path>
                        <path d="M70.865,101.78c0,4.774,3.886,8.657,8.66,8.657c4.774,0,8.657-3.883,8.657-8.657c0-4.773-3.883-8.656-8.657-8.656    C74.751,93.124,70.865,97.006,70.865,101.78z">
                        </path>
                    </svg>
                </div>

                <form action="#" method="post" id="contact_form">

                    <div class="subject">
                        <label for="subject"> Klas</label>
                        <select class="form-control" id="authors" name="authors" style="border-bottom-color: #00ff32">
                            <option style="background: #004971" selected="" disabled="">Select klas</option>
                            <?php
                            require 'data.php';
                            $authors = loadAuthors();
                            foreach ($authors as $author) {
                                echo "<option  style='background: #004971' class='klas' id='" . $author['klas_id'] . "' value='" . $author['klas_id'] . "'>".$author['klas']."</option>";
                            }
                            ?>
                        </select>
                    </div>


                    <div class="subject">
                        <label for="books">Leerling</label>
                        <select class="form-control" id="books" name="books">
                            <option style="background: #004971" selected="" disabled="">Select leerling</option>
                        </select>

                    </div>


                    <div class="subject">
                        <label for="subject"></label>
                        <select placeholder="Status leerling" name="status" id="status_input" required style="border-bottom-color: #00ff32">
                            <option disabled hidden selected>Status leerling</option>
                            <option name="status" style="background: #004971">Te laat</option>
                            <option name="status" style="background: #004971">Ziek</option>
                            <option name="status" style="background: #004971">Stage</option>
                            <option name="status" style="background: #004971">Precent</option>


                        </select>
                    </div>


                    <div class="datum" name="datumz"  id="datumz">
                        <i> Datum absent </i>
                        <input style="color: #af010c" name="datumz" id="datumz" value="datumz" type="date" >
                    </div>

                    <div class="datum">
                        <i> Datum precent </i>
                        <input style="color: #00ff32" name="datuma"  type="date">
                    </div>


                    <div class="submit">
                        <input type="submit" value="Opslaan" name="btn" id="form_button2" />
                    </div>
                </form><!-- // End form -->
            </div><!-- // End #container -->
            <div class="clear"></div>



        </div>
        <div class="waves"></div>
    </section>

    <script>
        //juiste positie
        var bar = document.getElementsByClassName("bar")[0]
        bar.style.marginLeft = "60%"

        //delay functie  )
        function delayLink(URL, margin) {
            bar.style.marginLeft = margin + '%';
            setTimeout(function() {
                window.location = URL
            }, 500)
        }
    </script>



</body>

<?php

include ('config.php');

if(isset($_POST["btn"])) {

    $Variabele = $_POST["books"];

    $Variabele2 = $_POST["status"];

    $Variabele3 = $_POST["datumz"];

    $Variabele4 = $_POST["datuma"];



    // heb dit gedaan om te zorgen dat je een datum leeg kunt houden zonder dat je je oude data overschrijft met 0000-00-00

    if($Variabele3 != 0000-00-00 AND $Variabele4 == 0000-00-00){
        $query1 = "UPDATE students SET status = '$Variabele2', datum_ziek = '$Variabele3' WHERE achternaam = '$Variabele'";
        $stm1 = $pconn->prepare($query1);
        if ($stm1->execute()) {
            echo "it worked";

        } else echo "ERROR!";
    } elseif ($Variabele3 == 0000-00-00 AND $Variabele4 != 0000-00-00) {
        $query1 = "UPDATE students SET status = '$Variabele2', datum_beter = '$Variabele4' WHERE achternaam = '$Variabele'";
        $stm1 = $pconn->prepare($query1);
        if ($stm1->execute()) {
            echo "it worked";

        } else echo "ERROR!";
    }elseif ($Variabele3 != 0000-00-00 AND $Variabele4 != 0000-00-00){
        $query1 = "UPDATE students SET status = '$Variabele2', datum_beter = '$Variabele4', datum_ziek = '$Variabele3' WHERE achternaam = '$Variabele'";
        $stm1 = $pconn->prepare($query1);
        if ($stm1->execute()) {
            echo "it worked";

        } else echo "ERROR!";
    }else
        $query1 = "UPDATE students SET status = '$Variabele2'WHERE achternaam = '$Variabele'";
    $stm1 = $pconn->prepare($query1);
    if ($stm1->execute()) {
        echo "it worked";

    } else echo "ERROR!";



}
?>
