<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.components.head')
  </head>
  <body>
    <div class="container">
        @yield('content')
    </div>
    @include('layouts.components.script')
  </body>
</html>