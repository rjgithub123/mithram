@extends('layouts.app')

@section('title', 'Mithram Houseboat - Welcome')

@section('content')
  <main class="main">
    <!-- Floating WhatsApp Button -->
<a href="#" class="whatsapp-float" data-bs-toggle="modal" data-bs-target="#whatsappModal">
  <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" width="50" />
</a>


    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" data-bs-interval="5000" class="carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background: url('assets/img/houseboat-sliders/houseboat2.png') center center; background-size: cover;">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to Mithram</h2>
            <p class="animate__animated animate__fadeInUp">Experience Alleppey like never before. Glide through calm backwaters, enjoy delicious onboard cuisine, and relax in the comfort of our beautifully crafted houseboats. Your peaceful escape starts here.</p>
          </div>
        </div>

       
        <!-- Slide 2 -->
        <!-- <div class="carousel-item"  style="background: url('assets/img/houseboat-sliders/houseboat4.jpg') center center; background-size: cover;">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">A Voyage of Comfort & Taste</h2>
            <p class="animate__animated animate__fadeInUp">Glide through Alleppey’s scenic waterways while enjoying gourmet cuisine and world-class comfort. Our houseboats offer the perfect blend of relaxation, adventure, and indulgence.</p>
          </div>
        </div> -->

        <!-- Slide 3 -->
        <div class="carousel-item"  style="background: url('assets/img/houseboat-sliders/houseboat.jpg') center center; background-size: cover;">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Your Backwater Retreat</h2>
            <p class="animate__animated animate__fadeInUp">Escape the everyday and immerse yourself in the serene beauty of Alleppey. Relax on our handcrafted houseboats, delight in fresh local flavors, and embrace a peaceful, unforgettable journey.</p>
          </div>
        </div>

         <!-- Slide 4 -->
        <div class="carousel-item"  style="background: url('assets/img/houseboat-sliders/houseboat3.jpg') center center; background-size: cover;">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Experience The Nature Magic</h2>
            <p class="animate__animated animate__fadeInUp">Discover the enchanting backwaters of Alleppey aboard our traditional houseboats. Immerse yourself in nature's tranquility, savor authentic Kerala cuisine, and create unforgettable memories on this serene journey.</p>
          </div>
        </div>

          <!-- Slide 4 -->
        <div class="carousel-item"  style="background: url('assets/img/houseboat-sliders/houseboat5.jpg') center center; background-size: cover;">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Serenity on the Backwaters</h2>
            <p class="animate__animated animate__fadeInUp">Discover the enchanting backwaters of Alleppey aboard our traditional houseboats. Immerse yourself in nature's tranquility, savor authentic Kerala cuisine, and create unforgettable memories on this serene journey.</p>
          </div>
        </div>

        

       

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
   <section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>About</h2>
    <p>Who We Are</p>
  </div>
  <!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <p>
          We offer a peaceful and memorable houseboat experience through the serene backwaters of Alappuzha. Our mission is to provide guests with a relaxing escape filled with comfort, warmth, and the true beauty of Kerala’s waterways.
        </p>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>Well-maintained houseboats with clean and comfortable rooms.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Traditional Kerala meals freshly prepared onboard.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Friendly and experienced crew to assist throughout your trip.</span></li>
        </ul>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <p>
          Whether you’re planning a romantic getaway, a family trip, or a group tour, we ensure an unforgettable journey through lush landscapes, narrow canals, and peaceful villages. Our services are designed to make your stay comfortable, safe, and truly refreshing.
        </p>
        <!-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
      </div>

    </div>

  </div>

</section>


    <!-- Features Section -->
    <section id="features" class="features section">

     

    </section><!-- /Features Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Experience the beauty of Alappuzha like never before.</h3>
            <p>Relax, unwind, and enjoy a peaceful cruise through the backwaters in one of our premium houseboats. Whether it’s a family trip, honeymoon, or a weekend escape, we’re here to make your journey unforgettable.

