@extends('Admin.layout.app')

@section('editor-css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.5/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.5/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('Admin/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
 @endsection

@section('main-content')

<div class="x_panel">

    @if(session()->has('message'))
      <h4 class="alert alert-success">{{session()->get('message')}}</h4>
    @endif

    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

                  <div class="x_title">
                    <h2>Product table <small>different form elements</small></h2>
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
                    <br />
                    <form method="POST" action="{{ route('product.store') }}" class="form-horizontal form-label-left" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="name" class="form-control"  placeholder="Name">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Prize </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name ="prize" class="form-control"placeholder="pize">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">size </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name ="size" class="form-control"placeholder="pize">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Code</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="code" class="form-control"placeholder="Rroduct Code">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Description<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" name="description" placeholder='rows="3"'></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ctegory</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" multiple="" id ="demoSelect" name="category[]">
                            
                            @foreach($category as $item)
                            <option value="{{$item->id}}" >{{$item->CategoryName}}</option>
                            @endforeach
                          
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">SubCtegory</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control"id="demoSelect2" multiple="" name="subcategory[]">
                            @foreach($subcategory as $item)
                            <option value="{{$item->id}}" >{{$item->subCategory}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Colour</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" id="demoSelect3" multiple="multiple" name="colour[]">
                            @foreach($colour as $item)
                            <option value="{{$item->id}}" >{{$item->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Image Upload</label>
                    <input class="form-control-file"  type="file" aria-describedby="fileHelp" multiple="" name="image[]">
                    </div>


               
                      <!--

                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                          <br>
                          <small class="text-navy">Normal Bootstrap elements</small>
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" checked name="iCheck"> Checked
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" name="iCheck"> Unchecked
                            </label>
                          </div>
                        </div>
                      </div>
                      -->


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
             
@endsection 

@section('multi-select-js')
<script src="{{asset('Admin/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script type="text/javascript">
      $('#demoSelect').select2();
    </script>
    <script type="text/javascript">
      $('#demoSelect2').select2();
    </script>
     <script type="text/javascript">
      $('#demoSelect3').select2();
    </script>
 @endsection

@section('editor-js')

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.5/js/froala_editor.pkgd.min.js"></script>

    <!-- Initialize the editor. -->
    <script> $(function() { $('textarea').froalaEditor() }); </script>
 @endsection
