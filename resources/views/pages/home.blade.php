@extends('layouts.front-new')

@push('addMeta')
<!-- Primary Meta Tags -->
<meta name="title" content="Law Firm | M. Andrean Saefudin & Co">
<meta name="description" content=" --- Corporate and Litigation Lawyer ---">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url('/') }}">
<meta property="og:title" content="Law Firm | M. Andrean Saefudin & Co">
<meta property="og:description" content=" --- Corporate and Litigation Lawyer ---">
<meta property="og:image" content="{{ asset('gambar/logo.JPG') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url('/') }}">
<meta property="twitter:title" content="Law Firm | M. Andrean Saefudin & Co">
<meta property="twitter:description" content=" --- Corporate and Litigation Lawyer ---">
<meta property="twitter:image" content="{{ asset('gambar/logo.JPG') }}">
@endpush

@push('addStyle')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
   <style>
        /* #carouselExampleControls img{
            height: 600px;
            width: 100%;
            object-fit: cover;
            object-position: center;
        } */
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
            background: linear-gradient(3600deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 100%);
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
            color: #fff;
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

        .gallery .img__gallery{
            height: 100px;
            object-fit: cover;
            object-position: center;
        }

        .img__artikel{
        width: 100%;
        height: 255px;
        object-fit: cover;
        object-position: center;
        }
        
        @media (max-width: 767.98px) {
            .img__artikel{
                height: 117px!important;
                width: 100px;
                margin-right: 10px;
            }
            .card__artikel{
                display: flex;
            }
            #carouselExampleControls img{
                height: auto;
                width: 100%;
                object-fit: unset;
                object-position: unset;
            }
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

        .nilai-kami h6{
            margin-bottom: unset;
        }
        .nilai-kami h4, h3, h2, h1{
            margin-bottom: unset;
        }

        .card__nilai{
            background-color: #003366;
            border-radius: 6px;
        }
        .card__nilai p{
            line-height: normal !important;
            margin-bottom: unset;

        }

        .img__logo__size{
            width: 250px;
        }

    </style>
