@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang('Ajouter un type de caméra')
        @endslot

        <form method="POST" action="{{ route('cameras.store') }}">
            @csrf

            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'libelle',
                'required' => true,
                ])

            @component('components.button')
                @lang('Envoyer')
            @endcomponent

        </form>

    @endcomponent

@endsection

