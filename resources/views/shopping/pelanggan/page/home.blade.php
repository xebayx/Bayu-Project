@extends('shopping.pelanggan.layout.index')

@section('content')
    <div class="content mt-5 d-flex flex-lg-wrap gap-4">
        <div class="card" style="width: 180px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{ asset('assets/product/bajumerah.png') }}" alt="baju merah" style="width: 100%;height:150px;">
            </div>
            <div class="card-body">
                <p class="m-0 text-center"> Baju Cotton Merah Polos</p>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{ asset('assets/product/bajubiru.png') }}" alt="baju biru" style="width: 120px;height:150px;">
            </div>
            <div class="card-body">
                <p class="m-0 text-center"> Baju Cotton Biru Polos</p>
            </div>
        </div>
        <div class="card" style="width: 180px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{ asset('assets/product/bajukuning.png') }}" alt="baju kuning" style="width: 120px;height:150px;">
            </div>
            <div class="card-body">
                <p class="m-0 text-center"> Baju Cotton Kuning Polos</p>
            </div>
        </div>
    </div>
@endsection
