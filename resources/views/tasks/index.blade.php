@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>task</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    <tr>
        {{-- メッセージ詳細ページへのリンク --}}
        <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
        <td>{{ $task->content }}</td>
    </tr>
    

@endsection
