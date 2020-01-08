@include('Admin.layout.header')

@include('Admin.layout.sidebar')

	<!-- page content -->
    <div class="right_col" role="main">
          <main class='app-content'>
          	@section('main-content')
          	@show
          </main>
	</div>
    <!-- /page content -->

@include('Admin.layout.footer')