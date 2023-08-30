@extends('layouts.doctor')
@section('content')
    <h1>
        
        This is doctor dashboard
    </h1>
       
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h4>Manage Patients</h4>
            <a href="{{ route('patients.create') }}" class="btn btn-success btn-sm mb-2" style="float: right"><i class="fas fa-plus"></i></a>
            <table class="table table-bordered table-hover">
                <thead>
                    <th width="80px">Id</th>
                    <th>Number</th>
                    <th width="150px">Action</th>
                    <th width="150px">see</th>
                </thead>
                <tbody>
                @foreach($patients as $Patient)
                <tr>
                    <td>{{ $Patient->id }}</td>
                    <td>{{ $Patient->number }}</td>
                    <td>{{ $Patient->age }}</td>
                    <td>
                        <a href="{{ route('patients.show', $Patient->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> click</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
   
            </table>
        </div>
    </div>
</div>

@endsection