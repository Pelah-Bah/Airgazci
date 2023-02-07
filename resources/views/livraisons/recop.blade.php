@extends('master')

@section('content')

<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-hearder" style="text-align:center">
      <h2>BON DE LIVRAISON N°: {{($livraisons->numeroLivraison)}}</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead> </thead>
                <tbody>
                    <tr>
                        <td width="60px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:left">Bouteilles:</label>
                        </td>
                        <td width="130px">
                            <input type="text" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Bouteilles" required>
                        </td>
                        <td width="60px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Format:</label>
                        </td>
                        <td width="130px">
                            <input type="text" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Format" required>
                        </td>
                        <td width="80px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Prix Unitaire:</label>
                        </td>
                        <td width="130px">
                            <input type="text" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Prix Unitaire" required>
                        </td>
                        <td width="80px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Quantité:</label>
                        </td>
                        <td width="130px">
                            <input type="text" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Quantité" required>
                        </td>
                        <td width="60px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Montant:</label>
                        </td>
                        <td width="130px">
                            <input type="text" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Montant" required>
                        </td>

                        <td width="5px"> &nbsp;</td>

                        <td width="75px">
                            <form action="{{url('bouteille')}}" method="post">
                            {!! csrf_field()!!}
                                <button type="submit" value="" class="btn btn-primary btn-sm" style="width:70px" >Ajouter</button>
                            </form>
                        </td>
                        <td width="75px">
                            <form action="{{url('bouteille')}}" method="post">
                            {!! csrf_field()!!}
                                <button type="submit" value="" class="btn btn-success btn-sm" style="width:70px" >Retirer</button>
                            </form>
                        </td>
                        <td width="75px">
                            <form action="{{url('bouteille')}}" method="post">
                            {!! csrf_field()!!}
                                <button type="submit" value="" class="btn btn-danger btn-sm" style="width:70px" > Annuler</button>
                            </form>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            &nbsp;
                            &nbsp;
                        </td>
                    </tr>

                    <tr>
                        <td colspan="14">
                        <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th> N° </th>
                                <th> BOUTEILLES </th>
                                <th> DESIGNATION </th>
                                <th> PRIX UNITAIRE</th>
                                <th> QUANTITE</th>
                                <th> MONTANT </th>
                            </tr>
                            </thead>
                            <tbody>
                                @php ($livraisons = [
                                  [ "bouteille" => "AC0240", "format" => "Bonbons bon", "prixunitaire" => "10000", "quantite" => "6", "montant" => "60000"],
                                  [ "bouteille" => "AC0240", "format" => "Fourchette", "prixunitaire" => "10000", "quantite" => "6", "montant" => "60000"],
                                ])
                                @foreach ($livraisons as $item)
                                <tr>
                                    <td  style="margin:0px; padding:5px">{{$loop->iteration}}</td>
                                    <td  style="margin:0px; padding:5px">{{ $item['bouteille'] }}</td>
                                    <td  style="margin:0px; padding:5px">{{ $item['format'] }}</td>
                                    <td  style="margin:0px; padding:5px">{{ $item['prixunitaire'] }}</td>
                                    <td  style="margin:0px; padding:5px">{{ $item['quantite'] }}</td>
                                    <td  style="margin:0px; padding:5px">{{ $item['montant'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="14">&nbsp;o</td>
                    </tr>
                    <tr>
                        <td colspan="14">2</td>
                    </tr>

                </tbody>
        </table>
        </div>
    </div>
  </div>
</div>

@stop
