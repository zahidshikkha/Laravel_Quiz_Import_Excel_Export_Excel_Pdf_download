@extends('dashboard')

@section('content')
<div class="section-body">
    <form action="{{ route('question.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3" style="text-align: center;">
                            <label>Questions Create for {{ $exam->name }}</label>
                        </div>

                        <input type="hidden" name="exam_id" value="{{$exam->id}}">

                        <div class="form-group mb-3">
                            <label>Question *</label>
                            <input type="text" name="exam_questions" class="form-control" value="{{ old('exam_questions') }}">
                            @error('exam_questions')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="form-group mb-3">
                            <label for="a">a *</label>
                            <input type="text" name="a" class="form-control" value="{{ old('a') }}">
                            @error('a')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="b">b *</label>
                            <input type="text" name="b" class="form-control" value="{{ old('b') }}">
                            @error('b')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="c">c *</label>
                            <input type="text" name="c" class="form-control" value="{{ old('c') }}">
                            @error('c')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="d">d *</label>
                            <input type="text" name="d" class="form-control" value="{{ old('d') }}">
                            @error('d')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <select class="form-select" aria-label="Default select example" name="answer">
                            <option selected>Answer</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="4">D</option>
                        </select>

                        @error('answer')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror




                    </div>
                </div>
            </div>

        </div>
        <div class="form-group " >
            <button type="submit" class="btn btn-dark btn-block">Submit</button>
        </div>
    </form>
</div>
@endsection
