@extends('layouts.front')

@section('title')
    Layanan - Law Firm | M. Andrean Saefudin & Co
@endsection

@push('addStyle')
    <style>
        .card{
            border: 1px rgb(233, 233, 233) solid;
            border: unset;
        }
        .card__layanan.active{
            background-color: #ba9f40;
            color: white !important;
        }
        .card__layanan.active .title, .card__layanan.active .deskripsi__singkat, .card__layanan.active ul li::marker{
            color: white !important;
        }
        .card__layanan:hover{
            background-color: #ba9f40;
            color: white;
        }
        .card__layanan:hover .title, .card__layanan:hover .deskripsi__singkat, .card__layanan:hover ul li::marker{
            color: white;
        }
        .card__layanan .title{
            font-size: 20px;
            font-weight: bold;
            color: #ba9f40;
        }
        .deskripsi__singkat {
            color: rgb(111, 111, 111);
        }
        ul li::marker {
            color: #ba9f40;
        }
        h4{
            margin-bottom: unset;
        }
        .kontak{
            background: rgb(237,232,214);
            background: linear-gradient(0deg, rgba(237,232,214,1) 0%, rgba(249,250,254,1) 38%);
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

    </style>
@endpush

@section('content')
<div class="pt-md-5 pt-3" style="background-color: #f9fafe; min-height: 100vh">
    <div class="container text-dark" >
        <div class="my-3">
            <div class="fancy-title title-center title-border topmargin">
                <h4 class="text">Layanan Kami</h4>
            </div>
        </div>
        <div class="row ">
            @foreach ($items as $index => $item)
                <div class="col-md-4 mb-3">
                    <div class="card card__layanan shadow-sm h-100 {{ $index === 1 ? 'active' : '' }}">
                        <div class="card-body">
                            <div class="title mb-2">{{ $item->nama_layanan }}</div>
                            <div class="deskripsi__singkat">
                                {!! $item->deskripsi !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <div class="kontak py-5">
        <form action="{{ route('store-layanan') }}" method="POST">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>
                            Dapatkan Penawaran Khusus Untuk Anda
                        </h4>

                        <div class="mt-2 d-flex justify-content-center">
                            <p class="" style="font-size: 14px; color: #717171; margin-bottom: unset">
                                Penawaran Jasa Hukum hanya berlaku khusus bagi Anda sesuai lingkup yang telah disampaikan kepada Kami. Setelah mengisi Form, mohon konfirmasi permintaan penawaran Anda dengan mengakses fitur chat Whatsapp yang tersedia di halaman Website. Terima Kasih
                            </p>
                        </div>
                        <hr>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" required placeholder="masukan nama anda">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" required placeholder="masukan email anda">
                    </div>
                    <div class="mb-3 col-md-4">
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
                    <div class="col-md-6 mb-3">
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
                        <button type="submit" class="btn btn__message ">Kirim Pesan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
