<!DOCTYPE html>
<?php

include 'dbpConnection-always.php';

?>
<style>
    .timeline__content p{font-style: italic;}
</style>
<html lang="el-GR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <!-- Slider CSS -->
        <link rel="stylesheet" href="css/slide.css?v=1.5">
        <link rel="stylesheet" href="static/css/main.523f09c5.chunk.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="/wptyxiakh/favicon.ico"/>
        <link rel="manifest" href="/wptyxiakh/manifest.json"/>
        <link rel="stylesheet" href="css/timeline.min.css" />
        <link rel="stylesheet" href="css/btt.css" /?>
        <link rel="stylesheet" href="css/slideout.css" /?>
        <link rel="stylesheet" href="css/stt.css" /?>
        <title> Ptyxiakh </title>
        <script src="scripts/jquery.js"></script>
        <script src="scripts/rgbcolor.js"></script>




    </head>
    <body>
        <a id="button"></a>
        <nav>
            <ul class="menu">
                <li id='logo'><a href="./index.php"><h4 style="color:#f1c40f">Aegean</h4></a></li>
                <li class="logo"></li>
                <li class="item"><a href="./index.php">Αρχική</a></li>
                <li class="item"><a href="./timeline.php">Γεγονότα</a></li>
                <li class="item"><a href="./react.php">Νοηματική</a></li>
                <li class="item"><a href="./speech.php">Φωνητική</a></li>
                <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
            </ul>
        </nav>
        <div id="slideout">
            <img src="./sl-images/accesibility.jpg" />
            <div id="slideout_inner">
                <div id="slideout-items">
                    <ul>
                        <li><img onclick="incrText();"src="./symbols/font.png"/></li>
                        <br>
                        <li><img onclick="invertColors();"style="background:white;" src="./symbols/invert.png"/></li>
                        <br>
                        <li><img onclick="vale();"src="./symbols/speech.png"/></li>
                        <br>
                        <li><img onclick="reset();"src="./symbols/reset.png"/></li>

                    </ul>
                </div>

            </div>
        </div>
        <?php echo '<style> .stt { display:none!important;}</style>';?>
        <div class="stt">
            <textarea readonly="true" id="edw" maxlength="300000" class="form-control bg-dark text-light mt-5" cols="50" rows="10" placeholder="Type here..."></textarea>
            <div class="mb-5">
                <button id="start" class="btn btn-success mt-5 me-3" hidden>Start</button>
            </div>
            <div class="mx-5">
                <input type="range" min="0.1" max="10" value="0.5" id="rate" step="0.1" hidden />
                <!-- span id="rate-label" class="ms-2">1 </span> -->
            </div>
        </div>

        <script>
            // Αυτό το scriptaki συλλέγει όλα τα tag 'p' τα κάνει ένα κείμενο και έπειτα τα στέλνει σε έναν πίνακα. Στη συνέχεια τοποθετούνται μέσα στο area του text to speech και ξεκινάει η αφήγηση.
            function vale(){
                var list = document.querySelectorAll("p");

                const arr = [];

                for (var i = 0; i < list.length; i++) {
                    const content = list[i].textContent;
                    //console.log(list[i].innerHTML);
                    arr.push(content);
                }
                document.getElementById("edw").innerHTML = arr.join(", ");
                document.getElementById('start').click();
            }
            //elegxei an egine refresh i selida kai epeita stamataei ti fwnitiki an sinexizei
            const pageAccessedByReload = (
                (window.performance.navigation && window.performance.navigation.type === 1) ||
                window.performance
                .getEntriesByType('navigation')
                .map((nav) => nav.type)
                .includes('reload')
            );

            window.speechSynthesis.cancel();
        </script>
        <script src="scripts/script.js"></script>
        <script src="scripts/btt.js"></script>
        <script src="scripts/slideout.js"></script>
        <script src="scripts/textToSpeech.js"></script>


