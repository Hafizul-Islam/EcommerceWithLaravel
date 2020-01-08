@extends('Admin.layout.app')

@section('main-content')
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Category Table <small>Stripped table subtitle</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Category</th>
                          <th>slug</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($category as $item)
                        <tr>
                          
                          <td>{{$item->id}}</td>
                          <td>{{$item->CategoryName}}</td>
                          <td>{{$item->slug}}</td>
                        </tr>
                        @endforeach
             
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

@endsection