@extends('layouts.app')


@section('content')

{{--     @if($errors->any())

        @foreach($errors->all() as $error)
           {{$error}}
        @endforeach

    @endif --}}

  <!-- card -->
<div class="d-flex justify-content-center py-4">
  {{-- <div class="col-md-6"> --}}
  <div class="card-body border card">
   <div>
      <h5>Form</h5>
  </div>
    <form method="post" action="{{route('tasks.store')}}">
        @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" type="text" class="form-control py-2 @error('name') is-invalid @enderror" id="name" aria-describedby="nameInputFeedback">
        @error('name')
        <div id="nameInputFeedback" class="form-text invalid-feedback">
            {{$message}}
        </div>
        @enderror
      </div>
     <div class="d-grid gap-3">
      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
     </div>
    </form>
   </div>
  {{-- </div> --}}
</div>
<div class="row">
    <div class="card p-4">
   <table class="table table-hover">         
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Created Date</th>
    </tr>
  </thead>
  <tbody>
    @if($tasks->count())
    @foreach($tasks as $task)
        <tr>
          <th scope="row">{{$task->id}}</th>
          <td>{{$task->name}}</td>
          <td>{{$task->created_at->diffForHumans()}}</td>
        </tr>
    @endforeach
    @endif
   </tbody>
   </table>
   </div>
</div>
@endsection