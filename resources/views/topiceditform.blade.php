@extends('template.default')
@section('content')

        <!-- Main body of Edit User -->
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        		<div class="section-header-breadcrumb-content">
					    <h4>Edit Topic</h4>
            </div>
			    </div>
        
        <!-- Edit User  -->
        
        
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form action="{{route('topic-edited')}}" method="Post">  
             @csrf 

             <input type="hidden" name="id" value="{{$data->id}}">
              <div class="card-body row">
                <div class="form-group col-lg-3">
                  <label>Name:</label>
                  <input type="text" name="t_name" class="form-control" value="{{$data['t_name']}}">
                </div>
                <div class="form-group col-lg-9">
                  <label>Discription:</label>
                  <input type="text" name="t_diss" class="form-control"  value="{{$data['t_diss']}}">
                </div>
                
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary"><i class="far fa-save"></i>  Save Changes</button>
              </div>
            </form>
          </div>
        </div>
    
@endsection