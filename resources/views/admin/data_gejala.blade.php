@extends('layouts.app')
@include('assets.bootstrap')

@section('content')
    <div class="container-fluid d-flex p-0 flex-fill h-100">
        @include('templates.sidebar')

        <div class="content p-3 px-4 col-12 col-sm-9 col-md-10">
            <div class="title fs-5 mb-3">
                Diagnosis Kerusakan Komputer <span class="text-muted">| Data Gejala</span>
            </div>

            <table id="example" class="table table-striped border border-1 rounded shadow-sm border-black" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Gejala</th>
                        <th>Nilai CF</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataGejala as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->gejala }}</td>
                            <td>{{ $row->cf }}</td>
                        </tr>
                    @endforeach
                </tbody>
            
        </div>
    </div>
@endsection