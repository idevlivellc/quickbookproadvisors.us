@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>QuickBooks Setup Services for a Smooth, Accurate Start</h1>
		<p>Get your QuickBooks file configured the right way - tailored to your business structure, industry, and workflow.</p>

		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("services") }}" class="breadcrumb">Services</a>
					<a href="{{ url("services/quickbooks-setup") }}" class="breadcrumb">QuickBooks Setup</a>
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

		<p>Setting up QuickBooks properly is essential for accurate financial tracking. We help you configure your QuickBooks file with the right chart of accounts, settings, automation rules, and workflows so you can manage your finances confidently from day one. Whether you're switching from spreadsheets or starting fresh, we ensure your setup aligns with your business needs and future growth.</p>
	</div>
</section>

<div class="container">
	<div class="divider"></div>
</div>

<!-- Our approach (start) -->
@php
	$approach = [
		(object) [
			"title" => "Business Assessment & Requirement Gathering",
			"description" => "We begin by understanding your business type, industry, revenue structure, and necessary reporting requirements."
		],
		(object) [
			"title" => "Chart of Accounts Configuration",
			"description" => "We build or refine a customized chart of accounts tailored to your industry and financial workflow."
		],
		(object) [
			"title" => "Company File Setup & Customization",
			"description" => "We set up your company profile, fiscal year, tax preferences, user permissions, and feature settings based on your requirements."
		],
		(object) [
			"title" => "Banking & Integrations Setup",
			"description" => "Your bank accounts, payment processors, and financial tools are connected securely for automated data flow."
		],
		(object) [
			"title" => "Workflow & Automation Configuration",
			"description" => "We configure invoicing, expenses, recurring transactions, classes, locations, and other QuickBooks features to match your operations."
		],
		(object) [
			"title" => "Review & Training Walkthrough",
			"description" => "Once the setup is complete, we walk you through your QuickBooks file so you understand how everything is organized and how to use it efficiently."
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
		"Free consultation to understand your business and requirements",
		"Review of existing systems (if migrating from spreadsheets or apps)",
		"QuickBooks setup plan tailored to your operations",
		"Complete configuration done by certified professionals",
		"Training session to help you get comfortable",
		"Ongoing communication via email, call, or portal",
		"Delivery of finalized setup with documentation",
		"Transparent pricing based on business size and complexity"
	];
@endphp

<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h3 class="text-h4">How It Works</h3>
			<p>We follow a step by step process to ensure your QuickBooks is setup properly.</p>
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