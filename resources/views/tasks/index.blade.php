<h1>タスク一覧</h1>

     @if (count($tests) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tests as $test)
                <tr>
                    <td>{!! link_to_route('tasks.show', $test->id, ['id'=> $test->id]) !!}</td>
                    <td>{{ $test->content }}</td>
                    <td>{{ $test->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $tests->links('pagination::bootstrap-4') }}
    @endif
{!! link_to_route('tasks.create','新規タスク登録',[],['class' => 'btn btn-info']) !!}
