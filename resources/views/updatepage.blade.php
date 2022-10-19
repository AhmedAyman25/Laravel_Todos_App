
@extends('layouts.app')
@section('content')
<h1 class="text-center my-5">Update Todos</h1>
<div class="row justify-content-center">
    
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Update the Todo</div>
            <div class="card-body">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item">
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
            @endif
                <form method="POST" action="{{route('update',Request::route('id'))}}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="new_name" value="{{$show_data_in_input->name}}" placeholder="Your name">
                    </div> 

                    <div class="form-group">
                        <textarea name="new_description" cols="80" rows="20" placeholder="Enter todo details">
                            {{$show_data_in_input->description}}
                        </textarea>
                    </div> 
                    <div class="form-group text-center my-1">
                        <button type="submit" class="btn btn-success">Update Todo</button>
                    </div> 
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                         {{Session::get('success')}}
                      </div>
               @endif
                 </form> 
            </div>
        </div>
    </div>
  </div>
@endsection