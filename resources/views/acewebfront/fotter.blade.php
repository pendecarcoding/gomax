<!-- Footer -->

<footer class="text-center text-lg-start text-muted" style="background:#207b65;color:#ffffff">
    <!-- Section: Social media -->


    <!-- Section: Links  -->
    <section class="">
        <div class="wrap-content text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-4">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-3">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <img src="{{ uploaded_asset(get_setting('system_logo_white')) }}" alt="">
                    </h6>
                    <p style="color:#ffffff">
                        <b style="font-weight:bold;color:#ffffff">Address</b><br>
                        {{ get_setting('contact_address', null, 'en') }}
                        <br>
                    </p>
                    <b style="font-weight:bold;color:#ffffff">Tel</b>
                  {!! get_setting('contact_phone') !!}
                    <b style="font-weight:bold;color:#ffffff">Email</b>
                    <p style="color:white">{{ get_setting('contact_email') }}</p>


                    </p>
                </div>
                <!-- Grid column -->
<div class="col-md-1 col-lg-1 col-xl-1 mx-auto mb-1">
</div>
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-3">
                    <!-- Links -->
                       <h6 class="text-uppercase fw-bold mb-4 h6-footer">
                       </h6>
                       <h6 class="text-uppercase fw-bold mb-4 h6-footer">
                    <a href="{{ url('ourcompany') }}" style="color:white">
                      
                            HOMEPAGE
                       
                    </a>
                     </h6>
                      <h6 class="text-uppercase fw-bold mb-4 h6-footer">
                    <a href="{{ url('our_products') }}" style="color:white">
                       
                            Our Products
                        
                    </a>
                    </h6>
                     <h6 class="text-uppercase fw-bold mb-4 h6-footer">
                    <a href="{{ url('forcorporate') }}" style="color:white">
                       
                            Our Company
                       
                    </a>
                     </h6>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-3">
                    <!-- Links -->
                      <h6 class="text-uppercase fw-bold mb-4 h6-footer">
                       </h6>
                      <h6 class="text-uppercase fw-bold mb-4 h6-footer">
                    <a href="{{ url('newsroom') }}" style="color:white">
                       
                            Newsroom
                       
                    </a>
                     </h6>
                       <h6 class="text-uppercase fw-bold mb-4 h6-footer">
                    <a href="{{ url('contact') }}" style="color:white">
                      
                            Contact Us
                       
                    </a>
                     </h6>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-2 footer-medsos">
                    <!-- Links -->
                      <h6 class="text-uppercase fw-bold mb-4 h6-footer">
                       </h6>
                    <a target="_blank" href="{{ get_setting('facebook_link') }}">
                        <h6 class="text-uppercase fw-bold mb-4"><img style="width: 20px; height: 20px"
                                src="{{ static_asset('aceweb') }}/assets/img/fb.webp" alt=""></h6>
                    </a>
                    <a target="_blank" href="{{ get_setting('instagram_link') }}">
                        <h6 class="text-uppercase fw-bold mb-4"><img style="width: 20px; height: 20px"
                                src="{{ static_asset('aceweb') }}/assets/img/ig.png" alt=""></h6>
                    </a>
                    <a target="_blank"
                        href="{{ get_setting('linkedin_link') }}">
                        <h6 class="text-uppercase fw-bold mb-4"><img style="width: 20px; height: 20px"
                                src="{{ static_asset('aceweb') }}/assets/img/linkedin.png" alt=""></h6>
                    </a>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-left p-3" style="background-color: #f3cf68;color: white;">
        <div class="wrap-content">
            <div class="row" style="display: flex;">
                <div class="col-md-6 col-sm-12 col-lg-6">© Copyright 2025
                    <a class="text-reset fw-bold" href="#">@ {{ get_setting('site_name') }}</a>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div style="float:right"> <a href="{{ url('view_pdf/Terms & Condition') }}" target="_blank"
                            class="text-reset fw-bold">Terms & Condition | </a> <a
                            href="{{ url('view_pdf/Product Disclosure') }}" target="_blank" class="text-reset fw-bold">
                            Product Disclosure</a></div>
                </div>
            </div>

        </div>


    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<!--<footer>
      <div class="content-footer">
        <div data-aos="fade-up" class="wrap-content">
          <div class="ace-isi about">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 footer-info">
                <img src="{{ static_asset('aceweb') }}/assets/img/ace.png" alt="" />
                <div style="margin-top: 20px">
                  <p>
                    <strong>Addres</strong>
                    No. 19-1, Jalan USJ 10/1D, 47620, Subang Jaya, Selangor,
                    Malaysia<br />
                    <br />
                    <strong>Tel</strong> +603 – 8081 7198<br /><br />
                    <strong>Email:</strong> enquiry@ace2u.com<br />
                  </p>
                </div>
                <div class="social-links d-flex mt-4">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a href="#" class="instagram"
                    ><i class="bi bi-instagram"></i
                  ></a>
                  <a href="#" class="linkedin"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
              <div class="col-md-8 col-lg-8">
                <div class="row">
                  <div class="col-md-3">
                    <a href="{{ url('/') }}"><h6>For Corporate</h6></a>
                    <!--<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                  </ul>
                  </div>

                  <div class="col-md-3">
                    <a href="{{ url('/our_products') }}"><h6>Our Product</h6></a>
                    <!--<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                  </ul>
                  </div>
                  <div class="col-md-3">
                    <img
                      style="width: 20px; height: 20px"
                      src="{{ static_asset('aceweb') }}/assets/img/Vector.png"
                      alt=""
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <a href="{{ url('/forpersonal') }}"><h6>For Personal</h6></a>
                    <!--<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                  </ul>
                  </div>

                  <div class="col-md-3">
                    <a href="{{ url('/newsroom') }}"><h6>Newsroom</h6></a>
                    <!--<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                  </ul>
                  </div>
                  <div class="col-md-3">
                    <img
                      style="width: 20px; height: 20px"
                      src="{{ static_asset('aceweb') }}/assets/img/fb.png"
                      alt=""
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <a href="{{ url('/investor_relations') }}"><h6>Investor Relation</h6></a>
                    <!--<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                  </ul>
                  </div>

                  <div class="col-md-3">
                    <a href="{{ url('/contact') }}"><h6>Contact</h6></a>
                    <!--<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                  </ul>
                  </div>
                  <div class="col-md-3">
                    <img
                      style="width: 20px; height: 20px"
                      src="{{ static_asset('aceweb') }}/assets/img/ig.png"
                      alt=""
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <h6></h6>
                    <!--<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                  </ul>
                  </div>

                  <div class="col-md-3">
                    <h6></h6>
                    <!--<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                  </ul>
                  </div>
                  <div class="col-md-3">
                    <img
                      style="width: 20px; height: 20px"
                      src="{{ static_asset('aceweb') }}/assets/img/yt.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
</footer>-->