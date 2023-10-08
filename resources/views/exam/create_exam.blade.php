@extends('dashboard')

@section('content')
<div class="section-body">
    <form action="{{ route('exam.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3" style="text-align: center;">
                            <label>Exam Create</label>
                        </div>

                        <div class="form-group mb-3">
                            <label>Exam Name *</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="form-group mb-3">
                            <label for="exam_description">Exam Description *</label>
                            <input type="text" name="exam_description" class="form-control" value="{{ old('exam_description') }}">
                            @error('exam_description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



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
