@extends('layouts.app')

@section('content')

    <h1>id = {{ $test->id }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $test->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $test->content }}</td>
        </tr>
    </table>
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $test->id], ['class' => 'btn btn-info']) !!}
    
    {!! Form::model($test, ['route' => ['tasks.destroy', $test->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection