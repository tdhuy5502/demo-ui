@extends('index')
@section('customizeCSS')
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endsection
<section>
    <div class="info-section">
        <div class="container">
            <div class="row p-5 mt-5">
                <div class="left-column">
                    <div class="contact-us">CONTACT US</div>
                    <h1>We'd love to hear from you</h1>
                    <p>Have any question in mind or want to enquire? Please feel free to contact us through the form or the following details.</p>
                </div>
                <div class="right-column">
                    <h2>Let's talk!</h2>
                    <div class="contact-info">
                        <div class="contact-info-row">
                            <p><a class="contact-phone" href="tel:+123456789">+1 23 456 789</a></p>
                            <p><a class="contact-email" href="mailto:hello@finsweet.com">hello@finsweet.com</a></p>
                        </div>
                    </div>
                    <hr>
                    <h3>Headoffice</h3>
                    <p>8 Brewery Drive, Hudson, NH 03051<br>USA</p>
                    <hr>
                    <h3>Branch Office</h3>
                    <p>178 Marconi St., Venice, 34293<br>Italy</p>
                    
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                        </a>
                        <a href="#" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                        </a>
                        <a href="#" aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="form-section">
        <div class="row">
            <form action="#" method="POST" class="contact-form">
                <div class="row row-cols-2">
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first-name" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last-name" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="row row-cols-2">
                    <div class="form-group">
                        <label for="email">Email Id</label>
                        <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Type your message" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send message</button>
            </form>
        </div>
        <div class="map-container">
            <div class="map">
                <img src="{{ asset('assets/Map.svg') }}" alt="map">
            </div>
        </div>
    </div>
</section>