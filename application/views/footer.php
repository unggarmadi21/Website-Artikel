<footer class="bg-inverse text-white py-4">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 pl-0">
				<ul class="nav flex-column">
					<li class="nav-item"><a href="#" class="nav-link">About</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Features</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Team</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6 pl-0">
				<ul class="nav flex-column">
					<li class="nav-item"><a href="#" class="nav-link">More</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Support</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Legal</a></li>
				</ul>
			</div>
			<div class="col-md-4 ml-auto text-right">
				<small class="text-uppercase">Connect on social media</small>
				<ul class="nav justify-content-end">
					<li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-pinterest fa-lg"></i></a>
					</li>
					<li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-twitter fa-lg"></i></a>
					</li>
					<li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-instagram fa-lg"></i></a>
					</li>
					<li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-facebook fa-lg"></i></a>
					</li>
					<li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-skype fa-lg"></i></a>
					</li>
				</ul>
			</div>
			<div class="col-12 text-right small">
				@2017 Company Name
			</div>
		</div>
	</div>
</footer>

<div id="modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3 id="myModalLabel">Hello.</h3>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">

				<div class="form-group row">
					<label for="example-text-input" class="col-2 col-form-label">Text</label>
					<div class="col-10">
						<input class="form-control" type="text" value="Mike McDonald" id="example-text-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-search-input" class="col-2 col-form-label">Search</label>
					<div class="col-10">
						<input class="form-control" type="search" value="How to responsive design"
							id="example-search-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-email-input" class="col-2 col-form-label">Email</label>
					<div class="col-10">
						<input class="form-control" type="email" value="email@example.com" id="example-email-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-url-input" class="col-2 col-form-label">URL</label>
					<div class="col-10">
						<input class="form-control" type="url" value="http://codeply.com" id="example-url-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-tel-input" class="col-2 col-form-label">Phone</label>
					<div class="col-10">
						<input class="form-control" type="tel" value="1-(202)-555-5555" id="example-tel-input">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="assets/myjs/myjs.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
	let table = new DataTable('#myTable');

</script>
<script>
	document.addEventListener('DOMContentLoaded', function () {
		var elems = document.querySelectorAll('.dropdown-trigger');
		var instances = M.Dropdown.init(elems, options);
	});

	// Or with jQuery

	$('.dropdown-trigger').dropdown();

</script>

</body>

</html>
