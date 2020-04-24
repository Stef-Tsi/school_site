<?php
include ("config.php")
?>

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

<body>


<section class="hero">
    <nav class="slidemenu positie">

        <!-- Item 1 -->
        <input type="radio" name="slideItem" id="slide-item-1" class="slide-toggle"/>
        <label for="slide-item-1" onclick="delayLink('home.php',0)">

            <p class="icon">🏠</p><span>Home</span>
        </label>

        <!-- Item 2 -->
        <input type="radio" name="slideItem" id="slide-item-2" class="slide-toggle"/>
        <label for="slide-item-2" onclick="delayLink('regristratie.php',20)">
            <p class="icon">✍</p><span>Regestreren leerling</span>
        </label>

        <!-- Item 3 -->
        <input type="radio" name="slideItem" id="slide-item-3" class="slide-toggle" checked/>
        <label for="slide-item-3" onclick="delayLink('status.php',40)">
            <p class="icon">💻</p><span>Overzicht leerlingen</span>
        </label>

        <!-- Item 4 -->
        <input type="radio" name="slideItem" id="slide-item-4" class="slide-toggle"/>
        <label for="slide-item-4" onclick="delayLink('ziekmelden.php',60)">
            <p class="icon">✅</p><span>Status leerlingen</span>
        </label>

        <!-- Item 5 -->
        <input type="radio" name="slideItem" id="slide-item-5" class="slide-toggle"/>
        <label for="slide-item-5" onclick="delayLink('inlog.php',80)">
            <p class="icon">🔑</p><span>Login</span>
        </label>

        <div class="clear"></div>

        <!-- Bar -->
        <div class="slider">
            <div class="bar"></div>
        </div>

    </nav>



    <!--####### content zorgt voor 1 box met de content daardoor kan ik er 3 hebben op beeldscherm met verschilende inhoud -->
    <div class="content">
        <section class="cards-wrapper">
            <div class="card-grid-space" type="button" class="btn btn-info btn-lg" data-toggle="modal"
                 data-target="#modal-with-tab">

                <a class="card"
                   style="--bg-img: url('https://www.royalposthumus.nl/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/9/0/9030_004.jpg')">
                    <div>
                        <h1>Aanwezigheid lijst</h1>
                        <p>Alle aanwezige leerlingen.</p>
                        <div class="tags">
                            <div class="tag">Aanwezig</div>
                        </div>
                    </div>
                </a>
            </div>

            <!--####### hier zie je als ik er op klik dat hij dan me modal opent -->
            <div class="card-grid-space" type="button" class="btn btn-info btn-lg" data-toggle="modal"
                 data-target="#modal-with-tab">

                <a class="card"
                   style="--bg-img: url('https://hoekschlyceum.nl/wp-content/uploads/2017/06/ziekm.png')">
                    <div>
                        <h1>Afwezigheid lijst</h1>
                        <p>Alle afwezige leerlingen.</p>
                        <div class="tags">
                            <div class="tag">Afwezig</div>
                        </div>
                    </div>
                </a>
            </div>


            <div class="card-grid-space" type="button" class="btn btn-info btn-lg" data-toggle="modal"
                 data-target="#modal-with-tab">

                <a class="card"
                   style="--bg-img: url('data:image/jpeg;base64,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')">
                    <div>

                        <h1>Leerlingen lijst</h1>
                        <p>Alle leerlingen.</p>

                        <div class="tags">
                            <div class="tag">Leerling lijstt</div>
                        </div>
                    </div>
                </a>
            </div>

        </section>
    </div>

    <div class="waves"></div>
</section>

