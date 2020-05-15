<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="mx-auto" style="width: 500px;">

    <form action="/profil/{{$pasien->id}}/update" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <h2><center>EDIT PROFIL</center></h2>

        <div class="form-group">
            <input type="hidden" name="id" class="form-control" value="{{$pasien->id}}" >
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="{{$pasien->username}}">
        </div>
        <br>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="nama" class="form-control" value="{{$pasien->nama}}">
        </div>
        <br>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="{{$pasien->email}}">
        </div>
        <br>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="telepon" class="form-control" value="{{$pasien->telepon}}">
        </div>
        <br>
        <div class="form-group">
            <input type="file" class="form-control" name="file" value="{{$pasien->foto}}">
        </div>
        <input type="submit" value="Update" class="btn btn-warning"/>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
