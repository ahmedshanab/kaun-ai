<section id="hero" class="hero section d-flex align-items-center">

  <div class="hero-image-wrapper position-absolute top-0 start-0 w-100 h-100">
    <img src="{{ asset('assets/img/homepage.jpeg') }}" alt="Homepage Hero" class="hero-img">
  </div>



</section>

<style>.hero {
  position: relative;
  height: 100vh;
  overflow: hidden;
}

.hero-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-image-wrapper {
  z-index: 1;
}

.hero .container {
  z-index: 2;
}

@media (max-width: 768px) {
  .hero {
    height: 75vh;
  }

  .hero h2 {
    font-size: 2rem;
  }

  .hero p {
    font-size: 1rem;
  }
}

</style>
