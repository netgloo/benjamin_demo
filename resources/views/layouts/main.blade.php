@extends($benjamin, ['bodyClass' => 'skin-green'])


{{-- Title --}}
@section('title')
  @yield('page-title') - Benjamin Demo
@endsection


{{-- Body --}}
@section('body')
  
  <div class="wrapper">

    @include('layouts.header')

    @include('layouts.sidebar', ['active' => $active])

    <div class="content-wrapper">
      
      <!-- Main content -->
      <section class="content" style="min-height:500px; position:relative;">

        <div class="row">
          <div class="col-xs-12">

            @yield('content')

          </div>
          <!-- /.col-xs-12 -->

        </div>
        <!-- /.row -->

      </section>
      <!-- /.content body -->
      
    </div>
    <!-- /.content-wrapper -->

    @include('layouts.footer')

  </div>
  <!-- /.wrapper -->

@endsection
