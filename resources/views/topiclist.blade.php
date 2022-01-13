@extends('template.default')
@section('content')

        <!-- Main body of User -->
        <div class="row">
          <div class="col-md-6">
            <h4>Topic List</h4> <br>
 	        </div>
          <div class="col-md-6">
            <a class="btn btn-primary" style="float:right" type="button" href="{{route('add-topic')}}"><i class="fas fa-user-plus"></i> Add Topic</a>
		      </div>
        </div>
        <div>
          {{$members->onEachSide(5)->links()}}
        </div>
          <br>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" style="font-size:17px;">
              <thead>
                <tr style="background-color:lightpink;">
                  <th class="col-md-1" scope="col">#</th>
                  <th class="col-md-2" scope="col">Name</th>
                  <th class="col-md-8" scope="col">Discription</th>
                  <th class="col-md-1" scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php $i=1
                @endphp

                @foreach ($members as $item)
                <tr>
                  <td style="background-color:lightgray; color:blue" >{{$i++}}</td>
                  <td style="background-color:brown; color:white" >{{$item->t_name}}</td>
                  <td style="background-color:lightgray; color:blue">{{$item->t_diss}}</td>
                  <td style="background-color:lightpink;">
                    <div class="dropdown d-inline">
                      <button class="btn btn-primary dropdown-toggle" type="button" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item has-icon" href="{{route('topic-edit',['id'=>$item->id])}}"><i class="fas fa-user-edit"></i> Edit </a>
                        <a class="dropdown-item has-icon" href="{{route('delete-topic',['id'=>$item->id])}}"><i class="fas fa-trash"></i> Delete </a>
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
    
      <style>
        .w-5{
          display:none;
        }
      </style>
 
@endsection