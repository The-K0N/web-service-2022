@extends('layouts.frontend.master')
@section('content')

<div class="sequence">

    <div class="seq-preloader">
      <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
    </div>

  </div>


      <nav>
        <div class="logo">
            <img src="assets/img/logo.png" alt="">
        </div>
        <div class="mini-logo">
            <img src="assets/img/mini_logo.png" alt="">
        </div>
        <ul>
          <li><a href="#1"><i class="fa fa-home"></i> <em>Home</em></a></li>
          <li><a href="#2"><i class="fa fa-user"></i> <em>About</em></a></li>
          <li><a href="#3"><i class="fa fa-pencil"></i> <em>Work</em></a></li>
          <li><a href="#4"><i class="fa fa-image"></i> <em>Portfolio</em></a></li>
          <li><a href="#5"><i class="fa fa-envelope"></i> <em>Contact</em></a></li>
        </ul>
      </nav>

      <div class="slides">
        <div class="slide" id="1">
          <div class="content first-content">
            <div class="container-fluid">
                <div class="col-md-3">
                    <div class="author-image"><img src="assets/img/me.jpg" alt="Author Image"></div>
                </div>
                <div class="col-md-9">
                    <h2>SURYA KHOIRRAHMAN</h2>
                    <p><b>Hello there, do you want to know about me ?</b></p>
                    <p><b>Click Read More...</b></p>
                    <p><b>And if you want to FOLLOW Me, you can click the button below</b></p>
                    <div class="main-btn"><a href="#2">Read More..</a></div>
                    <div class="fb-btn"><a rel="nofollow" href="https://Facebook.com/suryakhoirrahman">Facebook</a></div>
                    <div class="ig-btn"><a rel="nofollow" href="https://Instagram.com/surya_khoirrahman">Instagram</a></div>
                    <div class="twitt-btn"><a rel="nofollow" href="https://Twitter.com/candu_kafein">Twitter</a></div>
                    <div class="wa-btn"><a rel="nofollow" href="https://wa.me/6287782884284">WhatsApp</a></div>
                </div>
            </div>
          </div>
        </div>
        <div class="slide" id="2">
          <div class="content second-content">
              <div class="container-fluid">
                  <div class="col-md-6">
                      <div class="left-content">
                          <h2>About Us</h2>
                          <p>Hi.. There, my name is SURYA KHOIRRAHMAN</p>
                          <p>You can call me Surya</p>
                          <P>I study at BUMIGORA University, majoring in Computer Science, focus on Software Engineering</p>
                          <p>I was born in Mataram, 18 December 2000</p>
                          <p><b>My hobbies are adventure and traveling, because when traveling I can visit beautiful places that can spoil the eyes and can refresh the mind after being tired of doing lecture activities. In between busy lectures, I also sometimes play badminton and practice pencak silat with my friends</b></p>
                          <p><b>In short I really want to learn and know more about programmers. Because basically I only have skills in the field of design such as Corel Draw and also Adobe Photoshop or Illustrator</b></p>

                        <div class="main-btn"><a href="#3">Read More</a></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="right-image">
                        <img src="assets/img/about_image.jpg" alt="">
                    </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="slide" id="3">
          <div class="content third-content">
              <div class="container-fluid">
                  <div class="col-md-12">
                      <div class="row">
                          <div class="first-section">
                              <div class="container-fluid">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="left-content">
                                              <h2>Design</h2>
                                              <p>Until now I am still struggling in the world of design. On the sidelines of busy lectures, I sometimes take freelance design jobs for logos, posters, banners, and pamphlets.</p>
                                              <br>
                                              <br>
                                              <p><b>For More Info Check This <a href="https://Instagram.com/djancoks_design"><b>INSTAGRAM</b></a></p>
                                              <p><b>Or Contact My <a href="https://k0n-tech.business.site/">GOOGLE BUSINESS</b></a></p>
                                              <div class="main-btn"><a href="#4">Continue Reading</a></div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="right-image">
                                              <img src="assets/img/first_service.jpeg" alt="first service">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="second-section">
                              <div class="container-fluid">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="left-image">
                                              <img src="assets/img/second_service.jpg" alt="second service">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="right-content">
                                              <h2>Repair Laptop</h2>
                                              <p>For laptop repair services here, accept for minor problems. As well as reinstall windows because of a blue screen or blank and windows partition crashes. Change keyboard, Upgrade Windows, Upgrade RAM or HDD/SSD</p>
                                              <br>
                                              <br>
                                              <p><b>For More Info Check This <a href="https://Instagram.com/code.tx"><b>INSTAGRAM</b></a></p>
                                              <div class="main-btn"><a href="#4">Continue Reading</a></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="slide" id="4">
          <div class="content fourth-content">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-4 col-sm-6">
                          <div class="item">
                              <div class="thumb">
                                  <a href="assets/img/1.jpg" data-lightbox="image-1"><div class="hover-effect">
                                      <div class="hover-content">
                                          <h2>Poster</h2>
                                          <p>#Cyber Bullying</p>
                                          <p>Stop Online Abuse</p>
                                      </div>
                                  </div></a>
                                  <div class="image">
                                      <img src="assets/img/1.jpg">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                          <div class="item">
                              <div class="thumb">
                                  <a href="assets/img/2.jpg" data-lightbox="image-1"><div class="hover-effect">
                                      <div class="hover-content">
                                          <h2>Brochure</h2>
                                          <p>#Coffee TIANG</p>
                                          <p>Cover Brochure</p>
                                      </div>
                                  </div></a>
                                  <div class="image">
                                      <img src="assets/img/2.jpg">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                          <div class="item">
                              <div class="thumb">
                                  <a href="assets/img/3.jpg" data-lightbox="image-1"><div class="hover-effect">
                                      <div class="hover-content">
                                          <h2>Brochure</h2>
                                          <p>#Coffee TIANG</p>
                                          <p>Menu Food and Drink</p>
                                      </div>
                                  </div></a>
                                  <div class="image">
                                      <img src="assets/img/3.jpg">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                          <div class="item">
                              <div class="thumb">
                                  <a href="assets/img/4.jpg" data-lightbox="image-1"><div class="hover-effect">
                                      <div class="hover-content">
                                          <h2>Banners or Digital Flyers</h2>
                                          <p>#Code TX</p>
                                          <p>Our Services as your guideline</p>
                                      </div>
                                  </div></a>
                                  <div class="image">
                                      <img src="assets/img/4.jpg">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                          <div class="item">
                              <div class="thumb">
                                  <a href="assets/img/5.jpg" data-lightbox="image-1"><div class="hover-effect">
                                      <div class="hover-content">
                                          <h2>LOGO</h2>
                                          <p>#MikoBox</p>
                                          <p>Mikobox Food and Drink Logos</p>
                                      </div>
                                  </div></a>
                                  <div class="image">
                                      <img src="assets/img/5.jpg">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                          <div class="item">
                              <div class="thumb">
                                  <a href="assets/img/6.jpg" data-lightbox="image-1"><div class="hover-effect">
                                      <div class="hover-content">
                                          <h2>Vector Art</h2>
                                          <p>#Putri</p>
                                          <p>Instagram Its_menza</p>
                                      </div>
                                  </div></a>
                                  <div class="image">
                                      <img src="assets/img/6.jpg">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                          <div class="item">
                              <div class="thumb">
                                  <a href="assets/img/7.jpg" data-lightbox="image-1"><div class="hover-effect">
                                      <div class="hover-content">
                                          <h2>Long Sleve Shirt</h2>
                                          <p>#Marine Cup</p>
                                          <p>Bigger than the Ocean</p>
                                          <p>Greater than a Competition</p>
                                      </div>
                                  </div></a>
                                  <div class="image">
                                      <img src="assets/img/7.jpg">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                          <div class="item">
                              <div class="thumb">
                                  <a href="assets/img/8.jpg" data-lightbox="image-1"><div class="hover-effect">
                                      <div class="hover-content">
                                          <h2>T-shirt</h2>
                                          <p>#Zavier and Zafran Motor</p>
                                          <p>Motorcycle Repair Shop</p>
                                      </div>
                                  </div></a>
                                  <div class="image">
                                      <img src="assets/img/8.jpg">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                          <div class="item">
                              <div class="thumb">
                                  <a href="assets/img/9.jpg" data-lightbox="image-1"><div class="hover-effect">
                                      <div class="hover-content">
                                          <h2>Banners</h2>
                                          <p>#CV. Arisana Jaya</p>
                                          <p>Header in blibli.com</p>
                                      </div>
                                  </div></a>
                                  <div class="image">
                                      <img src="assets/img/9.jpg">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="slide" id="5">
          <div class="content fifth-content">
              <div class="container-fluid">
                  <div class="col-md-6">
                      <div id="map">

  <!-- How to change your own map point
          1. Go to Google Maps
          2. Click on your location point
          3. Click "Share" and choose "Embed map" tab
          4. Copy only URL and paste it within the src="" field below
  -->
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d298.1914038375322!2d116.13733359330075!3d-8.671068678917711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbffe3510ad3b7b0c!2sD&#39;Jancoks%20Design!5e1!3m2!1sid!2sid!4v1634453790678!5m2!1sid!2sid" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>

                      </div>
                      <div class="col">
                          <a href="https://Facebook.com/suryakhoirrahman" class="fa fa-facebook"></a>
                          <a href="https://Twitter.com/candu_kafein" class="fa fa-twitter"></a>
                          <a href="https://Instagram.com/surya_khoirrahman" class="fa fa-instagram"></a>
                          <a href="mailto:suryakhoirrahman1@gmail.com" class="fa fa-google"></a>

                      </div>
                  </div>
                  <div class="col-md-6">
                      <form id="contact" action="" method="post">
                          <div class="row">
                              <div class="col-md-12">
                                <fieldset>
                                  <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                </fieldset>
                              </div>
                              <div class="col-md-12">
                                <fieldset>
                                  <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                </fieldset>
                              </div>
                               <div class="col-md-12">
                                <fieldset>
                                  <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                </fieldset>
                              </div>
                              <div class="col-md-12">
                                <fieldset>
                                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                </fieldset>
                              </div>
                              <div class="col-md-12">
                                <fieldset>
                                  <button type="submit" id="form-submit" class="btn">Send Now</button>
                                </fieldset>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
        </div>
      </div>