Book your houseboat today and enjoy a truly refreshing getaway.</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>What we do offer</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-cash-stack" style="color: #0dcaf0;"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Houseboat Cruises</h3>
              </a>
              <p>Enjoy peaceful backwater cruises through the scenic canals of Alappuzha with well-maintained, comfortable houseboats.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week" style="color: #fd7e14;"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Day & Overnight Packages</h3>
              </a>
              <p>Choose from flexible day trips or fully-serviced overnight stays with meals, sightseeing, and onboard relaxation.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-text" style="color: #20c997;"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Premium & Deluxe Boats</h3>
              </a>
              <p>Select from standard, deluxe, and luxury houseboats based on your budget and travel style.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-credit-card-2-front" style="color: #df1529;"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Onboard Dining</h3>
              </a>
              <p>Relish freshly prepared Kerala cuisine served onboard by our trained chef, including veg and non-veg options.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-globe" style="color: #6610f2;"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Family & Group Packages</h3>
              </a>
              <p>Enjoy customized packages for families and groups, ensuring a memorable and comfortable experience for everyone.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-clock" style="color: #f3268c;"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Honeymoon Houseboats</h3>
              </a>
              <p>Experience romantic getaways on specially designed houseboats with private amenities and personalized services.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->



  
    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>What they are saying about us</p>
      </div><!-- End Section Title -->

      <div class="container">

     <div class="row gy-3">

  <!-- Standard Package -->
  <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
    <div class="pricing-item">
      <h3>Standard</h3>
      <h4><sup>₹</sup>7,000<span> / night</span></h4>
      <ul>
        <li>1 Bedroom A/C Houseboat</li>
        <li>Welcome drink</li>
        <li>Lunch, Evening Snacks & Dinner</li>
        <li class="">Morning Cruise</li>
        <li class="na">Candle Light Dinner</li>
      </ul>
      <!-- <div class="btn-wrap">
        <a href="#" class="btn-buy">Book Now</a>
      </div> -->
    </div>
  </div><!-- End Pricing Item -->

  <!-- Deluxe Package -->
  <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
    <div class="pricing-item featured">
      <h3>Deluxe</h3>
      <h4><sup>₹</sup>9,500<span> / night</span></h4>
      <ul>
        <li>1–2 Bedroom A/C Houseboat</li>
        <li>All Meals Included (Kerala Menu)</li>
        <li>Sunset Cruise</li>
        <li>Evening Tea & Snacks</li>
        <li class="na">Private Honeymoon Decor</li>
      </ul>
      <!-- <div class="btn-wrap">
        <a href="#" class="btn-buy">Book Now</a>
      </div> -->
    </div>
  </div><!-- End Pricing Item -->

  <!-- Premium Package -->
  <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
    <div class="pricing-item">
      <h3>Premium</h3>
      <h4><sup>₹</sup>12,000<span> / night</span></h4>
      <ul>
        <li>Luxury A/C Houseboat</li>
        <li>Private Dining Space</li>
        <li>Customizable Menu</li>
        <li>Evening Cruise + Morning Cruise</li>
        <li>Special Kerala Fish Fry</li>
      </ul>
      <!-- <div class="btn-wrap">
        <a href="#" class="btn-buy">Book Now</a>
      </div> -->
    </div>
  </div><!-- End Pricing Item -->

  <!-- Honeymoon Package -->
  <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
    <div class="pricing-item">
      <span class="advanced">Popular</span>
      <h3>Honeymoon</h3>
      <h4><sup>₹</sup>14,500<span> / night</span></h4>
      <ul>
        <li>Luxury 1 Bedroom A/C Houseboat</li>
        <li>Floral Bed Decoration</li>
        <li>Candle Light Dinner</li>
        <li>Private Cruise Experience</li>
        <li>Welcome Drink + Special Dessert</li>
      </ul>
      <!-- <div class="btn-wrap">
        <a href="#" class="btn-buy">Book Now</a>
      </div> -->
    </div>
  </div><!-- End Pricing Item -->

</div>


      </div>

    </section><!-- /Pricing Section -->





    <!-- Recent Posts Section -->
  <section id="recent-posts" class="recent-posts section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Houseboat Gallery</h2>
    <p>Beautiful moments from our backwater cruises</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <article>

          <div class="post-img">
            <img src="assets/img/houseboat.jpg" alt="Houseboat Image 1" class="img-fluid">
          </div>

          <!-- Removed blog category, title, author, date -->
          <h2 class="title text-center mt-2">Scenic Backwater View</h2>

        </article>
      </div><!-- End item -->

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <article>

          <div class="post-img">
            <img src="assets/img/houseboat1.jpg" alt="Houseboat Image 2" class="img-fluid">
          </div>

          <h2 class="title text-center mt-2">Premium Houseboat Deck</h2>

        </article>
      </div><!-- End item -->

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <article>

          <div class="post-img">
            <img src="assets/img/houseboat.jpg" alt="Houseboat Image 3" class="img-fluid">
          </div>

          <h2 class="title text-center mt-2">Relaxing Sunset Cruise</h2>

        </article>
      </div><!-- End item -->

      

    </div><!-- End row -->

  </div><!-- End container -->

</section><!-- End section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="text" class="form-control" name="phone_no" placeholder="Your Phone Number" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="text" class="form-control" name="country" placeholder="Your Country" required="">
                </div>

                <!-- <div class="col-md-6 ">
                  <input type="date" class="form-control" name="date_arrival" placeholder="Your Date of Arrival" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="date" class="form-control" name="date_departure" placeholder="Your Date of Departure" required="">
                </div> -->


                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

@endsection