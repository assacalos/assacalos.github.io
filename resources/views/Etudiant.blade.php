@extends('template', ['pageTitle' => 'Page etudiant'])

@section ('contenu')
<h1>ENREGISTREMENT</h1>
@livewire('inscription-etudiant')
<div class="container pt-1000" >
    <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NCE</th>
                            <th scope="col">NOM</th>
                            <th scope="col">PRENOM</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data AS $etudiant)
                        <tr>
                            <th scope="row"></th>
                            <td>{{ $etudiant['nce'] }}</td>
                            <td>{{ $etudiant['nom'] }}</td>
                            <td>{{ $etudiant['prenoms'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                   

            </div>
    </div>
    
    
</div>


@endsection

@section('title')
<title>Page Etudiant</title>
@endsection 