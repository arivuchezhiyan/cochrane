<?php include 'includes/header.php'; ?>

        <!--Page Header Start-->
        <section class="page-header">
            <!-- <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);"> -->
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h3>Contact</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><span class="fas fa-angle-right"></span></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!-- Quick Contact One Start -->
        <div class="quick-contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <ul class="quick-contact-one__inner clearfix list-unstyled">
                            <li class="quick-contact-one__single">
                                <div class="quick-contact-one__single-icon">
                                    <i class="icon-phone-call"></i>
                                </div>
                                <div class="quick-contact-one__single-text">
                                    <h3>Still have questions?</h3>
                                    <p>Contact us today for more information.</p>
                                </div>
                                <div class="quick-contact-form-box">
                                    <form id="quick-contact-form" class="contact-form-validated"
                                        action="assets/inc/sendemail.php" method="POST" novalidate="novalidate">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="form_phone" id="formPhonee"
                                                    placeholder="Enter Phone Number" value="">
                                            </div>
                                        </div>
                                        <button type="submit" data-loading-text="Please wait...">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </form>
                                </div>
                            </li>
                            <li class="quick-contact-one__single">
                                <div class="quick-contact-one__single-icon">
                                    <i class="fa fa-solid fa-headset"></i>
                                </div>
                                <div class="quick-contact-one__single-text">
                                    <h3>Live Contact</h3>
                                    <p>Chat with our dental experts.</p>
                                </div>
                                <div class="quick-contact-one__single-btn">
                                    <a href="contact.php" class="thm-btn">
                                        <span class="fas fa-arrow-right"></span>
                                        Start Contact
                                    </a>
                                </div>
                            </li>
                            <li class="quick-contact-one__single quick-contact-one__single--innstyle2">
                                <div class="quick-contact-one__title">
                                    <h4>Get Social</h4>
                                    <div class="quick-contact-one__social">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" style="fill: currentColor; vertical-align: -0.125em;">
                                                <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                                            </svg>
                                        </a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="quick-contact-one__location">
                            <div class="quick-contact-one__location-title">
                                <h3>Contact Info :</h3>
                            </div>
                            <div class="quick-contact-one__location-inner">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="quick-contact-one__location-single">
                                            <div class="quick-contact-one__location-icon">
                                                <i class="icon-phone-call"></i>
                                            </div>
                                            <div class="quick-contact-one__location-text">
                                                <p>Contact Us</p>
                                                <h3 style="font-size: 18px;"><a href="tel:+14039814151">+1(403) 981-4151</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="quick-contact-one__location-single">
                                            <div class="quick-contact-one__location-icon">
                                                <i class="icon-email"></i>
                                            </div>
                                            <div class="quick-contact-one__location-text">
                                                <p>Email Us</p>
                                                <h3 style="font-size: 18px;"><a href="mailto:info@cochranevalleydental.ca">info@cochranevalleydental.ca</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="quick-contact-one__location-single">
                                            <div class="quick-contact-one__location-icon">
                                                <i class="icon-pin"></i>
                                            </div>
                                            <div class="quick-contact-one__location-text">
                                                <p>Our Office Location</p>
                                                <h3 style="font-size: 18px;">Unit 3101, 100 Horse Creek Road, <br>Cochrane, AB T4C 2N8</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="quick-contact-one__location-single">
                                            <div class="quick-contact-one__location-icon">
                                                <i class="fa fa-solid fa-clock"></i>
                                            </div>
                                            <div class="quick-contact-one__location-text">
                                                <p>Office Hours</p>
                                                <h3 style="font-size: 18px;">Tue & Wed: 11:00 AM - 7:00 PM<br>Thu & Fri: 9:00 AM - 5:00 PM<br>Sat: 1st & 3rd Saturday Only</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-contact-one__location-btn">
                                    <a href="#" class="thm-btn">
                                        <span class="fas fa-arrow-right"></span>
                                        View On Map
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick Contact One End -->


        <!-- Main Contact Form Start -->
        <section class="main-contact-form">
            <div class="container">
                <div class="main-contact-form__inner">
                    <div class="section-title text-center sec-title-animation animation-style1">
                        <div class="section-title__tagline-box">
                            <span class="icon-tooth"></span>
                            <p class="section-title__tagline">Care Call</p>
                        </div>
                        <h2 class="section-title__title title-animation">
                            Get  <span>Quote</span>
                        </h2>
                    </div>
                    <style>
                        .contact-page__form input::placeholder,
                        .contact-page__form textarea::placeholder {
                            color: #666666 !important;
                            opacity: 1 !important;
                        }
                    </style>
                    <form id="contact-form" class="contact-page__form"
                          action="https://script.google.com/macros/s/AKfycbxZd5bfJT7ZJx9XT6e9RqY2-ZpzO8Xpaz59lrSp2ju87636ZItZLe4JR6duWQApKmn2/exec" method="POST" onsubmit="return handleGoogleFormSubmit(this, event);">
                          <div class="row">
                              <div class="col-xl-6 col-lg-6 col-md-6">
                                  <div class="contact-page__input">
                                      <input type="text" name="name" placeholder="Your name" required="" pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed" oninput="validateNameInput(this)">
                                  </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-6">
                                  <div class="contact-page__input">
                                      <input type="email" name="email" placeholder="Your Email" required="">
                                  </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-6">
                                  <div class="contact-page__input">
                                      <input type="text" inputmode="tel" placeholder="Mobile" name="phone" required="" pattern="[\d\s+\-\(\)]+" title="Only numbers and phone symbols are allowed" oninput="validatePhoneInput(this)">
                                  </div>
                              </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-page__input">
                                    <input type="text" placeholder="Subject" name="subject" required="">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-page__input">
                                    <textarea name="message" placeholder="Messege" required=""></textarea>
                                </div>
                            </div>
                            <div class="contact-page__btn">
                                <button type="submit" class="thm-btn" data-loading-text="Please wait...">
                                    <span class="fas fa-arrow-right"></span>
                                    Send A Message
                                </button>
                            </div>
                        </div>
                        <div class="result"></div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Main Contact Form End -->


        <!-- Google Map One Start -->
        <section class="google-map-one">
            <div class="container">
                <div class="google-map-one__inner">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2499.6560048661154!2d-114.51402492392876!3d51.20698997174656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53713f4c323d66cd%3A0x960bb66d0e12b6df!2s100%20Horse%20Creek%20Rd%20%233101%2C%20Cochrane%2C%20AB%20T4C%200E3%2C%20Canada!5e0!3m2!1sen!2sin!4v1780411413569!5m2!1sen!2sin"
                        class="google-map__one-box" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <!-- Google Map One End -->

<?php include 'includes/footer.php'; ?>
