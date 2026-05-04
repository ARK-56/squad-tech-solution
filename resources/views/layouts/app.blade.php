<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name') . ' - ' . $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">
    <meta name="keywords" content="{{ $pageKeywords }}">

    <link rel="icon" href="{{ asset('images/logo-icon.webp') }}" />
    <link rel="apple-touch-icon" href="{{ asset('images/logo-icon.webp') }}" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body onload="pageLoader()">
    <div class="loader">
        <div class="loader-image">
            <img src="{{ asset('images/logo-icon.webp') }}" alt="" />
        </div>
        <div class="loader-section">
            <div class="loader-color"></div>
        </div>
    </div>
    <header class="header display-none">
        <div id="logo">
            <a href="/">
                <img src="{{ asset('images/logo.webp') }}" alt="squadtech-logo" />
            </a>
        </div>
        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="nav"
            aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div id="nav">
            <ul>
                <a href="/">
                    <li>Home</li>
                </a>
                <a href="{{ route('services') }}">
                    <li>Services</li>
                </a>
                <a href="{{ route('customer-industries') }}">
                    <li>Customers & Industries</li>
                </a>
                <a href="{{ route('about-us') }}">
                    <li>About Us</li>
                </a>
                <a href="{{ route('contact-us') }}">
                    <li>Contact Us</li>
                </a>
            </ul>
        </div>
    </header>
    <!-- HEADER END -->
    <main class="container">
        {{ $slot }}
    </main>
    <!-- FOOTER START -->
    <footer class="display-none mtop-40">
        <div class="info">
            <h2 class="bg mbot-20">Contact Us</h2>
            <div class="address banner-flex">
                <div class="icon">
                    <img src="" alt="" />
                </div>
                <div class="text">
                    <h4 class="bg">Main Office/UK Office</h4>
                    <p>The Garage,
                        114 Markhouse Road,
                        E17 8BG, London</p>
                    <h4 class="bg">US Office</h4>
                    <p>428 Southwest 80th Avenue,
                        North Lauderdale, Florida
                        33068</p>
                    <h4 class="bg">Pakistan Office</h4>
                    <p>75 Hamid Hussain Farooqi Rd, Block 2 PECHS, Karachi, 75100</p>
                </div>
            </div>
            <div class="email banner-flex">
                <div class="icon">
                    <img src="" alt="" />
                </div>
                <div class="text">
                    <h4 class="bg">Email Us</h4>
                    <p>info@squadtechsol.com</p>
                    <p>inquiry@squadtechsol.com</p>
                    <p>career@squadtechsol.com</p>
                </div>
            </div>
        </div>
        <div class="news">
            <h2 class="bg mbot-20">Recent News</h2>
            <div class="blog">
                <div class="img">
                    <img src="{{ asset('images/Blog 01.webp') }}" alt="" style="width:100%;" />
                </div>
                <div class="content">
                    <a href="{{ route('blogs.the-pros-and-cons-of-outsourcing') }}">
                        <p>The Pros and Cons of Outsourcing IT Services</p>
                        <span class="bg sub-text">07 june 2023</span>
                    </a>
                </div>
            </div>
            <div class="blog">
                <div class="img">
                    <img src="{{ asset('images/Blog 02.webp') }}" alt="" style="width:100%;" target="_blank" />
                </div>
                <div class="content">
                    <a href="{{ route('blogs.the-benefits-of-virtualization-in-IT') }}">
                        <p>The Benefits of Virtualization in IT Environments</p>
                        <span class="bg sub-text">23 may 2023</span>
                    </a>
                </div>
            </div>
            <div class="blog">
                <div class="img">
                    <img src="{{ asset('images/Blog 03.webp') }}" alt="" style="width:100%;" />
                </div>
                <div class="content">
                    <a href="{{ route('blogs.the-benefits-and-risks-of-BYOD') }}">
                        <p>The Benefits and Risks of BYOD (Bring Your Own Device) Policies</p>
                        <span class="bg sub-text">07 may 2023</span>
                    </a>
                </div>
            </div>
            <div class="blog">
                <div class="img">
                    <img src="{{ asset('images/Blog 04.webp') }}" alt="" style="width:100%;" />
                </div>
                <div class="content">
                    <a href="{{ route('blogs.digital-transformation-the-key-to-business-success') }}">
                        <p>Digital Transformation: The Key to Business Success</p>
                        <span class="bg sub-text">29 april 2023</span>
                    </a>
                </div>
            </div>
            <div class="blog">
                <div class="img">
                    <img src="{{ asset('images/Blog 05.webp') }}" alt="" style="width:100%;" />
                </div>
                <div class="content">
                    <a href="{{ route('blogs.things-to-consider-while-upgrading-your-website') }}">
                        <p>Things to Consider while upgrading your website</p>
                        <span class="bg sub-text">05 april 2023</span>
                    </a>
                </div>
            </div>
            <div class="blog">
                <div class="img">
                    <img src="{{ asset('images/Blog 06.webp') }}" alt="" style="width:100%;" />
                </div>
                <div class="content">
                    <a href="{{ route('blogs.why-and-when-do-you-need-a-website-upgrade') }}">
                        <p>Why & When do you need a website Upgrade</p>
                        <span class="bg sub-text">14 march 2023</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="socials">
            <a href="/"><img class="logo" src="{{ asset('images/logo.webp') }}" alt="" /></a>
            <div class="social-icons banner-flex mtop-10 mbot-10">
                <a href="https://www.facebook.com/squadtechsolution" target="_blank"><img
                        src="{{ asset('images/facebook-icon.webp') }}" alt="facebook" /></a>
                <a href="https://wa.me/19544177926" target="_blank"><img src="{{ asset('images/whatsapp.webp') }}"
                        alt="whatsapp" class="whatsapp" /></a>
                <a href="https://www.linkedin.com/company/squad-tech-solution/" target="_blank"><img
                        src="{{ asset('images/linkedin-icon.webp') }}" alt="linkedin" class="linkedin" /></a>
                <a href="https://instagram.com/squadtech.solution?igshid=MzRlODBiNWFlZA==" target="_blank"><img
                        src="{{ asset('images/insta-icon.webp') }}" alt="linkedin" class="instagram" /></a>
            </div>
            <span class="sub-text">© 2023, Squad Tech Solution</span>
            <div class="btn">
                <a href="{{ route('contact-us') }}">
                    <button class="inTouch-btn">Get In Touch</button>
                </a>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
        AOS.init();
        window.addEventListener("load", AOS.refresh());
    </script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
</body>

</html>
