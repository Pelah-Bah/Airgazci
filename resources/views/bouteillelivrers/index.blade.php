@extends('app')
 
 @section('content')

   <div class="col-lg-12 grid-margin stretch-card">
     <div class="card">
         <div class="card-hearder" style="text-align:center">
             <h2>STOCKAGE DES BOUTEILLES EN STOCK</h2>
         </div>
       <div class="card-body" >
        <div style="text-align:right">
            <a href="{{url('/bouteillestocker/create')}}" class=" btn btn-info btn-sm" title="Ajouter nouveau client" style="width:90px">Nouveau </a>
            <a href=" " class=" btn btn-success btn-sm" title="Imprimer la liste" style="width:90px">Imprimer </a>
            <a href="{{url('/bouteillestocker')}} " class=" btn btn-danger btn-sm" title="Retour" style="width:90px">Retour </a>
        </div>
         <div class="table-responsive">
           <table class="table table-striped">
             <thead>
               <tr>
                 <th> N° </th>
                 <th> BOUTEILLES N° </th>
                 <th> ACTION </th>
               </tr>
             </thead>
             <tbody>
               @foreach ($bouteillestockers as $item)
               <tr>
                 <td  style="margin:0px; padding:10px">{{$loop->iteration}}</td>
                 <td>{{$item->numeroBouteillestockers}}</td>
                 <td> 
                    <div style="text-align:right">
                        <a href="{{url('/bouteillestocker/'. $item->id)}}" title="View Student" class=" btn btn-info btn-sm" style="width:90px"><i class="fa fa-eye" aria-hidden="true">Voir</i></a>
                        <a href="{{url('/bouteillestocker/'. $item->id .'/edit')}} " title="Edit Student" class=" btn btn-primary btn-sm" style="width:90px"> <i class="fa fa-eye" aria-hidden="true">Modifier</i> </a>
                        <form method="POST" action="{{url('/bouteillestocker/'. $item->id)}}" accept-charset="utf-8" style="display:inline">  
                        {!! method_field('DELETE')!!}
                        {!! csrf_field()!!}
                            <button class=" btn btn-danger btn-sm" title="Delete Student" style="width:90px" onclick="return confirm ("confirm delete")"><i class="fa fa-pencil-square-o" aria-hidden="true">Supprimer</i></button>
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
