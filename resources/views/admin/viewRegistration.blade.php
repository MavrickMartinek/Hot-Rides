<div class="col-sm-8 blog-main">

	@foreach ($registrations as $registration)

	@include ('registrations.registration')

	@endforeach

	<nav class="blog-pagination">
	  <a class="btn btn-outline-primary" href="#">Older</a>
	  <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
	</nav>

</div>