<section class="footer-section">
    <footer class="footer">
        <div class="footer-container">
          <div class="footer-logo">
            <h1>Finsweet</h1>
          </div>
          <div class="footer-links">
            <div class="footer-column">
              <h3>Our team</h3>
              <ul>
                <li><a href="{{ route('about-us.index') }}">About us</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="{{ route('what-we-do.index') }}">What we do</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h3>More</h3>
              <ul>
                <li><a href="#">Projects</a></li>
                <li><a href="{{ route('event-details.index') }}">Events</a></li>
                <li><a href="{{ route('donation.index') }}">Donate</a></li>
                <li><a href="#">Blog</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h3>Connect</h3>
              <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">LinkedIn</a></li>
              </ul>
            </div>
          </div>
          <div class="footer-subscribe">
            <h3>Subscribe to get latest updates</h3>
            <form class="subscribe-form">
              <input type="email" placeholder="Your email" required />
              <button type="submit">Subscribe</button>
            </form>
          </div>
        </div>
      </footer>      
</section>