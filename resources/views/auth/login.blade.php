<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Registration</title>
  </head>
  <body>
   <div class="container">
   	<div class="row">
   		<form method="POST" action="{{route('login-user')}}">

         @if(Session::has('success'))
  <div class="alert alert-success">{{Session::get('success')}}</div>
 @endif
 @if(Session::has('fail'))
  <div class="alert alert-danger">{{Session::get('fail')}}</div>
 @endif

   			@csrf
   			<h2>Login </h2>
   		 <div class="col-md-4">
   			<label for="user_email">Email:</label>
   			<input type="text" name="user_email" id="user_email" class="form-control">
                <span class="text-danger">@error('user_email'){{$message}} @enderror</span>

   			</div>
   		 <div class="col-md-4">
   			<label for="user_email">Password:</label>
   			<input type="Password" name="user_pass" id="user_pass" class="form-control">
        <span class="text-danger">@error('user_pass'){{$message}} @enderror</span>

   		</div>
   		<button class="btn btn-success my-1" type="submit">Submit</button>
      <a href="registration" class="btn btn-primary">Registration</a>
   		</form>
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