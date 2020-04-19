@extends('layouts.app')

@section('content')

 <h1>id: {{ $test->id }}のタスク編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($test, ['route' => ['tasks.update', $test->id], 'method' => 'put']) !!}
        
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn btn-info']) !!}
        
            {!! Form::close() !!}
            
        </div>
    </div>

@endsection