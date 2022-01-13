@extends('template.default')
@section('content')

        <!-- Main body of User -->
        <div class="row">
          <div class="col-md-6">
            <h4>User List</h4> 		
 	        </div>
          <div class="col-md-6">
            <a class="btn btn-primary" style="float:right" type="button" href="{{route('add-user')}}"><i class="fas fa-user-plus"></i> Add User</a>
		      </div>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">City</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php $i=1
                @endphp

                @foreach ($members as $item)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->city}}</td>
                  <td>
                    <div class="dropdown d-inline">
                      <button class="btn btn-primary dropdown-toggle" type="button" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item has-icon" href="{{route('user-edit',['id'=>$item->id])}}"><i class="fas fa-user-edit"></i> Edit </a>
                        <a class="dropdown-item has-icon" href="{{route('delete-user',['id'=>$item->id])}}"><i class="fas fa-trash"></i> Delete </a>
                      </div>
                    </div>
                  </td>
                </tr>
                
                @endforeach
              </tbody>
            </table>
          </div>
          </div>
        </div>
            
 
@endsection