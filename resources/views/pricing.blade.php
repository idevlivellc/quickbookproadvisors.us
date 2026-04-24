@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>Plans and Pricing</h1>
		<p>Checkout our affordable packages for every accounting need of yours.</p>

		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("pricing") }}" class="breadcrumb">Plans and Pricing</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<div class="container">
	<div class="divider"></div>
</div>

@php
	$plans = [
		(object) [
			"name" => "Starter",
			"price" => "199.00",
			"includes" => [
				"Monthly financial statements",
				"Bank account reconciliation",
				"Expense & income categorization",
				"Year-end reporting prep"
			]
		],
		(object) [
			"name" => "Pro",
			"price" => "349.00",
			"includes" => [
				"Everything in Starter",
				"Cash flow management",
				"Accounts receivable tracking",
				"Accounts payable tracking"
			]
		],
		(object) [
			"name" => "Enterprise",
			"price" => "499.00",
			"includes" => [
				"Everything in Pro",
				"Advanced financial forecasting",
				"Monthly strategy review call",
				"Custom management reports"
			]
		],
	];
@endphp
<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<p>Our Accounting Services provide end-to-end financial management for growing businesses. From accurate reporting to compliance and performance insights, we help you maintain clarity and control over your finances. Whether you're a small business or an established company, our expert team ensures your accounts remain organized, compliant, and ready for confident decision-making.</p>
		</div>

		<div class="flexbox price-card-wrapper">
			@foreach ($plans as $plan)
			<div class="col s12 l4">
				<div class="card">
					<p class="header-font text-h5">{{ $plan->name }}</p>

					<br>

					<p>
						<span class="text-xs">Starting from</span>
						<br>
						<span class="text-h4 font-semibold dark-text" style="letter-spacing: 2px">$ {{ $plan->price }}</span>
						<br>
						<span class="text-xs">USD per month</span>
					</p>

					<br>

					<ul class="border-bottom text-sm">
						@foreach ($plan->includes as $include)
							<li>{{ $include }}</li>
						@endforeach
					</ul>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection