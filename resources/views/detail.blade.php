<head>
    <style>
        .silver{
            background-color: silver;
        }

        .gold{
            background-color: goldenrod;
        }

        .red{
            background-color: rgba(212, 68, 68, 0.788);
        }

        .heading{
            font-size: 50px;
            font-weight: 800;
            position: relative;
            text-align: center;
        }

        .kartu{
            border-radius: 20px;
            padding-top: 2vw;
            width: 95%;
            text-align: center;
        }

        .foto{
            width: auto;
            justify-items: center;
        }

        .card-img-top{
            width: 50% !important;
        }

        .productnametitle
        {
            color: #1b1410;
            font-size: auto;
            font-weight: 900;
        }

        .productnamedesc
        {
            font-size: 24px;
            font-weight: 500;
        }

        .productnamestats
        {
            font-size: 40px;
            font-weight: 800;
        }

        .productnameprice
        {
            color: rgb(37, 31, 14);
            font-size: 40px;
            font-weight: 800;
        }

        .row{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .font{
            font-size: 30px;
            font-weight: 500;
            background-color: rgba(0, 0, 0, 0.281);
            border-radius: 5px;
            color: black;
        }

        .keterangan{
            padding: 30px;
            margin-left: 100px;
            margin-right: 100px;
        }
    </style>
</head>

@extends('master')

<div class="header grid">
    <a href="/" class="font"> Back </a>
    @section('title', 'Product Description')
</div>

@section('detaildesc', 'The card has some magic power. Collect Cars Wars Wiki collections card and traded among players to enhance their collections.')

@section('detailproduct')

<div class="row">
    <div class="kartu mt-5
        {{ ($booster['category'] === 'boyband') ? 'gold' : '' }}
        {{ ($booster['category'] === 'drama') ? 'silver' : '' }}
        {{ ($booster['category'] === 'snacks') ? 'red' : '' }}"
        >
        <center><img class="card-img-top" src="{{ asset('assets/moodbooster('. $booster['id'].').jpg')}}"
            alt="{{ $booster['name'] }}" width="400px"></center>

        <div class="keterangan text-center">
            <h1 class="productnametitle mt-3">{{$booster['name']}}</h1>
            <p class="productnamedesc">{{$booster['description']}}</p>
        </div>
    </div>
</div>

@endsection
