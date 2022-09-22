<?php

if(isset($_POST['save'])){

include('..//db.php');

$name = $_POST['name'];
$genre = $_POST['genre'];
$realese = $_POST['realese'];
$season = $_POST['season'];
$synopsis = $_POST['synopsis'];

$query = mysqli_query($con,
"INSERT INTO users(name, genre, realese, season, synopsis)
VALUES
('$name', '$genre', '$realese', '$season', '$synopsis')")
or die(mysqli_error($con));

if($query){
echo
'<script>
alert("Add Movie Success");
window.location = "../page/listMoviePage.php"
</script>';

}else{
echo
'<script>
alert("Add Movie Failed");
</script>';
}

}else{
echo
'<script>
window.history.back()
</script>';
}
?>