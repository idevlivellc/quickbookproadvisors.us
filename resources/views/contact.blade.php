@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>Contact Us</h1>
		<p>We help you find the right solution.</p>

		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("contact-us") }}" class="breadcrumb">Contact us</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<div class="container"><div class="divider"></div></div>

<section>
	<div class="container">
		<div class="flexbox flex-wrap">
			<div class="col s12 l6">
				<div class="heading-wrapper">
					<h2 class="text-h5">Chat with us</h2>
					<p>Speak to our friendly team via live chat.</p>
					<p class="flexbox gap-1">
						<img src="{{ asset("images/icons/email.svg") }}" alt="email icon" width="20" height="20">
						<span>Shoot us an email</span>
					</p>
				</div>

				<div class="heading-wrapper">
					<h2 class="text-h5">Call us</h2>
					<p>Have queries? Speak to our human executives</p>
					<p class="flexbox gap-1">
						<img src="{{ asset("images/icons/phone.svg") }}" alt="phone icon" width="20" height="20">
						<span>{{ config("app.company.phone") }}</span>
					</p>
				</div>

				<div class="heading-wrapper">
					<h2 class="text-h5">Visit us</h2>
					<p>Chat with us in person.</p>
					<p class="flexbox gap-1">
						<img src="{{ asset("images/icons/location.svg") }}" alt="location icon" width="20" height="20">
						<span>{{ config("app.company.address") }}</span>
					</p>
				</div>
			</div>

			<div class="col s12 l5 offset-l1">
				@component("components.contactcard") @endcomponent
			</div>
		</div>
	</div>
</section>
@endsection