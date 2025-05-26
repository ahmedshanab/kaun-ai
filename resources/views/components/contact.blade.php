
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
  </div><!-- End Section Title -->
    <!--
  <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
    <iframe style="border:0; width: 100%; height: 370px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>End Google Maps -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">
      <div class="col-lg-6 ">
        <div class="row gy-4">

          <div class="col-lg-12">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>Kaun AI gGmbH, An der Kolonnade 11-13, 10117 Berlin</p>
              <div class="w-100 d-flex justify-content-center">
      <p class="small text-muted text-start" style="max-width: 300px;">
        Please note: This is a virtual address used for correspondence and official mail purposes only.
      </p>
    </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>COOMING SOON</p>

            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>info@KaunAi.org</p>
            </div>
          </div><!-- End Info Item -->

        </div>
      </div>

      <div class="col-lg-6">
        <form action="{{ route('contact.send') }}" method="POST"  data-aos="fade-up" data-aos-delay="500">
          @csrf
            <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              @if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

    <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill" style="background-color: #1977cc; border: none;">Send Message
    </button>
      </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section>


