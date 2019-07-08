@extends('layout')


@section('content')

    <div class="row">
        <div class=".col.lg-16">

            <form action="{{route('todo.save',['id'=>$todo->id ])}}" method="Post">
                {{csrf_field()}}

                <input type="text" class="form-control input-lg" name="todo" value="{{$todo->todo}}" >

            </form>
        </div>
    </div>



@stop