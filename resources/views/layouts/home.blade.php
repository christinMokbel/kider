<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        
    @include('includes.spinner')

    @include('includes.navbar')
  

    @include('includes.carousel')
       

    @include('includes.facilities')

       
    @include('includes.about') 

    @include('includes.call') 
       


    @include('includes.classes')    

    @include('includes.appointment')
        


    @include('includes.team')  


    @include('includes.testimonial')   


        
    @include('includes.footer') 

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('includes.footerjs')
</body>

</html>