@extends('app')

 @section('content')

   <div class="col-lg-12 grid-margin stretch-card">
     <div class="card">
         <div class="card-hearder" style="text-align:center">
             <h2>JOURNAL DES PRODUCTIONS</h2>
         </div>
       <div class="card-body" >
        <div style="text-align:right">
            <a href="{{url('/production/create')}}" class=" btn btn-info btn-sm" title="Ajouter nouveau client" style="width:90px">Nouveau </a>
            <a href=" " class=" btn btn-success btn-sm" title="Imprimer la liste" style="width:90px">Imprimer </a>
            <a href="{{url('/production')}} " class=" btn btn-danger btn-sm" title="Retour" style="width:90px">Retour </a>
        </div>
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
               @foreach ($productions as $item)
               <tr>
                 <td style=" width: 0px; height:1.6rem; margin:0px; padding:0px">{{$loop->iteration}}</td>
                 <td>{{$item->dateProductions}}</td>
                 <td>{{$item->numeroProductions}}</td>
                 <td>{{$item->gazProductions}}</td>
                 <td>
                    <div style="text-align:right">

                        <a href="{{url('/production/'. $item->id)}}" title="View Student" class=" btn btn-info btn-sm" style="width:90px"><i class="fa fa-eye" aria-hidden="true">Voir</i></a>
                        <a href="{{url('/production/'. $item->id .'/edit')}} " title="Edit Student" class=" btn btn-primary btn-sm" style="width:90px"> <i class="fa fa-eye" aria-hidden="true">Modifier</i> </a>
                        <form method="POST" action="{{url('/production/'. $item->id)}}" accept-charset="utf-8" style="display:inline">
                        {!! method_field('DELETE')!!}
                        {!! csrf_field()!!}
                            @if (auth()->user()->is_admin)
                            <!--
                                <button class=" btn btn-danger btn-sm" title="Delete Student" style="width:90px" onclick="return confirm ("confirm delete")"><i class="fa fa-pencil-square-o" aria-hidden="true">Supprimer</i></button>
                            -->
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
