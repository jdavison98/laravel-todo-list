{{ Form::label('name', 'Task Name', ['class' => 'control-label']) }}
{{ Form::text('name', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Task Name']) }}

{{ Form::label('description', 'Task Description', ['class' => 'control-label mt-3']) }}
{{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Task Description']) }}

{{ Form::label('due_date', 'Due Date', ['class' => 'control-label mt-3']) }}
{{ Form::date('due_date', null, ['class' => 'form-control']) }}

<div class="row justify-content-center mt-3">
    <div class="col-md-4">
    <a href="{{ route('task.index') }}" class="btn btn-block btn-secondary">Go Back</a>
    </div>
    <div class="col-md-4">
        <button class="btn btn-block btn-primary" type="submit">Save Task</button>
    </div>
</div>