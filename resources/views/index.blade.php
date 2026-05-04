@php
    $pageTitle = "Providing Web Development Solutions";
    $pageDescription = "";
    $pageKeywords = "";
@endphp
<x-app-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageKeywords="$pageKeywords">
    <div class="banner-flex banner home-banner" data-aos="fade-up" data-aos-duration="1000">
        <div class="content-text">
            <span class="span-background">Marketing & Design Agency</span>
            <h1 class="mtop-10 mbot-10 font-40 bg heading-home">Empowering Your Digital Transformation</h1>
            <p class="grey bold mbot-20">
                Our team of visionary experts merges cutting-edge technology with artistic brilliance to create digital
                experiences that leave a lasting impression.
            </p>
            <a href="{{ route('about-us') }}">
                <button class="primary">About Us</button>
            </a>
        </div>
        <div class="content-image banner-slider">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="{{ asset('images/home-banner-slider-1.webp') }}" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('images/home-banner-slider-2.webp') }}" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('images/home-banner-slider-3.webp') }}" style="width:100%">
                </div>

            </div>
        </div>
    </div>
    <hr class="border-hr LeftToRight" />
    <div class="banner center services-home" data-aos="fade-up" data-aos-duration="1000">
        <span class="heading-tagline">Best Features</span>
        <h2 class="mtop-10 mbot-10 font-40 bg">
            We are a new digital product development agency
        </h2>
        <div class="banner-flex">
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/design-icon.webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">Design</h3>
                        <p>
                            Our talented team creates captivating logos, user-friendly websites, and eye-catching
                            marketing materials.
                        </p>
                    </a>
                </div>
            </div>
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/development-icon.webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">Development</h3>
                        <p>
                            With a focus on responsive designs and seamless functionality, we guarantee a superior user
                            experience
                            across
                            all devices.
                        </p>
                    </a>
                </div>
            </div>
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/brand.webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">Branding</h3>
                        <p>
                            We create compelling brand strategies, captivating logos, cohesive visual elements, and
                            memorable brand
                            messaging.
                        </p>
                    </a>
                </div>
            </div>
            </a>
        </div>
        <div class="banner-flex">
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/ui-icon.webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">UI Design</h3>
                        <p>
                            Our team of UI Designing experts brings your ideas to life, creating intuitive user
                            interfaces that enhance
                            the user experience.
                        </p>
                    </a>
                </div>
            </div>
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/ux-icon (2).webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">UX Design</h3>
                        <p>
                            At Squad Tech, we prioritize delivering exceptional user experiences that go beyond
                            aesthetics. Our UX
                            Designing services focus on understanding your target audience, their behavior, and needs.
                        </p>
                    </a>
                </div>
            </div>
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/wireframe-icon.webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">Wireframing</h3>
                        <p>
                            Our skilled team excels in creating detailed wireframes that define the layout, structure,
                            and content
                            hierarchy of your website or application. By visualizing the user journey early on, we
                            ensure a solid
                            blueprint for development.
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="banner-flex">
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/coding-icon.webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">Web Design</h3>
                        <p>
                            Our team of skilled designers combines aesthetics with functionality to create captivating
                            online
                            experiences. From seamless navigation to captivating graphics, we craft websites that leave
                            a lasting
                            impression on your audience.
                        </p>
                    </a>
                </div>
            </div>
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/ecommerce.webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">Ecommerce Solution</h3>
                        <p>
                            Unlock the potential of your online store with our comprehensive ecommerce solutions. We
                            specialize in
                            creating robust and scalable ecommerce platforms that empower your business to thrive in the
                            digital
                            marketplace.
                        </p>
                    </a>
                </div>
            </div>
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/optimization-icon.webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">Web Optimization & SEO</h3>
                        <p>
                            Maximize your online visibility and reach with our web optimization and SEO services. Our
                            experts employ
                            proven strategies to enhance your website's performance, improve search engine rankings, and
                            drive organic
                            traffic.
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="banner-flex">
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/marketing-icon.webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">Digital Marketing</h3>
                        <p>
                            Our Digital Marketing solutions help you reach and engage your target audience effectively.
                            From strategic
                            planning to execution, we leverage the power of digital channels to boost your brand's
                            visibility and drive
                            conversions.
                        </p>
                    </a>
                </div>
            </div>
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/logo-design.webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">Logo Design</h3>
                        <p>
                            Make a lasting impression with a unique and memorable brand identity. Our Logo Designing
                            services are
                            dedicated to creating logos that truly represent your brand essence.
                        </p>
                    </a>
                </div>
            </div>
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/branding-icon.webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">Brand Identity</h3>
                        <p>
                            Establishing a strong and cohesive Brand Identity is crucial for brand recognition and
                            differentiation. Our
                            experts work closely with you to develop a distinct brand identity that captures your brand
                            essence and
                            resonates with your target audience.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="workSamplesSliderBtns banner-flex">
        <div class="sliderHeading">
            <h2 class="bg font-40 mtop-20 mbot-20">Our Logo Samples</h2>
        </div>
        <div class="slider-btns">
            <button class="slide-arrow slide-arrow-prev" type="button">
                &#8249;
            </button>
            <button class="slide-arrow slide-arrow-next" type="button">
                &#8250;
            </button>
        </div>
    </div>
    <div class="slider work-samples-slider">
        <div class="slider-wrapper">
            <div class="slides-container">
                <div class="slide logo"><img src="{{ asset('images/logos/sample-one.webp') }}" alt="project-img-2" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-three.webp') }}" alt="project-img-3" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-four.webp') }}" alt="project-img-4" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-five.webp') }}" alt="project-img-5" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-six.webp') }}" alt="project-img-6" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-seven.webp') }}" alt="project-img-7" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-eight.webp') }}" alt="project-img-8" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-nine.webp') }}" alt="project-img-9" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-ten.webp') }}" alt="project-img-10" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-one.webp') }}" alt="project-img-1" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-eleven.webp') }}"
                        alt="project-img-11" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-twelve.webp') }}"
                        alt="project-img-12" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-thirteen.webp') }}"
                        alt="project-img-13" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-fourteen.webp') }}"
                        alt="project-img-114" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-sixteen.webp') }}"
                        alt="project-img-16" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-eighteen.webp') }}"
                        alt="project-img-18" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-nineteen.webp') }}"
                        alt="project-img-19" />
                </div>
                <div class="slide logo"><img src="{{ asset('images/logos/sample-twenty.webp') }}"
                        alt="project-img-20" />
                </div>
            </div>
        </div>
    </div>
    <div class="workSamplesSliderBtns banner-flex">
        <div class="sliderHeading">
            <h2 class="bg font-40 mtop-20 mbot-20">Our Website Samples</h2>
        </div>
        <div class="slider-btns">
            <button class="slide-arrow slide-arrow-prev" type="button">
                &#8249;
            </button>
            <button class="slide-arrow slide-arrow-next" type="button">
                &#8250;
            </button>
        </div>
    </div>
    <div class="slider work-samples-slider">
        <div class="slider-wrapper">
            <div class="slides-container">
                <div class="slide"><img src="{{ asset('images/projects/sample-two.webp') }}" alt="project-img-2" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-three.webp') }}" alt="project-img-3" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-four.webp') }}" alt="project-img-4" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-five.webp') }}" alt="project-img-5" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-six.webp') }}" alt="project-img-6" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-seven.webp') }}" alt="project-img-7" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-eight.webp') }}" alt="project-img-8" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-nine.webp') }}" alt="project-img-9" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-ten.webp') }}" alt="project-img-10" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-one.webp') }}" alt="project-img-1" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-eleven.webp') }}" alt="project-img-11" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-twelve.webp') }}" alt="project-img-12" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-thirteen.webp') }}"
                        alt="project-img-13" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-fourteen.webp') }}"
                        alt="project-img-114" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-sixteen.webp') }}" alt="project-img-16" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-eighteen.webp') }}"
                        alt="project-img-18" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-nineteen.webp') }}"
                        alt="project-img-19" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-twenty.webp') }}" alt="project-img-20" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-twentyOne.webp') }}"
                        alt="project-img-21" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-twentyTwo.webp') }}"
                        alt="project-img-22" />
                </div>
                <div class="slide"><img src="{{ asset('images/projects/sample-twentyThree.webp') }}"
                        alt="project-img-23" /></div>
            </div>
        </div>
    </div>
    <div class="banner center services-home" data-aos="fade-up" data-aos-duration="1000">
        <span class="heading-tagline">Customer Reviews</span>
        <h2 class="mtop-10 mbot-10 font-40 bg">
            Customer Satisfaction! Our Top Priority
        </h2>
        <div class="banner-flex">
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/user-icon.webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">John Parker</h3>
                        <p>
                            SquadTech has completely transformed how we manage our tech needs. Their team is fast,
                            reliable, and always professional. Highly recommend!
                        </p>
                    </a>
                </div>
            </div>
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/user-icon.webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">Emily Rodriguez</h3>
                        <p>
                            Our workflow has never been smoother. Their solutions really make a difference and help us
                            save time and resources
                        </p>
                    </a>
                </div>
            </div>
            <div class="tabs">
                <div class="icon">
                    <img src="{{ asset('images/user-icon.webp') }}" alt="" />
                </div>
                <div class="text" style="text-align: left">
                    <a href="{{ route('services') }}">
                        <h3 class="mbot-10">Michael Thompson</h3>
                        <p>
                            The support is outstanding! Every question is answered promptly, and they
                            genuinely care about making sure we’re satisfied.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="popUp">
        <div class="form banner-flex">
            <div class="img">
                <img src="{{ asset('images/form.webp') }}" alt="">
            </div>
            <div class="quoteForm">
                <span class="closePopUp" onclick="modelFunctionClose()"><i class="fa-solid fa-xmark"></i></span>
                <form method="post" id="home-form">
                    <input type="text" name="home_name" id="home_name" placeholder="Name">
                    <input type="text" name="home_number" id="home_number" placeholder="Number"><br>
                    <input type="email" name="home_email" id="home_email" placeholder="Email"><br>
                    <input type="text" name="home_project_type" id="home_project_type" placeholder="Project Type"><br>
                    <textarea name="home_project_description" id="" cols="26" rows="5"
                        placeholder="Project Description"></textarea><br>
                    <button class="primary" name="getQuote">Get Quote</button>
                </form>
            </div>
        </div>
    </div>
    @php
        if (isset($_POST["getQuote"])) {
            $name = $_POST["home_name"];
            $email = $_POST["home_email"];
            $number = $_POST["home_number"];
            $project_type = $_POST["home_project_type"];
            $project_description = $_POST["home_project_description"];

            $sender = $email;
            $recipient = 'sales@squadtechsolution.com';

            $subject = "Home Page Quote Submission";
            $message = "
                                                                                                                                                                                                                                                                                                                                                                                                                            Customer Information
                                                                                                                                                                                                                                                                                                                                                                                                                    Customer Name = $name
                                                                                                                                                                                                                                                                                                                                                                                                                    Customer Email = $email
                                                                                                                                                                                                                                                                                                                                                                                                                    Customer Number = $number
                                                                                                                                                                                                                                                                                                                                                                                                                    Project Type = $project_type
                                                                                                                                                                                                                                                                                                                                                                                                                    Project Description = $project_description
                                                                                                                                                                                                                                                                                                                                                                                                                    "
            ;
            $headers = 'From:' . $sender;

            if (mail($recipient, $subject, $message, $headers)) {
                echo "
                                                                                                                                                                                                                                                                                                                                                                                                                        <script>
                                                                                                                                                                                                                                                                                                                                                                                                                            alert('Form Submitted')
                                                                                                                                                                                                                                                                                                                                                                                                                        </script>
                                                                                                                                                                                                                                                                                                                                                                                                                        ";
            } else {
                echo "
                                                                                                                                                                                                                                                                                                                                                                                                                        <script>
                                                                                                                                                                                                                                                                                                                                                                                                                            alert('Plz Try Again')
                                                                                                                                                                                                                                                                                                                                                                                                                        </script>
                                                                                                                                                                                                                                                                                                                                                                                                                        ";
            }
        }
    @endphp
</x-app-layout>
