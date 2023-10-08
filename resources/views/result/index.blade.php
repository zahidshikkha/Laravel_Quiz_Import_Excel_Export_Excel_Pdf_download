@extends('dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-4">
                <div class="text-center">

                    <a href="{{ route('result.export') }}" class="btn btn-primary">Export Excel</a>

                    <a href="{{ route('result.export.pdf') }}" class="btn btn-primary">Export PDF</a>


                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Exam Name</th>
                                    <th>Total</th>
                                    <th>Obtained Marks</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($result as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->user->name }}</td>
                                        <td>{{ $row->exam_name }}</td>
                                        <td>{{ $row->total }}</td>
                                        <td>{{ $row->marks_obtained }}</td>


                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
