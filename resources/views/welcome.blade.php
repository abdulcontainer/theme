@extends('template.default')
@section('content')

        <!-- Main body of Home -->
        
        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Topics</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="mainTable" class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Discription</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Partialization Edited</td>
                            <td>Partialization in theme ( Head, Nav, Sidebar, Footer)</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Laravel Topics</td>
                            <td>Laravel Topics that I have cover yet</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Crud Operations with USER </td>
                            <td>User Read, Add, Update, & Delete </td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Joins</td>
                            <td>Cont.....</td>
                          </tr>
                          
                        </tbody>
                        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection