@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/ingredients') }}">Ingredient</a> :
@endsection
@section("contentheader_description", $ingredient->$view_col)
@section("section", "Ingredients")
@section("section_url", url(config('laraadmin.adminRoute') . '/ingredients'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Ingredients Edit : ".$ingredient->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($ingredient, ['route' => [config('laraadmin.adminRoute') . '.ingredients.update', $ingredient->id ], 'method'=>'PUT', 'id' => 'ingredient-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/ingredients') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#ingredient-edit-form").validate({
		
	});
});
</script>
@endpush
