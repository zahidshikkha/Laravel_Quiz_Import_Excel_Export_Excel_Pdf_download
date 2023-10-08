@extends('app')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Exam</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exams as $row)
                <tr>

                    <td>{{ $row->name }}</td>
                    <td><a href="{{ route('quiz.start', $row->id) }}" class="btn btn-success">Start Exam</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
