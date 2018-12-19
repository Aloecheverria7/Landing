<html>
@section('htmlheader')
    @include('layouts.layouts.partials.htmlheader')
@show
<body>
<div id="all">
  <div id="loader-wrapper" style="display: none;">
     <div class="tt-loading-center">
      <div class="tt-loading-center-absolute">
       <div class="tt-object object_four"></div>
       <div class="tt-object object_three"></div>
       <div class="tt-object object_two"></div>
       <div class="tt-object object_one"></div>
      </div>
     </div>
    </div>
  @section('TopBar')
      @include('layouts.layouts.partials.TopBar')
  @show
  @include('layouts.layouts.partials.mainheader')
@yield('content')
    <!-- Top bar-->
    <!-- Top bar end-->
    <!-- Login Modal-->
    <!-- Login modal end-->
    <!-- Navbar Start-->
    <!-- Navbar End-->
    <!--Content-->
<!-- FOOTER -->
@include('layouts.layouts.partials.footer')
</body>
</html>
