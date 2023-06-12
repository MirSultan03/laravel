<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend.includes.header')
</head>

<body>

	@include('frontend.includes.nav')

  <!-- ======= Hero Section ======= -->
 	@include('frontend.includes.slider')
  <main id="main">

  	@include('frontend.includes.started')

    @include('frontend.includes.constraction')

    @include('frontend.includes.services')

    @include('frontend.includes.alt-services')

    @include('frontend.includes.featurs')

    @include('frontend.includes.project')

 	@include('frontend.includes.testi')


 
   	@include('frontend.includes.recent')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
	@inlude('frontend.includes.footer')
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  	@include('frontend.includes.script')

</body>

</html>