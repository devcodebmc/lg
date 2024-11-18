@extends('layouts.main')

@section('content')

@if (session('success'))
    <div class="uk-alert-success uk-position-z-index uk-align-center uk-text-center" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="uk-alert-danger uk-position-z-index uk-align-center uk-text-center" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        {{ session('error') }}
    </div>
@endif


@include('components.slider')
@include('partials.description')
@include('partials.banner')
@include('partials.services')
@include('partials.banner2')
@include('partials.trabajos')
@include('partials.testimonials')
@include('partials.clients')
@include('partials.faq')
@include('components.contactForm')
@include('components.modalBudget')

@endsection
