@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>Frequently Asked Questions</h1>
		<p>Get answers to the most common questions about our firm & services.</p>

		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("resources") }}" class="breadcrumb">Resources</a>
					<a href="{{ url("resources/faq") }}" class="breadcrumb">FAQ</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<div class="container">
	<div class="divider"></div>
</div>

@php
	$faqs = [
		(object) [
			"question" => "What type of businesses do you work with?",
			"answer" => "We serve small to mid-sized businesses across various industries - including retail, construction, professional services, and eCommerce. Whether you're a startup or an established firm, we customize our services to fit your business model and growth stage."
		],
		(object) [
			"question" => "Do you only work with QuickBooks?",
			"answer" => "While we specialize in QuickBooks bookkeeping and setup, our team also works with other major accounting platforms. Our goal is to help you manage your finances efficiently - using whichever accounting software best fits your business needs."
		],
		(object) [
			"question" => "Are you affiliated with Intuit or QuickBooks?",
			"answer" => "No, Quick Accounting Services is an independent accounting and bookkeeping firm. We are not affiliated, endorsed, or associated with Intuit Inc. or QuickBooks. All trademarks are property of their respective owners and are used only for descriptive purposes."
		],
		(object) [
			"question" => "How does your pricing work?",
			"answer" => "We offer transparent, flexible pricing based on the complexity and volume of your bookkeeping or accounting needs. Each plan can be customized or bundled - ensuring you only pay for what you need. You can view our pricing details or request a personalized quote."
		],
		(object) [
			"question" => "What's included in your bookkeeping services?",
			"answer" => "Our bookkeeping packages typically include transaction categorization, bank reconciliation, accounts payable and receivable management, and monthly financial statements. We also provide periodic performance reports to help you stay on top of your finances."
		],
		(object) [
			"question" => "Can you help me set up QuickBooks for my business?",
			"answer" => "Yes, our team can assist with full QuickBooks setup - including company profile creation, chart of accounts setup, and bank feed integration. We also offer personalized consultation to help you understand how to use QuickBooks effectively for your day-to-day accounting tasks."
		],
		(object) [
			"question" => "Do you offer one-time services or only monthly plans?",
			"answer" => "We provide both options. You can choose a one-time QuickBooks setup or data cleanup, or subscribe to a recurring monthly bookkeeping or accounting plan. Each package is flexible and designed to fit your ongoing needs."
		],
		(object) [
			"question" => "How secure is my financial data with you?",
			"answer" => "We follow strict data protection standards and use encrypted communication to ensure the privacy and safety of your financial information. Your data is handled confidentially and never shared with third parties without your consent."
		],
		(object) [
			"question" => "What's the process for getting started?",
			"answer" => "You can get started by filling out our contact form or requesting a consultation. We'll schedule a quick discussion to understand your business requirements, recommend the right plan, and provide a customized quote based on your needs."
		],
		(object) [
			"question" => "Can I upgrade or change my service plan later?",
			"answer" => "Absolutely. You can modify, upgrade, or combine services at any time. Our flexible structure allows you to scale your plan as your business grows or your accounting needs evolve."
		]
	];
@endphp
<section>
	<div class="container">
		<ul class="list">
			@foreach ($faqs as $key => $faq)
				<li>
					<span class="header-font">{{ $key + 1 }}. {{ $faq->question }}</span>
					<br>
					<span class="text-sm">{{ $faq->answer }}</span>
				</li>
			@endforeach
		</ul>
	</div>
</section>
@endsection