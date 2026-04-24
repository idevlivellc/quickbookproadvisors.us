@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>Our Firm</h1>
		<p>A Trusted Partner for Your Accounting & Bookkeeping Needs.</p>

		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("about") }}" class="breadcrumb">About us</a>
					<a href="{{ url("about/our-firm") }}" class="breadcrumb">Our firm</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<div class="container">
	<div class="divider"></div>
</div>

<section class="center-align">
	<div class="container">
		<h2 class="text-h4">About {{ config("app.company.name") }}</h2>
		<p>At {{ config("app.company.name") }}, we help small businesses, professionals, and growing companies manage their books with accuracy and clarity. Our firm specializes in accounting, bookkeeping, and QuickBooks services - including QuickBooks setup, QuickBooks data migration, QuickBooks bookkeeping, and QuickBooks consultation.</p>
		<p><strong>Our goal is simple:</strong> To make financial management easier, organized, and more reliable for your business - every single day. </p>
	</div>
</section>

<section class="about">
	<div class="container">
		<div class="flexbox flex-wrap">
			<div class="col s12 l6">
				<h3 class="text-h4">About our firm</h3>
				<p>We are a dedicated bookkeeping and accounting firm committed to delivering clear financial insights and accurate reporting. Our approach combines simplified workflows, modern accounting tools, and structured processes to keep your finances running smoothly.</p>
				<p>From initial QuickBooks setup to ongoing bookkeeping, we ensure your financial data stays organized and ready whenever you need it.</p>
			</div>
		</div>
	</div>
</section>

<section class="center-align">
	<div class="container">
		<h3 class="text-h4">Meet the team</h3>
		<p>Behind our firm is a passionate team of bookkeepers, accounting professionals, and certified QuickBooks experts. We bring years of experience working with service businesses, e-commerce brands, consultants, contractors, and more.</p>
		<p>Our team believes in transparency, timely communication, and maintaining long-term relationships with clients.</p>

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

		<br>

		<a href="{{ url("about/our-team") }}" class="btn-large primary">Learn about all the experts</a>
	</div>
</section>

<section>
	<div class="container">
		<div class="flexbox flex-wrap">
			<div class="col s12 m6 l6">
				<div class="heading-wrapper">
					<h3 class="text-h4">Why Choose Us</h3>
					<p>We deliver measurable improvement in financial efficiency, operational clarity, and accounting reliability. Our services are designed to simplify bookkeeping, streamline QuickBooks workflows, and provide dependable financial insights.</p>
				</div>

				<ul class="list">
					<li>01. Proven expertise in bookkeeping and QuickBooks operations</li>
					<li>02. Structured, compliant, and error-free workflows</li>
					<li>03. Transparent service processes and consistent communication</li>
					<li>04. Flexible engagement models suited to all business sizes</li>
					<li>05. Data confidentiality and secure accounting practices</li>
					<li>06. Long-term partnership focused on financial stability and scalability</li>
				</ul>
			</div>
		</div>
	</div>
</section>
@endsection