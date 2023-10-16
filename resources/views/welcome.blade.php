@extends('layouts.site')

@section('content')

@push('css')

<style>

    ul {
        position: absolute;
        top: 62%;
        display: flex;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    ul li {
        list-style: none;
        margin: 0 10px;
    }


    </style>

@endpush
<div class="container">


                    <h2 style="font-size: 100px;color: #00000054;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);text-transform: capitalize;font-weight: bold;font-family: arial;"> {{ $setting->name }} </h2>

                    <ul>
                        <li>
                            <a href="{{ route('lab.login') }}" class="btn btn-primary">Lab Login</a>
                        </li>

                        <li>
                            <a href="{{ route('pharmacy.login') }}" class="btn btn-success">Pharmacy Login</a>
                        </li>

                        <li>
                            <a href="{{ route('dashboard.login') }}" class="btn btn-danger">Dashboard Login</a>
                        </li>

                    </ul>
                </div>

@endsection