@endpush

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($banner as $index => $item)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <img src="{{ url($item->image) }}" class="d-block w-100" alt="Image M. Andrean Saefudin">
                </div>
            @endforeach
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
                            @foreach ($tim as $index => $item)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <a href="{{ route('partner', $item->slug) }}">
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
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('gambar/logo.png') }}" class="img-fluid img__logo__size" alt="">
                    </div>
                    <hr>
                   <div class="text-justify ps-4">
                    {!!$konten['about']->body!!}
                   </div>
                </div>
            </div>
        </div>
    </section>

    <section class="nilai-kami">
        <div class="container">
            <div class="fancy-title title-center title-border topmargin mb-2">
                <h5 class="text">Nilai Kami</h5>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 ">
                    <div class="txet-justify">
                        {!!$konten['nilai_kami']->body!!}
                       
                    </div>
                </div>
            </div>
            <div class="row mt-md-4 mt-2">
                <div class="col-md-6  text-white mb-4">
                    <div class="card__nilai h-100 p-4">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye-fill"
                                viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                            </svg>
                            <h4 class="text-white">Visi</h4>
                        </div>
                        <div class="text-justify">
                            {!!$konten['visi']->body!!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6  text-white mb-4">
                    <div class=" card__nilai h-100 p-4">
                        <div class="text-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 4C14.3067 4 12.8 5.06667 12.24 6.66667H3.99999V9.33333H6.59999L2.66666 18.6667C2.03999 21.3333 3.99999 22.6667 7.33332 22.6667C10.6667 22.6667 12.7467 21.3333 12 18.6667L8.06666 9.33333H12.2267C12.6667 10.4667 13.5333 11.3333 14.6667 11.7733V26.6667H2.66666V29.3333H29.3333V26.6667H17.3333V11.76C18.4667 11.3333 19.3333 10.4667 19.76 9.33333H23.9333L20 18.6667C19.3733 21.3333 21.3333 22.6667 24.6667 22.6667C28 22.6667 30.08 21.3333 29.3333 18.6667L25.4 9.33333H28V6.66667H19.7733C19.2 5.06667 17.6933 4 16 4ZM16 6.66667C16.3536 6.66667 16.6928 6.80714 16.9428 7.05719C17.1928 7.30724 17.3333 7.64638 17.3333 8C17.3333 8.35362 17.1928 8.69276 16.9428 8.94281C16.6928 9.19286 16.3536 9.33333 16 9.33333C15.6464 9.33333 15.3072 9.19286 15.0572 8.94281C14.8071 8.69276 14.6667 8.35362 14.6667 8C14.6667 7.64638 14.8071 7.30724 15.0572 7.05719C15.3072 6.80714 15.6464 6.66667 16 6.66667ZM7.33332 13.6667L9.33332 18.6667H5.33332L7.33332 13.6667ZM24.6667 13.6667L26.6667 18.6667H22.6667L24.6667 13.6667Z"
                                    fill="white" />
                            </svg>
                            <h4 class="text-white">Misi </h4>
                        </div>
                        <div class="text-justify">
                            {!!$konten['misi']->body!!}
                        </div>
                    </div>
                </div>
                <div class="col-md-12  text-white mb-4">
                    <div class=" card__nilai h-100 p-4">
                        <div class="text-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28 5.33329H24V3.99996C24 3.64634 23.8595 3.3072 23.6095 3.05715C23.3594 2.8071 23.0203 2.66663 22.6667 2.66663H9.33335C8.97973 2.66663 8.64059 2.8071 8.39054 3.05715C8.1405 3.3072 8.00002 3.64634 8.00002 3.99996V5.33329H4.00002C3.6464 5.33329 3.30726 5.47377 3.05721 5.72382C2.80716 5.97387 2.66669 6.313 2.66669 6.66663V10.6666C2.66669 16.4133 5.06669 19.88 9.09335 20C9.68087 21.0159 10.4847 21.8901 11.4479 22.5607C12.4111 23.2312 13.51 23.6816 14.6667 23.88V26.6666H12V29.3333H20V26.6666H17.3334V23.88C18.4901 23.6816 19.589 23.2312 20.5521 22.5607C21.5153 21.8901 22.3192 21.0159 22.9067 20C26.9067 19.8666 29.3334 16.4 29.3334 10.6666V6.66663C29.3334 6.313 29.1929 5.97387 28.9428 5.72382C28.6928 5.47377 28.3536 5.33329 28 5.33329ZM5.33335 10.6666V7.99996H8.00002V17.1066C5.62669 16.1066 5.33335 12.4 5.33335 10.6666ZM24 17.1066V7.99996H26.6667V10.6666C26.6667 12.4 26.3734 16.1066 24 17.1066Z"
                                    fill="white" />
                            </svg>
                            <h4 class="text-white">Tujuan</h4>
                        </div>
                        <div class="text-justify">
                            {!!$konten['tujuan']->body!!}
                        </div>
                    </div>
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
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide_1">Slide 1</div>
                <div class="swiper-slide slide_2">Slide 2</div>
                <div class="swiper-slide slide_3">Slide 3</div>
                <div class="swiper-slide slide_4">Slide 4</div>
                <div class="swiper-slide slide_5">Slide 5</div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="why py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h2 class="text-white">
                        Kenapa harus memilih kami <br>
                        m-andreansaefudin.com
                    </h2>
                   
                    <div class="row g-4 mt-5">
                        <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-2">
                            
                            <h3 class="h6 fw-bold text-white mb-0">
                            Profesional Lawyer
                            </h3>
                        </div>
                        <p class="text-white op-06">
                            Kami memberikan sikap penuh rasa integritas, hormat, dan kemampuan yang maksimal untuk Klien kami.
                        </p>
                        </div>

                        <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-2">
                            <h3 class="h6 fw-bold  mb-0 text-white">Respon Cepat</h3>
                        </div>
                        <p class="text-white op-06">
                            Layanan cepat saat anda butuhkan
                        </p>
                        </div>

                        <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-2">
                            <h3 class="h6 fw-bold  mb-0 text-white">Perlindungan Informasi</h3>
                        </div>
                        <p class="text-white op-06">
                            Keamanan informasi dan data terpercaya 
                        </p>
                        </div>

                        <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-2">
                            <h3 class="h6 fw-bold  mb-0 text-white">
                            Practical
                            </h3>
                        </div>
                        <p class="text-white op-06">
                            Kami tidak hanya melihat dari sudut pandang teoritis atau filosofis. Kami merupakan praktisi yang paham perihal masalah
                            legal perusahaan yang paling menguntungkan bagi Anda.
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

            <div class="row mt-4">
                @foreach ($tulisans as $tulisan)
                    <div class="col-md-4 mb-3">
                        <div class="item">
                            <a href="{{ route('detail-tulisan', $tulisan->slug) }}">
                                <div class="card__artikel" id="artikel">
                                    <img src="{{ url($tulisan->image) }}" class="img-fluid img__artikel" alt="{{ $tulisan->judul }}">
                    
                                    <div class="mt-2">
                                        <div class="date mb-2 d-md-block d-none"><i class="icon-calendar3"></i> <span class="ml-2">{{
                                                \Carbon\Carbon::parse($tulisan->created_at)->locale('id')->diffForHumans() }}</span></div>
                                        <div class="judul">{{ Str::limit($tulisan->judul, 65) }}</div>
                                        <div class="date mb-2 d-md-none"><i class="icon-calendar3"></i> <span class="ml-2">{{
                                                \Carbon\Carbon::parse($tulisan->created_at)->locale('id')->diffForHumans() }}</span></div>
                    
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 text-center mt-3">
                    <a href="{{ route('list-artikel') }}" class="btn btn__primary text-white">Artikel Lainnya</a>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery mt-4">
     <div class="container">
            <h3>Gallery</h3>

            <div
              class="masonry-thumbs grid-container grid-5" data-big="1" data-lightbox="gallery" >
            @foreach ($gallery as $item)
                <a
                class="grid-item"
                href="{{ url($item->image) }}"
                data-lightbox="gallery-item" >
                    <img src="{{ url($item->image) }}" alt="Gallery M. Andrean Saefudin" />
                </a>
            @endforeach
            </div>
          </div>
    </section>

    <section class="testimoni mt-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Mereka yang telah
                    memakai Jasa Kami</h4>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('addScript')
<script src="{{ asset('js/plugins.isotope.js') }}"></script>
<script src="{{ asset('vendor/owl/jquery.js') }}"></script>
<script src="{{ asset('vendor/owl/owl.carousel.js') }}"></script>
<script src="{{ asset('js/plugins.easing.js') }}"></script>
<script src="{{ asset('js/plugins.lightbox.js') }}"></script>
<script src="{{ asset('js/plugins.fitvids.js') }}"></script>

{{-- slick --}}
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/slick/slick.min.js"></script>
{{-- slick --}}
<script>
    $('.slick__artikel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });

    let swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
        },
    });
</script>

@endpush
