@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/fronts') }}">Front</a> :
@endsection
@section("contentheader_description", $front->$view_col)
@section("section", "Fronts")
@section("section_url", url(config('laraadmin.adminRoute') . '/fronts'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Fronts Edit : ".$front->$view_col)

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
				{!! Form::model($front, ['route' => [config('laraadmin.adminRoute') . '.fronts.update', $front->id ], 'method'=>'PUT', 'id' => 'front-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title')
					@la_input($module, 'phoneNumber')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/fronts') }}">Cancel</a></button>
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
	$("#front-edit-form").validate({
		
	});
});
</script>
@endpush
