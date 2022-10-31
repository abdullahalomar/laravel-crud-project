@extends('layout.app')

@section('content')
    @if (session('store'))
        <div class="container alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Save Successfully</strong> Employee has been successfully saved.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('update'))
        <div class="container alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Updated Successfully</strong> Employee has been successfully updated.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('destroy'))
        <div class="container alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Deleted Successfully</strong> Employee has been successfully deleted.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container">
        <div class="">
            <h1 class="my-5">
                <i class="fa-solid fa-users"></i> Employee
            </h1>
        </div>
        <table class="table table-striped">
            <a href="{{ route('employe.create') }}" type="button" class="btn btn-outline-success"><i
                    class="fa-solid fa-plus"></i> Add Employee</a>
                    
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Phone Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employes as $employe)
                    <tr>
                        <td>{{ $employe->id }}</td>
                        <td>{{ $employe->fullname }}</td>
                        <td>{{ $employe->job_title }}</td>
                        <td>{{ $employe->phone_number }}</td>
                        <td>
                            <a href="{{ route('employe.show', ['employe' => $employe->id]) }}" class="btn btn-sm">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('employe.edit', ['employe' => $employe->id]) }}" class="btn btn-sm">
                                <i class="fa-solid fa-edit"></i>
                            </a>
                            <form action="{{ route('employe.destroy', $employe) }}" method="post">
                              @csrf
                              @method('delete')
                                <button class="btn btn-sm">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
