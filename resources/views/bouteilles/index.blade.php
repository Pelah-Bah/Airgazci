@extends('app')

 @section('content')

   <div class="col-lg-12 grid-margin stretch-card">
     <div class="card">
         <div class="card-hearder" style="text-align:center; padding:0%; margin: 0%">
             <h2>REPERTOIRE DES NUMEROS DE BOUTEILLES</h2>
         </div>

       <div class="card-body" >
         <div style="text-align:right">
            <a href="{{url('/bouteille/create')}} " class=" btn btn-info btn-sm"  style="width:90px">Nouveau </a>
         </div>
         <div class="table-responsive">
           <table class="table table-striped" width="1200px">
             <thead>
               <tr>
                <th> N° </th>
                <th> BOUTEILLES </th>
                <th> DESIGNATIONS </th>
                <th> EPREUVE </th>
                <th> VALIDITE </th>
                <th> PROPRIETAIRE </th>
                <th> &nbsp; </th>
               </tr>
             </thead>
             <tbody>
               @foreach ($bouteilles as $item)
               <tr>
                 <td  style=" width: 0px; height:1.6rem; margin:0px; padding:0px">{{$loop->iteration}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                 <td>{{$item->numeroBouteilles}}</td>
                 <td>{{$item->designationBouteilles}}</td>
                 <td>{{$item->dateepreuveBouteilles}}</td>
                 <td>{{$item->finepreuveBouteilles}}</td>
                 <td>{{$item->descriptionBouteilles}}</td>
                 <td>
                    <div style="text-align:right">
                        <!--<a href="{{url('/bouteille/'. $item->id)}}" class=" btn btn-info btn-sm" style="width:90px"><i class="fa fa-eye" aria-hidden="true">Voir</i></a>
                        <a href="{{url('/bouteille/'. $item->id.'/edit')}}"  class=" btn btn-primary btn-sm" style="width:90px">Modifier</a>
                       --> <form method="POST" action="{{url('/bouteille/'. $item->id)}}" accept-charset="utf-8" style="display:inline">
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
    {{ $bouteilles->links() }}
    <br/>
     </div>
   </div>
 @endsection
