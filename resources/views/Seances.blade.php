@extends('template', ['pageTitle' => 'Enregistrement de Seances'])

@section('title')
    <title>
        Seances
    </title>
@endsection


@section('contenu')

    @livewire('seance')
@endsection