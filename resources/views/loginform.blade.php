@extends('template.default')
@section('content')

        <div class="section-header">
            <div class="row">
		        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
					<div class="section-header-breadcrumb-content">
				    	<h1>Basic Form</h1>       
                    </div>
                </div>
            </div>
        </div>
        <form action="person" method="POST">
            @csrf
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Basic Elements</h4>
                            </div>
                            <div class="card body">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Title 1</label>
                                            <input type="text" class="form-control" name="t_1"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Title 2</label>
                                            <input type="text" class="form-control" name="t_2"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Title 3</label>
                                            <input type="text" class="form-control" name="t_3"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Title 4</label>
                                            <input type="text" class="form-control" name="t_4"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Title 5</label>
                                            <input type="text" class="form-control" name="t_5"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" value="" name="t_6"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Image 1</label>
                                            <input type="file" class="form-control" name="img_1"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Image 2</label>
                                            <input type="file" class="form-control" name="img_2"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Image 3</label>
                                            <input type="file" class="form-control" name="img_3"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Image 4</label>
                                            <input type="file" class="form-control" name="img_4"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Image 5</label>
                                            <input type="file" class="form-control" name="img_5"/>
                                        </div>
                                    </div>
                                </div>
                                
                            </div><button type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
@endsection