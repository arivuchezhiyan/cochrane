<?php include 'includes/header.php'; ?>

<section class="banner-one">
    <div class="banner-one__shape-1"></div>
    <div class="banner-one__shape-2"></div>
    <div class="banner-one__shape-4 float-bob-y">
        <img src="assets/images/shapes/banner-one-shape-4.png" alt="">
    </div>
    <div class="banner-one__shape-bg" style="background-image: url(assets/images/home/banner.png);"></div>
    <div class="container">
        <div class="banner-one__inner">
            <div class="banner-one__content">
                <h5 class="banner-one__sub-title">Your Trusted Dental Care Team</h5>
                <h2 class="banner-one__title"> Dental Care Focused on <br> Your Oral Health<br> and
                    <span>Well-Being</span>
                </h2>
                <p class="banner-one__text"> Maintaining good oral health plays an important role in overall wellness.
                    Regular brushing,<br> flossing, and routine dental visits help support healthy teeth, <br>gums, and
                    fresh breath. Our team provides comprehensive dental care<br> tailored to your individual needs.
                </p>
                <div class="banner-one__btn-and-call-box">
                    <div class="banner-one__btn">
                        <a href="contact.php" class="thm-btn">
                            <span class="fas fa-calendar-check"></span>
                            Connect With Us
                        </a>
                    </div>
                    <div class="banner-one__call">
                        <div class="banner-one__call-icon">
                            <i class="icon-phone-call"></i>
                        </div>
                        <div class="banner-one__call-content">
                            <p class="banner-one__call-sub-title">Contact Us</p>
                            <h5 class="banner-one__call-number"><a href="tel:+14039814151">+1(403) 981-4151</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-one__one-img-box">
                <div class="banner-one__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img src="assets/images/home/ban.png" alt="banner-img-1">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="appointment-three">
    <div class="appointment-three__gradient-bg"></div>
    <div class="container">
        <div class="appointment-three__inner">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="appointment-three__content">
                        <div class="section-title text-left sec-title-animation animation-style1">
                            <div class="section-title__tagline-box">
                                <span class="icon-tooth"></span>
                                <p class="section-title__tagline">Appointment</p>
                            </div>
                            <h2 class="section-title__title title-animation">
                                Book Your <span>Appointment Today</span>
                            </h2>
                        </div>
                        <div class="appointment-three__content-text">
                            <p>
                                Comprehensive Initial Checkup - Our dental team will assess your teeth, gums, and oral
                                health to identify any concerns, including tooth decay, gum disease, and other dental
                                conditions.
                            </p>
                        </div>
                        <div class="appointment-three__content-list">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="icon">
                                        <i class="icon-phone-call"></i>
                                    </div>
                                    <div class="text">
                                        <p>Appointment Line</p>
                                        <h4><a href="tel:+14039814151">+1 (403) 981-4151</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="text">
                                        <p>Email Us</p>
                                        <h4>
                                            <a
                                                href="mailto:info@cochranevalleydental.ca">info@cochranevalleydental.ca</a>
                                        </h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-clock"></i>
                                    </div>
                                    <div class="text">
                                        <p>Operating Hours</p>
                                        <h4>Tue & Wed: 11:00 AM - 7:00 PM</h4>
                                        <h4>Thu & Fri: 9:00 AM - 5:00 PM</h4>
                                        <h4>Sat: 1st & 3rd Saturday Only</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="appointment-three__form">
                        <form id="appointment-three__form" action="https://script.google.com/macros/s/AKfycbxc2u5EMNAUX6YRQGVlUR8eK9UuzqiIQs8c6O_EkVzBkMhszrcKVSCTipyPuHQUEFEE/exec" method="POST" onsubmit="return handleGoogleFormSubmit(this, event);">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="appointment-three__input">
                                        <input type="text" name="name" placeholder="Your Name" required=""
                                            aria-required="true" pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed" oninput="validateNameInput(this)">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="appointment-three__input">
                                        <input type="text" inputmode="tel" placeholder="Phone Number" name="phone" required=""
                                            aria-required="true" pattern="[\d\s+\-\(\)]+" title="Only numbers and phone symbols are allowed" oninput="validatePhoneInput(this)">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="appointment-three__input">
                                        <input type="email" placeholder="Email Address" name="email" required=""
                                            aria-required="true">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="appointment-three__input">
                                        <input type="text" placeholder="Day of Appointment" name="date" id="datepicker">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="appointment-three__input">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="appointment-three__btn">
                                <button type="submit" class="thm-btn">
                                    <span class="fas fa-calendar-check"></span>
                                    Submit Your Appointment Request
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sliding-text-two">
    <div class="sliding-text-two__wrap">
        <ul class="sliding-text-two__list list-unstyled marquee_mode">
            <li>
                <h2 data-hover="Minor Surgery" class="sliding-text-two__title">Minor Surgery</h2>
            </li>
            <li><span></span></li>
            <li>
                <h2 data-hover="Crowns & Bridges" class="sliding-text-two__title">Crowns & Bridges</h2>
            </li>
            <li><span></span></li>
            <li>
                <h2 data-hover="Clear Aligners" class="sliding-text-two__title">Clear Aligners</h2>
            </li>
            <li><span></span></li>
            <li>
                <h2 data-hover="Teeth Cleaning" class="sliding-text-two__title">Teeth Cleaning</h2>
            </li>
            <li><span></span></li>
            <li>
                <h2 data-hover="Dental Fillings" class="sliding-text-two__title">Dental Fillings</h2>
            </li>
            <li><span></span></li>
            <li>
                <h2 data-hover="Endodontics" class="sliding-text-two__title">Endodontics</h2>
            </li>
            <li><span></span></li>
        </ul>
    </div>
