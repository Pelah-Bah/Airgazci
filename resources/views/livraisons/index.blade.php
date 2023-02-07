@extends('app')

 @section('content')

   <div class="col-lg-12 grid-margin stretch-card">
     <div class="card">
         <div class="card-hearder" style="text-align:center">
             <h2>JOURNAL DES LIVRAISONS</h2>
         </div>
       <div class="card-body" >

        <form action="{{url('livraison')}}" method="post">
            {!! csrf_field()!!}
            <div class="table-responsive">
            </div>
        </form>
        <div style="text-align:right">
            <a href="{{url('/livraison/create')}}" class=" btn btn-info btn-sm" title="Ajouter nouveau client" style="width:100px">Nouveau </a>
            <a href="{{url('/livraison/create')}}" class=" btn btn-info btn-sm" title="Ajouter nouveau client" style="width:100px">Rechercher BL </a>
        </div>
         <div class="table-responsive">
            <br/>
            <table class="table table-striped" width="px" border="0">
                <thead>
                    <tr>
                        <td style="text-align:left; padding: 0rem;">Numero BL : </td>
                        <td>
                            <input type="text" class="form-control" style="width: 200px; height:1.4rem; padding: 0rem;" placeholder="Rechercher N° BL">
                        </td>
                        <td style="text-align:left; padding: 0rem;">Numero bouteille : </td>
                        <td>
                            <input type="text" class="form-control" style="width: 200px; height:1.4rem; padding: 0rem;" placeholder="Rechercher par bouteille">
                        </td>
                        <td style="text-align:left; padding: 0rem;">Client : </td>
                        <td>
                            <input type="text" class="form-control" style="width: 200px; height:1.4rem; padding: 0rem;" placeholder="Rechercher par client">
                        </td>
                        <td>

                        </td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
           <table class="table table-striped">
             <thead>
               <tr>
                 <th> N° </th>
                 <th> DATES EDITION</th>
                 <th> LIVRAISON N° </th>
                 <th> CLIENT </th>
                 <th> VILLE </th>
                 <th> CONTACT </th>
                 <th width="px">  </th>
               </tr>
             </thead>
             <tbody>
               @foreach ($livraisons as $item)
               <tr>
                 <td  style=" width: 0px; height:1.6rem; margin:0px; padding:0px">{{$loop->iteration}}</td>
                 <td>{{$item->dateemissionLivraison}}</td>
                 <td>{{$item->numeroLivraison}}</td>
                 <td>{{$item->nomclientLivraison}}</td>
                 <td>{{$item->villeLivraison}}</td>
                 <td>
                    <div style="text-align:right">
                        <a href="{{url('/livraison/'. $item->id)}}" class=" btn btn-info btn-sm" style="width:90px"><i class="fa fa-eye" aria-hidden="true">Voir</i></a>
                        <a href="{{url('/livraison/'. $item->id.'/edit')}}" class=" btn btn-primary btn-sm" style="width:90px"> <i class="fa fa-eye" aria-hidden="true">Modifier</i> </a>
                        <form method="POST" action="{{url('/livraison/'. $item->id)}}" accept-charset="utf-8" style="display:inline">
                        {!! method_field('DELETE')!!}
                        {!! csrf_field()!!}
                            @if (auth()->user()->is_admin)
                            <!--<button class=" btn btn-danger btn-sm" title="Delete Student" style="width:90px" onclick="return confirm ("confirm delete")"><i class="fa fa-pencil-square-o" aria-hidden="true">Supprimer</i></button>-->
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
