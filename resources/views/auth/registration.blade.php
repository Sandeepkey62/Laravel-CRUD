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

   		<form method="POST" action="{{route('registration-user')}}" enctype="multipart/form-data">
 @if(Session::has('success'))
  <div class="alert alert-success">{{Session::get('success')}}</div>
 @endif
 @if(Session::has('fail'))
  <div class="alert alert-danger">{{Session::get('fail')}}</div>
 @endif
   			{{ csrf_field() }}
   			<h2>Registration </h2>
   		 <div class="col-md-4">
   			<label for="user_name">Name:</label>
   			<input type="text" name="user_name" id="user_name" class="form-control" value="{{old('user_name')}}">
   			 <span class="text-danger">@error('user_name'){{$message}} @enderror</span>
   		</div>
   		 <div class="col-md-4">

   			<label for="user_email">Email:</label>
   			<input type="text" name="user_email" id="user_email" class="form-control" value="{{old('user_email')}}">
   			<span class="text-danger">@error('user_email'){{$message}} @enderror</span>
   			</div>
   
   		 <div class="col-md-4">
   			<label for="user_email">Password:</label>
   			<input type="Password" name="user_pass" id="user_pass" class="form-control" value="{{old('user_pass')}}">
   			<span class="text-danger">@error('user_pass'){{$message}} @enderror</span>
   			
   		</div>
   		 <div class="col-md-4">
   			<label for="user_email">Confirm Password:</label>
   			<input type="Password" name="user_conf_pass" id="user_conf_pass" class="form-control">
   			<span class="text-danger">@error('user_conf_pass'){{$message}} @enderror</span>
   			  <div class="form-group">
            <label>Image</label>:
            <input type="file" name="image" id="user_image" class="form-control" placeholder="image">
            </div>
   		</div>
   		<button class="btn btn-success my-1" type="submit">Submit</button>
   		<a href="login" class="btn btn-dark">login</a>
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