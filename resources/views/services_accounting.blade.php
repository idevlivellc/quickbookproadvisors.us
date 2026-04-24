@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>Professional Accounting Services for Accurate and Confident Financial Management</h1>
		<p>Reliable reporting, organized financial data, and expert oversight to support smarter business decisions.</p>

		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("services") }}" class="breadcrumb">Services</a>
					<a href="{{ url("services/accounting-service") }}" class="breadcrumb">Accounting service</a>
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
			"title" => "Initial Business Assessment",
			"description" => "We begin by understanding your business model, existing financial systems, reporting needs, and current accounting setup."
		],
		(object) [
			"title" => "Account Structure & Documentation Review",
			"description" => "We review your chart of accounts, past financial statements, and documentation processes to identify gaps or areas for improvement."
		],
		(object) [
			"title" => "Monthly Reconciliation & Updates",
			"description" => "Your accounts are updated regularly with accurate reconciliations for bank accounts, credit cards, expenses, revenue streams, and liabilities."
		],
		(object) [
			"title" => "Financial Reporting & Analysis",
			"description" => "We prepare clear monthly and quarterly reports, giving you real-time insights into profitability, cash flow, and financial health."
		],
		(object) [
			"title" => "Compliance & Accuracy Checks",
			"description" => "We perform regular accuracy checks to ensure your books follow accounting standards and remain audit-ready."
		],
		(object) [
			"title" => "Ongoing Review & Strategy Meetings",
			"description" => "We schedule periodic reviews to discuss financial performance, budgeting, forecasting, and improvement recommendations."
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
		"Free consultation to understand your accounting needs",
		"Review of existing financial data to identify gaps",
		"Customized accounting plan based on business size and complexity",
		"Monthly or quarterly updates depending on the selected plan",
		"Secure document sharing for all financial records",
		"Real-time communication via email, call, or portal",
		"Regular performance reports delivered on schedule",
		"Transparent pricing based on service scope"
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