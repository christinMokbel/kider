<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        
    @include('includes.spinner')

    @include('includes.navbar')
  

    @include('includes.header')
       
    @yield('content')
        
    @include('includes.footer') 

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('includes.footerjs')
</body>

</html>