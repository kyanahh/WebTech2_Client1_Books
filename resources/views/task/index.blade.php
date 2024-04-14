@extends('layout.task')

@section('main')

<div class="col-sm-5 mx-auto">
    <div class="card mt-3" style="background-color: #ffc1cc;">
        <div class="card-header">
            Task
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('addtask') }}" enctype="multipart/form-data" id="taskForm">
                @csrf
                @if($message = Session::get('success'))
                    <div class="alert alert-success alert block">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div>
                    <label for="task">New Task</label>
                    <input type="text" class="form-control" id="task" name="task" value="{{ old('task') }}">
                    @if($errors->has('task'))
                        <span class="text-danger">{{ $errors->first('task') }}</span>
                    @endif
                </div>
                <div class="mt-3">
                    <button class="btn btn-light"><i class="bi bi-plus me-2"></i>Add Task</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="col-sm-5 mx-auto">
    <div class="card mt-3" style="background-color: #ffc1cc; height: 320px;">
        <div class="card-header">Current Tasks</div>
        <div class="card-body">
            <div style="overflow-y: scroll; height: 240px;">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="col-sm-2">TaskID</th>
                            <th>Task</th>
                            <th class="col-sm-4 text-center">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($task as $singleTask)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $singleTask->tasks }}</td>
                                <td class="text-center">
                                    <a href="{{ route('edit2', $singleTask->id) }}" class="btn btn-primary">Edit</a>
                                    <form method="POST" class="d-inline" action="{{ route('delete', $singleTask->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</div>
</div>
</div>
@endsection

