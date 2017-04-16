@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/rooms') }}">Room</a> :
@endsection
@section("contentheader_description", $room->$view_col)
@section("section", "Rooms")
@section("section_url", url(config('laraadmin.adminRoute') . '/rooms'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Rooms Edit : ".$room->$view_col)

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
				{!! Form::model($room, ['route' => [config('laraadmin.adminRoute') . '.rooms.update', $room->id ], 'method'=>'PUT', 'id' => 'room-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/rooms') }}">Cancel</a></button>
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
	$("#room-edit-form").validate({
		
	});
});
</script>
@endpush
