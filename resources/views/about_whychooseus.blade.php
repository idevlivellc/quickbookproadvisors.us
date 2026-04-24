@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>Why Choose Us</h1>
		<p>A Trusted Partner for Accurate & Organized Financial Management.</p>

		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("about") }}" class="breadcrumb">About us</a>
					<a href="{{ url("about/why-choose-us") }}" class="breadcrumb">Why Choose Us</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<div class="container"><div class="divider"></div></div>

<section class="center-align">
	<div class="container">
		<h2 class="text-h4">Introduction</h2>
		<p>Choosing the right accounting and bookkeeping partner is essential for maintaining financial clarity, operational efficiency, and long-term business stability. At QBP Advisor, we combine reliable processes, industry expertise, and structured workflows to support businesses across all stages of growth.</p>
		<p><strong>Our goal is simple:</strong> To make financial management easier, organized, and more reliable for your business, every single day. </p>
	</div>
</section>

<!-- Core advantages (start) -->
@php
	$advantages = [
		(object) [
			"heading" => "Specialized Expertise in Bookkeeping & QuickBooks",
			"description" => "We focus exclusively on bookkeeping, accounting workflows, and QuickBooks operational services—ensuring consistent accuracy, compliance, and discipline in every financial process."
		],
		(object) [
			"heading" => "Structured Processes & Error-Free Workflows",
			"description" => "Our internal review systems, reconciliation routines, and organized procedures ensure all financial data is maintained with precision and updated on schedule."
		],
		(object) [
			"heading" => "Transparent Communication & Clear Reporting",
			"description" => "Clients receive clear reports, consistent updates, and accessible communication throughout the engagement, ensuring complete financial visibility and confidence."
		],
		(object) [
			"heading" => "Secure Handling of Financial Data",
			"description" => "We follow strict data security practices, privacy measures, and controlled access processes to ensure your financial information remains protected at every stage."
		],
		(object) [
			"heading" => "Scalable Solutions for Growing Businesses",
			"description" => "Whether you're a small startup or an expanding company, our services adapt to your size, reporting needs, and financial structure."
		],
		(object) [
			"heading" => "Dedicated Account Managers & Skilled Teams",
			"description" => "Every client is supported by trained accounting professionals, reconciliation experts, and QuickBooks specialists who maintain accuracy and consistency across accounts."
		],
		(object) [
			"heading" => "Timely Deliverables & Reliable Turnaround",
			"description" => "We operate on disciplined timelines for reconciliations, reporting, and monthly closings—ensuring your financial data is always current and dependable."
		],
		(object) [
			"heading" => "100% Google-Ads-Compliant Service Offerings",
			"description" => "We strictly provide permitted operational services: bookkeeping, accounting, QuickBooks setup, data migration, and consultation—no technical support or troubleshooting."
		]
	];
@endphp
<section>
	<div class="container">
		<div class="flexbox flex-wrap">
			<div class="col s12 l6">
				<div class="heading-wrapper">
					<h2 class="text-h4">What sets us appart</h2>
					<p>Below are few reasons why we are better than our competitors:</p>

					<ul class="list">
						@foreach ($advantages as $key => $item)
							<li>
								<span class="header-font">0{{ $key + 1 }}. {{ $item->heading }}</span>
								<br>
								<span class="text-sm">{{ $item->description }}</span>
							</li>
						@endforeach
					</ul>
				</div>
			</div>

			<div class="col s12 l5 offset-l1">
				@component("components.contactcard") @endcomponent
			</div>
		</div>
	</div>
</section>
<!-- Core advantages (end) -->

<!-- Our approach (start) -->
@php
	$approach = [
		(object) [
			"heading" => "Understanding Your Business",
			"description" => "We start by studying your business model, accounting needs, and reporting structure to design a tailored workflow."
		],
		(object) [
			"heading" => "Implementing Organized Systems",
			"description" => "We set up structured processes, categorize transactions, align chart of accounts, and ensure clean financial data from day one."
		],
		(object) [
			"heading" => "Continuous Monitoring & Review",
			"description" => "We track financial activity, reconcile accounts, and run routine checks to maintain accuracy throughout the month."
		],
		(object) [
			"heading" => "Delivering Actionable Financial Insights",
			"description" => "We provide timely reports and financial summaries that help you make informed decisions for your business."
		]
	];
@endphp
<section class="about">
	<div class="container">
		<div class="flexbox flex-wrap">
			<div class="col s12 m6 l5 offset-m6 offset-l7">
				<h2 class="text-h4" style="margin-bottom: 2rem">Our Approach</h2>
				
				<ul class="list">
					@foreach ($approach as $key => $item)
						<li>
							<span class="header-font">0{{ $key + 1 }}. {{ $item->heading }}</span>
							<br>
							<span>{{ $item->description }}</span>
						</li>
					@endforeach
				</ul>

				<br>

				<p class="header-font grey-text text-darken-4">Your Business Deserves Reliable Financial Support</p>
				<p>With a professional team, disciplined processes, and a commitment to accuracy, we help businesses maintain clean books and stronger financial control - every month, every quarter, every year.</p>
			</div>
		</div>
	</div>
</section>
<!-- Our approach (end) -->

<!-- Final cta (start) -->
<section class="center-align">
	<div class="container">
		<h4 class="text-h5">Ready to Build a More Organized Financial System?</h4>
		<p>Take the next step toward accurate bookkeeping, structured processes, and stronger financial clarity. Our team is ready to help you set up reliable workflows and maintain clean, dependable financial records month after month.</p>
		<br>
		<a href="#get-consultation" class="btn-large primary">Get Started Today</a>
	</div>
</section>
<!-- Final cta (end) -->
@endsection