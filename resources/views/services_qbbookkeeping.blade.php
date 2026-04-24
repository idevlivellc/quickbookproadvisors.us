@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>QuickBooks Bookkeeping Services for Accurate, Real-Time Financial Tracking</h1>
		<p>tay organized and in control with clean, updated books managed professionally inside QuickBooks.</p>

		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("services") }}" class="breadcrumb">Services</a>
					<a href="{{ url("services/quickbooks-bookkeeping") }}" class="breadcrumb">QuickBooks Bookkeeping</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<section class="center-align primary">
	<div class="container">
		<h3 class="text-h5">Expert Bookkeeping Managed Directly in Your QuickBooks Account</h3>

		<h2 class="text-h1 hide-on-small-only">Call {{ config('app.company.phone') }}</h2>
		{{-- <div class="hide-on-med-and-up">
			<a href="tel:{{ config('app.company.phone') }}" class="btn btn-xl">{{ config('app.company.phone') }}</a>
		</div> --}}

		<p>Our QuickBooks Bookkeeping service ensures your financial data stays accurate, organized, and up to date throughout the year. We manage your day-to-day bookkeeping inside QuickBooks Online or QuickBooks Desktop, ensuring clean records, timely reconciliations, and consistent reporting. Whether you're behind on bookkeeping or need ongoing monthly support, we tailor our service to your business size and workflow.</p>
	</div>
</section>

<div class="container">
	<div class="divider"></div>
</div>

<!-- Our approach (start) -->
@php
	$approach = [
		(object) [
			"title" => "QuickBooks File Review & Setup Check",
			"description" => "We start by reviewing your existing QuickBooks file structure, chart of accounts, and data accuracy to ensure a clean foundation."
		],
		(object) [
			"title" => "Monthly Transaction Categorization",
			"description" => "We accurately categorize all income, expenses, vendor bills, and customer payments within QuickBooks."
		],
		(object) [
			"title" => "Bank & Credit Card Reconciliation",
			"description" => "Every connected account is reconciled monthly to ensure your QuickBooks balances match your actual financials."
		],
		(object) [
			"title" => "Accounts Receivable & Payable Tracking",
			"description" => "We update outstanding invoices, bills, and payments, helping you maintain smoother cash flow."
		],
		(object) [
			"title" => "Monthly Bookkeeping Reports",
			"description" => "We prepare detailed reports inside QuickBooks — including Profit & Loss, Balance Sheet, and other insights you need."
		],
		(object) [
			"title" => "Ongoing Maintenance & Review",
			"description" => "We monitor your file regularly, correct discrepancies, and keep your books updated for accurate financial reporting."
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
		"QuickBooks file access via secure sharing)",
		"Cleanup or setup check (if needed)",
		"Monthly transaction updates done consistently",
		"Scheduled reconciliations for all accounts",
		"Communication and document sharing through email, call, or portal",
		"Monthly reports delivered inside QuickBooks",
		"Transparent pricing based on transaction volume"
	];
@endphp

<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h3 class="text-h4">How It Works</h3>
			<p>We follow a step by step process to ensure your books are properly maintained inside your QuickBooks.</p>
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