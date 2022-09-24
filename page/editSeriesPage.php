<?php
include '../component/sidebar.php';
if(isset($_GET['id'])){
    include ('../db.php');
    $id = $_GET['id'];
    $query = mysqli_query($con,
    "SELECT  name, genre, realease, episode, season, synopsis FROM series WHERE id='$id'") or
    die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
    
    }
    ?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);" >

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="body d-flex justify-content-between">
<h4>Edit Series</h4>
<a href="../process/listSeriesPage.php?id='.$data['id'].'"> 
<i style="color: red" class="fa fa-plus fa-2x"></i>
</a>
</div>
<hr>
<table class="table">
<thead>
<title>Edit Series</title>
</head>

<body>

<div class="card-header fw-bold">Edit Series</div>
<div class="card-body">
<form action="../process/editSeriesProcess.php"
method="post">
<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Name</label>
<input class="form-control" id="name" name="name"
aria-describedby="emailHelp" value=<?php echo "$data[name]" ?>>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Genre</label>
<select class="form-select" aria-label="Default
select example" name="genre" id="genre" value=<?php echo "$data[genre]" ?>>
<option value="Reguler">Action</option>
<option value="Platinum">Romance</option>
<option value="Gold">Comedy</option>
</select>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Realese</label>
<input class="form-control" id="realease"
name="realese" aria-describedby="emailHelp" value=<?php echo "$data[realease]" ?>>
</div>

<div class="mb-3">
<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Episode</label>
<input class="form-control" id="episode"
name="episode" aria-describedby="emailHelp" value=<?php echo "$data[episode]" ?>>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Season</label>
<input class="form-control" id="season"
name="season" aria-describedby="emailHelp" value=<?php echo "$data[season]" ?>>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Synopsis</label>
<input class="form-control" id="synopsis"
name="synopsis" aria-describedby="emailHelp" value=<?php echo "$data[synopsis]" ?>>
</div>

</div>
<div class="d-grid gap-2">
<button type="submit" class="btn btn-primary"
name="saveSeries">SAVE</button>

<p class="mt-2 mb-0">Cancel edit a Series? 
    <a href="./listMoviessPage.php" class="text-primary">Click here!</a></p>

</div>
</form>
</div>
</div>
</div>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
</body>
</html>
