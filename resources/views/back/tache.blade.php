@extends('layouts.templateback')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">tache en phase 1</div>
            <div class="table-responsive">
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
                        <th>action</th>
                        @foreach ($phase1 as $voyage)
                    <tr>
                        <td>{{$voyage['nomVoyage']}}</td>
                        <td>{{$voyage['nomBateau']}}</td>
                        <td>{{$voyage['portDeChargement']}}</td>
                        <td>{{$voyage['portDeDechargement']}}</td>
                        <td>{{$voyage['responsablePhase1']}}</td>
                        <td>{{$voyage['responsablePhase2']}}</td>
                        <td>{{$voyage['etat']}}</td>
                        <td><a href="{{action('TacheController@fairePhase1',$voyage->idVoyage)}}"
                                class="btn btn-success btn btn-primary a-btn-slide-text"><span
                                    class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                <span><strong>View</strong></span></a></td>
                    </tr>

                    <br>
                    @endforeach


                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">tache en phase 2</div>
            <div class="table-responsive">
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
                        <th>action</th>
                        @foreach ($phase2 as $voyage)
                    <tr>
                        <td>{{$voyage['nomVoyage']}}</td>
                        <td>{{$voyage['nomBateau']}}</td>
                        <td>{{$voyage['portDeChargement']}}</td>
                        <td>{{$voyage['portDeDechargement']}}</td>
                        <td>{{$voyage['responsablePhase1']}}</td>
                        <td>{{$voyage['responsablePhase2']}}</td>
                        <td>{{$voyage['etat']}}</td>
                        <td><a href="{{action('TacheController@fairePhase2',$voyage->idVoyage)}}"
                                class="btn btn-success btn btn-primary a-btn-slide-text"><span
                                    class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                <span><strong>View</strong></span></a></td>
                    </tr>

                    @endforeach


                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection