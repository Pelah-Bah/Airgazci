@extends('master')

@section('content')

<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-hearder" style="text-align:center">
      <h2>ENREGISTREMENT DE LA PRODUCTION</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <form action="{{url('production')}}" method="post">
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
                                <input type="text" value="{{($production->numeroProductions)}}" name="numeroProductions" id="numeroProductions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="N° Production" required>
                            </td>
                            <td width="60px">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Gaz produit: </label>
                            </td>
                            <td width="100px" colspan=" ">
                                <input type="text" value="{{($production->faproduitid)}}" name="faproduitid" id="faproduitid" class="form-control" style="width:100%; height:1.4rem; padding: 0rem;" placeholder="0" required>
                            </td>
                            <td width="500px" colspan=" ">
                                <input type="text" value="{{($production->gazProductions)}}" name="gazProductions" id="gazProductions" class="form-control" style="width:100%; height:1.4rem; padding: 0rem;" placeholder="Gaz produit" required>
                            </td>
                            <td width="60px">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Date production: </label>
                            </td>
                            <td width="900px" colspan=" ">
                                <input type="date" value="{{($production->dateProductions)}}" name="dateProductions" id="dateProductions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Opérateur 3" required>
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
                                <input type="text" value="{{($production->operateur1Productions)}}" name="operateur1Productions" id="operateur1Productions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Opérateur 1" required>
                            </td>
                            <td width=" ">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Opérateur 2: </label>
                            </td>
                            <td width=" " colspan="2">
                                <input type="text" value="{{($production->operateur2Productions)}}" name="operateur2Productions" id="operateur2Productions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Opérateur 2" required>
                            </td>
                            <td width=" ">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Opérateur 3: </label>
                            </td>
                            <td width=" " colspan=" ">
                                <input type="text" value="{{($production->operateur3Productions)}}" name="operateur3Productions" id="operateur3Productions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Opérateur 3" required>
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
                                <input type="text" value="{{($production->producteur1Productions)}}" name="producteur1Productions" id="producteur1Productions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Producteur 1" required>
                            </td>
                            <td width=" ">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Producteur 2: </label>
                            </td>
                            <td width=" " colspan="2">
                                <input type="text" value="{{($production->producteur2Productions)}}" name="producteur2Productions" id="producteur2Productions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Producteur 2" required>
                            </td>
                            <td width=" ">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Producteur 3: </label>
                            </td>
                            <td width=" " colspan=" ">
                                <input type="text" value="{{($production->producteur3Productions)}}" name="producteur3Productions" id="producteur3Productions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Producteur 3" required>
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
                                <input type="number" min="0" max="99999999" value="{{($production->quaniteProductions)}}" name="quaniteProductions" id="quaniteProductions" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="0 à 99999999" required>
                            </td>

                            <td width=" "> &nbsp;</td>

                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>
        <form action="{{url('production')}}" method="post">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead> </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" value="{{($production->id)}}" name="productionsidStockages" id="productionsidStockages" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder=" " required>
                            </td>
                            <td width="80px">&nbsp;</td>
                            <td width="130px">&nbsp;</td>
                            <td width="80px">&nbsp;</td>
                            <td width="60px">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:left">Bouteilles:</label>
                            </td>
                            <td width="130px">
                                <input type="text" name="bouteillesStockages" id="bouteillesStockages" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Bouteilles" required>
                            </td>
                            <td width="60px">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Désignation:</label>
                            </td>
                            <td width="260px">
                                <input type="text" name="designationStockages" id="designationStockages" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Format" required>
                            </td>
                            <td height=" ">&nbsp;</td>
                            <td width="72px">
                                <button type="submit" value="" class="btn btn-info btn-sm" style="width:70px" >Ajouter</button>
                            </td>
                            <td width="72px">
                                <button type="submit" value="" class="btn btn-primary btn-sm" style="width:70px" > Annuler</button>
                            </td>

                        </tr>
                        <tr>
                            <td height="0px">&nbsp;</td>
                        </tr>
                    </tbody>
                    <tfoot></tfoot>
                </table>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th> BOUTEILLES </th>
                    <th> DESIGNATION </th>
                    <th>&nbsp; </th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($epjs as $epjs)
                    <tr>
                        <td  style=" width: 0px; height:1.6rem; margin:0px; padding:0px">{{ $epjs['bouteillesStockages'] }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td  style=" width: 0px; height:1.6rem; margin:0px; padding:0px">{{ $epjs['designationStockages'] }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td style="text-align:right">
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

    </div>
  </div>
</div>

@stop
