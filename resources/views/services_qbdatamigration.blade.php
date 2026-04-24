@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>QuickBooks Data Migration Services for a Safe and Seamless Transition</h1>
		<p>Move your financial data to QuickBooks with accuracy, security, and complete peace of mind.</p>

		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("services") }}" class="breadcrumb">Services</a>
					<a href="{{ url("services/quickbooks-data-migration") }}" class="breadcrumb">QuickBooks Data Migration</a>
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

		<p>Whether you're switching from spreadsheets or migrating from another accounting system, transferring financial data into QuickBooks requires careful planning and precision. Our data migration service ensures your historical records, transactions, accounts, and balances move into QuickBooks accurately and securely. We make the transition smooth, so you can continue your financial operations without interruption.</p>
	</div>
</section>

<div class="container">
	<div class="divider"></div>
</div>

<!-- Our approach (start) -->
@php
	$approach = [
		(object) [
			"title" => "System Evaluation & Data Review",
			"description" => "We analyze your current accounting system, data structure, and historical records to understand what needs to be migrated."
		],
		(object) [
			"title" => "Migration Planning & Mapping",
			"description" => "We map your existing accounts, categories, and workflows to the appropriate QuickBooks fields to ensure a structured migration."
		],
		(object) [
			"title" => "Data Extraction & Cleanup",
			"description" => "Your financial data is extracted safely, cleaned if required, and prepared for a smooth import into QuickBooks."
		],
		(object) [
			"title" => "Secure Data Import into QuickBooks",
			"description" => "We import all relevant financial data — including customers, vendors, accounts, transactions, opening balances, and historical records."
		],
		(object) [
			"title" => "Post-Migration Review & Balancing",
			"description" => "Once data is imported, we reconcile and verify balances to ensure everything matches your original system."
		],
		(object) [
			"title" => "Final Testing & Migration Confirmation",
			"description" => "We test reports, transactions, and workflows in QuickBooks to confirm everything works perfectly before handing it over."
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
		"Initial consultation to understand your current system",
		"Data assessment to determine what needs to be migrated)",
		"Migration plan tailored to your business and software",
		"Secure extraction and transfer of financial data",
		"Import and verification inside QuickBooks",
		"Testing of reports and balances for accuracy",
		"Final review and confirmation",
		"Clear pricing based on data volume and system complexity"
	];
@endphp

<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h3 class="text-h4">How It Works</h3>
			<p>We follow a step by step process to ensure your data is migrated to QuickBooks efficiently.</p>
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