<?php


	echo Form::label('name', 'Task name', ['class' => 'control-label']);
	echo Form::text('name', null,['class' => 'form-control form-control-lg', 'placeholder' => 'Task Name']);

	echo Form::label('description', 'Description', ['class' => 'control-label mt-3']);
	echo Form::textarea('description', null,['class' => 'form-control', 'placeholder' => 'Description']);

	echo Form::label('due_date', 'Date', ['class' => 'control-label mt-3']);
	echo Form::date('due_date', null, ['class' => 'form-control']);
?>
	<div class="row justify-content-center mt-3">
		<div class="col-sm-4">
			<a href="<?php echo route('task.index')?>" class="btn btn-block btn-secondary">GoBack</a>
		</div>
		<div class="col-sm-4">
			<button class="btn btn-block btn-primary" type="submit">Save Task</button>
		</div>
	</div>
<?php