</section>
<section class="services-one">
    <div class="services-one__shape-bg" style="background-image: url(assets/images/shapes/services-one__shape-bg.jpg);">
    </div>
    <div class="container">

        <ul class="row">
            <li class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-one__single">
                    <div class="services-one__icon">
                        <span class="icon-brain"></span>
                    </div>
                    <div class="services-one__single-inner">
                        <h3 class="services-one__title"><a href="medicine-and-health.php">Modern Dental Care</a></h3>
                        <p class="services-one__text">We use contemporary dental technologies and treatment approaches
                            to support effective and comfortable care.</p>
                        <div class="services-one__btn-box">
                            <a href="medicine-and-health.php">
                                <i class="fas fa-plus"></i>
                                <p>Learn More</p>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-one__single">
                    <div class="services-one__icon">
                        <span class="icon-human"></span>
                    </div>
                    <div class="services-one__single-inner">
                        <h3 class="services-one__title"><a href="pregnancy-and-child-birth.php">Personalized
                                Care</a></h3>
                        <p class="services-one__text">Every patient has unique oral health needs, and we tailor our
                            dental treatment plans accordingly.</p>
                        <div class="services-one__btn-box">
                            <a href="pregnancy-and-child-birth.php">
                                <i class="fas fa-plus"></i>
                                <p>Discover More</p>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-one__single">
                    <div class="services-one__icon">
                        <span class="icon-x-ray"></span>
                    </div>
                    <div class="services-one__single-inner">
                        <h3 class="services-one__title"><a href="ear-nose-and-throat.php">Experienced Dental Team</a>
                        </h3>
                        <p class="services-one__text">Our dentists and clinical staff are committed to providing
                            patient-focused care and ongoing support for your oral health.</p>
                        <div class="services-one__btn-box">
                            <a href="ear-nose-and-throat.php">
                                <i class="fas fa-plus"></i>
                                <p>Read More</p>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-one__img-box">
                        <div class="about-one__img-one">
                            <img src="assets/images/home/about1.png" alt="">
                        </div>
                        <div class="about-one__img-two">
                            <img src="assets/images/home/about.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="about-one__right">
                    <div class="section-title text-left sec-title-animation animation-style1">
                        <div class="section-title__tagline-box">
                            <span class="icon-tooth"></span>
                            <p class="section-title__tagline">Supporting Your Oral Health</p>
                        </div>
                        <h2 class="section-title__title title-animation">
                            Dental Care Designed <br><span>Around Your Needs</span>
                        </h2>
                    </div>
                    <p class="about-one__text">
                        Regular dental care helps maintain healthy teeth and gums while reducing the risk of cavities,
                        gum disease, and other oral health concerns.
                    </p>
                    <div class="about-one__points-and-experience-box">
                        <ul class="about-one__points-box">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Insurance Plans Accepted</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Flexible Appointment Scheduling</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Licensed Dental Professionals
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-one__experience-box">
                            <div class="about-one__experience-box-inner">
                                <div class="about-one__experience-count">
                                    <h3 class="odometer" data-count="40">00</h3>
                                    <span>+</span>
                                    <p>Years</p>
                                </div>
                                <p class="about-one__experience-count-text">Combined Experience</p>
                            </div>
                            <div class="about-one__experience-icon-box" style="color: var(--mediplace-base); text-align: center; line-height: 1; display: flex; flex-direction: column; justify-content: center;">
                                <div>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div style="margin-top: 5px;">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-one__points-points-two-box">
                        <ul class="about-one__points-two-box" style="flex-wrap: nowrap; gap: 15px; margin-top: 15px;">
                            <li style="padding-top: 0; flex: 1;">
                                <div class="icon" style="height: 60px; width: 60px; min-width: 60px;">
                                    <span class="icon-hydrotherapy" style="font-size: 30px;"></span>
                                </div>
                                <div class="text">
                                    <h4 style="font-size: 18px; line-height: 1.2;">Patient-Focused Care</h4>
                                </div>
                            </li>
                            <li style="padding-top: 0; flex: 1;">
                                <div class="icon" style="height: 60px; width: 60px; min-width: 60px;">
                                    <span class="icon-syringe" style="font-size: 30px;"></span>
                                </div>
                                <div class="text">
                                    <h4 style="font-size: 18px; line-height: 1.2;">Accessible Dental Services</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="about-one__btn-and-call-box">
                        <div class="about-one__btn">
                            <a href="about-v-1.php" class="thm-btn">
                                <span class="fas fa-arrow-right"></span>
                                Learn More About Us
                            </a>
                        </div>
                        <div class="about-one__call">
                            <div class="about-one__call-icon">
                                <i class="icon-phone"></i>
                            </div>
                            <div class="about-one__call-content">
                                <p class="about-one__call-sub-title">Need Assistance?</p>
                                <h5 class="about-one__call-number"><a href="tel:+14039814151">+1(403) 981-4151</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-service-one">
    <div class="container">
        <div class="main-service-one__top">
            <div class="section-title sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="icon-hyperopia"></span>
                    <p class="section-title__tagline">Find the Right Dental Care for You</p>
                </div>
                <h2 class="section-title__title title-animation">
                    Comprehensive <span>Dental</span> Services
                </h2>
            </div>
            <div class="main-service-one__top-btn">
                <a href="services-1.php" class="thm-btn">
                    <span class="fas fa-arrow-right"></span>
                    All Services
                </a>
            </div>
        </div>
        <div class="swiper-container main-service-one__carousel">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="main-service-one__single">
                        <div class="main-service-one__single-content">
                            <div class="main-service-one__single-title">
                                <h3><a href="dental-hygiene.php">General Dentistry</a></h3>
                            </div>
                            <div class="main-service-one__single-text">
                                <p>We offer a range of dental services designed to support your oral health at every
                                    stage of life.</p>
                                <div class="main-service-one__single-btn">
                                    <a href="dental-hygiene.php">
                                        <span class="fas fa-arrow-right"></span>
                                        READ MORE
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main-service-one__single-img">
                            <img src="assets/images/home/5.png" alt="General Dentistry">
                            <div class="main-service-one__single-img-icon">
                                <span class="fas fa-hand-holding-medical"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-service-one__single">
                        <div class="main-service-one__single-content">
                            <div class="main-service-one__single-title">
                                <h3><a href="cosmetic-dentistry.php">Cosmetic Dentistry</a></h3>
                            </div>
                            <div class="main-service-one__single-text">
                                <p>We offer a range of dental services designed to support your oral health at every
                                    stage of life.</p>
                                <div class="main-service-one__single-btn">
                                    <a href="cosmetic-dentistry.php">
                                        <span class="fas fa-arrow-right"></span>
                                        READ MORE
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main-service-one__single-img">
                            <img src="assets/images/home/4.png" alt="Cosmetic Dentistry">
                            <div class="main-service-one__single-img-icon">
                                <span class="fas fa-smile"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-service-one__single">
                        <div class="main-service-one__single-content">
                            <div class="main-service-one__single-title">
                                <h3><a href="dental-implants.php">Dental Implants</a></h3>
                            </div>
                            <div class="main-service-one__single-text">
                                <p>Replace missing teeth with implant-supported solutions designed to restore
                                    appearance.</p>
                                <div class="main-service-one__single-btn">
                                    <a href="dental-implants.php">
                                        <span class="fas fa-arrow-right"></span>
                                        READ MORE
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main-service-one__single-img">
                            <img src="assets/images/home/3.png" alt="Dental Implants">
                            <div class="main-service-one__single-img-icon">
                                <span class="fas fa-teeth"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-service-one__single">
                        <div class="main-service-one__single-content">
                            <div class="main-service-one__single-title">
                                <h3><a href="sure-smile-clear-aligners.php">Clear Aligners</a></h3>
                            </div>
                            <div class="main-service-one__single-text">
                                <p>Straighten your teeth with custom-made clear aligner treatment options.</p>
                                <div class="main-service-one__single-btn">
                                    <a href="sure-smile-clear-aligners.php">
                                        <span class="fas fa-arrow-right"></span>
                                        READ MORE
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main-service-one__single-img">
                            <img src="assets/images/home/2.png" alt="Aligners">
                            <div class="main-service-one__single-img-icon">
                                <span class="fas fa-teeth-open"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-service-one__single">
                        <div class="main-service-one__single-content">
                            <div class="main-service-one__single-title">
                                <h3><a href="kids-dentistry.php">Pediatric Dentistry</a></h3>
                            </div>
                            <div class="main-service-one__single-text">
                                <p>Dental care focused on supporting children's oral health through every stage of
                                    growth.</p>
                                <div class="main-service-one__single-btn">
                                    <a href="kids-dentistry.php">
                                        <span class="fas fa-arrow-right"></span>
                                        READ MORE
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main-service-one__single-img">
                            <img src="assets/images/home/1.png" alt="Kids Dentistry">
                            <div class="main-service-one__single-img-icon">
                                <span class="fas fa-child"></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="main-service-one__nav">
            <div class="main-service-one__nav-prev">
                <span><i class="fa fa-solid fa-arrow-left left" aria-hidden="true"></i></span>
            </div>
            <div class="main-service-one__nav-next">
                <span><i class="fa fa-solid fa-arrow-right right" aria-hidden="true"></i></span>
            </div>
        </div>

    </div>
