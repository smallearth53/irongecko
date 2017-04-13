@extends('layouts.master')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')

<div class='container mt-6'>
    
    <div id='app'>
        <ul>
            <li v-for='contact in contacts'>
                @{{ contact.firstName }}
            </li>
        </ul>
    </div>
    
</div>


<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
        <i class="fa fa-pencil"></i>
    </a>

    <ul>
        <li><a class="btn-floating red"><i class="fa fa-star"></i></a></li>
        <li><a class="btn-floating yellow darken-1"><i class="fa fa-user"></i></a></li>
        <li><a class="btn-floating green"><i class="fa fa-envelope"></i></a></li>
        <li><a class="btn-floating blue"><i class="fa fa-shopping-cart"></i></a></li>
    </ul>
</div>

@endsection