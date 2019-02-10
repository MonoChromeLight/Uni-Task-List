@extends('layouts.main')

@section('title','Tasks Home')

<style type="text/css" media="screen">
	.dashed {
  		border: 1.4px dashed #000;
        width: 100%;
        margin: auto;

	}
	.lead{
		margin-top:50px;
	}
</style>
@section('content')

	<header>
		<div class="row">
			<div class="col-sm-6">
				<h2>Task Manager</h2>
			</div>
			<div class="row justify-content-center col-sm-4">
				<a href=" <?php  echo route('task.create')?>" class="btn btn-block btn-success">Create Task</a>
			</div>
		</div>
	</header>
	
	@if($tasks->count()==0)
		<p class="lead text-center">Hooray! All is done.</p>
	@else
		@foreach($tasks as $task)

			<div class="row">
				<div class="col-sm-12">
					<hr>
					<h3>
						<?php 
							echo $task->name
						?>
					<small>
						<?php 
							echo $task->created_at
						?>
					</small>
					</h3>
					<hr>
					<p>
						<?php 
							echo $task->description
						?>
					</p>
					<h4> Due date:
						<small>
							<?php 
								echo $task->due_date
							?>
						</small>
					</h4>
					
					<?php echo Form::open(['route'=>['task.destroy',$task->id],'method'=>'DELETE']) ?>
						<a href="<?php echo route('task.edit',$task->id) ?>" class="btn btn-sm btn-primary">Edit</a>
						<button type="submit" class="btn btn-small btn-danger">Delete</button>
					<?php echo Form::close() ?>
					<hr>
					<hr class="dashed">
				</div>
			</div>

		@endforeach
	@endif
	
	
@endsection