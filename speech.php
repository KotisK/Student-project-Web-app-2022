<?php
include_once('elements/header.php');
include_once('voiceSearch.php');
?>
<button class="dropbtn"onclick="playsound();"type="button">Φωνητική βοήθεια &#128264;
</button>
<script>
    function playsound(){
        utterance.lang='el-GR';
        var utterance = new SpeechSynthesisUtterance('Μπορείτε να πατήσετε πάνω στο μικρόφωνο και να ξεκινήσετε την αναζήτηση. Παράδειγμα. Πείτε σεμινάριο στην Αθήνα. Περιμένετε 3 έως 5 δευτερόλεπτα και λέτε τη λέξη Τέλος. Στα κινητά απλώς ξανά πατάτε στο μικρόφωνο και λέτε τη λέξη τέλος.');

        window.speechSynthesis.speak(utterance);
        document.querySelector('.dropbtn').disabled = true;
    }
</script>
<form action="https://www.google.com/search" method="POST" target="_blank" id="search-form">
    <input name="q" type="text" placeholder="Μίλησε..." autocomplete="off" autofocus>
    <!-- <button type="button"><i class="fas fa-microphone"></i></button> -->
</form>
<audio  src="sounds/record2.mp3"></audio>

<p class="info"></p>
<div class="container">
    <p style="text-align:center;"> Εδώ μπορεί ο χρήστης να κάνει φωνητική αναζήτηση και να λάβει</p>
    <p style="text-align:center;"> απαντήσεις σχετικές με τις ερωτήσεις του, επίσης μπορεί να διαδράσει.</p>
    <br>    
</div>
<?php echo '<style> #form2 { display:none;}</style>';?>
<form id="form2" method="POST" >
    <label for="anazitisi"></label>
    <input id="anazitisi"type="text" placeholder="" name="anazitisi" >
    <label for="typos"></label>
    <input id="typos"type="text" placeholder="" name="typos" >
    <label for="xronia"></label>
    <input id="xronia"type="text" placeholder="" name="xronia" >
    <button id="search" type="submit" name="search">Αναζήτηση</button>
</form>
<?php echo '<style> .stt { display:block!important;}</style>';?>
<p id="demo"></p>
<script src="scripts/stt.js"></script>
<script>
    //Διαγράφει το ιστορικό του browser σε περίπτωση που υπάρχει submission μέσω php σε φόρμα.
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    //απενεργοποιει το enter
    $(document).ready(function() {
        $("form").bind("keypress", function(e) {
            if (e.keyCode == 13) {
                return false;
            }
        });
    });

</script>
<?php
include_once('elements/footer.php');
?>
