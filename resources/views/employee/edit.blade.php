@extends('layout.app')

@section('content')
<div class="container">
  <h1 class="my-5">
      <i class="fa-solid fa-users"></i> Employee
  </h1>
 </div>
    <div class="container">
      <form action="{{route('employe.update', ['employe'=>$employe->id])}}" method="post">
        <div class="card-header">
          <i class="fa-solid fa-edit"></i> Edit employee
        </div>
          <div class="card-body">
            @csrf
            @method('put')
            <div class="mb-3">
              <label  class="form-label">Name (name first later must be upper case)</label>
              <input type="text" name="fullname" id="fullname" value="{{ old('fullname', $employe->fullname)}}" class="form-control @error('fullname')
              is-invalid @enderror" placeholder="Name">
                  @error('fullname')
                    <div class="invalid-feedback">
                       {{$message}}
                    </div>
                  @enderror
            </div>
            <div class="mb-3">
              <label  class="form-label">Job Title</label>
              <input type="text" name="job_title" value="{{ old('job_title', $employe->job_title)}}" class="form-control @error('job_title') is-invalid @enderror"  placeholder="Job Title">
              @error('job_title')
                    <div class="invalid-feedback">
                       {{$message}}
                    </div>
                  @enderror
            </div>
            <div class="mb-3">
              <label  class="form-label">Pnone</label>
              <input type="number" name="phone_number" value="{{ old('phone_number', $employe->phone_number)}}" class="form-control @error('phone_number') is-invalid @enderror"  placeholder="Pnone">
              @error('phone_number')
                    <div class="invalid-feedback">
                       {{$message}}
                    </div>
                  @enderror
            </div>
            <div class="">
              <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Update</button>
            </div>
          </div>
      </form>
    </div>
@endsection