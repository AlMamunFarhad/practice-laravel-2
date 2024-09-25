     <div class="row">
      <div class="card p-4">
          @if($tasks->count())
       <table class="table table-hover">         
        <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Created Date</th>
          <th class="col">Delete</th>
        </tr>
      </thead>
     <tbody>
     @foreach($tasks as $task)
            <tr>
              <th scope="row">{{$task->id}}</th>
              <td>{{$task->name}}</td>
              <td>{{$task->created_at->diffForHumans()}}</td>
              <td>
{{--               <form action="{{route('tasks.destroy', $task->id)}}" method="post">
                 @csrf
                 @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form> --}}
              <x-tasks.delete-model modelRoute="tasks.destroy" :modelId="$task->id"></x-tasks.delete-model>
              </td>
            </tr>
        @endforeach
       </tbody>
      </table>
      @else
     
        <h1 class="text-center">No Record Found</h1>

      @endif
     </div>
    </div> 