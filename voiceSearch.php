<?php
include 'dbpConnection2.php';
$array1 = array();
$sql = "SELECT DISTINCT City FROM events";
$sql2 = "SELECT DISTINCT Type FROM events";
$sql3 = "SELECT DISTINCT Year FROM events";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
while ($row = mysqli_fetch_assoc($result)) {
    $array1[] = $row['City'];
}
while ($row = mysqli_fetch_assoc($result2)) {
    $array2[] = $row['Type'];
}
while ($row = mysqli_fetch_assoc($result3)) {
    $array3[] = $row['Year'];
}
//print_r($array1);
//print_r($array2);
//print_r($array3);
?>
<script>
    //Metatropi tou pinaka array1 se json gia na to parei i javascript se passedArray
    var passedArray = <?php echo json_encode($array1); ?>;
    var passedArray2 = <?php echo json_encode($array2); ?>;
    var passedArray3 = <?php echo json_encode($array3); ?>;
    //console.log(passedArray);
    //console.log(passedArray3);
    //end
</script>
<?php
include 'dbpConnection2.php';
if(isset($_POST['search'])){

    $anazitisi = $_POST['anazitisi'];
    $typos = $_POST['typos'];
    $xronia = $_POST['xronia'];
    if($xronia == "undefined" && $typos == "undefined" ){
        $query = "SELECT * FROM events WHERE City LIKE '%".$anazitisi."%'";
    }
    else if($anazitisi == "undefined" && $xronia == "undefined"){
        $query = "SELECT * FROM events WHERE Type LIKE '%".$typos."%'";
    }
    else if($typos == "undefined" && $anazitisi == "undefined"){
        $query = "SELECT * FROM events WHERE Year LIKE '%".$xronia."%'";
    }
    else if($xronia == "undefined"){
        $query = "SELECT * FROM events WHERE City LIKE '%".$anazitisi."%' AND Type LIKE '%".$typos."%'";
    }
    else if($anazitisi == "undefined"){
        $query = "SELECT * FROM events WHERE Year LIKE '%".$xronia."%' AND Type LIKE '%".$typos."%'";
    }
    else if($typos == "undefined"){
        $query = "SELECT * FROM events WHERE City LIKE '%".$anazitisi."%' AND Year LIKE '%".$xronia."%'";
    }
    else{
        $query = "SELECT * FROM events WHERE City LIKE '%".$anazitisi."%' AND Year LIKE '%".$xronia."%' AND Type LIKE '%".$typos."%'";
    }

    $search_result = filterTable($query);

?>
<div>
    <script>
        document.getElementById("edw").innerHTML = "<?php while($row = mysqli_fetch_array($search_result)){ 
        echo $row["Type"].". ";
        echo $row["Event"].", ";
        echo $row["Venue"].", "; 
        echo $row["City"].", ".$row["Day"].", ώρα ".$row["Hour"].". ";
    } ?>";
        document.getElementById('start').click();
    </script>

</div>


<?php
    mysqli_close($conn); 
}
else{
    $query = "SELECT * FROM events";
    $search_result = filterTable($query);   
}

function filterTable($query){
    include 'dbpConnection2.php';
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}

?>