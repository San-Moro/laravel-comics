@extends('layouts.app')

@section('content')  
    <h1>pagina comics</h1>
    <section class="section-comics">
        <div class="container">
            <div class="row row-cols-3">
                @foreach ($data as $comic)
                    <div class="col mb-3">
                        <div class="comic-card">
                        <img src="{{ 'thumb' }}" alt="{{ 'title' }}">
                            <h4>{{ 'series' }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection