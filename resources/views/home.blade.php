@extends('layouts/layout')

@section('title')
Home
@endsection

@section('content')
<div class='page-title'>
	<h1>TODO App</h1>
	<a href='{{ url('/add') }}'>Add todo</a>
</div>
<div class="todo">
	<ul class="todo-list">
	@foreach ($todos as $todo)
		<li class="bg todo-item">
			<div class="todo-title">
				<h1>{{ $todo->name }}</h1>
				<a href="/"><x-heroicon-o-pencil class="icon-style" /></a>
			</div>
			<div class="todo-dates">
				<p>Create in: <span>{{ $todo->date_c }}</span></p>
				<p>Finish in: <span>{{ $todo->date_f }}</span></p>
			</div>
			<div class="todo-status">
				<p class="bg bg1-dark">{{ $todo->priority }}</p>
				<p class="bg bg1">{{ $todo->status }}</p>
			</div>
		</li>
	@endforeach 
	</ul>
</div>
@endsection
