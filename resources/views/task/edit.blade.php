@extends('layout.task')

@section('main')

<div class="col-sm-5 mx-auto">
    <div class="card mt-3" style="background-color: #ffc1cc;">
        <div class="card-header">
            Task
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('update2', $task->id) }}" enctype="multipart/form-data" id="taskForm">
                @csrf
                @method('PUT')
                @if($message = Session::get('success'))
                    <div class="alert alert-success alert block">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div>
                    <label for="task">Task</label>
                    <input type="text" class="form-control" id="task" name="task" value="{{ old('task', $task->tasks) }}">
                    @if($errors->has('task'))
                        <span class="text-danger">{{ $errors->first('task') }}</span>
                    @endif
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-light"><i class="bi bi-check me-2"></i>Update Task</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection