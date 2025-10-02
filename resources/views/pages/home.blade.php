@extends('layouts.app')

@section('title', 'Revamp')

@section('content')

    {{-- Memanggil partial section --}}
    @include('partials.hero_section')

    @include('partials.programs_section')

    @include('partials.prakerja_section')

    @include('partials.article_section')

    @include('partials.testimonial_section')

    @include('partials.partnership_section')

    @include('partials.help_section')


    {{-- Anda bisa menambahkan section lain di bawah sini --}}
    {{-- Contoh: @include('partials.popular_courses_section') --}}
    
@endsection