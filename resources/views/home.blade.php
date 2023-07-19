@extends('layouts.app')


@section('Dc Comics')


@section('main-content')
    <div class="jumbotron"> 
    </div>
    <div class="main-content">
        <section class="main-section">
            <div class="card-container">
                <SingleCardDc v-for="card in cardList"
                                :cardElement="card"/>
            </div>
        </section>
    </div>

    <div class="load-btn">
        <p class="load-more">
            LOAD MORE
        </p>
    </div>

    <h2>
        CURRENT SERIES
    </h2>
@endsection