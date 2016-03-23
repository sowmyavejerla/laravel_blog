@extends('layout') @section('content')
<h2 align="center">{{$head}}</h2>
<div class="container">
	<div class="row" style="margin-top: 59px;">
		<div class="col-sm-4 col-md-4 col-md-offset-1">

			<p>
				<b>{{$post->name}}</b>
			</p>
			<!-- Modal -->
			<div class="modal fade" id="myModalHorizontal" tabindex="-1"
				role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span> <span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title" id="myModalLabel">Modal title</h4>
						</div>

						<!-- Modal Body -->
						<div class="modal-body">

							<form class="form-horizontal" role="form" method="post"
								action="/updateprofile">
								{{csrf_field()}}
								<div class="form-group">
									<label class="col-sm-2 control-label" for="inputEmail3">Email</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="inputEmail3"
											placeholder="Email" name="uemail" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="inputPassword3">Password</label>
									<div class="col-sm-10">
										<input type="password" class="form-control"
											id="inputPassword3" placeholder="Password" name="upassword" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="inputImage3">Profile
										pic</label>
									<div class="col-sm-10">
										<input type="file" class="form-control" id="inputImage3"
											name="uimage" placeholder="Password" />
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Save changes</button>
								</div>
							</form>

						</div>

						<!-- Modal Footer
						<div class="modal-footer">
							<button type="button" class="btn btn-default"
								data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div> -->
					</div>
				</div>
			</div>


			<p>Email : {{$post->email}}</p>
			<p>Joined on : {{$post->created_at}}</p>
			<!-- Trigger the modal with a button -->

			<button type="button" class="btn btn-info " data-toggle="modal"
				data-target="#myModalHorizontal">Edit profile</button>
		</div>
		<div class="col-sm-6 col-md-6 col-md-offset-1">

			@foreach($my as $myposts)
			<div class="list-group">

				<a href="/singlepost">{{$myposts->title}}</a>&nbsp;&nbsp;{{$myposts->updated_at}}

			</div>
			@endforeach

		</div>
	</div>
</div>
@endsection


