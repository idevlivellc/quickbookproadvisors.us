@extends("templates.website")

@section("content")
<header>
	<div class="container">
		<div class="flexbox flex-wrap">
			<div class="col s12 m6 l6">
				<h1>Customer Support</h1>

				<nav class="navigation-breadcrumb">
					<div class="nav-wrapper">
						<div class="col s12">
							<a href="{{ url("") }}" class="breadcrumb">Home</a>
							<a href="{{ url("resources") }}" class="breadcrumb">Resources</a>
							<a href="{{ url("resources/customer-support") }}" class="breadcrumb">Customer Support</a>
						</div>
					</div>
				</nav>

				<ul class="list">
					<li>- Respond withing minutes</li>
					<li>- No bots and only humans</li>
					<li>- Multiple support options</li>
				</ul>
				
				<br>

				<p>Got any questions about any service? Our customer support team is available and ready to answer all of your questions and queries.</p>
			</div>

			<div class="col s12 l5 offset-l1">
				@component("components.contactcard") @endcomponent
			</div>
		</div>
	</div>
</header>

<div class="container">
	<div class="divider"></div>
</div>

<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h2 class="text-h4">Try These Options First</h2>
		</div>
		<div class="flexbox gap-2">
			<div class="col s12 l6">
				<a href="{{ url("resources/blog") }}">
					<div class="card">
						<p class="header-font">Our blog</p>
						<p class="text-sm">Stay up to date with latest industry trends for accounting, bookkeeping & QuickBooks software.</p>
					</div>
				</a>
			</div>
			<div class="col s12 l6">
				<a href="{{ url("resources/faq") }}">
					<div class="card">
						<p class="header-font">FAQs</p>
						<p class="text-sm">Get answers to the most common questions about our firm, our services & QuickBooks.</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
@endsection