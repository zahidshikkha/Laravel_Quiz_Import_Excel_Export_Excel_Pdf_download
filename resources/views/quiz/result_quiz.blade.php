@extends('app')
<div class="container d-flex align-items-center" style="height: 100vh;">
    <div class="card text-white bg-primary mb-3 mx-auto" style="max-width: 18rem;">
        <div class="card-header">Quiz Result</div>
        <div class="card-body">
            <h5 class="card-title">Correct: {{$result}}, Incorrect: {{$totalquestions - $result}}, Result: {{$result}}/{{$totalquestions}}</h5>
        </div>
    </div>
</div>
