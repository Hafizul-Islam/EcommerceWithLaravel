@extends('Admin.layout.app')

@section('main-content')

<div class="x_panel">

     @if(session()->has('message'))
      <h4 class="alert alert-success">{{session()->get('message')}}</h4>
    @endif
                  <div class="x_title">
                    <h2>SubCategory Table <small>different form elements</small></h2>
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
                    <form method="POST" action="{{ route('subcategory.store') }}" class="form-horizontal form-label-left">
                      {{csrf_field()}}
                     <div id="root">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Category Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control"  placeholder="Category name" name="name" v-model="input">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Slug </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" name="slug"
                             :value="slug">
                        </div>
                      </div>
                  </div>
                    


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

@section('slug-scripts')

<script type="text/javascript">
  const app = new Vue({
  el: '#root',

  data: {
    input: ''
  },

  computed: {
    slug: function () {
      return this.slugify(this.input)
    }
  },

  methods: {

    slugify (text, ampersand = 'and') {
      const a = 'àáäâèéëêìíïîòóöôùúüûñçßÿỳýœæŕśńṕẃǵǹḿǘẍźḧ'
      const b = 'aaaaeeeeiiiioooouuuuncsyyyoarsnpwgnmuxzh'
      const p = new RegExp(a.split('').join('|'), 'g')

      return text.toString().toLowerCase()
        .replace(/[\s_]+/g, '-')
        .replace(p, c =>
          b.charAt(a.indexOf(c)))
        .replace(/&/g, `-${ampersand}-`)
        .replace(/[^\w-]+/g, '')
        .replace(/--+/g, '-')
        .replace(/^-+|-+$/g, '')
    }
  }
})

</script>

@endsection
<script src="{{ asset('js/app.js') }}"></script> <!--Must Be included for slug -->