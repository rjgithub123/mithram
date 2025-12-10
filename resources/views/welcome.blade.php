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
        <div class="carousel-item active" 
     style="background: url('{{ asset('assets/img/houseboat-sliders/houseboat2.png') }}') center center; background-size: cover;">
    <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Welcome to Mithram</h2>
        <p class="animate__animated animate__fadeInUp">
            Experience Alleppey like never before. Glide through calm backwaters, enjoy delicious onboard cuisine, and relax in the comfort of our beautifully crafted houseboats. Your peaceful escape starts here.
        </p>
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
        <div class="carousel-item"  style="background: url('{{ asset('assets/img/houseboat-sliders/houseboat.jpg') }}') center center; background-size: cover;">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Your Backwater Retreat</h2>
            <p class="animate__animated animate__fadeInUp">Escape the everyday and immerse yourself in the serene beauty of Alleppey. Relax on our handcrafted houseboats, delight in fresh local flavors, and embrace a peaceful, unforgettable journey.</p>
          </div>
        </div>

         <!-- Slide 4 -->
        <div class="carousel-item"  style="background: url('{{ asset('assets/img/houseboat-sliders/houseboat3.jpg') }}') center center; background-size: cover;">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Experience The Nature Magic</h2>
            <p class="animate__animated animate__fadeInUp">Discover the enchanting backwaters of Alleppey aboard our traditional houseboats. Immerse yourself in nature's tranquility, savor authentic Kerala cuisine, and create unforgettable memories on this serene journey.</p>
          </div>
        </div>

          <!-- Slide 4 -->
        <div class="carousel-item"  style="background: url('{{ asset('assets/img/houseboat-sliders/houseboat5.jpg') }}') center center; background-size: cover;">
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


     <!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Enquiry</h2>
    <p>Enquire Now</p>
  </div>

  <div class="container" data-aos="fade" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">

        <form method="POST" action="{{ route('contact.submit') }}" class="enquiry-form" data-aos="fade-up" data-aos-delay="200">
          @csrf

          <!-- Check-in -->
        <!-- Check-in -->
<div class="input-group mb-3 form-box floating-label">
  <span class="input-group-text"><i class="bi bi-calendar"></i></span>
  <input type="date" class="form-control" name="date_of_arrival"
         value="{{ old('date_of_arrival') }}" min="{{ date('Y-m-d') }}" required>
         @error('date_of_arrival')
            <div class="text-danger">{{ $message }}</div>
         @enderror
  <label>Check-in Date</label>
</div>

<!-- Check-out -->
<div class="input-group mb-3 form-box floating-label">
  <span class="input-group-text"><i class="bi bi-calendar"></i></span>
  <input type="date" class="form-control" name="date_of_departure"
         value="{{ old('date_of_departure') }}" min="{{ date('Y-m-d') }}">
         @error('date_of_departure')
            <div class="text-danger">{{ $message }}</div>
         @enderror
  <label>Check-out Date</label>
</div>

          <!-- Guests -->
          <div class="input-group mb-3 form-box">
            <span class="input-group-text"><i class="bi bi-people"></i></span>
            <input type="number" class="form-control" name="number_of_guests"
                   value="{{ old('number_of_guests') }}" placeholder="Number of Guests" required>
          </div>

          <!-- Bedrooms -->
          <div class="input-group mb-3 form-box">
            <span class="input-group-text"><i class="bi bi-house-door"></i></span>
            <input type="number" class="form-control" name="no_of_bedrooms"
                   value="{{ old('no_of_bedrooms') }}" placeholder="Number of Bedrooms" required>
          </div>

          <!-- Category -->
          <div class="input-group mb-3 form-box">
            <span class="input-group-text"><i class="bi bi-list"></i></span>
            <select class="form-select" name="bedroom_type" required>
              <option value="" selected disabled>Select Bedrooms</option>
              <option value="Deluxe">Deluxe</option>
              <option value="Premium">Premium</option>
              <option value="Luxury">Luxury</option>
              <option value="Suite">Suite</option>
            </select>
          </div>

          <!-- Cruise Type -->
          <div class="input-group mb-3 form-box">
            <span class="input-group-text"><i class="bi bi-water"></i></span>
            <select class="form-select" name="cruise_type" required>
              <option selected disabled>Cruise Type</option>
              <option value="Day">Day Cruise</option>
              <option value="Night">Night Cruise</option>
              <option value="Full Day">Full Day</option>
              <option value="Sunset">Sunset Cruise</option>
            </select>
          </div>

          <!-- Message -->
          <div class="input-group mb-4 form-box">
            <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
            <textarea class="form-control" name="notes" rows="4"
                      placeholder="Message" required>{{ old('notes') }}</textarea>
          </div>

          <!-- Button -->
          <div class="text-center">
            <button type="submit" class="btn enquiry-btn w-100">
              Send Enquiry
            </button>
          </div>

        </form>

      </div>
    </div>
  </div>

