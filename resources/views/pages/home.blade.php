@extends('layouts.app')

@section('title', 'Platform Kursus Online dan Bootcamp')

@section('content')

    {{-- Memanggil partial hero section --}}
    @include('partials.hero_section')

    @include('partials.programs_section')

    {{-- Memanggil partial help section --}}
    @include('partials.help_section')


    {{-- Anda bisa menambahkan section lain di bawah sini --}}
    {{-- Contoh: @include('partials.popular_courses_section') --}}
    
@endsection