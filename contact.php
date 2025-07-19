﻿<?php
$Title = "Contact MetaCore Solution | Get in Touch with Our Experts";
$MetaDescription = "Have questions or need support? Contact MetaCore Solution today to discuss your IT, software, or digital project requirements.";
$MetaKeywords = "Contact MetaCore, get in touch, request a quote, IT support, software consultation, connect with us";

?>

<?php
include __DIR__ . '/A_Layout/Header/header.php';
?>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space" id="contact-sec">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class="fas fa-location-dot"></i></div>
                        <div class="media-body">
                            <h4 class="box-title">Our Office Address</h4><span class="contact-info_text">Burnsville, MN
                                55337 Streat,<br>United States</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class="fas fa-phone"></i></div>
                        <div class="media-body">
                            <h4 class="box-title">Call Us Anytime</h4><span class="contact-info_text"><a
                                    href="tel:+65485965789">(+65) - 48596 - 5789</a> <a
                                    href="tel:+65485965789">+65-48596-5789</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class="fas fa-envelope"></i></div>
                        <div class="media-body">
                            <h4 class="box-title">Send An Email</h4><span class="contact-info_text"><a
                                    href="mailto:info.example@gmail.com">info.example@gmail.com</a> <a
                                    href="mailto:info@webteck.com">info@webteck.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-smoke space" data-bg-src="assets/img/bg/contact_bg_1.png" id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="title-area mb-35 text-xl-start text-center"><span class="sub-title">
                            <div class="icon-masking me-2"><span class="mask-icon"
                                    data-mask-src="assets/img/theme-img/title_shape_2.svg"></span> <img
                                    src="assets/img/theme-img/title_shape_2.svg" alt="shape"></div>contact with us!
                        </span>
                        <h2 class="sec-title">Have Any Questions?</h2>
                        <p class="sec-text">Enthusiastically disintermediate one-to-one leadership via business
                            e-commerce. Dramatically reintermediate compelling process improvements rather than
                            empowered relationships.</p>
                    </div>
                    <form action="mail.php" method="POST" class="contact-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-md-6"><input type="text" class="form-control" name="name"
                                    id="name" placeholder="Your Name"> <i class="fal fa-user"></i></div>
                            <div class="form-group col-md-6"><input type="email" class="form-control" name="email"
                                    id="email" placeholder="Email Address"> <i class="fal fa-envelope"></i></div>
                            <div class="form-group col-md-6"><select name="subject" id="subject" class="form-select">
                                    <option value="" disabled="disabled" selected="selected" hidden="">Select Subject
                                    </option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Brand Marketing">Brand Marketing</option>
                                    <option value="UI/UX Designing">UI/UX Designing</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                </select> <i class="fal fa-chevron-down"></i></div>
                            <div class="form-group col-md-6"><input type="tel" class="form-control" name="number"
                                    id="number" placeholder="Phone Number"> <i class="fal fa-phone"></i></div>
                            <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                                    class="form-control" placeholder="Your Message"></textarea> <i
                                    class="fal fa-comment"></i></div>
                            <div class="form-btn text-xl-start text-center col-12"><button class="th-btn">Send Message<i
                                        class="fa-regular fa-arrow-right ms-2"></i></button></div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="map-sec"><iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sThemeholy!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
            allowfullscreen="" loading="lazy"></iframe></div>
  <?php
include __DIR__ . '/A_Layout/Footer/footer.php';
?>