</section>
<section class="why-choose-one">
    <div class="why-choose-one__bg" style="background-image: url(assets/images/shapes/footer-one-shape-bg.png);">
    </div>
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <span class="icon-tooth"></span>
                <p class="section-title__tagline">Why Choose Our Clinic?</p>
            </div>
            <h2 class="section-title__title title-animation" style="color: white;">
                Why Patients Choose <span>Our Clinic</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="why-choose-one__points-box">
                    <ul class="why-choose-one__points">
                        <li>
                            <div class="why-choose-one__points-content">
                                <h3>Qualified Dental Professionals</h3>
                                <p>Our dental team is committed to providing attentive and evidence-based care.
                                </p>
                            </div>
                            <div class="why-choose-one__count-box">
                                <i class="icon-health-professional"></i>
                            </div>
                        </li>
                        <li>
                            <div class="why-choose-one__points-content">
                                <h3>Comfort-Oriented Care

                                </h3>
                                <p>We strive to create a welcoming environment and support patient comfort throughout treatment.
                                </p>
                            </div>
                            <div class="why-choose-one__count-box">
                                <i class="fa fa-solid fa-sack-dollar"></i>
                            </div>
                        </li>
                        <li>
                            <div class="why-choose-one__points-content">
                                <h3>Comfort-Oriented Care</h3>
                                <p>We strive to create a welcoming environment and support patient comfort throughout
                                    treatment.</p>
                            </div>
                            <div class="why-choose-one__count-box">
                                <i class="fa fa-solid fa-tooth"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="why-choose-one__img">
                    <img src="assets/images/home/trust.png" alt="Image">
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="why-choose-one__points-box why-choose-one__points-box--instyle2">
                    <ul class="why-choose-one__points why-choose-one__points--instyle2">
                        <li>
                            <div class="why-choose-one__count-box">
                                <i class="icon-health-professional"></i>
                            </div>
                            <div class="why-choose-one__points-content two">
                                <h3>Contemporary Treatment Approaches
                                </h3>
                                <p>Modern techniques and technologies designed to support efficient dental care.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="why-choose-one__count-box">
                                <i class="fa fa-solid fa-sack-dollar"></i>
                            </div>
                            <div class="why-choose-one__points-content two">
                                <h3>Patient-Focused Treatment Planning</h3>
                                <p>Care recommendations are tailored to your oral health goals and needs.</p>
                            </div>
                        </li>
                        <li>
                            <div class="why-choose-one__count-box">
                                <i class="fa fa-solid fa-tooth"></i>
                            </div>
                            <div class="why-choose-one__points-content two">
                                <h3>Advanced Dental Technology</h3>
                                <p>Utilizing current dental equipment and digital tools to support diagnosis and
                                    treatment.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="team-one">
    <div class="team-one__shape-2"></div>
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <span class="icon-tooth"></span>
                <p class="section-title__tagline">Our Clinical Team</p>
            </div>
            <h2 class="section-title__title title-animation">Meet Our <span>Dental Experts</span> </h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="team-one__single">
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="assets/images/home/Dr.Neerja-Khosla.png" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__content-inner">
                                <p class="team-one__designation">General Dentist</p>
                                <h3 class="team-one__name"><a href="our-doctors-details.php">Dr. Neerja Khosla</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="team-one__single">
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="assets/images/home/Dr.Lloyd-Evans.png" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__content-inner">
                                <p class="team-one__designation">General Dentist</p>
                                <h3 class="team-one__name"><a href="our-doctors-details.php">Dr. Lloyd Evans</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                <div class="team-one__single">
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="assets/images/home/Christine-Perrin.png" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__content-inner">
                                <p class="team-one__designation">Front Desk Administrator</p>
                                <h3 class="team-one__name"><a href="our-doctors-details.php">Christine Perrin</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="process-one">
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <span class="icon-tooth"></span>
                <p class="section-title__tagline">Our Care Process</p>
            </div>
            <h2 class="section-title__title title-animation">How We Support <span>Your Oral Health</span> </h2>
        </div>
        <div class="process-one__inner">
            <ul class="row">
                <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="process-one__single">
                        <h3 class="process-one__title">Comprehensive Examination</h3>
                        <p class="process-one__text">We begin with a thorough assessment of your oral health and discuss
                            any concerns you may have.
                        </p>
                        <div class="process-one__icon">
                            <span class="icon-syringe"></span>
                            <div class="process-one__count"></div>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="process-one__single">
                        <h3 class="process-one__title">Personalized Treatment Planning</h3>
                        <p class="process-one__text">Treatment recommendations are tailored to your individual needs and
                            goals.</p>
                        <div class="process-one__icon">
                            <span class="icon-hydrotherapy"></span>
                            <div class="process-one__count"></div>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="process-one__single">
                        <h3 class="process-one__title">Detailed Evaluation</h3>
                        <p class="process-one__text">We carefully review findings and explain available treatment
                            options.
                        </p>
                        <div class="process-one__icon">
                            <span class="icon-health-professional"></span>
                            <div class="process-one__count"></div>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="process-one__single">
                        <h3 class="process-one__title">Ongoing Care & Follow-Up</h3>
                        <p class="process-one__text">Continued support and guidance to help maintain your oral health
                            after treatment.</p>
                        <div class="process-one__icon">
                            <span class="icon-intensive-care-unit"></span>
                            <div class="process-one__count"></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="slogan-one">
    <div class="slogan-one__bg" style="background-image: url(assets/images/home/bg.png);">
    </div>
    <div class="slogan-one__shape1">
        <img src="assets/images/shapes/services-three-shape-5.png" alt="Shape">
    </div>
    <div class="container">
        <div class="slogan-one__content">
            <div class="slogan-one__content-title">
                <h2>Where Comfort Meets<br> Modern Dental Care</h2>
                <p>Providing patient-focused dental services through a combination of contemporary technology, clear
                    communication, and personalized care.</p>
            </div>
            <div class="slogan-one__content-bottom">
                <div class="slogan-one__content-btn">
                    <a href="contact.php" class="thm-btn">
                        <span class="fas fa-arrow-right"></span>
                        Get Started Today
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial-one">
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <span class="icon-tooth"></span>
                <p class="section-title__tagline">Patient Experiences</p>
            </div>
            <h2 class="section-title__title title-animation">Healthy Teeth, <span>Confident Smiles</span> </h2>
        </div>

        <div class="testimonial-one__carousel owl-theme owl-carousel">
            <div class="item">
                <div class="testimonial-one__single">
                    <div class="testimonial-one__single-inner">
                        <div class="testimonial-one__star">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <p class="testimonial-one__text">I would 100% recommend this dentist! Dr Khosla is my dentist
                            for several years now and she's the best dentist I have had in Canada. She's very gentle and
                            always does very precise work. I came to her first with emergency as a new patient since I
                            just moved to Calgary and didn't have a dentist. She accepted me immediately and helped me.
                            She's also flexible with time to schedule appointments when I am busier at work. Her new
                            dentistry in Cochrane is great and I want to still drive to Cochrane from Calgary for her
                            services</p>
                    </div>
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img">
                            <img src="assets/images/home/test1.png" alt="">
                        </div>
                        <div class="testimonial-one__client-content">
                            <h4 class="testimonial-one__client-name"><a href="testimonials.php">Jitka Hromádková</a>
                            </h4>
                            <p class="testimonial-one__sub-title">Local Guide</p>
                        </div>
                    </div>
                    <div class="testimonial-one__quote">
                        <span class="fa fa-quote-right"></span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-one__single">
                    <div class="testimonial-one__single-inner">
                        <div class="testimonial-one__star">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <p class="testimonial-one__text">I had a dental emergency. My tooth broke off. I didn't have a
                            dentist. I called and they got me in right away. They did a beautiful job repairing my
                            tooth, and were as gentle as possible. They were also very kind and kept checking to see if
                            I was OK. I would highly recommend and I will be going back for sure.</p>
                    </div>
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img">
                            <img src="assets/images/home/test2.png" alt="">
                        </div>
                        <div class="testimonial-one__client-content">
                            <h4 class="testimonial-one__client-name"><a href="testimonials.php">Nancy Littell</a></h4>
                        </div>
                    </div>
                    <div class="testimonial-one__quote">
                        <span class="fa fa-quote-right"></span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-one__single">
                    <div class="testimonial-one__single-inner">
                        <div class="testimonial-one__star">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <p class="testimonial-one__text">Dr. Neerja Khosla is an experienced professional with a
                            human-centric approach towards her work. She is the epitome of professionalism and
                            integrity. Her team is inclined towards delivering the best-in-class service to their
                            clients. I wish them all the best for their future endeavours.</p>
                    </div>
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img">
                            <img src="assets/images/home/test3.png" alt="">
                        </div>
                        <div class="testimonial-one__client-content">
                            <h4 class="testimonial-one__client-name"><a href="testimonials.php">ASHOK KUMAR C.V.</a>
                            </h4>
                        </div>
                    </div>
                    <div class="testimonial-one__quote">
                        <span class="fa fa-quote-right"></span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-one__single">
                    <div class="testimonial-one__single-inner">
                        <div class="testimonial-one__star">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <p class="testimonial-one__text">I highly recommend Cochrane Valley Dental clinic. This was the
                            best dental experience I have had in decades. I have had an extreme fear of the dental
                            experience for many years due to very negative experiences as a child, leading to me always
                            needing some kind of sedation for any procedure, even cleaning. The doctor and her team
                            encouraged me to try foregoing the need for sedation with their help. They were so kind and
                            gentle, and worked closely with me to ensure my comfort at every stage. I successfully got
                            through the whole procedure with no sedation at all! This team is fantastic.</p>
                    </div>
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img">
                            <img src="assets/images/home/test4.png" alt="">
                        </div>
                        <div class="testimonial-one__client-content">
                            <h4 class="testimonial-one__client-name"><a href="testimonials.php">Carolyne Marshall</a>
                            </h4>

                        </div>
                    </div>
                    <div class="testimonial-one__quote">
                        <span class="fa fa-quote-right"></span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-one__single">
                    <div class="testimonial-one__single-inner">
                        <div class="testimonial-one__star">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <p class="testimonial-one__text">Dr. Khosla is very professional and has great empathy for her
                            clients. I came to visit her in a lot of pain after a dental removal procedure (not done at
                            her office) and she provided me with quick help and advice which has helped me be pain free
                            and heal. I would recommend her services to anyone needing emergency dental care.</p>
                    </div>
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img">
                            <img src="assets/images/home/test5.png" alt="">
                        </div>
                        <div class="testimonial-one__client-content">
                            <h4 class="testimonial-one__client-name"><a href="testimonials.php">Amber Harley</a></h4>
                        </div>
                    </div>
                    <div class="testimonial-one__quote">
                        <span class="fa fa-quote-right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="before-after-one">
    <div class="container">
        <div class="before-after-one__inner">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="icon-tooth"></span>
                    <p class="section-title__tagline">Before & After Sparkle</p>
                </div>
                <h2 class="section-title__title title-animation">Real Clients, Lasting <span>Results</span>
                </h2>
            </div>
            <div class="before-and-after__img-box">
                <div class="before-after">
                    <div class="before-after-twentytwenty" id="wrinkle-before-after">
                        <img src="assets/images/home/before.png" alt="">
                        <img src="assets/images/home/after.png" alt="">
                    </div>
                </div>
                <div class="before-and-after__tag"><span>Before</span></div>
                <div class="before-and-after__tag before-and-after__tag-2">
                    <span>After</span>
                </div>
            </div>
            <div class="before-and-after__content">
                <ul class="before-and-after__content-list">
                    <li> <span>Treatments :</span> Crowns & Bridges</li>
                    <li> <span>Result :</span> Restored natural smile and improved chewing function</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="blog-one">
    <div class="blog-one__shape-2"></div>
    <div class="blog-one__shape-3"></div>
    <div class="container">
        <div class="section-title text-left sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <span class="icon-tooth"></span>
                <p class="section-title__tagline">News & Articles</p>
            </div>
            <h2 class="section-title__title title-animation">Latest From <span>Our Blog</span> </h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="assets/images/home/blog1.png" alt="">
                    </div>
                    <div class="blog-one__content">
                        <div class="blog-one__shape-1">
                            <img src="assets/images/shapes/blog-one-shape-1.png" alt="">
                        </div>
                        <div class="blog-one__content-inner">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="blog-details.php">
                                        <span class="fas fa-comments"></span>By Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-details.php">
                                        <span class="fas fa-calendar-alt"></span>14 Feb,2026
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="blog-details.php">Smile Brighter: Your Guide
                                    to Daily Dental Care</a></h3>
                            <div class="blog-one__btn">
                                <a href="blog-details.php" class="thm-btn">
                                    <span class="fas fa-arrow-right"></span>
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="assets/images/home/blog2.png" alt="">
                    </div>
                    <div class="blog-one__content">
                        <div class="blog-one__shape-1">
                            <img src="assets/images/shapes/blog-one-shape-1.png" alt="">
                        </div>
                        <div class="blog-one__content-inner">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="blog-details.php">
                                        <span class="fas fa-comments"></span>By Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-details.php">
                                        <span class="fas fa-calendar-alt"></span>14 Feb,2026
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="blog-details.php">Wisdom Teeth: Should You
                                    Remove Them?</a></h3>
                            <div class="blog-one__btn">
                                <a href="blog-details.php" class="thm-btn">
                                    <span class="fas fa-arrow-right"></span>
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="assets/images/home/blog3.png" alt="">
                    </div>
                    <div class="blog-one__content">
                        <div class="blog-one__shape-1">
                            <img src="assets/images/shapes/blog-one-shape-1.png" alt="">
                        </div>
                        <div class="blog-one__content-inner">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="blog-details.php">
                                        <span class="fas fa-comments"></span>By Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-details.php">
                                        <span class="fas fa-calendar-alt"></span>14 Feb,2026
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="blog-details.php">Clients Say Cheese:
                                    Exploring Cosmetic Dentistry</a></h3>
                            <div class="blog-one__btn">
                                <a href="blog-details.php" class="thm-btn">
                                    <span class="fas fa-arrow-right"></span>
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>