<?php include('partial/header.php')  ?>
<div class="hidden" id="pageName">
    homepage
</div>

<section class="page-details">
    <div class="page-title-wrap-inner parallax-item">
      <div class="overflow"></div>
      <div class="page-title-inner">
        <div class="text-center">
          <div id="breadcrumb" class="breadcrumb">
            <a href="index.php">Home</a> 
            <span class="current">Contact Us</span>
          </div>
          <h1 class="page-title">Contact Us</h1>
        </div>
      </div>
    </div>
</section>


<section class="contact-inner-section product-list-section">
    <div class="container">
        <div class="white-bg">
            <div class="row">
                <div class="col-lg-8 col-md-6 form-part">
                    <div class="header-wrap">
                      <div class="site-header-">
                        <h6 class="sub-title">contact us</h6>
                        <h2 class="mb-20 playfont">Get In Touch</h2>
                      </div>
                    </div>

                    <form id="contact-form" class="contact-form" method="post" action="mailer.php">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 mb-30">
                                <div class="common-control">
                                    <input type="text" name="name" placeholder="First Name" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-30">
                                <div class="common-control">
                                    <input type="text" name="name" placeholder="Last Name" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-30">
                                <div class="common-control">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-30">
                                <div class="common-control">
                                    <input type="text" name="phone" placeholder="Phone Number" required="">
                                </div>
                            </div>
                            <div class="col-md-12 mb-30">
                                <div class="common-control">
                                    <textarea name="message" placeholder="Your Message Here" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="submit-btn header-wrap ">
                                    <a href="#" class="site-button">Submit Now</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-6 pl-0 md-pl-pr-15 md-order-first">
                    <div class="contact-info">
                        <h3 class="title">Contact Info</h3>
                        <div class="info-wrap mb-20">
                            <div class="icon-part">
                                <i class="las la-map-marked"></i>
                            </div>
                            <div class="content-part">
                                <h4>Visit Our Office</h4>
                                Baneshwor, Kathmandu, Nepal
                            </div>
                        </div>
                        <div class="info-wrap mb-20">
                            <div class="icon-part">
                                <i class="las la-phone"></i>
                            </div>
                            <div class="content-part">
                                <h4>Phone Inquiry</h4>
                                <p>P:&nbsp;&nbsp; <a href="tel:+1235">(+123) 555213213</a></p>
                                <p>P:&nbsp;&nbsp; <a href="tel:+12359">(+123) 889923213</a></p>
                            </div>
                        </div>
                        <div class="info-wrap mb-20">
                            <div class="icon-part">
                                <i class="las la-envelope"></i>
                            </div>
                            <div class="content-part">
                                <h4>Send Inquiry</h4>
                                <p>E:&nbsp;&nbsp; <a href="mailto:support@rstheme.com">support@rsdsftheme.com</a></p>
                                <p>E:&nbsp;&nbsp; <a href="mailto:info@codesless.com">info@codeslesdfsdss.com</a></p>
                            </div>
                        </div>
                        <div class="info-wrap">
                            <div class="icon-part">
                                <i class="las la-clock"></i>
                            </div>
                            <div class="content-part">
                                <h4>Opening Hours</h4>
                                <p>Mon-Fri: 10:00-18:00</p>
                                <p>Sat-Sun: 10:00-14:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-sec">
            <iframe src="https://www.google.com/maps/embed?pb=!1m20!1m8!1m3!1d14130.256508702909!2d85.3199238!3d27.6998635!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d27.7089604!2d85.3261328!4m3!3m2!1d27.6954033!2d85.3302526!5e0!3m2!1sen!2snp!4v1627623259512!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>



<?php include('partial/footer.php')  ?>
