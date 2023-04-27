@extends('template', ['pageTitle' => $pageTitle])

@section('title')
<title>
Page UES & ECUES
</title>

@endsection
@section('contenu')

<h1>UES</h1>
@livewire('li-ue-ecue')

<div class="container pt-1000" >
    <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">CODE UE</th>
                            <th scope="col">NOM UE</th>
                            <th scope="col">CODE ECUE</th>
                            <th scope="col">NOM ECUE</th>
                            <th scope="col">HT CM</th>
                            <th scope="col">HT TD</th>
                            <th scope="col">HT TP</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $ue)
                        <tr>
                            <th scope="row"></th>
                            <td>{{  $ue['code']}}</td>
                            <td>{{ $ue['nom'] }}</td>
                            @foreach($ue['ecues'] as $ecue )
                            <td>{{ $ecue['code'] }}</td>
                            <td>{{ $ecue['nom'] }}</td>
                            <td>{{ $ecue['cm'] }}</td>
                            <td>{{ $ecue['td'] }}</td>
                            <td>{{ $ecue['tp'] }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                   

            </div>
    </div>
    
    
</div>
@endsection