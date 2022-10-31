@extends('layout.app')

@section('content')
<div class="container mt-5 row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Employe Details</h5>
          <p class="card-text">Id: {{$employe->id}}</p>
          <p class="card-text">Name: {{$employe->fullname}}</p>
          <p class="card-text">Job Title: {{$employe->job_title}}</p>
          <p class="card-text">Phone: {{$employe->phone_number}}</p>
          <p class="card-text">Created: <small class="text-muted">{{$employe->created_at->format('d/m/Y H:i:s')}}</small></p>
          <p class="card-text">Last Update: <small class="text-muted">{{$employe->updated_at->format('d/m/Y H:i:s')}}</small></p>
        </div>
      </div>
    </div>
  </div>
@endsection