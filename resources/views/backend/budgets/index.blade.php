@extends('backend.layouts.mainAdmin')

@section('content')
<div class="uk-container uk-margin-large-top">
    <!-- Encabezado -->
    <div class="uk-flex uk-flex-between uk-margin-bottom">
        @include('backend.components.backlink')
        <h2 class="uk-heading-line"><span>Cotizaciones Recibidas</span></h2>
    </div>

    <!-- Mensaje si no hay cotizaciones -->
    @if($budgets->isEmpty())
        <div class="uk-alert-primary uk-text-center uk-padding" uk-alert>
            <p class="uk-margin-remove">No hay cotizaciones recibidas.</p>
        </div>
    @else
        <!-- Grid de cotizaciones -->
        <div class="uk-grid uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match uk-grid-small" uk-grid>
            @foreach($budgets as $budget)
                <div>
                    <div class="uk-card uk-card-secondary uk-card-hover uk-box-shadow-medium"
                        style="border: 1px solid #ffff;">
                        <!-- Encabezado de la tarjeta -->
                        <div class="uk-card-header">
                            <h3 class="uk-card-title uk-margin-remove-bottom">{{ $budget->name }}</h3>
                            <p class="uk-text-meta uk-margin-remove-top">
                                <span uk-icon="icon: calendar"></span> Recibido {{ $budget->created_at->diffForHumans() }}
                            </p>
                        </div>

                        <!-- Cuerpo de la tarjeta -->
                        <div class="uk-card-body">
                            <ul class="uk-list uk-list-divider">
                                <li>
                                    <span uk-icon="icon: mail"></span> 
                                    <a href="mailto:{{ $budget->email }}" 
                                        class="uk-link-text uk-text-success">
                                        {{ $budget->email }}
                                    </a>
                                </li>
                                <li>
                                    <span uk-icon="icon: phone"></span> 
                                    <a href="tel:+52{{ $budget->phone }}" 
                                        class="uk-link-text uk-text-success">
                                        {{ $budget->phone }}
                                    </a>
                                </li>
                                <li>
                                    <span uk-icon="icon: commenting"></span> Servicio: 
                                    {{ $budget->service_type }}
                                </li>
                                <li>
                                    <span uk-icon="icon: thumbnails"></span> Área: 
                                    <span class="uk-text-bold uk-text-success">
                                        {{ $budget->area }} <small>m</small><sup>2</sup>
                                    </span>
                                </li>
                                <li>
                                    <span uk-icon="icon: paint-bucket"></span> Material: 
                                    <span class="uk-text-bold uk-text-success">
                                        {{ $budget->material_description }}
                                    </span>
                                </li>
                                <li>
                                    <span uk-icon="icon: credit-card"></span> Presupuesto: 
                                    <span class="uk-text-bold uk-text-success">
                                        $ {{ $budget->budget }} <small>MXN</small>
                                    </span>
                                </li>
                                <li>
                                    <span uk-icon="icon: comments"></span> Notas: 
                                    <span class="uk-text-bold">{{ $budget->additional_notes }}</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Pie de la tarjeta -->
                        <div class="uk-card-footer uk-text-right">
                            {{--  --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
