<?php include 'includes/header.php'; ?>

        <!--Page Header Start-->
        <section class="page-header">
            <!-- <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);"> -->
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h3>Book Appointment</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><span class="fas fa-angle-right"></span></li>
                            <li>Book Appointment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!-- Appointment Form Start -->
        <section class="appointment-three" style="padding: 120px 0;">
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
                                                <input type="text" placeholder="Day of appointment" name="date"
                                                    id="datepicker">
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
        

        <!-- Appointment Form End -->

<?php include 'includes/footer.php'; ?>
