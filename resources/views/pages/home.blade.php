@extends('layouts.front')

@push('addStyle')

{{-- canvas --}}

    <!-- law-firm Demo Specific Stylesheet -->
    <link rel="stylesheet" href="/demos/law-firm/law-firm.css" type="text/css" />
    <!-- law-firm Custom Css -->
    <link
      rel="stylesheet"
      href="/demos/law-firm/css/fonts.css"
      type="text/css"
    />
    <!-- law-firm Custom Fonts -->
    <!-- / -->

    <link rel="stylesheet" href="/css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="/css/colors.php?color=0F317E" type="text/css" />
    <link rel="stylesheet" href="/add.css" />

{{-- endcanvas --}}

   <style>
        #carouselExampleControls img{
            height: 600px;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }
        .carousel-indicators {
            position: absolute;
            right: 0px;
            bottom: -48px;
            left: 0;
            z-index: 3;
            display: flex;
            justify-content: center;
            padding: 0;
            margin-right: 15%;
            margin-bottom: 1rem;
            margin-left: 15%;
            list-style: none;
        }

        .carousel-indicators [data-bs-target] {
            background-color: #918a6a;
        }
        .bg__carousel_partner{
            position: absolute;
            height: 100%;
            width: 100%;
            background-color: #D9D9D9;
            top: 26px;
            right: -26px;
            z-index: 2;
        }

        .carousel-indicators img{
            position: relative;
        }

        .title_partner{
            position: absolute;
            bottom: 0;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.6) 12.5%, rgba(0, 0, 0, 0) 100%);
            width: 100%;
            z-index: 3;
            padding: 10px;

        }
        .title_partner .name{
            color: white;
            font-weight: 600;
            font-size: 20px;
        }

        .title_partner .role{
            font-weight: 300;
            font-size: 16px;
            color: #CBCBCB;
        }
        .about p{
            color: #626262;
            line-height: 26px;
            font-size: 14px;
        }
        .fancy-title{
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
        }

        .title-center::before {
            display: block;
        }

        .title-border::before, .title-border::after {
            border-top-width: 1px;
            border-top-style: solid;
        }

        .fancy-title::before {
            margin-right: 0.75rem;
        }

        .fancy-title::before, .fancy-title::after {
            content: '';
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
            height: 0;
            border-top: 3px solid #E5E5E5;
        }
        .fancy-title::after{
            margin-left: 0.75rem;
        }

        .lihat_kami h5{
            margin-bottom: unset;
        }

        .video__section .title{
            font-size: 1rem;
            letter-spacing: 0;
            color: #333;
            font-weight: 600;
        }
        .entry-meta ul {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            align-items: center;
            margin: 0 0 -10px -20px;
            list-style: none;
            padding-left: 21px;
        }

        .entry-meta li {
            font-size: 90%;
            margin: 0 15px 10px 0;
            color: #999;
        }
        .entry-meta:not(.no-separator) li.second::before {
            content: '\205E';
            width: 5px;
            text-align: center;
            display: inline-block;
            margin-right: 15px;
            opacity: 0.5;
        }
        /* .klien{
            padding-top: 100px;
            padding-bottom: 100px;
            overflow: hidden; position: relative; width: 100%;
            background-image: url('{{ asset('demos/law-firm/images/bg-1.jpg') }}');
            background-attachment: fixed;
            background-size: cover;
            -moz-background-size: cover;
            -webkit-background-size: cover;
            background-repeat: no-repeat;
            background-position: top center;
        } */

        .klien .card{
            padding: 12px;
        }

        .why{
            background: #000;
            color: white;
        }
        .why p{
            font-size: 14px;
            font-weight: 300;
        }

        .card__artikel img{
            border-radius: 6px;
        }

        .card__artikel .judul{
            font-size: 16px;
            margin-top: 3px;
            margin-bottom: 5px;
            letter-spacing: -.01em;
            font-weight: 600;
            color: #212121;
        }
        .card__artikel .date{
            color: #626262;
            font-size: 12px;
        }
        .row.video__section{
            max-width: unset;
        }
        .tulisan a{
            color: unset;
        }
        .img__artikel{
            width: 100%;
            height: 135px;
            object-fit: cover;
            object-position: center;
        }

    </style>
@endpush

