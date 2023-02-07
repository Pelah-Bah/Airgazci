@extends('app')

 @section('content')

   <div class="col-lg-12 grid-margin stretch-card">
     <div class="card">
         <div class="card-hearder" style="text-align:center">
             <h2>FAMILLES DE GAZ</h2>
         </div>

       <div class="card-body" >
         <div style="text-align:right">
            <a href="{{url('/famille/create')}} " class=" btn btn-info btn-sm"  style="width:90px">Nouveau </a>
         </div>
         <div class="table-responsive">
           <table class="table table-striped" width="1200px">
             <thead>
               <tr>
                <th> N° </th>
                <th> FAMILLES </th>
                <th> ABREVIATIONS </th>
                <th> TYPES </th>
                <th colspan="4">&nbsp;</th>
               </tr>
             </thead>
             <tbody>
               @foreach ($familles as $item)
               <tr>
                 <td  style="margin:0px; padding:10px">{{$loop->iteration}}</td>
                 <td>{{$item->libellefamille}}</td>
                 <td>{{$item->appelationfamille}}</td>
                 <td>{{$item->typefamille}}</td>
                 <td>
                    <div style="text-align:right">
                        <a href="{{url('/famille/'. $item->id)}}" class=" btn btn-info btn-sm" style="width:90px"><i class="fa fa-eye" aria-hidden="true">Voir</i></a>
                        <a href="{{url('/famille/'. $item->id.'/edit')}}"  class=" btn btn-primary btn-sm" style="width:90px">Modifier</a>
                        <form method="POST" action="{{url('/famille/'. $item->id)}}" accept-charset="utf-8" style="display:inline">
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
