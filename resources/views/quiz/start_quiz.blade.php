@extends('app')

<div class="container">

    <div class="card text-white bg-info mb-12" style="max-width: 100rem;">
        <div class="card-header d-flex align-items-center justify-content-center">
            <b>{{ $exam->name }} Quiz </b>
        </div>

        <div class="card-body">
            <h5 class="card-title"></h5>
        </div>
    </div>

    <form action="{{ route('quiz.result') }}" method="post" enctype="multipart/form-data">
        @csrf
        @foreach ($questions as $row)
            <div class="card border-info mb-4">
                <div class="d-flex justify-content-between align-items-center card-header bg-info text-white"
                    id="h{{ $row->id }}">
                    <span name="{{ $row->id }}">{{ $loop->iteration }} . {{ $row->exam_questions }}</span>
                    <input type="hidden" name="exam_id" value="{{ $row->exam_id }}">
                    <input type="hidden" name="question_id[]" value="{{ $row->id }}">

                </div>
                <div id="{{ $loop->iteration }}" class="collapse show" aria-labelledby="{{ $loop->iteration }}">
                    <div class="card-body">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="{{ $loop->iteration }}"
                                id="q{{ $loop->iteration }}_r1" value="1">
                            <label class="form-check-label" for="q{{ $loop->iteration }}_r1">
                                {{ $row->a }}
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="{{ $loop->iteration }}"
                                id="q{{ $loop->iteration }}_r2" value="2">
                            <label class="form-check-label" for="q{{ $loop->iteration }}_r2">
                                {{ $row->b }}
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="{{ $loop->iteration }}"
                                id="q{{ $loop->iteration }}_r3" value="3">
                            <label class="form-check-label" for="q{{ $loop->iteration }}_r3">
                                {{ $row->c }}
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="{{ $loop->iteration }}"
                                id="q{{ $loop->iteration }}_r4" value="4">
                            <label class="form-check-label" for="q{{ $loop->iteration }}_r4">
                                {{ $row->d }}
                            </label>
                        </div>



                    </div>
                </div>
            </div>
        @endforeach
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">Submit</button>
        </div>
    </form>

</div>
