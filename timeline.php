<?php
include_once('elements/header.php');
?>

<div class="container">
    <br />
    <div class="panel panel-default">
        <div class="panel-heading">
            <script>
                /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
                function myFunction() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }

                // Close the dropdown menu if the user clicks outside of it
                window.onclick = function(event) {
                    if (!event.target.matches('.dropbtn')) {
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
            </script>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Ταξινόμηση</button>
                <div id="myDropdown" class="dropdown-content">
                    <a onclick="onLinkClick(0);">Ταξινόμηση ανά Τύπο</a>
                    <a onclick="onLinkClick(1);">Ταξινόμηση ανά Ημερομηνία</a>
                    <a onclick="onLinkClick(2);">Ταξινόμηση ανά Πόλη</a>
                </div>
            </div>
            <h3 class="panel-title" style="text-align:center">Εκδηλώσεις</h3>
            <h4 class="panel-title" style="text-align:center">Ταξινόμηση ανά Τύπο</h4>

        </div>
        <div class="panel-body">
            <div class="timeline">
                <div class="timeline__wrap">

                    <div class="timeline__items">

                        <?php
                        $query = "SELECT * FROM events ORDER BY Type ASC";
                        $statement = $conn->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach($result as $row)
                        {
                        ?>
                        <div class="timeline__item">
                            <div style=""class="timeline__content <?php echo "id";echo $row['id'];?>">
                                <button class="playBT" style="float: right; border-radius: 10px;"onclick="playEach2(<?=$row["id"]; ?>);"  type="button" >&#128266;</button>
                                <h2><?php echo $row["Type"]; ?></h2>
                                <p><?php echo $row["Event"]; ?></p>
                                <p><?php echo $row["Venue"]; ?></p>
                                <p><?php echo $row["City"].", ".$row["Day"]." ώρα: ".$row["Hour"]; ?></p>
                                <style>
                                    #sl{
                                        /*width: 320px!important;*/
                                        height: 200px!important;
                                        border-radius: 20px;
                                    }
                                </style>
                                <p><?php $location = $row['Loc']; echo "<div>
          <video id='sl' src='".$location."' controls ></video>     
          <br>
       </div>"; ?></p>

                                <script>

                                    /*
                                    function soundEach(){
                                        var utterance = new SpeechSynthesisUtterance("Ζωγραφική. Με τα μάτια της ψυχής μου, Αίθουσα Τέχνης Ελληνογαλλικού Συνδέσμου, Αθήνα, 2022-08-16, ώρα 17:00:00. ");
                                        utterance.lang='el-GR';
                                        window.speechSynthesis.speak(utterance);
                                    }*/
                                </script>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
        <h4 class="panel-title" style="text-align:center">Ταξινόμηση ανά Ημερομηνία</h4>

        <div class="panel-body">
            <div class="timeline">
                <div class="timeline__wrap">

                    <div class="timeline__items">


                        <?php
                        $query1 = "SELECT * FROM events ORDER BY Day ASC";
                        $statement = $conn->prepare($query1);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach($result as $row)
                        {
                        ?>
                        <div class="timeline__item">
                            <div style=""class="timeline__content">
                                <button class="playBT" style="float: right; border-radius: 10px;"onclick="playEach2(<?=$row["id"]; ?>);"  type="button" >&#128266;</button>
                                <h2><?php echo $row["Type"]; ?></h2>
                                <p><?php echo $row["Event"]; ?></p>
                                <p><?php echo $row["Venue"]; ?></p>
                                <p><?php echo $row["City"].", ".$row["Day"]." ώρα: ".$row["Hour"]; ?></p>
                                <style>
                                    #sl{
                                        /*width: 320px!important;*/
                                        height: 200px!important;
                                    }
                                </style>
                                <p><?php $location = $row['Loc']; echo "<div>
          <video id='sl' src='".$location."' controls ></video>     
          <br>
       </div>"; ?></p>

                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
        <h4 class="panel-title" style="text-align:center">Ταξινόμηση ανά Πόλη</h4>

        <div class="panel-body">
            <div class="timeline">
                <div class="timeline__wrap">

                    <div class="timeline__items">


                        <?php
                        $query2 = "SELECT * FROM events ORDER BY City ASC";
                        $statement = $conn->prepare($query2);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach($result as $row)
                        {
                        ?>
                        <div class="timeline__item">
                            <div style=""class="timeline__content">
                                <button class="playBT" style="float: right; border-radius: 10px;"onclick="playEach2(<?=$row["id"]; ?>);"  type="button" >&#128266;</button>
                                <h2><?php echo $row["Type"]; ?></h2>
                                <p><?php echo $row["Event"]; ?></p>
                                <p><?php echo $row["Venue"]; ?></p>
                                <p><?php echo $row["City"].", ".$row["Day"]." ώρα: ".$row["Hour"]; ?></p>
                                <style>
                                    #sl{
                                        /*width: 320px!important;*/
                                        height: 200px!important;
                                    }
                                </style>
                                <p><?php $location = $row['Loc']; echo "<div>
          <video id='sl' src='".$location."' controls ></video>     
          <br>
       </div>"; ?></p>

                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function onLinkClick(n) {
        switch(n) {
            case 0:
                document.getElementsByTagName('h4')[1].scrollIntoView();
                break;
            case 1:
                document.getElementsByTagName('h4')[2].scrollIntoView();
                break;
            case 2:
                document.getElementsByTagName('h4')[3].scrollIntoView();
                break;
        }
        // will scroll to 4th h3 element
    }
</script>
<script>
    // opoy id i parametros pairnei to noumero gia kathe block content sto timeline kai to pernaei prostheto se kathe onomasia id
    function playEach2(id){
        var list2 = document.querySelectorAll('.id'+id+' h2');
        for (var n = 0; n < list2.length; n++) {
            const content2 = list2[n].textContent;
            console.log(list2[n].innerHTML);
            //arr.push(content);
            var utterance2 = new SpeechSynthesisUtterance(list2[n].innerHTML);
            utterance2.lang='el-GR';
            window.speechSynthesis.speak(utterance2);
        }

        var list = document.querySelectorAll('.id'+id+' p');

        for (var i = 0; i < list.length; i++) {
            const content = list[i].textContent;
            console.log(list[i].innerHTML);
            //arr.push(content);
            var utterance = new SpeechSynthesisUtterance(list[i].innerHTML);
            utterance.lang='el-GR';
            window.speechSynthesis.speak(utterance);
        }
        //console.log(content);

        //console.log(content);
    }

    $(".playBT").click(function() {
        $(this).attr("disabled", true);
        setTimeout(function() {
            $('.playBT').removeAttr("disabled");      
        }, 18000);
    });

    $(document).ready(function(){
        /*timeline(document.querySelectorAll('.timeline'), {
        mode: 'horizontal',
	    visibleItems: 4,
	    forceVerticalWidth: 800
    });*/
        //jQuery('.timeline').timeline();
        jQuery('.timeline').timeline({
            mode: 'vertical',
            //forceVerticalWidth: 300
        });
    });

    $(window).on("orientationchange", () => {
        if(screen.width > screen.height){
            // change to landscape
        } else {
            // change to portrait
        }
    });
</script>
<script src="scripts/jquery.js"></script>
<script src="scripts/timeline.min.js"></script>
<?php
include_once('elements/footer.php');
?>

