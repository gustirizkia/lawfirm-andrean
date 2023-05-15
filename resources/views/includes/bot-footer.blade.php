
<footer  class=" light border-warning mt-5 pt-4" style="background-color: #F2F2F2">
  {{-- <hr class="hr" style="background-color: rgb(161, 161, 161);" /> --}}
  <div class="container">
    <img src="{{ asset('gambar/logo.png') }}" class="img-fluid img__logo" alt="Andrean Saefudin" style="width: 200px;">
  </div>
  {{-- <hr class="hr" style="background-color: rgb(161, 161, 161);"  /> --}}
        <div class="container">
          <!-- Footer Widgets
				============================================= -->
          <div class="footer-widgets-wrap pb-5 mt-4">
            <div class="row col-mb-50">
              <div class="col-lg-5 col-sm-6">
                <div class="widget clearfix">
                  <h5 class="mb-3 h6 d-flex">
                    <i class="bi bi-geo-alt-fill"></i>
                    <div class="ms-2 text-dark">
                      The CEO Building Floor 12 – Jl. TB Simatupang No. 18 C,
                      Cilandak, Jakarta Selatan, DKI Jakarta – 12430.
                    </div>
                  </h5>

                  <h5 class="mb-3 h6 d-flex">
                    <i class="bi bi-alarm-fill"></i>
                    <div class="ms-2 text-dark">
                      Senin - Jumat: 10:00 - 18:00
                    </div>
                  </h5>
                  <h5 class="mb-3 h6 d-flex">
                    <i class="bi bi-telephone-fill"></i>
                    <div class="ms-2 text-dark">
                      082122389293

                    </div>
                  </h5>
                  <h5 class="mb-0 h6 d-flex">
                    <i class="bi bi-envelope-at-fill"></i>
                    <div class="ms-2 text-dark">
                      hub@m-andreansaefudin.com
                    </div>
                  </h5>
                </div>
              </div>

              <div class="col-lg-2 col-6">
                <div class="widget widget_links clearfix widget-li-noicon">
                  <ul class="ps-0 ps-md-5">
                    <li>
                      <a href="#" class="d-flex align-items-center"
                        ><i
                          class="icon-facebook-square h5 text-dark mb-0 me-3"
                        ></i>
                        Facebook</a
                      >
                    </li>
                    <li>
                      <a href="https://www.instagram.com/m.andreansaefudin.co/?igshid=YmMyMTA2M2Y%3D" class="d-flex align-items-center"
                        ><i
                          class="icon-instagram2 h5 text-dark mb-0 me-3"
                        ></i>
                        Instagram</a
                      >
                    </li>
                    <li>
                      <a href="https://twitter.com/pengacarapublik?t=4Qb_uJuND5_tNsl5zzBWYA&s=08" class="d-flex align-items-center"
                        ><i
                          class="icon-twitter-sign h5 text-dark mb-0 me-3"
                        ></i>
                        Twitter</a
                      >
                    </li>
                    <li>
                      <a href="mail:gustirizkia4@gmail.com" class="d-flex align-items-center"
                        ><i class="icon-envelope h5 text-dark mb-0 me-3"></i>
                        Gmail</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card card__payment">
                  <div class="row no-gutters">
                    <div class="col-4">
                      <img src="{{asset('gambar/bca.webp')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-4">
                      <img src="{{asset('gambar/mandiri.png')}}" class="img-fluid" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- .footer-widgets-wrap end -->
        </div>

        <!-- Copyrights
			============================================= -->
        <div id="" class="bg__primary py-3 text-white">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-12 text-center text-md-center text-sm">
                {{-- Copyrights &copy; {{ \Carbon\Carbon::now()->format('Y') }} All Rights.<br /> --}}
                Hak Cipta {{ "@".\Carbon\Carbon::now()->format('Y') }} - M. Andrean Saefudin & Co.
              </div>
            </div>
          </div>
        </div>
        <!-- #copyrights end -->
      </footer>
