@extends('master')

@section('content')

<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-hearder" style="text-align:center">
      <h2>EDITION DU BON DE LIVRAISON N°: {{($livraisons->numeroLivraison)}}</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <div style="text-align:right">
                <button href=" " class=" btn btn-info btn-sm"  style="width:90px">Imprimer </button>
                <button class=" btn btn-info btn-sm"  style="width:90px">Modifier </button>
                @if (auth()->user()->is_stock)
                <button class=" btn btn-danger btn-sm"style="width:90px">Supprimer </button>
                @endif
                <a href="{{url('/livraison')}} " class=" btn btn-info btn-sm"  style="width:90px">Retour </a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td width="60px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:left">N° BL:</label>
                        </td>
                        <td width="130px">
                            <input type="text" value="{{($livraisons->numeroLivraison)}}" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="N° bon de livraison" required>
                        </td>
                        <td width="80px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">N° BC:</label>
                        </td>
                        <td width="130px">
                            <input type="text"  value="{{($livraisons->numeroLivraison)}}" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="N° bon de commande" required>
                        </td>
                        <td width="80px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Date edition:</label>
                        </td>
                        <td width="130px">
                            <input type="date"  value="{{($livraisons->dateemissionLivraison)}}" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" required>
                        </td>
                        <td width="60px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Date livraison:</label>
                        </td>
                        <td width="130px">
                            <input type="date"  value="{{($livraisons->dateprevuLivraison)}}" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" required>
                        </td>

                        <td width="60px"> &nbsp;</td>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td width="60px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:left">Client:</label>
                        </td>
                        <td width="130px" colspan="3">
                            <input type="text"  value="{{($livraisons->numeroLivraison)}}"  name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Client" required>
                        </td>
                        <td width="80px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Representant:</label>
                        </td>
                        <td width="130px" colspan="3">
                            <input type="text"  value="{{($livraisons->numeroLivraison)}}" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Representant client" required>
                        </td>

                        <td width="60px"> &nbsp;</td>

                    </tr>

                </tfoot>
            </table>

        </div>

        <hr/>

        <div class="table-responsive">
            <div style="text-align:right">
                    <button type="submit" value="" class="btn btn-info btn-sm" style="width:70px" >Ajouter</button>
                    <button type="submit" value="" class="btn btn-primary btn-sm" style="width:70px" > Annuler</button>
            </div>
            <table class="table table-striped">
                <thead> </thead>
                <tbody>
                    <tr>
                        @php ($produits = [
                            [ "prod" => "Bouteilles", "id" => "1"],
                            [ "prod" => "Accessoires", "id" => "2"],
                            [ "prod" => "Autres", "id" => "3"],
                        ])

                        <td width="60px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:left">Produit:</label>
                        </td>
                        <td width="130px">
                            <select class="form-select" aria-label="Default select example">
                                @foreach ($produits as $produit)
                                    <option value="{{ $produit['id'] }}" name="cat">{{ $produit['prod'] }}</option>
                                @endforeach
                            </select>
                        </td>
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
                        <td width="20px">&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="0px">&nbsp;</td>
                    </tr>
                </tbody>
                <tfoot></tfoot>
            </table>
        </div>

        <hr/>

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
                        <td  style="margin:0px; padding:5px">{{$loop->iteration}}</td>
                        <td  style="margin:0px; padding:5px">{{ $item['bouteille'] }}</td>
                        <td  style="margin:0px; padding:5px">{{ $item['format'] }}</td>
                        <td  style="margin:0px; padding:5px">{{ $item['prixunitaire'] }}</td>
                        <td  style="margin:0px; padding:5px">{{ $item['quantite'] }}</td>
                        <td  style="margin:0px; padding:5px">{{ $item['montant'] }}</td>
                        <td  style="margin:0px; padding:5px">
                            <form action="{{url('bouteille')}}" method="post">
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

        <hr/>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead> </thead>
                <tbody> </tbody>
                <tfoot>
                    <tr>
                        <td width="80px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:left">Total Hors taxe:</label>
                        </td>
                        <td width="200px">
                            <input type="text" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="text-align:right; height:1.4rem; padding: 0rem;" placeholder="0,00" required>
                        </td>
                        <td width="60px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:left">&nbsp;</label>
                        </td>
                        <td width="80px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right;">
                                TVA 18%:
                                <input type="checkbox"  checked="true" name="numeroBouteilles" id="numeroBouteilles" class=" " >
                            </label>
                        </td>
                        <td width="200px">
                            <input type="text" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="text-align:right; height:1.4rem; padding: 0rem;" placeholder="0,00" required>
                        </td>
                        <td width="80px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">
                                Remise:
                                <input type="checkbox"   name="numeroBouteilles" id="numeroBouteilles" class=" " >
                            </label>
                        </td>
                        <td width="200px">
                            <input type="text" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="text-align:right; height:1.4rem; padding: 0rem;" placeholder="0,00" required>
                        </td>
                        <td width="80px">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Net à payer:</label>
                        </td>
                        <td width="200px">
                            <input type="text" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="text-align:right; height:1.4rem; padding: 0rem;" placeholder="0,00" required>
                        </td>
                        <td width="60px" style="margin-right:0px ;">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:left">&nbsp;</label>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
  </div>
</div>

@stop
