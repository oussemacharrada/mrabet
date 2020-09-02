@extends('layouts.templateback')
@section('content')

<div class="container-fluid " style="padding: 10px">
    <div class="row justify-content-center">
        <div class="col"></div>
        <div class="col justify-content-center">
            <a href="{{action('remorqueController@cRemorqueview',$idVoyage)}}" class="btn btn-primary">Add a new
                remorque</a>
        </div>
        <div class="col"></div>

    </div>
</div>
@if($etat=='phase1')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card-header">phase1:liste Remorque </div>
            <div class="table-responsive">
                <table id="mytable" class="table table-bordred table-striped">
                    <tr>
                        <th class="bg-danger">identification</th>
                        <th class="bg-danger">plomb</th>
                        <th class="bg-danger">Dommage_Name</th>
                        <th class="bg-danger">chargeur</th>
                        <th class="bg-danger">type</th>
                        <th class="bg-danger">ID</th>
                        <th class="bg-danger">vue1</th>
                        <th class="bg-danger">vue2</th>
                        <th class="bg-danger">vue3</th>
                        <th class="bg-danger">vue4</th>
                        <th class="bg-danger">voyage_id</th>
                        <th class="bg-danger">Edit</th>
                        <th class="bg-danger">Delete</th>
                        @foreach ($Remorques as $Remorque)
                    <tr>
                        <td>{{$Remorque['identification']}}</td>
                        <td>{{$Remorque['plomb']}}</td>
                        <td>{{$Remorque['chargeur']}}</td>
                        <td>{{$Remorque['type']}}</td>
                        <td>{{$Remorque['ID']}}</td>
                        <td>{{$Remorque['SCELLE']}}</td>
                        <td>{{$Remorque['vue1']}}</td>
                        <td>{{$Remorque['vue2']}}</td>
                        <td>{{$Remorque['vue3']}}</td>
                        <td>{{$Remorque['vue4']}}</td>
                        <td>{{$Remorque['voyage_id']}}</td>
                        <div class="pull-right action-buttons">
                            <td><a href="" class="btn btn-primary a-btn-slide-text"><span
                                        class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    <span><strong>Edit</strong></span> </td>
                            <td><a href="{{action('remorqueController@deleteRemorque',$Remorque->id_remorque)}}"
                                    class="bg-danger btn btn-primary a-btn-slide-text"><span
                                        class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    <span><strong>Delete</strong></span></td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@elseif($etat=='phase2')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card-header">phase1:liste Remorque </div>
        <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
                <tr>
                    <th class="bg-danger">identification</th>
                    <th class="bg-danger">plomb</th>
                    <th class="bg-danger">Dommage_Name</th>
                    <th class="bg-danger">chargeur</th>
                    <th class="bg-danger">type</th>
                    <th class="bg-danger">ID</th>
                    <th class="bg-danger">vue1</th>
                    <th class="bg-danger">vue2</th>
                    <th class="bg-danger">vue3</th>
                    <th class="bg-danger">vue4</th>
                    <th class="bg-danger">voyage_id</th>
                    @foreach ($Remorques as $Remorque)
                <tr>
                    <td>{{$Remorque['identification']}}</td>
                    <td>{{$Remorque['plomb']}}</td>
                    <td>{{$Remorque['chargeur']}}</td>
                    <td>{{$Remorque['type']}}</td>
                    <td>{{$Remorque['ID']}}</td>
                    <td>{{$Remorque['SCELLE']}}</td>
                    <td>{{$Remorque['vue1']}}</td>
                    <td>{{$Remorque['vue2']}}</td>
                    <td>{{$Remorque['vue3']}}</td>
                    <td>{{$Remorque['vue4']}}</td>
                    <td>{{$Remorque['voyage_id']}}</td>
                    <div class="pull-right action-buttons">

                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</div>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card-header">phase2:liste Remorque </div>
        <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
                <tr>
                    <th class="bg-danger">identification</th>
                    <th class="bg-danger">plomb</th>
                    <th class="bg-danger">Dommage_Name</th>
                    <th class="bg-danger">chargeur</th>
                    <th class="bg-danger">type</th>
                    <th class="bg-danger">ID</th>
                    <th class="bg-danger">vue1</th>
                    <th class="bg-danger">vue2</th>
                    <th class="bg-danger">vue3</th>
                    <th class="bg-danger">vue4</th>
                    <th class="bg-danger">voyage_id</th>
                    <th class="bg-danger">action</th>
                    <th class="bg-danger">Edit</th>
                    <th class="bg-danger">Delete</th>
                    @foreach ($Remorques as $Remorque)
                <tr>
                    <td>{{$Remorque['identification']}}</td>
                    <td>{{$Remorque['plomb']}}</td>
                    <td>{{$Remorque['chargeur']}}</td>
                    <td>{{$Remorque['type']}}</td>
                    <td>{{$Remorque['ID']}}</td>
                    <td>{{$Remorque['SCELLE']}}</td>
                    <td>{{$Remorque['vue1']}}</td>
                    <td>{{$Remorque['vue2']}}</td>
                    <td>{{$Remorque['vue3']}}</td>
                    <td>{{$Remorque['vue4']}}</td>
                    <td>{{$Remorque['voyage_id']}}</td>

                    <div class="pull-right action-buttons">
                        <td><a href="{{action('remorqueController@cDommagephase2',$Remorque->id_remorque)}}"
                                style="background: linear-gradient(to right, #2196f3, #f44336);font-family:Gill Sans"
                                class="btn btn-primary a-btn-slide-text">
                                <span><strong>créer dommage</strong></span> </td>
                        <td><a href="" class="btn btn-primary a-btn-slide-text"><span class="glyphicon glyphicon-edit"
                                    aria-hidden="true"></span>
                                <span><strong>Edit</strong></span> </td>
                        <td><a href="{{action('remorqueController@deleteRemorque',$Remorque->id_remorque)}}"
                                class="bg-danger btn btn-primary a-btn-slide-text"><span
                                    class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                <span><strong>Delete</strong></span></td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</div>
@endif


@endsection