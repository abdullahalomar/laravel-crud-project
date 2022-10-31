@extends('layout.app')

@section('content')
@if (session('create'))
<div class="container alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Create Successfully</strong> Employee has been successfully Created.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container">
  <h1 class="my-5">
      <i class="fa-solid fa-users"></i> Employee
  </h1>
 </div>
    <div class="container">
      <form action="{{route('employe.store')}}" method="post">
        <div class="card-header">
          <i class="fa-solid fa-plus"></i> Create new employee
        </div>
          <div class="card-body">
            @csrf
            <div class="mb-3">
              <label  class="form-label">Name (name first later must be upper case)</label>
              <input type="text" name="fullname" id="fullname" value="{{ old('fullname')}}" class="form-control @error('fullname')
              is-invalid @enderror" placeholder="Name">
                  @error('fullname')
                    <div class="invalid-feedback">
                       {{$message}}
                    </div>
                  @enderror
            </div>
            <div class="mb-3">
              <label  class="form-label">Job Title</label>
              <input type="text" name="job_title" value="{{ old('job_title')}}" class="form-control @error('job_title') is-invalid @enderror"  placeholder="Job Title">
              @error('job_title')
                    <div class="invalid-feedback">
                       {{$message}}
                    </div>
                  @enderror
            </div>
            <div class="mb-3">
              <label  class="form-label">Pnone</label>
              <input type="number" name="phone_number" value="{{ old('phone_number')}}" class="form-control @error('phone_number') is-invalid @enderror"  placeholder="Pnone">
              @error('phone_number')
                    <div class="invalid-feedback">
                       {{$message}}
                    </div>
                  @enderror
            </div>
            <div class="">
              <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
            </div>
          </div>
      </form>
    </div>
@endsection