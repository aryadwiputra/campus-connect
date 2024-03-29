@extends('layouts.frontend')

@section('title', 'Landing Page')

@section('content')
    {{-- Carousel --}}
    <div class="row mt-3">
        <div class="col-lg-12 mb-xl-50 mb-30">
            <div class="row justify-content-center">
                <h2 class="text-center mt-4 mb-4">Silahkan cari di sini</h2>
                <div class="col-md-8">
                    <div class="search-style-2 global-shadow ">
                        <form action="/" class="d-flex align-items-center">
                            <div class="job-search">
                                <img src="{{ asset('backend/img/svg/search.svg') }}" alt="search" class="svg">
                                <input class="form-control border-0 box-shadow-none" name="q" type="search"
                                    placeholder="Universitas..." aria-label="Search">
                            </div>
                            <button class="btn btn-primary"><img src="{{ asset('backend/img/svg/search.svg') }}"
                                    alt="search" class="svg">Cari</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="row">
                <h2 class="h2 mb-3">Daftar Universitas </h2>
                <div class="bookmark-page bookmark-page--grid mb-30">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mt-sm-30 mt-md-0">
                            <div class="bookmark-page__list">
                                <div class="bookmark-single">
                                    <div class="bookmark-card card">
                                        <div class="card-body pt-30">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                                    aria-labelledby="pills-home-tab">
                                                    <div class="row mx-n1">
                                                        @foreach ($universities as $item)
                                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30">
                                                                <div class="card bookmark bookmark--grid">
                                                                    <div class="bookmark__image">
                                                                        <div class="like-icon">
                                                                            {{-- <button type="button" class="content-center">
                                                                                <i class="las la-star"></i>
                                                                            </button> --}}
                                                                        </div>
                                                                        <a href="#"><img
                                                                                class="card-img-top img-fluid"
                                                                                src="{{ asset('storage/images/universities/' . $item->logo) }}"
                                                                                alt="digital-chair"></a>
                                                                    </div>
                                                                    <div class="card-body px-15 py-20">
                                                                        <div class="bookmark__body text-capitalize">
                                                                            <h6 class="card-title">{{ $item->name }}</h6>
                                                                            <p>{{ $item->city }},
                                                                                {{ $item->province }}</p>
                                                                        </div>
                                                                        <div
                                                                            class="bookmark__button d-flex mt-15 flex-wrap">
                                                                            <a href="{{ route('detail', $item->id) }}"
                                                                                class="btn btn-primary btn-sm btn-squared border-0 "">
                                                                                Detail
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
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
            </div>
        </div>
    </div>
@endsection
