@extends('app')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Questions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr>
                <td>{{ $row['id'] }}</td>
                <td>{{ $row['exam_questions'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
