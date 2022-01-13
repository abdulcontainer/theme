@extends('template.default')
@section('content')

        <!-- Main body of Edit User -->
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        		<div class="section-header-breadcrumb-content">
					    <h4>Edit User</h4>
            </div>
			    </div>
        
        <!-- Edit User  -->
        
        
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form action="{{route('user-edited')}}" method="Post">  
             @csrf 

             <input type="hidden" name="id" value="{{$data->id}}">
              <div class="card-body row">
                <div class="form-group col-lg-4">
                  <label>Name:</label>
                  <input type="text" name="name" class="form-control" value="{{$data['name']}}">
                </div>
                <div class="form-group col-lg-4">
                  <label>Email:</label>
                  <input type="email" name="email" class="form-control"  value="{{$data['email']}}">
                </div>
                <div class="form-group col-lg-4">
                  <label>City:</label>
                  <input type="text" name="city" class="form-control"  value="{{$data['city']}}">
                </div>
                
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary"><i class="far fa-save"></i>  Save Changes</button>
              </div>
            </form>
          </div>
        </div>
    
@endsection