<!--####### Mijn manier om verschillende data te kiezen en te echo  niet al te mooi maar het werkt  -->
<?php





    $queryA = "SELECT * FROM students WHERE klas_id = '1' "; //Query om naam op te halen uit klas IB1A
    $stmA = $pconn->prepare($queryA);

    $queryB = "SELECT * FROM students WHERE klas_id = '2' "; //Query om naam op te halen IB1B
    $stmB = $pconn->prepare($queryB);

    $queryC = "SELECT * FROM students WHERE klas_id = '3' "; //Query om naam op te halen IB1C
    $stmC = $pconn->prepare($queryC);


    $queryD = "SELECT * FROM students WHERE klas_id = '4' "; //Query om naam op te halen IB1D
    $stmD = $pconn->prepare($queryD);

    $queryE = "SELECT * FROM students WHERE status = 'Ziek' "; //Query om naam op te halen van alle zieken
    $stmE = $pconn->prepare($queryE);

    $queryF = "SELECT * FROM students WHERE status = 'stage' "; //Query om naam op te halen iedereen stage
    $stmF = $pconn->prepare($queryF);

    $queryG = "SELECT * FROM students WHERE status = 'Te laat' "; //Query om naam op te halen iedereen te laat
    $stmG = $pconn->prepare($queryG);

