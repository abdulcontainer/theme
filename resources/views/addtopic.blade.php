@extends('template.default')
@section('content')

  <!-- Main body of User -->
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    		<div class="section-header-breadcrumb-content">
	        <h4>Add Topic</h4>
        </div>
		  </div>
    
  <!-- Add User -->
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <form action="{{route('save-topic')}}" method="Post">  
          @csrf 
            <div class="card-body row">
              <div class="form-group col-lg-3">
                <label>Topic Name:</label>
                  <input type="text" name="t_name" class="form-control" placeholder="Topic name">
              </div>
              <div class="form-group col-lg-9">
                <label>Topic Discription:</label>
                  <textarea style="height:200px;" type="text" name="t_diss" class="form-control" placeholder="Details...."></textarea>
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