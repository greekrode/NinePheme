@extends('layouts.default')
@section('content')
<!-- Main -->
<div class="main" role="main">

		<!-- Page Heading -->
		<section class="page-heading">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Post a Profile</h1>
					</div>
					<div class="col-md-6">
						<ul class="breadcrumb">
							<li><a href="index.html">Home</a></li>
							<li><a href="#">Pet Sitters</a></li>
							<li class="active">Post a Profile</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- Page Heading / End -->

		<!-- Page Content -->
		<section class="page-content">
			<div class="container">
				
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<!-- Profile Form -->
						<form action="#" method="post" id="submit-job-form" class="job-manager-form" enctype="multipart/form-data">

							<fieldset>
								@if(Auth::guest())
								<label>Have an account?</label>
								<div class="field account-sign-in">
									<p>
										<a class="btn btn-primary btn-sm" href="/login"><i class="fa fa-key"></i> Sign in</a>
									</p>

									<div class="alert alert-info alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
										If you don‘t have an account you can create one below by entering your email address. A password will be  automatically emailed to you.
									</div>
								</div>
								@endif
							</fieldset>

							<fieldset>
								<label>Your Email <span class="required">*</span></label>
								<div class="field">
									@if ($user)
										<input type="email" class="form-control" name="create_account_email" id="account_email" placeholder="you@yourdomain.com" value="{{ $user->email }}" disabled />
									@else
										<input type="email" class="form-control" name="create_account_email" id="account_email" placeholder="you@yourdomain.com" value="" />
									@endif
								</div>
							</fieldset>
							
							<!-- Job Information Fields -->
							<fieldset class="fieldset-job_title">
								<label for="job_title">Job title</label>
								<div class="field">
									<input type="text" class="form-control" name="job_title" id="job_title" placeholder="e.g. “Student / Public Figure”" value=""/>
								</div>
							</fieldset>

							<fieldset class="fieldset-job_location">
								<label for="job_location">Location <small>(optional)</small></label>
								<div class="field">
									<input type="text" class="form-control" name="job_location" id="job_location" placeholder="e.g. &quot;Medan, ID&quot;, &quot;Jakarta&quot;, &quot;Kuala Lumpur, MY&quot;" value=""/>
									{{-- <small class="description">Leave this blank if the job can be done from anywhere (i.e. telecommuting)</small> --}}
								</div>
							</fieldset>

							<fieldset class="fieldset-company_logo">
								<label for="company_logo">Photo <small></small></label>
								<div class="field">
									<input type="file" class="form-control" name="company_logo" id="company_logo" />
									<small class="description">Max. file size: 50 MB. Allowed images: jpg, gif, png.</small>
								</div>
							</fieldset>

							{{-- <div class="row">
								<div class="col-md-6">
									<fieldset class="fieldset-job_type">
										<label for="job_type">Job Type</label>
										<div class="field select-style">
											<select name="job_type" id="job_type" class="form-control">
												<option value="unspecified">Unspecified</option>
												<option value="pet-sitter">Pet Sitter</option>
												<option value="dog-sitter">Dog Sitter</option>
												<option value="cat-sitter">Cat Sitter</option>
												<option value="dog-walker">Dog Walker</option>
											</select>
										</div>
									</fieldset>
								</div>
								<div class="col-md-6">
									<fieldset class="fieldset-job_category">
										<label for="job_category">Job category</label>
										<div class="field select-style">
											<select name="job_category" id="job_category" class="form-control">
												<option value="unspecified">Unspecified</option>
												<option value="pet-feeding">Pet Feeding</option>
												<option value="cat-feeding">Cat Feeding</option>
											</select>
										</div>
									</fieldset>
								</div>
							</div> --}}

							<fieldset class="fieldset-job_description">
								<label>Description</label>
								<div class="field">
									<textarea name="textarea" cols="30" rows="8" class="form-control"></textarea>
								</div>
							</fieldset>

							<fieldset class="fieldset-skills">
								<label>Skills</label>
								<div class="field">
									<input type="text" class="form-control" name="skills" id="skills" placeholder="Comma separate a list of relevant skills" value=""/>
								</div>
							</fieldset>

							<fieldset class="fieldset-url">
								<label>URL(s)</label>
								<div class="field">
									<a href="#">+ Add URL</a> &nbsp; &nbsp; &nbsp; <small class="description">Optionally provide links to any of your websites or social network profiles.</small>
								</div>
							</fieldset>

							<fieldset class="fieldset-education">
								<label>Education</label>
								<div class="field">
									<a href="#">+ Add Education</a>
								</div>
							</fieldset>

							<fieldset class="fieldset-experience">
								<label>Experience</label>
								<div class="field">
									<a href="#">+ Add Experience</a>
								</div>
							</fieldset>

							<div class="spacer"></div>

							<p>
								<input type="submit" name="submit_job" class="btn btn-primary" value="Preview Profile &rarr;" />
							</p>

						</form>
						<!-- Profile Form / End -->
					</div>
				</div>

			</div>
		</section>
		<!-- Page Content / End -->
@stop