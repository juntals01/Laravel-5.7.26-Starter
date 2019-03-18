@if( $errors->any() )
<div class="col-md-12">
	
	<div class="alert alert-danger">
		<ul class="list-group list-group-flush">
			@foreach( $errors->all() as $error )
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
</div>
@endif