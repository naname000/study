@extends('layouts.app')

@section('content')
    <h2 class="page-header">過去問一覧</h2>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>タイトル</th>
        </tr>
        </thead>
        <tbody>
        @foreach($exams as $exam)
            <tr>
                <td>{{ $exam->title }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
