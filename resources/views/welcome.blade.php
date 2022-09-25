
<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend/includes/head');
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  @include('frontend/includes/header');


  <!-- ======= Hero Section ======= -->
  @include('frontend/includes/hero');
 

  <main id="main">

    <!-- ======= About Section ======= -->
    
    @include('frontend/includes/about');

    <!-- ======= Facts Section ======= -->
    @include('frontend/includes/fact');
    

    <!-- ======= Skills Section ======= -->
    @include('frontend/includes/skill');
   

    <!-- ======= Resume Section ======= -->
    @include('frontend/includes/resume');
    

    <!-- ======= Portfolio Section ======= -->

    @include('frontend/includes/portfolio');

    <!-- ======= Services Section ======= -->
   
    @include('frontend/includes/service');

    <!-- ======= Testimonials Section ======= -->
    @include('frontend/includes/testomonial');

    <!-- ======= Contact Section ======= -->
    @include('frontend/includes/contact');
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontend/includes/footer');
 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  @include('frontend/includes/script');

</body>

</html>