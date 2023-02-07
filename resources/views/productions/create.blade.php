@extends('master')

@section('content')

<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-hearder" style="text-align:center">
      <h2>ENREGISTREMENT DE LA PRODUCTION</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <form action="{{url('/production')}}" method="post">
                {!! csrf_field()!!}
                <div style="text-align:right">
                    <button class=" btn btn-info btn-sm"  style="width:90px">Enregistrer </button>
                    <a href="{{url('/production')}} " class=" btn btn-info btn-sm"  style="width:90px">Retour </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td width="60px">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:left">N° Production: </label>
                            </td>
                            <td width="900px" colspan=" ">
                                <input type="text" name="numeroProductions" id="numeroProductions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="N° Production" required>
                            </td>
                            <td width="60px">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Gaz produit: </label>
                            </td>
                            <td width="100px" colspan=" ">
                                <input type="text" name="faproduitid" id="faproduitid" class="form-control" style="width:100%; height:1.4rem; padding: 0rem;" placeholder="0" required>
                            </td>
                            <td width="500px" colspan=" ">
                                <input type="text" name="gazProductions" id="gazProductions" class="form-control" style="width:100%; height:1.4rem; padding: 0rem;" placeholder="Gaz produit" required>
                            </td>
                            <td width="60px">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Date production: </label>
                            </td>
                            <td width="900px" colspan=" ">
                                <input type="date" name="dateProductions" id="dateProductions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Opérateur 3" required>
                            </td>

                            <td width="60px"> &nbsp;</td>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td width=" ">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:left">Opérateur 1: </label>
                            </td>
                            <td width=" " colspan=" ">
                                <input type="text" name="operateur1Productions" id="operateur1Productions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Opérateur 1" required>
                            </td>
                            <td width=" ">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Opérateur 2: </label>
                            </td>
                            <td width=" " colspan="2">
                                <input type="text" name="operateur2Productions" id="operateur2Productions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Opérateur 2" required>
                            </td>
                            <td width=" ">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Opérateur 3: </label>
                            </td>
                            <td width=" " colspan=" ">
                                <input type="text" name="operateur3Productions" id="operateur3Productions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Opérateur 3" required>
                            </td>

                            <td width="60px"> &nbsp;</td>

                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td width=" ">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:left">Producteur 1: </label>
                            </td>
                            <td width=" " colspan=" ">
                                <input type="text" name="producteur1Productions" id="producteur1Productions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Producteur 1" required>
                            </td>
                            <td width=" ">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Producteur 2: </label>
                            </td>
                            <td width=" " colspan="2">
                                <input type="text" name="producteur2Productions" id="producteur2Productions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Producteur 2" required>
                            </td>
                            <td width=" ">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Producteur 3: </label>
                            </td>
                            <td width=" " colspan=" ">
                                <input type="text" name="producteur3Productions" id="producteur3Productions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Producteur 3" required>
                            </td>

                            <td width=" "> &nbsp;</td>

                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width=" ">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Quantité: </label>
                            </td>
                            <td width=" " colspan=" ">
                                <input type="number" min="0" max="99999999" name="quaniteProductions" id="quaniteProductions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="0 à 99999999" required>
                            </td>

                            <td width=" "> &nbsp;</td>

                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>

        <div class="table-responsive">
            <div style="text-align:right">
                    <button type="submit" value="" class="btn btn-info btn-sm" style="width:70px" >Ajouter</button>
                    <button type="submit" value="" class="btn btn-primary btn-sm" style="width:70px" > Annuler</button>
            </div>
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

                    </tr>
                    <tr>
                        <td height="0px">&nbsp;</td>
                    </tr>
                </tbody>
                <tfoot></tfoot>
            </table>
        </div>
<!--
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
                    <th> ACTION </th>
                </tr>
                </thead>
                <tbody>
                    @php ($livraisons = [
                        [ "bouteille" => "AC0240", "format" => "Bonbons bon", "prixunitaire" => "10000", "quantite" => "1", "montant" => "10000"],
                        [ "bouteille" => "Prise", "format" => "Fourchette", "prixunitaire" => "10000", "quantite" => "6", "montant" => "60000"],
                        [ "bouteille" => "Tube", "format" => "Bonbons bon", "prixunitaire" => "10000", "quantite" => "6", "montant" => "60000"],
                        [ "bouteille" => "AC0240", "format" => "Fourchette", "prixunitaire" => "10000", "quantite" => "1", "montant" => "10000"],
                    ])
                    @foreach ($livraisons as $item)
                    <tr>
                        <td  style=" width: 0px; height:1.6rem; margin:0px; padding:0px">{{$loop->iteration}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>{{ $item['bouteille'] }}</td>
                        <td>{{ $item['format'] }}</td>
                        <td>{{ $item['prixunitaire'] }}</td>
                        <td>{{ $item['quantite'] }}</td>
                        <td>{{ $item['montant'] }}</td>
                        <td>
                            <form action=" " method="post">
                            {!! csrf_field()!!}
                                <button type="submit" value="" class="btn btn-primary btn-sm" style="width:70px" >Retirer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot></tfoot>
            </table>
        </div>
    -->
    </div>
  </div>
</div>

@stop
