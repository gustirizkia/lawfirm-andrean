@extends('layouts.front')

@section('title')
    Artikel Hukum
@endsection

@push('addStyle')
    <style>
        .img__artikel{
            width: 100%;
            height: 255px;
            object-fit: cover;
            object-position: center;
        }

        @media (max-width: 767.98px) {
            .img__artikel{
                height:  117px!important;
                width: 100px;
                margin-right: 10px;
            }
            .card__artikel{
                display: flex;
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
    </style>
@endpush

@section('content')
    <div class="container my-md-4 my-2" style="min-height: 100vh">
        <div class="mt-md-4 mt-2">
            <div class="row" id="row__artikel">
                @foreach ($items as $tulisan)
                    <div class="col-md-4 mb-3">
                        <div class="item" >
                            <a href="{{ route('detail-tulisan', $tulisan->slug) }}">
                                <div class="card__artikel" id="artikel">
                                    <img src="{{ url($tulisan->image) }}" class="img-fluid img__artikel" alt="{{ $tulisan->judul }}">

                                    <div class="mt-2">
                                        <div class="date mb-2 d-md-block d-none"><i class="icon-calendar3"></i> <span class="ml-2">{{ \Carbon\Carbon::parse($tulisan->created_at)->locale('id')->diffForHumans() }}</span></div>
                                        <div class="judul">{{ Str::limit($tulisan->judul, 65) }}</div>
                                        <div class="date mb-2 d-md-none"><i class="icon-calendar3"></i> <span class="ml-2">{{ \Carbon\Carbon::parse($tulisan->created_at)->locale('id')->diffForHumans() }}</span></div>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                @if ($currentPage < $lastPage)
                <div class="text-center d-flex align-items-center justify-content-center d-none" id="loading__artiel">
                    <div class="spinner-border" role="status">
                        <span class="sr-only"></span>
                    </div>
                    <span class="ms-3">Loading Data</span>
                </div>
                <div class="col-12 text-center mt-2" id="col__loadmore">
                    <div class="btn btn__primary" onclick="loadMore()">Lihat Lebih Banyak</div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('addScript')
    <script>
        let currentPage = {{ $currentPage }};
        function loadMore(){
            currentPage += 1;
            $("#loading__artiel").removeClass('d-none');
            $.ajax({
                url: `{{ route('dataArtikel') }}?page=${currentPage}`,
                type: 'GET',
                success: function(data){
                    console.log('data', data)
                    if(data.current_page >= data.last_page){
                        $("#col__loadmore").addClass('d-none');
                    }
                    let tagHtml = '';
                    data.data.forEach(element => {
                        // let judul = element.judul;
                        // if(element.judul.length > 63){
                        //     judul = `${element.judul.substring(0, 62)}...`;
                        // }

                        tagHtml += `
                        <div class="col-md-4 mb-3">
                            <div class="item" >
                                <a href="{{ route('detail-tulisan', $tulisan->slug) }}">
                                    <div class="card__artikel" id="artikel">
                                        <img src="{{ url('/') }}/${element.image}" class="img-fluid img__artikel" alt="${element.judul}">

                                        <div class="mt-2">
                                            <div class="date mb-2 d-md-block d-none"><i class="icon-calendar3"></i> <span class="ml-2">${element.old_date}</span></div>

                                            <div class="judul">
                                                ${element.judul}
                                            </div>
                                        <div class="date mb-2 d-md-none"><i class="icon-calendar3"></i> <span class="ml-2">${element.old_date}</span></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    `
                });
                    $("#row__artikel").append(tagHtml);
                    $("#loading__artiel").addClass('d-none');
                }
            })
        }
    </script>
@endpush
