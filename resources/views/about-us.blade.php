@php
    $pageTitle = "About Us";
    $pageDescription = "";
    $pageKeywords = "";
@endphp
<x-app-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageKeywords="$pageKeywords">
    <div class="banner about-banner" data-aos="fade-up" data-aos-duration="1000">
        <h1 class="font-40 bg center mtop-80 p-center">
            Collaborative Minds, Technological Pioneers: Meet Our Expert Team Driving Technological Advancements
        </h1>
    </div>
    <div class="about-img" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('images/about.webp') }}" alt="" />
    </div>
    <div class="whoWeAre banner-flex" data-aos="fade-up" data-aos-duration="1000">
        <div class="heading">
            <h2>About Us</h2>
        </div>
        <div class="text">
            <p class="grey">
                Welcome to Squad Tech Solutions, where we redefine the boundaries of web development and design. Our
                team of
                visionary experts merges cutting-edge technology with artistic brilliance to create digital experiences
                that leave
                a lasting impression.
            </p>
        </div>
    </div>
    <div class="whoWeAreSec" data-aos="fade-up" data-aos-duration="1000">
        <p class="grey mbot-20">
            With a keen eye for detail and a passion for innovation, Squad Tech Solutions goes beyond building websites.
            We
            sculpt immersive online environments that engage and inspire, crafting visually striking designs that
            captivate your
            audience from the first click.
            But we don't stop there. We believe in the power of storytelling. Our creative wizards go beyond aesthetics,
            weaving
            narratives that breathe life into your brand. From meticulously crafted logos to seamless user interfaces,
            every
            element tells a compelling story that sets you apart.
        </p>
        <p class="grey">
            With Squad Tech Solutions as your partner, you can expect nothing less than a digital masterpiece. We go
            beyond
            conventional boundaries, pushing the limits of what's possible to deliver exceptional results that elevate
            your
            business to unprecedented heights.
            Experience the difference of true artistry combined with technical expertise. Join us at Squad Tech
            Solutions and
            embark on a journey that will revolutionize your digital presence. Together, we'll make your brand a legend
            in the
            digital realm.
        </p>
    </div>
    <div class="banner-flex vision-mission">
        <div class="vision">
            <h2 class="">Vision</h2>
            <div class="sub-vision">
                <p class="grey">We envisage a paradigm shift in the digital realm, transcending the
                    boundaries
                    of conventional web development and design. Our vision is to forge a new path, where technology
                    seamlessly intertwines with artistic brilliance, creating awe-inspiring digital experiences that
                    redefine the way brands connect with their audiences. We aspire to be pioneers in the industry,
                    revolutionizing the digital landscape by setting new standards of innovation, creativity, and
                    unparalleled excellence.</p>
            </div>
            <p></p>
        </div>
        <div class="mission">
            <h2 class="">Mission</h2>
            <div class="sub-mission">
                <p class="grey">Empowering businesses with visionary digital solutions that propel them towards
                    unprecedented
                    success. Driven by our passion for pushing the limits of what's possible, we strive to understand
                    the
                    intricacies of our clients' objectives and weave their stories into immersive online environments.
                    Through
                    meticulous craftsmanship, and a profound understanding of user behavior, we endeavor to craft
                    captivating
                    digital journeys that resonate deeply, and inspires lasting connections.</p>
            </div>
        </div>
    </div>
    <div class="banner-flex team-members" data-aos="fade-up" data-aos-duration="1000">
        <div class="staff">
            <span class="span-background">Our Staff</span>
            <h2 class="mtop-20 mbot-20 font-40 bg">
                Meet Our Team
            </h2>
            <p class="mbot-20">
                Within the realm of Squad Tech Solutions, we are privileged to introduce our formidable collective, a
                congregation
                of exceptional talents that propels our triumphs. From visionary web developers, ingenious designers,
                and digital
                marketing virtuosos to wordsmiths with an impeccable command over content, every team member is a
                testament to our
                unwavering commitment to excellence.
            </p>
            <p>
                Nurtured in a collaborative ecosystem that fosters innovation and defies limits, our team is an
                embodiment of
                passion, dedication, and unwavering resolve to exceed expectations. Enlist our services and unlock the
                prowess of
                our experts, as they breathe life into your digital aspirations with unmatched expertise and boundless
                creativity.
            </p>
        </div>
        <div class="staff-img display-flex">
            <div class="employee employee-one">
                <div class="position-overlay">
                    <h3>Kevin Alvarado</h3>
                    <p>Business Development Manager</p>
                </div>
                <img src="{{ asset('images/employee-one.webp') }}" alt="" />
            </div>
            <div class="employee employee-two">
                <div class="position-overlay">
                    <h3>Kevin Alvarado</h3>
                    <p>Business Development Manager</p>
                </div>
                <img src="{{ asset('images/employee-two.webp') }}" alt="" />
            </div>
            <div class="employee employee-three">
                <div class="position-overlay">
                    <h3>Kimone Cambell</h3>
                    <p>Business Development Manager</p>
                </div>
                <img src="{{ asset('images/employee-three.webp') }}" alt="" />
            </div>
            <div class="employee employee-four">
                <div class="position-overlay">
                    <h3>Kevin Alvarado</h3>
                    <p>Business Development Manager</p>
                </div>
                <img src="{{ asset('images/employee-four.webp') }}" alt="" />
            </div>
        </div>
    </div>
    <h1 class="bg center" style="margin-top:20px">Our Offices</h1>
    <div class="banner-flex location">
        <div class="img">
        </div>
        <div class="offices banner-flex">
            <div class="office">
                <i class="fa-regular fa-building" style="color: #000000;"></i>
                <h3>Office</h3>
                <p>276 Holten Ave,
                    Staten Island, NY
                    10309</p>
            </div>
        </div>
    </div>
</x-app-layout>
