@extends('layouts.komentar')

@section('content')

<div class="container">
    <div class="col-md-12 mt-2">
        <div class="row gx-3">

            <div class="col-md-3 p-0">
                <div id="carouselExampleControls" class="carousel slide mx-4" data-bs-ride="carousel"
                    style="display: block; position: fixed;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/images/post1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/images/post2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/images/post3.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-md-9 p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-1">
                                <img src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg"
                                    alt="" width="36">
                            </div>
                            <div class="col-4">
                                <p class="card-text">Anonymous</p>
                            </div>
                            <div class="col-0">
                                <textarea cols="50" readonly="readonly" style="border: none">{{ $menfess->menfess }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($menfess->komentars as $komentar)
                <div class="card" style="border-left: 3px solid black;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9" >
                                <textarea cols="50" readonly="readonly" style="border: none;">{{ $komentar->komentar }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div>
                    <form action="{{ url('/menfess/' . $menfess->id . '/add-comment') }}"
                        method="post">
                        @csrf
                        <textarea required type="text" name="komentar" class="form-control" placeholder="tambahkan komentarmu disini!"></textarea><br />
                        <input type="hidden" name="menfess_id" value="{{ $menfess->id }}">
                        <button type="submit"  style="background-color: #A9B2FFF7; border: none;">Submit</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection