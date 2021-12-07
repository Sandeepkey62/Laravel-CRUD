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

    <div class="col-md-4">
      <form method="POST" action="{{route('user_detail')}}">
        <h2 class="text-center">Add Staff</h2>
        <hr>
        @csrf
       @if(Session::has('success'))
  <div class="alert alert-success">
  {{Session::get('success')}}</div>
 @endif
 @if(Session::has('fail'))
  <div class="alert alert-danger">{{Session::get('fail')}}</div>
 @endif

      
        <label>Name</label>
        <input type="text" name="user_name" class="form-control">
        <label>Address</label>
        <input type="text" name="user_address" class="form-control">
         <label>mobile</label>
        <input type="text" name="user_mob" class="form-control">
        <input type="text" name="auth_email" value="{{Session::get('user_email')}}" hidden="">
        <button type="submit" class="btn btn-info text-dark my-1">Submit</button>
      </form>
       <a href="show_user_details" class="text-decoration-none text-white btn btn-primary my-1">Show User Details</a>
    </div>
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