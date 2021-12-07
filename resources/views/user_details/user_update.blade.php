


<div class="container ">
	<div class="row d-flex justify-content-center">
		<div class="col-md-4">

	
			   @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

			<form method="POST" action="./{{$user_update['id']}}">
 <!-- {{method_field('PATCH')}} -->
     {{ csrf_field() }}
     {{ method_field('PUT') }}

			<div class="form-group">
				<label>First Name</label>
			<input type="text" name="user_name" value="{{($user_update) ? $user_update['user_name']:' '}}" id="user_name" class="form-control">
			</div>
			<div class="form-group">
	     	<label>Last Name</label>
			<input type="text" name="user_address" value="{{($user_update) ? $user_update['user_address']:' '}}" id="user_address" class="form-control">
		</div>
			<div class="form-group">
			<label>Email</label>
			<input type="text" name="user_mob" value="{{($user_update) ? $user_update['user_mob']:' '}}" id="user_mob" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Update</button>
			</form>
		</div>
	</div>
</div>