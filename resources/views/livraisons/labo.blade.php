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
                        <td colspan="14"> &nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="14"> &nbsp;</td>
                    </tr>

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
                        <td colspan="14">&nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="14">
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
                        </td>
                    </tr>

                    <tr>
                        <td colspan="14">&nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="14"> &nbsp;g</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>

@stop

















@extends('app')

 @section('content')


 <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th> N° </th>
          <th> DATES </th>
          <th> PRODUCTION N° </th>
          <th> GAZ PRODUITS </th>
          <th> ACTION </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($livraisons as $item)
        <tr>
          <td  style="margin:0px; padding:10px">{{$loop->iteration}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


 <div class="col-md-6">
    <div class="form-group row">
      <label for="" class="col-sm-3 col-form-label" style="text-align:right">Numero Bouteilles:</label>
      <div class="col-sm-9">
        <input type="text" name="numeroBouteilles" id="numeroBouteilles" class="form-control" placeholder="Numéro bouteilles" required>
      </div>
      </div>
  </div>

  <div class="col-md-6">
      <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label" style="text-align:right">Numero Origine:</label>
        <div class="col-sm-9">
          <input type="text" name="numeroorigineBouteilles" id="numeroorigineBouteilles" class="form-control" placeholder="numero origine Bouteilles" required>
        </div>
      </div>
  </div>

  <div class="col-md-6">
    @php ($options = [
      [ "cat" => "7m3", "id" => "1"],
      [ "cat" => "5m3", "id" => "2"],
      [ "cat" => "1,5m3", "id" => "3"],
    ])
    <div class="form-group row">
      <label for="" class="col-sm-3 col-form-label" style="text-align:right">Conditionnement:</label>
      <div class="col-sm-9">
          <select class="form-control">
            @foreach ($options as $option)
                <option value="{{ $option['id'] }}" name="cat">{{ $option['cat'] }}</option>
            @endforeach
          </select>
      </div>
      </div>
  </div>

  <div class="col-md-6">
    @php ($options = [
      [ "gaz" => "Acétylène", "id" => "1"],
      [ "gaz" => "Azote", "id" => "2"],
      [ "gaz" => "Oxygène", "id" => "3"]
    ])
      <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label" style="text-align:right">Famille gaz:</label>
        <div class="col-sm-9">
          <select class="form-control">
            @foreach ($options as $option)
                <option value="{{ $option['id'] }}" name="gaz">{{ $option['gaz'] }}</option>
            @endforeach
          </select>
        </div>
      </div>
  </div>

  <div class="col-md-6">
    <div class="form-group row">
      <label for="" class="col-sm-3 col-form-label" style="text-align:right">Date Epreuve:</label>
      <div class="col-sm-9">
        <input type="date" name="dateepreuveBouteilles" id="dateepreuveBouteilles" class="form-control" placeholder="Date d'épreuve bouteilles " required />
      </div>
      </div>
  </div>

  <div class="col-md-6">
      <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label" style="text-align:right">Fin Epreuve:</label>
        <div class="col-sm-9">
          <input type="date" name="finepreuveBouteilles" id="finepreuveBouteilles" class="form-control" placeholder="date de fin épreuve bouteilles" required />
        </div>
      </div>
  </div>









   <div class="col-lg-12 grid-margin stretch-card">
     <div class="card">
         <div class="card-hearder" style="text-align:center">
             <h2>LIVRAISON DE GAZ</h2>
         </div>
       <div class="card-body" >
        <div style="text-align:right">
            <a href="{{url('/livraison/create')}}" class=" btn btn-info btn-sm" title="Ajouter nouveau client" style="width:90px">Nouveau </a>
            <a href=" " class=" btn btn-success btn-sm" title="Imprimer la liste" style="width:90px">Imprimer </a>
            <a href="{{url('/livraison')}} " class=" btn btn-danger btn-sm" title="Retour" style="width:90px">Retour </a>
        </div>
         <div class="table-responsive">
           <table class="table table-striped">
             <thead>
               <tr>
                 <th> N° </th>
                 <th> EMIS LE </th>
                 <th> LIVRASON N° </th>
                 <th> CLIENTS </th>
                 <th> LIEUX LIVRAISONS </th>
                 <th> ACTION </th>
               </tr>
             </thead>
             <tbody>
               @foreach ($livraisons as $item)
               <tr>
                 <td  style="margin:0px; padding:10px">{{$loop->iteration}}</td>
                 <td>{{$item->dateemissionLivraison}}</td>
                 <td>{{$item->numeroLivraison}}</td>
                 <td>{{$item->nomclientLivraison}}</td>
                 <td>{{$item->villeLivraison}}</td>
                 <td>
                    <div style="text-align:right">
                        <a href="{{url('/livraison/'. $item->id)}}" title="View Student" class=" btn btn-info btn-sm" style="width:90px"><i class="fa fa-eye" aria-hidden="true">Voir</i></a>
                        <a href="{{url('/livraison/'. $item->id .'/edit')}} " title="Edit Student" class=" btn btn-primary btn-sm" style="width:90px"> <i class="fa fa-eye" aria-hidden="true">Modifier</i> </a>
                        <form method="POST" action="{{url('/livraison/'. $item->id)}}" accept-charset="utf-8" style="display:inline">
                        {!! method_field('DELETE')!!}
                        {!! csrf_field()!!}
                            @if (auth()->user()->is_admin)
                            <button class=" btn btn-danger btn-sm" title="Delete Student" style="width:90px" onclick="return confirm ("confirm delete")"><i class="fa fa-pencil-square-o" aria-hidden="true">Supprimer</i></button>
                            @endif
                        </form>
                    </div>
                 </td>
               </tr>
               @endforeach
             </tbody>
           </table>
         </div>
       </div>
     </div>
   </div>
 @endsection