// ik wist niet echt hoe ik anders werkent kon krijgen met me css en modals dus heb ik alles in een stuk php met echo gezet //

                    echo '<div class="content-modal">';

                echo '<div id="modal-with-tab" class="modal modal-with-tab fade" role="dialog">';
                    echo '<div class="modal-dialog">';

                     echo '<div class="modal-content">';
                        echo '<div class="modal-body">';
                         echo '<div class="row">';
                             echo '<div class="col-md-6">';
                                echo '<div class="panel with-nav-tabs panel-info">';
                                    echo '<div class="panel-heading">';
                                        echo '<ul class="nav nav-tabs">';
                                            echo '<li class="active"><a href="#tab1info" data-toggle="tab">Klas: IB1A</a></li>
                                                                        <li><a href="#tab2info" data-toggle="tab">Klas: IB1B</a></li>
                                                                        <li><a href="#tab3info" data-toggle="tab">Klas: IB1C</a></li>
                                                                        <li><a href="#tab4info" data-toggle="tab">Klas: IB1D</a></li>
                                                                        <li><a href="#tab5info" data-toggle="tab">Ziek</a></li>
                                                                        <li><a href="#tab6info" data-toggle="tab">Stage</a></li>
                                                                        <li><a href="#tab7info" data-toggle="tab">Te laat</a></li>
                                                                        ';


                                                echo '</ul>';
                                        echo '</div>';
                                        echo '<div class="panel-body">';
                                            echo '<div class="tab-content">';

                                                echo '<div class="tab-pane fade in active" id="tab1info">';
                                                    if($stmA->execute()) {
                                                        $result = $stmA->fetchAll(PDO::FETCH_OBJ);
                                                        foreach ($result AS $KlasA) {
                                                            echo "<b class='eerste' style='color:#4973ff'>Naam:</b> " . $KlasA->naam . "</b><b class='twede' style='color: #4973ff'> Achternaam:</b> " . $KlasA->achternaam . "</b><b class='twede'> Opmerking:</b> " . $KlasA->message . "</b><b class='derde'>" . $KlasA->status ."</b><br/>";
                                                            echo '</br>';
                                                        }}

                                                echo '</div>';


                                                echo '<div class="tab-pane" id="tab2info">';

                                                    if($stmB->execute()) {
                                                        $result = $stmB->fetchAll(PDO::FETCH_OBJ);
                                                        foreach ($result AS $KlasB) {
                                                            echo "<b class='eerste' style='color:#4973ff'>Naam:</b> " . $KlasB->naam . "<b class='twede' style='color: #4973ff'> Achternaam:</b> " . $KlasB->achternaam . "</b><b class='twede'> Opmerking:</b> " . $KlasB->message . "</b><b class='derde'>" . $KlasB->status ."</b><br/>";
                                                            echo '</br>';
                                                    }}
                                                echo '</div>';


                                                echo '<div class="tab-pane" id="tab3info">';
                                                    if($stmC->execute()) {
                                                        $result = $stmC->fetchAll(PDO::FETCH_OBJ);
                                                        foreach ($result AS $KlasC) {
                                                            echo "<b class='eerste' style='color:#4973ff'>Naam:</b> " . $KlasC->naam . "</b><b class='twede' style='color: #4973ff'> Achternaam:</b> " . $KlasC->achternaam . "</b><b class='twede'> Opmerking:</b> " . $KlasC->message . "</b><b class='derde'>" . $KlasC->status ."</b><br/>";;
                                                            echo '</br>';
                                                        }}
                                                echo '</div>';


                                                echo '<div class="tab-pane" id="tab4info">';
                                                    if($stmD->execute()) {
                                                        $result = $stmD->fetchAll(PDO::FETCH_OBJ);
                                                        foreach ($result AS $KlasD) {
                                                            echo "<b class='eerste' style='color:#4973ff'>Naam:</b> " . $KlasD->naam . "</b><b class='twede' style='color: #4973ff'> Achternaam:</b> " . $KlasD->achternaam . "</b><b class='twede'> Opmerking:</b> " . $KlasD->message . "</b><b class='derde'>" . $KlasD->status ."</b><br/>";
                                                            echo '</br>';
                                                    }}
                                                echo '</div>';




                                                echo '<div class="tab-pane" id="tab5info">';
                                                if($stmE->execute()) {
                                                    $result = $stmE->fetchAll(PDO::FETCH_OBJ);
                                                    foreach ($result AS $KlasE) {
                                                        echo "<b class='eerste' style='color:#4973ff'>Naam:</b> " . $KlasE->naam . "</b><b class='twede' style='color: #4973ff'> Achternaam:</b> " . $KlasE->achternaam . "</b><b class='twede'> Opmerking:</b> " . $KlasE->message . "</b><b class='derde'> Ziek sinds: " . $KlasE->datum_ziek ."</b><br/>";
                                                        echo '</br>';
                                                    }}
                                                echo '</div>';

                                                echo '<div class="tab-pane" id="tab6info">';
                                                if($stmF->execute()) {
                                                    $result = $stmF->fetchAll(PDO::FETCH_OBJ);
                                                    foreach ($result AS $KlasF) {
                                                        echo "<b class='eerste' style='color:#4973ff'>Naam:</b> " . $KlasF->naam . "</b><b class='twede' style='color: rgba(73,115,255,0.57)'> Achternaam:</b> " . $KlasF->achternaam . "</b><b class='twede'> Opmerking:</b> " . $KlasF->message . "</b><b class='derde'> Stage sinds: " . $KlasF->datum_ziek ."</b><br/>";
                                                        echo '</br>';
                                                    }}
                                                echo '</div>';

                                                echo '<div class="tab-pane" id="tab7info">';
                                                if($stmG->execute()) {
                                                    $result = $stmG->fetchAll(PDO::FETCH_OBJ);
                                                    foreach ($result AS $KlasG) {
                                                        echo "<b class='eerste' style='color:#4973ff'>Naam:</b> " . $KlasG->naam . "</b><b class='twede' style='color: #4973ff'> Achternaam:</b> " . $KlasG->achternaam . "</b><b class='twede'> Opmerking:</b> " . $KlasG->message . "</b><b class='derde'> Te laat op: " . $KlasG->datum_ziek ."</b><br/>";
                                                        echo '</br>';
                                                    }}
                                                echo '</div>';

                                            echo '</div>';
                                         echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                         echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';



?>



<script>
    //zet op juiste % van de bar
    var bar = document.getElementsByClassName("bar")[0]
    bar.style.marginLeft = "40%"

    //delay functie  )
    function delayLink(URL, margin) {
        bar.style.marginLeft = margin + '%';
        setTimeout(function () {
            window.location = URL
        }, 500)
    }
</script>

</body>

</html>
