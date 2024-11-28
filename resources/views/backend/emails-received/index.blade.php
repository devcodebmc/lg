@extends('backend.layouts.mainAdmin')

@section('content')
<div class="container">
    <div class="uk-flex uk-flex-between uk-margin-bottom">
        @include('backend.components.backlink')
        <h2 class="uk-heading-line"><span>Correos Recibidos</span></h2>
    </div>


    @if($emails->isEmpty())
        <div class="uk-alert-primary uk-text-center" uk-alert>
            <p>No hay correos recibidos.</p>
        </div>
    @else
        <div class="uk-grid uk-grid-match uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
            @foreach($emails as $email)
                <div>
                    <div class="uk-card uk-card-secondary"
                        style="border: solid 1.5px #28b463;">
                        <div class="uk-card-header uk-background-secondary uk-light">
                            <big class="uk-position-top-right uk-margin-right uk-margin-top">
                                <span uk-icon="icon: hashtag"></span>{{ $loop->iteration  }}
                            </big>
                            <h4 class="uk-card-title uk-margin-remove-top">
                                {{ $email->name }} {{ $email->last_name }}
                            </h4>
                            <div class="uk-margin-remove-top">                         
                                <span uk-icon="icon: calendar;"></span>:
                                <span style="color:#f4d03f">
                                   {{ $email->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                        <div class="uk-card-body" style="margin-top: -40px;">
                            <p class="uk-overflow-auto">
                                <span uk-icon="icon: mail"></span>: 
                                <a href="mailto:{{ $email->email }}" class="uk-link-text"
                                    style="color:#32add2;">
                                    {{ $email->email }}
                                </a>
                            </p>
                            <p>
                                <span uk-icon="icon: phone"></span>: 
                                <a href="tel:+52{{ $email->phone_number }}" class="uk-link-text"
                                    style="color:#32d296;">
                                    {{ $email->phone_number }}
                                </a>
                            </p>
                            <p> 
                                <span uk-icon="icon: commenting"></span>: 
                                {{ $email->message }}
                            </p>
                            {{-- <p>
                                <strong>Estatus:</strong> 
                                @if($email->status == 'pending')
                                    <span class="uk-label uk-text-bold" 
                                        style="background: #f0506e; color: #ffff;">
                                        Pendiente
                                    </span>
                                    @elseif($email->status =='ready')
                                    <span class="uk-label uk-label-warning uk-text-bold"
                                        style="background: #faa05a;">Leido</span>
                                    @else
                                     <span class="uk-label uk-text-bold"
                                        style="background: #32d296;">Procesado</span>
                                @endif
                               
                            </p> --}}
                        </div>
                        {{-- <div class="uk-card-footer" style="margin-top: -40px;">
                            <a href="#" 
                               title="Responder Mensaje" 
                               class="uk-button uk-button-dafault uk-button-small"
                               style="border: solid 1px #f4d03f; padding: 10px;">
                                Responder Mensaje
                                <span uk-icon="icon: reply"></span>
                            </a>
                        </div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
