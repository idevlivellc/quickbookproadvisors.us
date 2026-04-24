@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>QuickBooks Consultation Services for Clear Financial Direction</h1>
		<p>Get expert guidance on how to structure, optimize, and manage your QuickBooks file for better financial clarity and decision-making.</p>

		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("services") }}" class="breadcrumb">Services</a>
					<a href="{{ url("services/quickbooks-consultation") }}" class="breadcrumb">QuickBooks Consultation</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<section class="center-align primary">
	<div class="container">
		<h3 class="text-h5">Professional QuickBooks Consulting Tailored to Your Business Goals</h3>

		<h2 class="text-h1 hide-on-small-only">Call {{ config('app.company.phone') }}</h2>
		{{-- <div class="hide-on-med-and-up">
			<a href="tel:{{ config('app.company.phone') }}" class="btn btn-xl">{{ config('app.company.phone') }}</a>
		</div> --}}

		<p>Our QuickBooks Consultation service helps you understand, optimize, and get the most out of your QuickBooks setup. Whether you're unsure how to read your reports, want to streamline workflows, or need expert advice on managing accounting processes inside QuickBooks, we provide clear, practical guidance. Each consultation is custom-built around your business model, industry, and financial needs.</p>
	</div>
</section>

<div class="container">
	<div class="divider"></div>
</div>

<!-- Our approach (start) -->
@php
	$approach = [
		(object) [
			"title" => "Consultation Discovery Session",
			"description" => "We discuss your business model, financial structure, and what you want to achieve using QuickBooks."
		],
		(object) [
			"title" => "QuickBooks File Review & Assessment",
			"description" => "We review your existing QuickBooks file (if applicable) to understand your chart of accounts, workflows, and reporting needs."
		],
		(object) [
			"title" => "Identifying Challenges & Improvement Areas",
			"description" => "We pinpoint issues such as miscategorized transactions, workflow bottlenecks, or reporting inconsistencies."
		],
		(object) [
			"title" => "Personalized Recommendations & Guidance",
			"description" => "You receive clear, actionable advice on optimizing processes, organizing financial data, and improving reporting accuracy."
		],
		(object) [
			"title" => "Workflow Planning & Strategy Building",
			"description" => "We help you set up efficient financial routines, document flows, and internal processes that align with your operations."
		],
		(object) [
			"title" => "Implementation Roadmap & Next Steps",
			"description" => "We provide a structured plan outlining what to improve, how to maintain accuracy, and how to use QuickBooks more effectively long term."
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
		"Free introductory call to understand your goals",
		"QuickBooks access (if needed) for a file review)",
		"One-on-one consultation session with a specialist)",
		"Breakdown of issues and improvement areas",
		"Actionable recommendations shared during and after consultation",
		"Follow-up guidance to help you stay on track",
		"Clear pricing with no hidden fees",
	];
@endphp

<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h3 class="text-h4">How It Works</h3>
			<p>We follow a step by step process to ensure you get clarity on whatever we do.</p>
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