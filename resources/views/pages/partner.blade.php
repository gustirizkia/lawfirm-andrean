@extends('layouts.front')

@section('title')
    {{ $item->nama }}
@endsection

@push('addMeta')
    <meta name="title" content="Law Firm | M. Andrean Saefudin & Co | {{ $item->nama }}">
    <meta name="description" content=" --- Corporate and Litigation Lawyer ---">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('partner', $item->id) }}">
    <meta property="og:title" content="Law Firm | M. Andrean Saefudin & Co | {{ $item->nama }}">
    <meta property="og:description" content=" --- Corporate and Litigation Lawyer ---">
    <meta property="og:image" content="{{ url($item->image) }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ route('partner', $item->id) }}">
    <meta property="twitter:title" content="Law Firm | M. Andrean Saefudin & Co | {{ $item->nama }}">
    <meta property="twitter:description" content=" --- Corporate and Litigation Lawyer ---">
    <meta property="twitter:image" content="{{ url($item->image) }}">
@endpush

@push('addStyle')
    <style>
        img{
            border-radius: 6px;
        }
        .img__top{
            top: 13px !important;
        }
    </style>
@endpush

@section('content')
    <div class="container mt-md-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="h2">PARTNER DAN LAWYER</div>
                <hr>
            </div>
            <div class="col-md-4">
                <div class="sticky-top img__top">
                    <img src="{{ url($item->image) }}" alt="{{ $item->nama }}" class="img-fluid">
                </div>
            </div>
            <div class="col-md-8">
                <div class="h3 mt-md-0 mt-3">{{ $item->nama }}</div>
                {!! $item->deskripsi !!}
            </div>
        </div>
    </div>
@endsection
