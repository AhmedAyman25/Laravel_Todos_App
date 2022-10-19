@extends('layouts.app')
@section('content')
<h1 class="text-center my-5" >Todos List</h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card-header">
                            Todos
                        </div>
                        <div class="card-body">
                             <ul class="list-group clearfix">
                                @foreach ($todos as $todo)
                                     <li class="list-group-item" > {{$todo->name}} 
                                            <a href="/view/{{$todo->id}}" class="btn btn-primary btn-sm float-end" >View</a>
                                            <a href="/delete/{{$todo->id}}" class="btn btn-primary btn-sm float-end mx-2" >Delete</a>
                                            <a href="/update/{{$todo->id}}" class="btn btn-primary btn-sm float-end " >Update</a>
                                    </li>
                                       
                                   @endforeach

                             </ul>
            
                         </div>
                    </div>
    
    
                </div>
           </div>
@endsection
