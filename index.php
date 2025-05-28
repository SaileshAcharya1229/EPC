<?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section id="home" class="hero">
      <h1 class="display-4 fw-bold">EPC - Your Trusted Home Service Partner</h1>
      <p class="lead">
        Get professional home services at your doorstep, anytime, anywhere.
      </p>
      <div class="download-buttons d-flex gap-3 mt-4">
        <a href="#"
          ><img
            src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
            alt="Google Play"
        /></a>
        <a href="#"
          ><img
            src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
            alt="App Store"
        /></a>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
      <div class="container about-content">
        <img
          src="https://picsum.photos/500/300"
          alt="About Us"
          class="about-img"
        />
        <div>
          <h2>About Us</h2>
          <p>
            Hami Sangai connects you with professional service providers for all
            your home needs, offering seamless booking experiences. Whether you
            need plumbing, electrical, cleaning, or any other service, we make
            sure you get the best at your doorstep.
          </p>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5">
      <div class="container text-center">
        <h2>Our Services</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card service-card">
              <img
                src="https://picsum.photos/200/150"
                alt="Plumbing"
                loading="lazy"
              />
              <h4>Plumbing</h4>
              <p>Expert plumbing services at your doorstep.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card service-card">
              <img
                src="https://picsum.photos/200/150"
                alt="Electrical"
                loading="lazy"
              />
              <h4>Electrical</h4>
              <p>Professional electricians for all your needs.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card service-card">
              <img
                src="https://picsum.photos/200/150"
                alt="Cleaning"
                loading="lazy"
              />
              <h4>Cleaning</h4>
              <p>Thorough cleaning services for your home.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="py-5">
      <div class="container text-center">
        <h2>Latest Blog Posts</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="blog-card">
              <img
                src="https://picsum.photos/300/200"
                alt="Blog 1"
                loading="lazy"
              />
              <div class="card-body">
                <h5 class="card-title">How to Choose the Right Plumber</h5>
                <p class="card-text">
                  In this post, we share tips on selecting a reliable plumber
                  for your home services.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blog-card">
              <img
                src="https://picsum.photos/300/200"
                alt="Blog 2"
                loading="lazy"
              />
              <div class="card-body">
                <h5 class="card-title">Electrical Safety Tips</h5>
                <p class="card-text">
                  Learn about essential electrical safety tips for your home to
                  prevent accidents.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blog-card">
              <img
                src="https://picsum.photos/300/200"
                alt="Blog 3"
                loading="lazy"
              />
              <div class="card-body">
                <h5 class="card-title">Essential Home Cleaning Tips</h5>
                <p class="card-text">
                  Keep your home spotless with these cleaning hacks and
                  techniques.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="view-all">
        <a href="blog.php" class="view-more-btn">View All</a>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
      <div class="container contact-content">
        <div class="contact-info">
          <h2>Contact Us</h2>
          <ul>
            <li>Address: Kathmandu, Nepal</li>
            <li>Email: info@hamisangai.com</li>
            <li>Phone: +977 123 456 789</li>
          </ul>
        </div>
        <div class="contact-form">
          <h2>Get in Touch</h2>
          <form action="#">
            <input type="text" name="name" placeholder="Your Name" required />
            <input
              type="email"
              name="email"
              placeholder="Your Email"
              required
            />
            <textarea
              name="message"
              placeholder="Your Message"
              rows="4"
              required
            ></textarea>
            <button type="submit">Send Message</button>
          </form>
        </div>
      </div>
    </section>

   
  <?php include 'footer.php'; ?>