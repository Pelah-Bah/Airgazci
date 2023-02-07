@extends('app')

 @section('content')

   <div class="col-lg-12 grid-margin stretch-card">
     <div class="card">
         <div class="card-hearder" style="text-align:center">
             <h2>FORMATS DE BOUTEILLES</h2>
         </div>

       <div class="card-body" >
         <div style="text-align:right">
            <a href="{{url('/format/create')}} " class=" btn btn-info btn-sm"  style="width:90px">Nouveau </a>
         </div>
         <div class="table-responsive">
           <table class="table table-striped" width="1200px">
             <thead>
               <tr>
                <th> N° </th>
                <th> FORMATS </th>
                <th> CAPACITES </th>
                <th> UNITES </th>
                <th colspan="4">&nbsp;</th>
               </tr>
             </thead>
             <tbody>
               @foreach ($formats as $item)
               <tr>
                 <td  style="margin:0px; padding:10px">{{$loop->iteration}}</td>
                 <td>{{$item->libelleformat}}</td>
                 <td>{{$item->capaciteformat}}</td>
                 <td>{{$item->uniteformat}}</td>
                 <td>
                    <div style="text-align:right">
                        <a href="{{url('/format/'. $item->id)}}" class=" btn btn-info btn-sm" style="width:90px"><i class="fa fa-eye" aria-hidden="true">Voir</i></a>
                        <a href="{{url('/format/'. $item->id.'/edit')}}"  class=" btn btn-primary btn-sm" style="width:90px">Modifier</a>
                        <form method="POST" action="{{url('/format/'. $item->id)}}" accept-charset="utf-8" style="display:inline">
                        {!! method_field('DELETE')!!}
                        {!! csrf_field()!!}
                            @if (auth()->user()->is_admin)
                            <button class=" btn btn-primary btn-sm" style="width:90px" onclick="return confirm ("confirm delete")"><i class="fa fa-pencil-square-o" aria-hidden="true">Supprimer</i></button>
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
