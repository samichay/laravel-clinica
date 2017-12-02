@if(count($errors) > 0)
	<div id="esconder" class="alert alert-danger alert-dismissible" role="alert">
	<button type="button"  onclick="esconder()" class="close3" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<ul>
  			@foreach($errors->all() as $error)
  				<li>{!!$error!!}</li>
  			@endforeach
  		</ul>
  	</div>
@endif
