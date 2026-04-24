@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>Our Team</h1>
		<p>Our People, Our Strength</p>

		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("about") }}" class="breadcrumb">About us</a>
					<a href="{{ url("about/our-team") }}" class="breadcrumb">Our team</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<div class="container"><div class="divider"></div></div>

<!-- Founders (start) -->
<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h2 class="text-h4">Meet the founders</h2>
		</div>
		
		<div class="team-wrapper">
			<div class="card">
				<img src="{{ asset("images/team/christy-parker.jpg") }}" alt="christy parker" class="circle">
				<p class="header-font">Christy P.</p>
				<p class="text-sm">Sales Head & CMO</p>
			</div>
			<div class="card">
				<img src="{{ asset("images/team/sayan-das.jpg") }}" alt="kevin parker" class="circle">
				<p class="header-font">Christy P.</p>
				<p class="text-sm">Founder & CEO</p>
			</div>
		</div>
	</div>
</section>
<!-- Founders (end) -->
<div class="container"><div class="divider"></div></div>
<!-- Sales team (start) -->
@php
	$salesTeam = [
		(object) [
			"name" => "Michael R.",
			"designation" => "Senior Sales Executive",
			"about" => "Michael drives high-value client acquisition and sales growth, focusing on strategic outreach and long-term revenue development."
		],
		(object) [
			"name" => "Ashley M.",
			"designation" => "Business Development Specialist",
			"about" => "Ashley identifies new market opportunities, builds strong business relationships, and supports consistent expansion of our client base."
		],
		(object) [
			"name" => "Tyler G.",
			"designation" => "Account Executive",
			"about" => "Tyler manages key client accounts with precision, ensuring smooth communication, clear expectations, and consistent service satisfaction."
		],
		(object) [
			"name" => "Katelyn H.",
			"designation" => "Inside Sales Representative",
			"about" => "Katelyn handles inbound inquiries, conducts product walkthroughs, and helps prospects transition confidently into long-term clients."
		],
		(object) [
			"name" => "Brandon F.",
			"designation" => "Client Acquisition Specialist",
			"about" => "Brandon specializes in lead qualification and onboarding, helping potential clients understand our value through structured communication."
		],
		(object) [
			"name" => "Lauren B.",
			"designation" => "Sales Operations Associate",
			"about" => "Lauren supports sales processes, reporting, and internal coordination, ensuring efficiency and smooth operation across the entire sales team."
		]
	];
@endphp
<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h2 class="text-h4">The Sales Team</h2>
		</div>
		<div class="team-wrapper" style="row-gap: 2rem;">
			@foreach ($salesTeam as $member)
				<div class="card">
					<img src="{{ asset("images/team/christy-parker.jpg") }}" alt="christy parker" class="circle">
					<p class="header-font">{{ $member->name }}</p>
					<p>{{ $member->designation }}</p>
					{{-- <p class="text-sm">{{ $member->about }}</p> --}}
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- Sales team (end) -->

<!-- Sales team (start) -->
@php
	$accountingTeam = [
		(object) [
			"name" => "Jennifer W.",
			"designation" => "Senior Bookkeeper",
			"about" => "Jennifer oversees complex bookkeeping processes, ensuring accurate reconciliations and consistent financial organization for multiple client accounts."
		],
		(object) [
			"name" => "Mark S.",
			"designation" => "Accounting Associate",
			"about" => "Mark manages day-to-day financial entries, assists with month-end reviews, and maintains clean, structured books for long-term client reliability."
		],
		(object) [
			"name" => "Olivia C.",
			"designation" => "Junior Bookkeeper",
			"about" => "Olivia supports data entry, account reconciliation, and report preparation with strong attention to detail and organized workflow execution."
		],
		(object) [
			"name" => "Nathan C.",
			"designation" => "Reconciliation Specialist",
			"about" => "Nathan handles daily and monthly reconciliation tasks, ensuring account accuracy and resolving discrepancies with a disciplined, detail-oriented approach."
		],
		(object) [
			"name" => "Rachel S.",
			"designation" => "Financial Records Coordinator",
			"about" => "Rachel maintains client financial records, updates transaction logs, and supports smooth documentation processes across all bookkeeping activities."
		],
		(object) [
			"name" => "Adam P.",
			"designation" => "Accounts Processing Assistant",
			"about" => "Adam assists with transaction categorization, ledger updates, and routine bookkeeping tasks to support accurate and timely financial management."
		],
		(object) [
			"name" => "Sophia T.",
			"designation" => "Accounts Payable Specialist",
			"about" => "Sophia manages vendor payments, invoice processing, and payable schedules, ensuring accuracy, compliance, and smooth financial operations for all client accounts."
		],
		(object) [
			"name" => "Jacob H.",
			"designation" => "Accounts Receivable Coordinator",
			"about" => "Jacob oversees receivable tracking, payment follow-ups, and client billing accuracy to maintain healthy cash flow and organized account records."
		],
		(object) [
			"name" => "Victoria R.",
			"designation" => "Bookkeeping Support Associate",
			"about" => "Victoria assists with data verification, document organization, and routine bookkeeping tasks, ensuring timely updates and accurate financial record maintenance."
		]
	];
@endphp
<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h2 class="text-h4">The Accounting Team</h2>
		</div>
		<div class="team-wrapper" style="row-gap: 2rem;">
			@foreach ($accountingTeam as $member)
				<div class="card">
					<img src="{{ asset("images/team/christy-parker.jpg") }}" alt="christy parker" class="circle">
					<p class="header-font">{{ $member->name }}</p>
					<p>{{ $member->designation }}</p>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- Sales team (end) -->
@endsection