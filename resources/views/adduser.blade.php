@extends('template.default')
@section('content')

  <!-- Main body of User -->
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    		<div class="section-header-breadcrumb-content">
	        <h4>Add User</h4>
        </div>
		  </div>
    
  <!-- Add User -->
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <form action="{{route('save-user')}}" method="Post">  
          @csrf 
            <div class="card-body row">
              <div class="form-group col-lg-3">
                <label>Name:</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter user name">
              </div>
              <div class="form-group col-lg-3">
                <label>Email:</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter user Email">
              </div>
              <div class="form-group col-lg-3">
                <label>City:</label>
                  <input type="text" name="city" class="form-control" placeholder="Enter user City">
              </div>
              <div class="form-group col-lg-3">
                <label>Password:</label>
                  <input type="password" name="password" class="form-control" placeholder="Enter user Password">
              </div>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection