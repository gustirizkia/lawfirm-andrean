@extends('layouts.front')

@section('title')
    Kontak Kami
@endsection

@push('addStyle')
    <style>
        .kontak{
            /* background: rgb(237,232,214);
            background: linear-gradient(0deg, rgba(237,232,214,1) 0%, rgba(249,250,254,1) 38%); */
        }
        .kontak label{
            margin-bottom: 10px;
        }
        .btn__message{
            background: linear-gradient( 90deg, rgba(197, 159, 52, 1) 0%, rgba(191, 129, 49, 1) 90% );
            color: #ffffff;
            font-weight: 600;
            min-width: 180px !important;
        }

        @media (min-width: 768px) {
            .kontak p{
                width: 80%;
            }
        }
        .kontak .form-control, .kontak .form-select{
            background: white !important;
        }
        .medsos__kontak{
            font-size: 20px;
            padding: 12px;
            display: inline-block;
            color: #fff;
            text-align: center;
            margin-right: 5px;
            margin-bottom: 3px;
            border-radius: 5px;
                line-height: 0;
        }

        .card__kontak{
            border: unset;
        }
    </style>
@endpush

@section('content')
    <div class="h3 text-center mt-md-4 mt-2 mb-md-4 mb-3">KONTAK KAMI</div>
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card card__kontak">
                    <div class="card-body text-center">
                        <a href="https://wa.me/6282122389293" target="_blank">
                            <div class="medsos__kontak social-whatsapp">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <div class="fs-5">
                                082122389293
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card__kontak">
                    <div class="card-body text-center">
                        <a href="https://www.instagram.com/m.andreansaefudin.co/?igshid=YmMyMTA2M2Y%3D" target="_blank">
                            <div class="medsos__kontak social-instagram">
                                <i class="bi bi-instagram"></i>
                            </div>
                            <div class="fs-5">
                                m.andreansaefudin.co
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card__kontak">
                    <div class="card-body text-center">
                        <a href="https://twitter.com/pengacarapublik?t=4Qb_uJuND5_tNsl5zzBWYA&s=08" target="_blank">
                            <div class="medsos__kontak social-twitter">
                                <i class="bi bi-twitter"></i>
                            </div>
                            <div class="fs-5">
                                M. Andrean Saefudin & Co.
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" row">
            <div class="col-md-6">
                <div class="map md-iframe h-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.119137349131!2d106.807936!3d-6.292647!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f19a01cb3105%3A0x232e55aa9610fd4!2sKantor%20Hukum%20%7C%20M.%20Andrean%20Saefudin%20%26%20Co.%20Law%20Firm!5e0!3m2!1sid!2sid!4v1675326265710!5m2!1sid!2sid"
                    class="w-100 h-100"
                     style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
            <div class="col-md-6">
                <div class="kontak py-5">
                    <form action="{{ route('store-layanan') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h5>
                                    Dapatkan Penawaran Khusus Untuk Anda
                                </h5>
                                <hr>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" required placeholder="masukan nama anda">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" required placeholder="masukan email anda">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="">Nomor Telephon/WhatsApp</label>
                                <input type="number" class="form-control" name="phone" required placeholder="08XXXXXXXXXX">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="">Pilih Jenis</label>
                                <select name="jenis" id="" class="form-select">
                                    <option value="perorangan">Perorangan</option>
                                    <option value="badan hukum">Badan hukum/usaha</option>

                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Layanan</label>
                                <select name="layanan" id="" class="form-select">
                                <option value="Jasa Pendampingan PKPU atau Kepailitan" selected="selected" data-calc-value="Jasa Konsultasi dan/atau Somasi" >
                                    Jasa Pendampingan PKPU atau Kepailitan					</option>
                                                    <option value="Jasa di tingkat Kepolisian dan/atau Kejaksaan"  data-calc-value="Jasa di tingkat Kepolisian dan/atau Kejaksaan" >
                                    Jasa di tingkat Kepolisian dan/atau Kejaksaan					</option>
                                                    <option value="Jasa Sidang Pidana Umum atau Khusus"  data-calc-value="Jasa Sidang Pidana Umum atau Khusus" >
                                    Jasa Sidang Pidana Umum atau Khusus					</option>
                                                    <option value="Jasa Sidang Perdata Bisnis dan/atau Personal (Cerai, Waris dll.)"  data-calc-value="Jasa Sidang Perdata Bisnis dan/atau Personal (Cerai, Waris dll.)" >
                                    Jasa Sidang Perdata Bisnis dan/atau Personal (Cerai, Waris dll.)					</option>
                                                    <option value="Jasa Uji Tuntas Hukum dan/atau Pendampingan Transaksi "  data-calc-value="Jasa Uji Tuntas Hukum dan/atau Pendampingan Transaksi " >
                                    Jasa Uji Tuntas Hukum dan/atau Pendampingan Transaksi 					</option>
                                                    <option value="Jasa Penyusunan dan/atau Review Dokumen (Perjanjian. Gugatan, dll)"  data-calc-value="Jasa Penyusunan dan/atau Review Dokumen (Perjanjian. Gugatan, dll)" >
                                    Jasa Penyusunan dan/atau Review Dokumen (Perjanjian. Gugatan, dll)					</option>
                                                    <option value="Jasa Hukum Siaga Untuk Badan Usaha (Perbulan)"  data-calc-value="Jasa Hukum Siaga Untuk Badan Usaha (Perbulan)" >
                                    Jasa Hukum Siaga Untuk Badan Usaha (Perbulan)					</option>
                                                    <option value="Jasa Konsultasi dan/atau Somasi"  data-calc-value="Jasa Pendampingan PKPU &amp; Kepailitan" >
                                    Jasa Konsultasi dan/atau Somasi					</option>
                                                    <option value="Jasa Hukum Lainnya"  data-calc-value="Jasa Hukum Lainnya" >
                                    Jasa Hukum Lainnya					</option>

                                </select>
                            </div>
                            <div class="col-12">
                                <label for="">Jelaskan Masalah dan Kebutuhan Anda</label>
                                <textarea name="deskripsi" required  rows="6" placeholder="jelaskan secara rinci . . ." class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="btn btn__primary ">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
