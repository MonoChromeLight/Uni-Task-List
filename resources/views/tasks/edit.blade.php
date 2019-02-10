@extends('layouts.main')

@section('title','Edit Task')

@section('content')

	<div class="row">
		<div class="col-sm-12">
			<h1>Edit Task</h1>
		<?php
			echo Form::model($task, ['route' => ['task.update', $task->id], 'method' => 'PUT']);  

		?>
			@component('components.taskForm')
			@endcomponent

		<?php
 			echo Form::close() ;
		?>
		</div>
	</div>

	@endsection