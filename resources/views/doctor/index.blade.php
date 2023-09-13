@extends('layouts.doctor')
@section('content')
    <h1>
        
        This is doctor dashboard
    </h1>
       
<div class="container">
    <div class="row justify-content-center">
        <h4 class="mb-10">Manage Patients</h4>
        <div class="relative overflow-x-auto w-2/3 shadow-md sm:rounded-lg">
            <a href="{{ route('patients.create') }}" class="btn btn-success btn-sm mb-2" style="float: right"><i class="fas fa-plus"></i></a>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                    <th>Id</th>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Age</th>
                    <th>illness</th>
                    <th>see</th>
                    </tr>
                </thead>
                <tbody >
                @foreach($patients as $Patient)
                <tr >
                    <td>{{ $Patient->id }}</td>
                    <td>{{ $Patient->number }}</td>
                    <td>{{ $Patient->user->name }}</td>
                    <td>{{ $Patient->country }}</td>
                    <td>{{ $Patient->age }}</td>
                    <td>{{ $Patient->illness }}</td>
                    <td>
                        {{-- <a href="{{ route('doctors.consult', $Patient->id)  }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> click</a> --}}
                        {{-- <a href="{{url('consult-patients/'.$Patient->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> click</a> --}}
                        <a href="{{ route('doctors.consult', ['id' => $Patient->id]) }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-eye"></i> click
                        </a>
                        
                    </td>
                </tr>
                @endforeach
                </tbody>
   
            </table>
        </div>
    </div>
</div>

@endsection