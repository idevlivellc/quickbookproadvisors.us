@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>Accurate Bookkeeping Services to Keep Your Business Financially Organized</h1>
		<p>Clean, up-to-date books that give you clarity, control, and confidence in your financial decisions.</p>

		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("services") }}" class="breadcrumb">Services</a>
					<a href="{{ url("services/bookkeeping-service") }}" class="breadcrumb">Bookkeeping service</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<section class="center-align primary">
	<div class="container">
		<h3 class="text-h5">Comprehensive Accounting Solutions Tailored to Your Business</h3>

		<h2 class="text-h1 hide-on-small-only">Call {{ config('app.company.phone') }}</h2>
		{{-- <div class="hide-on-med-and-up">
			<a href="tel:{{ config('app.company.phone') }}" class="btn btn-xl">{{ config('app.company.phone') }}</a>
		</div> --}}

		<p>Our accounting services are designed to give businesses clear, accurate, and compliant financial records year-round. From financial reporting to expense tracking and performance insights, we ensure your accounts are always up to date and ready for strategic decision-making. Whether you're a growing startup or an established business, we help you maintain a strong financial foundation.</p>
	</div>
</section>

<div class="container">
	<div class="divider"></div>
</div>

<!-- Our approach (start) -->
@php
	$approach = [
		(object) [
			"title" => "Initial Books Review & Cleanup",
			"description" => "We assess your existing bookkeeping status, identify errors, and bring your records up to date if needed."
		],
		(object) [
			"title" => "Chart of Accounts Organization",
			"description" => "We set up or refine your chart of accounts to ensure proper categorization and industry-specific structuring."
		],
		(object) [
			"title" => "Monthly Expense & Income Categorization",
			"description" => "All transactions are recorded and classified accurately, ensuring clean and reliable financial data."
		],
		(object) [
			"title" => "Bank & Credit Card Reconciliation",
			"description" => "We reconcile all accounts to make sure your books match your actual balances without discrepancies."
		],
		(object) [
			"title" => "Regular Reporting & Insights",
			"description" => "You receive monthly or quarterly bookkeeping reports summarizing your financial performance."
		],
		(object) [
			"title" => "Ongoing Monitoring & Support",
			"description" => "We continuously monitor your books, resolve discrepancies, and provide support for financial clarity whenever you need it."
		],
	];
@endphp
<section>
	<div class="container">
		<div class="flexbox flex-wrap">
			<div class="col s12 l6">
				<div class="heading-wrapper">
					<h3 class="text-h4">Our approach</h3>
				</div>

				<ul class="list">
					@foreach ($approach as $key => $item)
						<li>
							<span class="header-font">0{{ $key + 1 }}. {{ $item->title }}</span>
							<br>
							<span class="text-sm">{{ $item->description }}</span>
						</li>
					@endforeach
				</ul>
			</div>

			<div class="col s12 l5 offset-l1">
				@component("components.contactcard") @endcomponent
			</div>
		</div>
	</div>
</section>
<!-- Our approach (end) -->

<!-- Industries we serve (start) -->
@php
	$industries = (object) [
		"E-commerce businesses",
		"IT & SaaS companies",
		"Startups and small businesses",
		"Manufacturing & distribution",
		"Professional services firms",
		"Real estate and contracting companies",
		"Retail and wholesale businesses",
		"Healthcare & wellness providers",
		"Hospitality and food service businesses"
	];
@endphp
<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h3 class="text-h4">Industries We Serve</h3>
			<p style="margin-bottom: 2rem">Every business is unique - so are its bookkeeping needs. We serve clients across a range of industries, including:</p>
		</div>
		<div class="flexbox flex-wrap gap-2">
			@foreach ($industries as $key => $industry)
				<div class="col s12 m6 l4">
					<div class="card">
						<p>0{{ $key + 1 }}.</p>
						<p>{{ $industry }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- Industries we serve (end) -->

<div class="container">
	<div class="divider"></div>
</div>

<!-- How it works (start) -->
@php
	$steps = (object) [
		"Free consultation to understand your bookkeeping needs",
		"Review of existing books to identify errors or gaps",
		"Customized bookkeeping plan based on volume and business type",
		"Scheduled monthly or quarterly updates",
		"Secure sharing of invoices, statements, and documents",
		"Consistent communication through email, call, or client portal",
		"Timely delivery of bookkeeping reports",
		"Transparent pricing based on workload and frequency"
	];
@endphp

<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h3 class="text-h4">How It Works</h3>
			<p>We follow a step by step process to ensure your books are organized.</p>
		</div>

		<div class="steps-wrapper">
			@foreach ($steps as $key => $step)
				<div class="card steps-card">
					<p>
						<span class="header-font">Step {{ $key + 1 }}</span>
						<br>
						<span>{{ $step }}</span>
					</p>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- How it works (end) -->
@endsection