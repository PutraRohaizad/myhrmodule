<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout.partials.head')
</head>

<body>

  @include('layout.partials.nav')

  @include('layout.partials.header')
  {{-- @include('layouts.app') --}}

  <div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
      @yield('content')
      
    </div>
  </div>
  @include('layout.partials.footer-scripts')


</body>

</html>