</section>


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
            {{-- <a class="cta-btn align-middle" href="#">Call To Action</a> --}}
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



    {{-- <section id="pricing" class="pricing section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>What they are saying about us</p>
      </div>

      <div class="container">

     <div class="row gy-3">


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
 
    </div>
  </div>
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
    
    </div>
  </div>

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
    
    </div>
  </div>
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
    </div>
  </div>

</div>


      </div>

    </section> --}}





    <!-- Recent Posts Section -->
  <section id="recent-posts" class="recent-posts section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Houseboat Gallery</h2>
    <p>Beautiful moments from our backwater cruises</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">
@if( isset($galleryItems) && count($galleryItems) > 0 )
      @foreach($galleryItems->sortByDesc('created_at')->take(6) as $item)
       @php
        $extension = strtolower(pathinfo($item->image_path, PATHINFO_EXTENSION));
    @endphp
      
    
  @if(in_array($extension, ['mp4', 'webm', 'ogg']))

  @else
  <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
      <article>
          <div class="post-img">
            <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}" class="img-fluid">
          </div>

          <h2 class="title text-center mt-2">{{ $item->title }}</h2>
          </article>
            </div>
          @endif
       
    <!-- End item -->
      @endforeach
@else
      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <article>

          <div class="post-img">
            <img src="{{ asset('assets/img/houseboat.jpg') }}" alt="Houseboat Image 1" class="img-fluid">
          </div>

          <!-- Removed blog category, title, author, date -->
          <h2 class="title text-center mt-2">Scenic Backwater View</h2>

        </article>
      </div><!-- End item -->

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <article>

          <div class="post-img">
            <img src="{{ asset('assets/img/houseboat1.jpg') }}" alt="Houseboat Image 2" class="img-fluid">
          </div>

          <h2 class="title text-center mt-2">Premium Houseboat Deck</h2>

        </article>
      </div><!-- End item -->

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <article>

          <div class="post-img">
            <img src="{{ asset('assets/img/houseboat.jpg') }}" alt="Houseboat Image 3" class="img-fluid">
          </div>

          <h2 class="title text-center mt-2">Relaxing Sunset Cruise</h2>

        </article>
      </div><!-- End item -->
@endif


      

    </div><!-- End row -->

  </div><!-- End container -->

</section><!-- End section -->


   <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper">
    <script type="application/json" class="swiper-config">
{
  "loop": true,
  "speed": 600,
  "autoplay": {
    "delay": 5000
  },
  "slidesPerView": "auto",
  "autoHeight": true,
  "navigation": {
    "nextEl": ".swiper-button-next",
    "prevEl": ".swiper-button-prev"
  },
  "pagination": {
    "el": ".swiper-pagination",
    "type": "bullets",
    "clickable": true
  }
}
</script>

          <div class="swiper-wrapper align-items-center">
@if( isset($galleryItems) && count($galleryItems) > 0 )
      @foreach($galleryItems as $item)

       @php
        $extension = strtolower(pathinfo($item->image_path, PATHINFO_EXTENSION));
    @endphp
<div class="swiper-slide">
  @if(in_array($extension, ['mp4', 'webm', 'ogg']))
  <video controls autoplay muted loop style="width:100%; height:auto;">
    <source src="{{ asset('storage/' . $item->image_path) }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  @else
              <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}" style="widows: 100%; height: auto;">
  @endif

            </div>

      @endforeach
@else
          
            <div class="swiper-slide">
              <img src="{{ asset('assets/img/houseboat-sliders/houseboat2.png') }}" alt="">
            </div>

            <div class="swiper-slide">
              <img src="{{ asset('assets/img/houseboat-sliders/houseboat.jpg') }}" alt="">
            </div>

            <div class="swiper-slide">
              <img src="{{ asset('assets/img/houseboat-sliders/houseboat5.jpg') }}" alt="">
            </div>

            {{-- <div class="swiper-slide">
  <video controls autoplay muted loop style="width:100%; height:auto;">
    <source src="assets/img/portfolio/mithram.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div> --}}
@endif

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>
    
      </div>

    </section>

  </main>

@endsection