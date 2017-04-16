@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/prefectures') }}">Prefecture</a> :
@endsection
@section("contentheader_description", $prefecture->$view_col)
@section("section", "Prefectures")
@section("section_url", url(config('laraadmin.adminRoute') . '/prefectures'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Prefectures Edit : ".$prefecture->$view_col)

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
				{!! Form::model($prefecture, ['route' => [config('laraadmin.adminRoute') . '.prefectures.update', $prefecture->id ], 'method'=>'PUT', 'id' => 'prefecture-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/prefectures') }}">Cancel</a></button>
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
	$("#prefecture-edit-form").validate({
		
	});
});
</script>
@endpush
