@extends("base.base")

@section('title', 'Accueil')

@section('content')
<div class="breadcrumb-bar">
    <div class="container">
      <div class="row align-items-center text-center">
        <div class="col-md-12 col-12">
          <h2 class="breadcrumb-title">About us</h2>
          <nav aria-label="breadcrumb" class="page-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0);">Pages</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                About us
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <section class="section about-sec">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-down">
          <div class="about-img">
            <div class="about-exp">
              <span>12+ years of experiences</span>
            </div>
            <div class="abt-img">
              <img
                src="assets/img/about-us.png"
                class="img-fluid"
                alt="About us"
              />
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-down">
          <div class="about-content">
            <h6>ABOUT OUR COMPANY</h6>
            <h2>Best Solution For Cleaning Services</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim minim veniam, quis nostrud exercitation ullamco laboris
              nisi esse cillum dolore eu fugiat nulla pariatur. Excepteur
              sint occaecat cupidatat non proident, sunt in culpa qui
              officia deserunt mollit anim id est laborum.
            </p>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem aperiam, eaque
              ipsa quae ab illo inventore veritatis et quasi architecto
              beatae vitae dicta sunt explicabo.
            </p>
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <li>At vero et accusamus iusto dignissimos</li>
                  <li>At vero et accusamus iusto dignissimos</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul>
                  <li>Nam libero tempore, cum soluta nobis</li>
                  <li>Nam libero tempore, cum soluta nobis</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section services bg-light-primary">
    <div class="service-right">
      <img
        src="assets/img/bg/service-right.svg"
        class="img-fluid"
        alt="services right"
      />
    </div>
    <div class="container">
      <div class="section-heading" data-aos="fade-down">
        <h2>How It Works</h2>
        <p>
          Lorem Ipsum has been the industry's standard dummy text ever since
          the 1500s,
        </p>
      </div>

      <div class="services-work">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
            <div class="services-group">
              <div class="services-icon border-secondary">
                <img
                  class="icon-img bg-secondary"
                  src="assets/img/icons/services-icon-01.svg"
                  alt="Choose Locations"
                />
              </div>
              <div class="services-content">
                <h3>1. Choose Locations</h3>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s,
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
            <div class="services-group">
              <div class="services-icon border-warning">
                <img
                  class="icon-img bg-warning"
                  src="assets/img/icons/services-icon-02.svg"
                  alt="Choose Locations"
                />
              </div>
              <div class="services-content">
                <h3>2. Pick-Up Locations</h3>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s,
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
            <div class="services-group">
              <div class="services-icon border-dark">
                <img
                  class="icon-img bg-dark"
                  src="assets/img/icons/services-icon-03.svg"
                  alt="Choose Locations"
                />
              </div>
              <div class="services-content">
                <h3>3. Book your Car</h3>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s,
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section facts-number">
    <div class="facts-left">
      <img
        src="assets/img/bg/facts-left.png"
        class="img-fluid"
        alt="facts left"
      />
    </div>
    <div class="facts-right">
      <img
        src="assets/img/bg/facts-right.png"
        class="img-fluid"
        alt="facts right"
      />
    </div>
    <div class="container">
      <div class="section-heading" data-aos="fade-down">
        <h2 class="title text-white">Facts By The Numbers</h2>
        <p class="description text-white">
          Lorem Ipsum has been the industry's standard dummy text ever since
          the 1500s,
        </p>
      </div>

      <div class="counter-group">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
            <div class="count-group flex-fill">
              <div class="customer-count d-flex align-items-center">
                <div class="count-img">
                  <img src="assets/img/icons/bx-heart.svg" alt="Icon" />
                </div>
                <div class="count-content">
                  <h4><span class="counterUp">16</span>K+</h4>
                  <p>Happy Customers</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
            <div class="count-group flex-fill">
              <div class="customer-count d-flex align-items-center">
                <div class="count-img">
                  <img src="assets/img/icons/bx-car.svg" alt="Icon" />
                </div>
                <div class="count-content">
                  <h4><span class="counterUp">2547</span>+</h4>
                  <p>Count of Cars</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
            <div class="count-group flex-fill">
              <div class="customer-count d-flex align-items-center">
                <div class="count-img">
                  <img src="assets/img/icons/bx-headphone.svg" alt="Icon" />
                </div>
                <div class="count-content">
                  <h4><span class="counterUp">625</span>K+</h4>
                  <p>Car Center Solutions</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
            <div class="count-group flex-fill">
              <div class="customer-count d-flex align-items-center">
                <div class="count-img">
                  <img src="assets/img/icons/bx-history.svg" alt="Icon" />
                </div>
                <div class="count-content">
                  <h4><span class="counterUp">200</span>K+</h4>
                  <p>Total Kilometer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-choose">
    <div class="choose-left">
      <img
        src="assets/img/bg/choose-left.png"
        class="img-fluid"
        alt="Why Choose Us"
      />
    </div>
    <div class="container">
      <div class="section-heading" data-aos="fade-down">
        <h2>Why Choose Us</h2>
        <p>
          Lorem Ipsum has been the industry's standard dummy text ever since
          the 1500s,
        </p>
      </div>

      <div class="why-choose-group">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
            <div class="card flex-fill">
              <div class="card-body">
                <div class="choose-img choose-black">
                  <img src="assets/img/icons/bx-selection.svg" alt="Icon" />
                </div>
                <div class="choose-content">
                  <h4>Easy & Fast Booking</h4>
                  <p>
                    Completely carinate e business testing process whereas
                    fully researched customer service. Globally extensive
                    content with quality.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
            <div class="card flex-fill">
              <div class="card-body">
                <div class="choose-img choose-secondary">
                  <img src="assets/img/icons/bx-crown.svg" alt="Icon" />
                </div>
                <div class="choose-content">
                  <h4>Many Pickup Location</h4>
                  <p>
                    Enthusiastically magnetic initiatives with
                    cross-platform sources. Dynamically target testing
                    procedures through effective.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
            <div class="card flex-fill">
              <div class="card-body">
                <div class="choose-img choose-primary">
                  <img
                    src="assets/img/icons/bx-user-check.svg"
                    alt="Icon"
                  />
                </div>
                <div class="choose-content">
                  <h4>Customer Satisfaction</h4>
                  <p>
                    Globally user centric method interactive. Seamlessly
                    revolutionize unique portals corporate collaboration.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section about-testimonial testimonials-section">
    <div class="container">
      <div class="section-heading" data-aos="fade-down">
        <h2 class="title text-white">What People say about us?</h2>
        <p class="description text-white">
          Lorem Ipsum has been the industry's standard dummy text ever since
          the 1500s,
        </p>
      </div>

      <div
        class="owl-carousel about-testimonials testimonial-group mb-0 owl-theme"
      >
        <div class="testimonial-item d-flex">
          <div class="card flex-fill">
            <div class="card-body">
              <div class="quotes-head"></div>
              <div class="review-box">
                <div class="review-profile">
                  <div class="review-img">
                    <img
                      src="assets/img/profiles/avatar-02.jpg"
                      class="img-fluid"
                      alt="img"
                    />
                  </div>
                </div>
                <div class="review-details">
                  <h6>Rabien Ustoc</h6>
                  <div class="list-rating">
                    <div class="list-rating-star">
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                    </div>
                    <p><span>(5.0)</span></p>
                  </div>
                </div>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
        </div>

        <div class="testimonial-item d-flex">
          <div class="card flex-fill">
            <div class="card-body">
              <div class="quotes-head"></div>
              <div class="review-box">
                <div class="review-profile">
                  <div class="review-img">
                    <img
                      src="assets/img/profiles/avatar-03.jpg"
                      class="img-fluid"
                      alt="img"
                    />
                  </div>
                </div>
                <div class="review-details">
                  <h6>Valerie L. Ellis</h6>
                  <div class="list-rating">
                    <div class="list-rating-star">
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                    </div>
                    <p><span>(5.0)</span></p>
                  </div>
                </div>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
        </div>

        <div class="testimonial-item d-flex">
          <div class="card flex-fill">
            <div class="card-body">
              <div class="quotes-head"></div>
              <div class="review-box">
                <div class="review-profile">
                  <div class="review-img">
                    <img
                      src="assets/img/profiles/avatar-04.jpg"
                      class="img-fluid"
                      alt="img"
                    />
                  </div>
                </div>
                <div class="review-details">
                  <h6>Laverne Marier</h6>
                  <div class="list-rating">
                    <div class="list-rating-star">
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                    </div>
                    <p><span>(5.0)</span></p>
                  </div>
                </div>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
        </div>

        <div class="testimonial-item d-flex">
          <div class="card flex-fill">
            <div class="card-body">
              <div class="quotes-head"></div>
              <div class="review-box">
                <div class="review-profile">
                  <div class="review-img">
                    <img
                      src="assets/img/profiles/avatar-06.jpg"
                      class="img-fluid"
                      alt="img"
                    />
                  </div>
                </div>
                <div class="review-details">
                  <h6>Sydney Salmons</h6>
                  <div class="list-rating">
                    <div class="list-rating-star">
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                    </div>
                    <p><span>(5.0)</span></p>
                  </div>
                </div>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
        </div>

        <div class="testimonial-item d-flex">
          <div class="card flex-fill">
            <div class="card-body">
              <div class="quotes-head"></div>
              <div class="review-box">
                <div class="review-profile">
                  <div class="review-img">
                    <img
                      src="assets/img/profiles/avatar-07.jpg"
                      class="img-fluid"
                      alt="img"
                    />
                  </div>
                </div>
                <div class="review-details">
                  <h6>Lucas Moquin</h6>
                  <div class="list-rating">
                    <div class="list-rating-star">
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                    </div>
                    <p><span>(5.0)</span></p>
                  </div>
                </div>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section faq-section bg-light-primary">
    <div class="container">
      <div class="section-heading" data-aos="fade-down">
        <h2>Frequently Asked Questions</h2>
        <p>
          Lorem Ipsum has been the industry's standard dummy text ever since
          the 1500s,
        </p>
      </div>

      <div class="faq-info">
        <div class="faq-card bg-white" data-aos="fade-down">
          <h4 class="faq-title">
            <a
              class="collapsed"
              data-bs-toggle="collapse"
              href="#faqOne"
              aria-expanded="false"
              >What is about rental car deals?</a
            >
          </h4>
          <div id="faqOne" class="card-collapse collapse">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </div>
        <div class="faq-card bg-white" data-aos="fade-down">
          <h4 class="faq-title">
            <a
              class="collapsed"
              data-bs-toggle="collapse"
              href="#faqTwo"
              aria-expanded="false"
              >In which areas do you operate?</a
            >
          </h4>
          <div id="faqTwo" class="card-collapse collapse">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </div>
        <div class="faq-card bg-white" data-aos="fade-down">
          <h4 class="faq-title">
            <a
              class="collapsed"
              data-bs-toggle="collapse"
              href="#faqThree"
              aria-expanded="false"
              >Sed ut perspiciatis unde omnis iste natus error sit
              voluptatem accusantium doloremque laudantium?</a
            >
          </h4>
          <div id="faqThree" class="card-collapse collapse">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </div>
        <div class="faq-card bg-white" data-aos="fade-down">
          <h4 class="faq-title">
            <a
              class="collapsed"
              data-bs-toggle="collapse"
              href="#faqFour"
              aria-expanded="false"
              >Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
              odit aut fugit, sed quia?</a
            >
          </h4>
          <div id="faqFour" class="card-collapse collapse">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </div>
        <div class="faq-card bg-white" data-aos="fade-down">
          <h4 class="faq-title">
            <a
              class="collapsed"
              data-bs-toggle="collapse"
              href="#faqFive"
              aria-expanded="false"
              >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
              do eiusmod tempor?</a
            >
          </h4>
          <div id="faqFive" class="card-collapse collapse">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </div>
        <div class="faq-card bg-white" data-aos="fade-down">
          <h4 class="faq-title">
            <a
              class="collapsed"
              data-bs-toggle="collapse"
              href="#faqSix"
              aria-expanded="false"
              >eque porro quisquam est, qui dolorem ipsum quia dolor sit
              amet, consectetur, adipisci velit?</a
            >
          </h4>
          <div id="faqSix" class="card-collapse collapse">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </div>
        <div class="faq-card bg-white" data-aos="fade-down">
          <h4 class="faq-title">
            <a
              class="collapsed"
              data-bs-toggle="collapse"
              href="#faqSeven"
              aria-expanded="false"
              >Nam libero tempore, cum soluta nobis est eligendi optio
              cumque nihil impedit quo minus id quod?</a
            >
          </h4>
          <div id="faqSeven" class="card-collapse collapse">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
