<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Dashboard</title>
  </head>
  <body>
   <div class="container">
   	<div class="row">
   		<div class="col-md-6">
 <h2 class="text-center text-monospace">Welcome {{$data->user_name}}</h2>
 <hr>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>S.No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr style="text-align:center">
      <td>{{$data->id}}</td>
      <td>{{$data->user_name}}</td>
      <td>{{$data->user_email}}</td>
     <td> <img src="images/studentProfile/{{$data->image}}" width="100px"></td>
      <td><a href="logout" class="text-decoration-none text-dark btn btn-warning">Logout</a></td>
    </tr>
  </tbody>
</table>   
</div>     
      </div class='col-md-4'>
      <a href="user_details" class="text-decoration-none text-white btn btn-success">Add User</a>

      <a href="show_user_details" class="text-decoration-none text-white btn btn-info">Show User Details</a>
    </div>
   </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>