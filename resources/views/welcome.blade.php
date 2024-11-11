@extends('layouts.main')

@section('content')

@include('components.slider')
@include('partials.description')
@include('partials.banner')
@include('partials.services')
@include('partials.banner2')
@include('partials.proyects')
@include('partials.testimonials')
@include('partials.clients')
@include('partials.faq')
@include('components.contactForm')
@include('components.footer')
@include('components.modalBudget')

@endsection
