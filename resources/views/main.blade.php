<!DOCTYPE html>
<html lang="en">
  <head>
    @include('_head')
  </head>
  <body>
      <!-- navbar   -->
    @include('_nav')

    <div class="container">
      @include('_messages')
      @yield('content')

      @include('_footer')
    </div> <!--   end of container -->

        @include('_javascript')
  </body>
</html>