@push('addMeta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="Law Firm | M. Andrean Saefudin & Co">
    <meta name="description" content=" --- Corporate and Litigation Lawyer ---">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="Law Firm | M. Andrean Saefudin & Co">
    <meta property="og:description" content=" --- Corporate and Litigation Lawyer ---">
    <meta property="og:image" content="{{ asset('gambar/logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="Law Firm | M. Andrean Saefudin & Co">
    <meta property="twitter:description" content=" --- Corporate and Litigation Lawyer ---">
    <meta property="twitter:image" content="{{ asset('gambar/logo.png') }}">
@endpush

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8bGF3JTIwZmlybXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1479142506502-19b3a3b7ff33?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8bGF3JTIwZmlybXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bGF3JTIwZmlybXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="about mt-4 mb-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-4">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            {{-- <div class="carousel-item active">
                                <img src="{{ asset('gambar/tim/andrean.jpeg') }}" class="d-block w-100 position-relative" alt="Andrean Saefudin & Co" >
                                <div class="title_partner text-center">
                                    <div class="name">
                                        M. Andrean Saefudin S.H
                                    </div>
                                    <div class="role">
                                        Founder
                                    </div>
                                </div>
                            </div> --}}
                            @foreach ($tim as $index => $item)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <a href="{{ route('partner', $item->id) }}">
                                        <img src="{{ url($item->image) }}" class="d-block w-100 position-relative" alt="Andrean Saefudin & Co" >
                                        <div class="title_partner text-center">
                                            <div class="name">
                                                {{ $item->nama }}
                                            </div>
                                            <div class="role">
                                                {{ $item->title }}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            {{-- <div class="carousel-item">
                                <img src="{{ asset('gambar/tim/elsa.jpg') }}" class="d-block w-100" alt="Andrean Saefudin & Co">
                                <div class="title_partner text-center">
                                    <div class="name">
                                        Elsa Puspa S.H
                                    </div>
                                    <div class="role">
                                        Co Founder
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <h5 class="text-center">
                        M. Andrean Saefudin & Co
                    </h5>
                    <hr>
                    <p class="px-4">
                        <strong>M. Andrean Saefudin & Co. | Law Firm -</strong>
                        Attorney at Law; merupakan kantor hukum
                        (Botique Law Firm) terkemuka di Jakarta yang
                        didirikan sejak 2021 dan saat ini berdomisili di
                        Jakarta Selatan dengan wilayah praktek di
                        seluruh Indonesia. Sejak didirikanya Partner
                        dan lawyer kami telah memberikan layanan
                        hukum kepada Klien dalam dan luar negeri,
                        termasuk perusahaan swasta dan Badan
                        Usaha Milik Negara (BUMN). <br> <br>
                        Layanan hukum yang disediakan mencakup
                        hampir setiap bidang jasa, secara umum
                        terbagi dalam tiga kelompok besar: Korporasi
                        dan Komersial, Litigasi Melalui Pengadilan dan
                        Pendampingan Alternatif Penyelesaian
                        Sengketa di Luar Pengadilan. <br> <br>
                        Pada setiap kesempatan, M. Andrean
                        <strong>Saefudin & Co. | Law Firm -</strong> Attorney at Law
                        berkomitmen memberikan Layanan
                        professional melalui mekanisme kerja yang
                        efisien, efektif dan akurat, memastikan setiap
                        materi dan aspek hukum dari setiap hal yang
                        ditangani guna memberikan opsi-opsi terbaik
                        dan menempatkan diri menjadi wakil Klien
                        yang memberikan perhatian khusus pada
                        setiap aspek hukum dengan melengkapi
                        informasi dan keilmuan yang mempuni demi
                        kepentingan Klien. <br> <br>
                        <strong>M. Andrean Saefudin & Co. | Law Firm -</strong>
                        Attorney at Law percaya bahwa kepercayaan
                        yang diberikan Klien harus dijaga dengan baik.
                        Karena itu, kami terus meningkatkan kualitas
                        layanan dan berupaya mengembangkan
                        inovasi dan berkomitmen untuk terus
                        memberikan pelayanan hukum secara
                        berkualitas dengan menjunjung tinggi nilainilai: Kejujuran, Keadilan dan Kebenaran.
                        Dengan tetap memegang prinsip:
                        Kemandirian, Keter-bukaan, Keilmuan,
                        Ketelitian, Kreativitas Ke-rahasiaan dan
                        Bertanggungjawab untuk menjadi pilihan bagi
                        yang membutuhkan Advokat kompeten dalam
                        mengelola resiko bisnis, ataupun
                        menyelesaikan suatu permasalahan hukum
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="lihat_kami">
        <div class="container">
            <div class="fancy-title title-center title-border topmargin">
                <h5 class="text">Lihat Kami</h5>
            </div>

            {{-- video --}}
            <div
              id="oc-posts"
              class="owl-carousel posts-carousel carousel-widget posts-md"
              data-pagi="true"
              data-items-xs="1"
              data-items-sm="2"
              data-items-md="3"
              data-items-lg="3"
              auto-play="true"
            >
              <!-- Video -->
              <div class="oc-item">
                <div class="entry">
                  <div class="entry-image">
                    <iframe
                      src="https://www.youtube.com/embed/Edjkt0Yp4ls"
                      width="500"
                      height="281"
                      allow="autoplay; fullscreen"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="entry-title title-xs nott">
                    <h3>
                      <a href="blog-single-full.html">M. Andrean Saefudin</a>
                    </h3>
                  </div>
                  <div class="entry-meta">
                    <ul>
                      <li><i class="icon-calendar3"></i> 16th Feb 2021</li>
                      <li>
                        <a href="blog-single-full.html#comments"
                          ><i class="icon-comments"></i> 19</a
                        >
                      </li>
                      <li>
                        <a href="#"><i class="icon-film"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="oc-item">
                <div class="entry">
                  <div class="entry-image">
                    <iframe
                      src="https://www.youtube.com/embed/dWqMkj6l7qo"
                      width="500"
                      height="281"
                      allow="autoplay; fullscreen"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="entry-title title-xs nott">
                    <h3>
                      <a href="blog-single-full.html">Bincang Tokoh</a>
                    </h3>
                  </div>
                  <div class="entry-meta">
                    <ul>
                      <li><i class="icon-calendar3"></i> 16th Feb 2021</li>
                      <li>
                        <a href="blog-single-full.html#comments"
                          ><i class="icon-comments"></i> 19</a
                        >
                      </li>
                      <li>
                        <a href="#"><i class="icon-film"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="oc-item">
                <div class="entry">
                  <div class="entry-image">
                    <iframe
                      src="https://www.youtube.com/embed/gsV_U6XZHpw"
                      width="500"
                      height="281"
                      allow="autoplay; fullscreen"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="entry-title title-xs nott">
                    <h3>
                      <a href="blog-single-full.html">Pendekar Keadilan</a>
                    </h3>
                  </div>
                  <div class="entry-meta">
                    <ul>
                      <li><i class="icon-calendar3"></i> 16th Feb 2021</li>
                      <li>
                        <a href="blog-single-full.html#comments"
                          ><i class="icon-comments"></i> 19</a
                        >
                      </li>
                      <li>
                        <a href="#"><i class="icon-film"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            {{-- endvideo --}}
        </div>
    </section>

    <section class="klien mt-5">
        {{-- <div id="section-contact" class="section bg-color dark topmargin-lg"
        style="
              background-image: linear-gradient(
                  to bottom,
                  rgba(var(--themecolorrgba), 0.8),
                  rgba(var(--themecolorrgba), 1)
                ),
                url('');
              background-attachment: fixed;
              background-size: cover;
            "
            data-scrollto-settings="{&quot;offset&quot;:88,&quot;speed&quot;:&quot;1250&quot;,&quot;easing&quot;:&quot;easeInOutExpo&quot;}">
        </div> --}}
        <div class="owl-carousel">
             <div class="card"> Your Content </div>
         </div>
    </section>

    <section class="why py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h2 class="">
                        Kenapa memilih kami <br>
                        m-andreansaefudin.com
                    </h2>
                    <p class="my-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe unde, atque autem deleniti rem vel fuga, sapiente nobis omnis veritatis esse vitae soluta vero debitis.
                    </p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-2">
                            <i class="material-icons-outlined text-warning h2 mb-0">admin_panel_settings</i>
                            <h3 class="h6 fw-bold ms-2 mb-0">
                            Diverse Practice Areas
                            </h3>
                        </div>
                        <p class="text-white op-06">
                            Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Vel quos quam quia veniam doloribus neque quis.
                        </p>
                        </div>

                        <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-2">
                            <i class="material-icons-outlined text-warning h2 mb-0">qr_code_scanner</i>
                            <h3 class="h6 fw-bold ms-2 mb-0">Responsiblities</h3>
                        </div>
                        <p class="text-white op-06">
                            Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Vel quos quam quia veniam doloribus neque quis.
                        </p>
                        </div>

                        <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-2">
                            <i class="material-icons-outlined text-warning h2 mb-0">female</i>
                            <h3 class="h6 fw-bold ms-2 mb-0">Women Initiative</h3>
                        </div>
                        <p class="text-white op-06">
                            Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Vel quos quam quia veniam doloribus neque quis.
                        </p>
                        </div>

                        <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-2">
                            <i class="material-icons-outlined text-warning h2 mb-0">support</i>
                            <h3 class="h6 fw-bold ms-2 mb-0">
                            Helpful Environment
                            </h3>
                        </div>
                        <p class="text-white op-06">
                            Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Vel quos quam quia veniam doloribus neque quis.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('demos/law-firm/images/lawyer.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="tulisan mt-5">
        <div class="container">
            <div class="fancy-title title-center title-border topmargin">
                <h5 class="text">Artikel Hukum Terbaru</h5>
            </div>

            <div class="owl-carousel owl-theme mt-4">
                @foreach ($tulisans as $tulisan)
                    <div class="item" style="width: 240px">
                        <a href="{{ route('detail-tulisan', $tulisan->slug) }}">
                            <div class="card__artikel">
                                <img src="{{ url($tulisan->image) }}" class="img__artikel" alt="{{ $tulisan->judul }}">

                                <div class="mt-2">
                                    <div class="judul">{{ Str::limit($tulisan->judul, 50) }}</div>
                                    <div class="date mt-2"><i class="icon-calendar3"></i> {{ \Carbon\Carbon::parse($tulisan->created_at)->format('d, M Y') }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="gallery">
     <div class="container">
            <h3>Gallery</h3>

            <div
              class="masonry-thumbs grid-container grid-4"
              data-big="4"
              data-lightbox="gallery"
            >
              <a
                class="grid-item"
                href="images/portfolio/full/1.jpg"
                data-lightbox="gallery-item"
                ><img src="images/portfolio/4/1.jpg" alt="Gallery Thumb 1"
              /></a>
              <a
                class="grid-item"
                href="images/portfolio/full/2.jpg"
                data-lightbox="gallery-item"
                ><img src="images/portfolio/4/2.jpg" alt="Gallery Thumb 2"
              /></a>
              <a
                class="grid-item"
                href="images/portfolio/full/3.jpg"
                data-lightbox="gallery-item"
                ><img src="images/portfolio/4/3.jpg" alt="Gallery Thumb 3"
              /></a>
              <a
                class="grid-item"
                href="images/portfolio/full/4.jpg"
                data-lightbox="gallery-item"
                ><img src="images/portfolio/4/4.jpg" alt="Gallery Thumb 4"
              /></a>
              <a
                class="grid-item"
                href="images/portfolio/full/5.jpg"
                data-lightbox="gallery-item"
                ><img src="images/portfolio/4/5.jpg" alt="Gallery Thumb 5"
              /></a>
              <a
                class="grid-item"
                href="images/portfolio/full/6.jpg"
                data-lightbox="gallery-item"
                ><img src="images/portfolio/4/6.jpg" alt="Gallery Thumb 6"
              /></a>
              <a
                class="grid-item"
                href="images/portfolio/full/7.jpg"
                data-lightbox="gallery-item"
                ><img src="images/portfolio/4/7.jpg" alt="Gallery Thumb 7"
              /></a>
              <a
                class="grid-item"
                href="images/portfolio/full/9.jpg"
                data-lightbox="gallery-item"
                ><img src="images/portfolio/4/9.jpg" alt="Gallery Thumb 9"
              /></a>
              <a
                class="grid-item"
                href="images/portfolio/full/10.jpg"
                data-lightbox="gallery-item"
                ><img src="images/portfolio/4/10.jpg" alt="Gallery Thumb 10"
              /></a>
            </div>
          </div>
    </section>

@endsection

@push('addScript')
    <script src="{{ asset('vendor/owl/jquery.js') }}"></script>
<script src="{{ asset('vendor/owl/owl.carousel.js') }}"></script>
<script src="{{ asset('js/plugins.easing.js') }}"></script>
<script src="{{ asset('js/plugins.lightbox.js') }}"></script>
<script src="{{ asset('js/plugins.fitvids.js') }}"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:true,
                dots: true,
                autoplay: true,
                center: true,
                responsiveClass:true,
                autoWidth:true,
                margin:18,
                nav:false,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:5,
                        nav:false,
                    }
                }
            });
        });
    </script>
@endpush
