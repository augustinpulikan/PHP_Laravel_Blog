@extends('main')

@section('title', '|create new post')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create a new post</h1>
			<hr>
			{!! Form::open(['route' => 'posts.store']) !!}
				{{Form::label('title', 'Title:')}}
    			{{Form::text('title', null, array('class'=>'form-control'))}}

    			{{Form::label('slug', 'Slug:')}}
    			{{Form::text('slug',null, array('class'=>'form-control'))}}

    			{{Form::label('category_id', 'Category:')}}
    			<select class="form-control" name="category_id">
    				
    			@foreach($categories as $category)
    			<option value="{{$category->id}}">{{$category->name}}</option>
    			@endforeach
    			</select>

    			{{Form::label('body', 'Body:')}}
    			{{Form::textarea('body', null, array('class'=>'form-control'))}}

    			{{Form::submit('Create post', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;'))}}
			{!! Form::close() !!}
		</div>
	</div>
@endsection