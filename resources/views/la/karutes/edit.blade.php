@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/karutes') }}">Karute</a> :
@endsection
@section("contentheader_description", $karute->$view_col)
@section("section", "Karutes")
@section("section_url", url(config('laraadmin.adminRoute') . '/karutes'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Karutes Edit : ".$karute->$view_col)

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
				{!! Form::model($karute, ['route' => [config('laraadmin.adminRoute') . '.karutes.update', $karute->id ], 'method'=>'PUT', 'id' => 'karute-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'time')
					@la_input($module, 'groupName')
					@la_input($module, 'tourCompany')
					@la_input($module, 'front_name')
					@la_input($module, 'bus_name')
					@la_input($module, 'bus_num')
					@la_input($module, 'options')
					@la_input($module, 'paymentMethod')
					@la_input($module, 'contact')
					@la_input($module, 'contact_num')
					@la_input($module, 'hall_note')
					@la_input($module, 'pref')
					@la_input($module, 'uketsuke')
					@la_input($module, 'nyuryoku')
					@la_input($module, 'tantou')
					@la_input($module, 'note')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/karutes') }}">Cancel</a></button>
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
	$("#karute-edit-form").validate({
		
	});
});
</script>
@endpush
