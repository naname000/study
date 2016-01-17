@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">過去問一覧</h3></div>
        <!--<table class="table table-striped table-hover">-->
        <table class="table">
            <thead>
            <tr>
                <th>タイトル</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
        @foreach($exams as $exam)
            <tr>
                <td>{{ $exam->title }}</td>
                <td>
                    <a href="{{ URL::to('/exams/getJson/'.$exam->slug) }}">json</a>
                </td>
            </tr>
        @endforeach
            </tbody>
        </table>
    </div>
@endsection
