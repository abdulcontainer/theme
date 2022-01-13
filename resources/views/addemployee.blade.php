@extends('template.default')
@section ('content')
   
      <!-- Main body of Employee -->
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    	  <div class="section-header-breadcrumb-content">
	        <h4>Add Employee <br>( Join Employee Table With Address Table )</h4><br>
        </div>
		  </div>
    
  <!-- Add User -->
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <form action="{{route('add-employee')}}" method="Post">  
          @csrf 
            <div class="card-body row">
              <div class="form-group col-lg-4">
                <label>Name:</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Eployee name">
              </div>
              <div class="form-group col-lg-4">
                <label>Email:</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Eployee Email">
              </div>
              <div class="form-group col-lg-4">
                <label>City:</label>
                  <input type="text" name="address" class="form-control" placeholder="Enter Eployee City">
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