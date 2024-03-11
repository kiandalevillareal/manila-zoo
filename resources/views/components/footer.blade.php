<div class="footer">
    <x-trees/>
    <div class="footer__list">
        <div class="footer__upper">
            <div class="footer__links">
                <p>Quick Links</p>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('animals') }}">Animals</a></li>
                    <li><a href="{{ route('plants') }}">Plants</a></li>
                </ul>
            </div>
            <div class="footer__links">
                <p>Other Pages</p>
                <ul>
                    <li><a href="{{ route('guidelines') }}">Guidelines</a></li>
                    <li><a href="{{ route('tickets') }}">Tickets</a></li>
                    <li><a href="{{ route('events') }}">Events</a></li>
                    <li><a href="">Location Maps</a></li>
                </ul>
            </div>
            <div class="footer__links">
                <p>Contact Information</p>
                <div class="link__wrapper">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>M. Adriatico St., Malate, Manila, 1004 Metro Manila</p>
                </div>
                <div class="link__wrapper">
                    <i class="fa-solid fa-envelope"></i>
                    <p>manilazoo@manila.gov.ph</p>
                </div>
                <div class="link__wrapper">
                    <i class="fa-brands fa-facebook"></i>
                    <p>Manila Zoo Official</p>
                </div>
            </div>
            <div class="footer__links">
                <p>Subscribe to our newsletter</p>
                <div>
                    <p>Rediscover the Manila Zoo and see the animals. The place has greatly improved! And let's encourage friends and family to go and say hello to the animals.</p>
                </div>
                <form class="news__wrapper" id="news__form">
                    <input type="email" placeholder="johndoe@gmail.com" required data-parsley-required-message="Email is required.">
                    <button id="subscribe">Subscribe</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="footer__lower">
            <div class="hidden">Copyright 2023. All rights reserved</div>
            <div class="footer__logo" onclick="location.href='{{ route('home') }}'">
                <img src="{{Vite::asset("resources/images/logo.png")}}" alt="">
            </div>
            <div class="footer__copyright">Copyright 2023. All rights reserved</div>
        </div>
    </div>
</div>
    
<script src="{{Vite::asset('resources/js/footer.js')}}"></script>