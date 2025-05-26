@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<body class="index-page">

<!-- header -->



<!-- /header -->
  <main class="main">

    <!-- Hero Section -->
    <x-hero-section />



    <!-- About Section -->

        <x-about-us />


    <!-- /About Section -->

    <!-- Stats Section -->
        <x-stats />
    <!-- /Stats Section -->

    <!-- Features Section -->
    <!-- /Features Section -->

    <!-- Services Section (what-we-offer) -->


        <x-what-we-offer />

    <!-- /Services Section -->

    <!-- Appointment Section --><!-- /Appointment Section -->

    <!-- Tabs Section -->
    <section id="research-projects" class="tabs section light-background">

        <x-research-projects />

    </section><!-- /Tabs Section -->

    <!-- Testimonials Section --><!-- /Testimonials Section -->

    <!-- Doctors Section -->
    <section id="team" class="doctors section ">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Team</h2>
    <p>Meet the people driving innovation, research, and impact at Kaun AI.</p>
  </div>

  <!-- Tabs -->
  <ul class="nav nav-tabs justify-content-center mb-4" id="teamTabs" role="tablist">
    <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#leadership">Leadership</button></li>
    <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#medical">Medical</button></li>
    <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#scientific">Scientific</button></li>
    <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#software">Software</button></li>
    <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#engineering">Engineering</button></li>
    <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#advisory">Advisory</button></li>
    <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#extended">Extended Network</button></li>

</ul>

  <!-- Tab Contents -->
  <div class="container tab-content">

    <div class="tab-pane fade show active" id="leadership">
      <x-team.leadership />
    </div>

    <div class="tab-pane fade" id="medical">
      <x-team.medical />
    </div>

    <div class="tab-pane fade" id="scientific">
      <x-team.scientific />
    </div>

    <div class="tab-pane fade" id="software">
      <x-team.software />
    </div>

    <div class="tab-pane fade" id="engineering">
      <x-team.engineering />
    </div>

    <div class="tab-pane fade" id="advisory">
      <x-team.advisory />
    </div>

    <div class="tab-pane fade" id="extended">
      <x-team.extended />
    </div>


  </div>

</section>


<!-- join-us -->
        <x-join-us />
<!-- /join-us -->

<!-- whitepaper -->
        <x-whitepaper />
<!-- /whitepaper -->

<!-- whitepaper -->
        <x-blog />
<!-- /whitepaper -->


    <!-- Contact Section -->
        <x-contact />
    <!-- /Contact Section -->

  </main>

  <!-- FOOTER -->


  <!--/ FOOTER -->
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->

  <!-- Vendor JS Files -->
@endsection
