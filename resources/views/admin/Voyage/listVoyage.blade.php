@extends('layouts.templateback')
@section('content')
<div class="row ">
    <div class="col">
        <div class="card">
            <div class="card-header">Voyages</div>
<table id="mytable" class="table table-bordred table-striped">
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

    <tr>
        <th scope="col">nom voyage</th>
        <th>nom Bateau</th>
        <th>port De Chargement</th>
        <th>port De Dechargement</th>
        <th>responsable Phase1</th>
        <th>responsable Phase2</th>
        <th>etat</th>

        <th>Edit</th>
        <th>Delete</th>
        @foreach ($voyages as $voyage)
        <tr>
            <td>{{$voyage['nomVoyage']}}</td>
            <td>{{$voyage['nomBateau']}}</td>
            <td>{{$voyage['portDeChargement']}}</td>
            <td>{{$voyage['portDeDechargement']}}</td>
            <td>{{$voyage['responsablePhase1']}}</td>
            <td>{{$voyage['responsablePhase2']}}</td>
            <td>{{$voyage['etat']}}</td>
            <td><a href="{{action('voyageController@edit',$voyage->idVoyage)}}"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil">Edit</span></button></p></a></td>
            <td><a href="{{action('voyageController@delete',$voyage->idVoyage)}}" ><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash">Delete</span></button></p></a></td>
        </tr>

            <br>
        @endforeach


    </tr>
</table>
</div>
</div>
</div>
</div>

@endsection
