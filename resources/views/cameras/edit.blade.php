@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang('Modifier un type de caméra')
        @endslot

        <form method="POST" action="{{ route('cameras.update', $camera->id) }}">
            @csrf
            @method('PUT')

            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'libelle',
                'value' => $camera->libelle,
                'required' => true,
                ])

            @component('components.button')
                @lang('Envoyer')
            @endcomponent

        </form>

    @endcomponent

@endsection

