@extends('app')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">Import Excel</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}

                        </div>
                    @endif

                    <form action="/import-questions" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="file">
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
