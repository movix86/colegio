@extends('home.base')

@section('nav')
    <x-nav/>
@endsection

@section('contenido')

    @if (isset($date))
        @component('components.sliders', ['sliders' => $date['sliders']])
            <x-sliders/>
        @endcomponent
    @endif
    @if (isset($date))
        @component('components.news-table-carousel', ['date' => $date['news_carusel']])
            {{-- <x-b-home-servicios/> --}}
            <x-news-table-carousel />
        @endcomponent
    @endif
    <x-footer/>
@stop
