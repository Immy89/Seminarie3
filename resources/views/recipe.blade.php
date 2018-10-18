@extends('layouts.master')

@section('customcss')
    <link rel="Stylesheet" type="text/css" href="{{ asset('css/recept.css') }}">
@endsection

@section('content')
    <div id="titel">
        <h2>{{ $title }}</h2>
    </div>
    <div id="bild">
    <img src="{{ asset($image) }}" alt="Köttbullar_med_mos.jpg" />
    </div>
    <div id="ingredienser">
        {!! $ingredients !!}
    </div>
    <div id="beskrivning">
        {!! $description !!}
    </div>
    <div id="recensioner">
        <h3>Recensioner:</h3>
        <div id="SkapaRecensioner">
            <form action="SkapaRecension.php" method="POST">
                <input type="hidden" name="receptId" value="1">
                <input type="hidden" name="relocateTo" value="index.php?content=Recipes/Köttbullar_med_Mos.php">
                <div class="cont">
                    <textarea placeholder="Kommentar" name="kommentar" required></textarea>
                    <button type="submit">Publicera</button>
                </div>
            </form>
        </div>
        <div id="InlästaRecensioner">
            @isset($comments)
                <hr>
            @endisset
            @foreach ($comments as $comment)
                <div id="commentfield">
                    <span id="uname">{{ $comment->username }}:</span>
                    <span id="comment">{{ $comment->comment }}</span>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endsection