<?php
if(isset($_GET['id'])){
    include ('../db.php');
    $id = $_GET['id'];
    $query = mysqli_query($con,
    "SELECT  name, genre, realese, season, synopsis FROM moviess WHERE id='$id'") or
    die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
    
    }include '../component/sidebar.php'

?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);" >

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="body d-flex justify-content-between">
<h4>EDIT MOVIE</h4>
<td>

<a href="../page/editMovieProcess.php?id='.$data['id'].'">
<i style="color: red" class="fa fa-pencil"></i>
</a>
</td>
</div>
<hr>
<table class="table ">
<thead>
<title>Edit Movie Page</title>
</head>

<body>

<div class="card-header fw-bold">Edit Movie</div>
<div class="card-body">
<form action="../process/editMovieProcess.php"
method="post">
<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Name</label>
<input type="text" class="form-control" id="nameMovie" name="nameMovie">
<input class="form-control" id="name" name="name" aria-describedby="emailHelp" value=<?php echo "$data[name]" ?>>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Genre</label>
<select class="form-select" aria-label="Default
select example" name="genre" id="genre"> value=<?php echo "$data[genre]" ?>>
<option value="Reguler">Action</option>
<option value="Platinum">Romance</option>
<option value="Gold">Comedy</option>
</select>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="formlabel">Realese</label>
<input class="form-control" id="realese"
name="realese" aria-describedby="emailHelp" alue=<?php echo "$data[realese]" ?>>
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
name="editMovie">Edit Movie</button>
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
