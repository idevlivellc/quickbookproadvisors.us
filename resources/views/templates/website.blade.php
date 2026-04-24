<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ $title ? $title : config("app.company.name") }}</title>

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="{{ url("images/favicon.ico") }}">

	@vite(["resources/css/website.css"])
</head>
<body>
	<nav class="website">
		<div class="nav-wrapper container">
			<a href="{{ url("") }}" class="brand-logo">
				<img src="{{ asset("images/logo.png") }}" alt="{{ config("app.company.name") }} logo" width="32" height="32">
				Quickbook Proadvisors
			</a>

			<ul class="right">
				<li><button class="btn" id="about-btn" popovertarget="about-list">About us</button></li>
				<li><button class="btn" id="services-btn" popovertarget="services-list">Services</button></li>
				<li><button class="btn" id="resources-btn" popovertarget="resources-list">Resources</a></li>
				<li><button class="btn" id="more-btn" popovertarget="more-list">More Options</button></li>
				<li><a href="{{ url("buy-quickbooks") }}" class="btn primary">Buy QuickBooks</a></li>
			</ul>
		</div>
	</nav>

	@yield("content")

	<footer class="page-footer">
		<div class="container">
			<p class="header-font">Disclaimer</p>
			<p>{{ config("app.company.name") }} is an independent accounting and bookkeeping firm and a Certified QuickBooks ProAdvisor. We are not affiliated with, sponsored by, or endorsed by Intuit Inc. QuickBooks, QuickBooks ProAdvisor, TurboTax, and all related marks and logos are registered trademarks and property of Intuit Inc., used here solely for descriptive purposes. All information provided on this website is for general informational purposes only and should not be considered professional or financial advice.</p>
			<div class="flexbox flex-wrap" style="padding-bottom: 20px">
				<div class="col l3">
					<p class="header-font">Services</p>
					<ul class="list">
						<li>
							<a href="{{ url("services/accounting-service") }}">Accounting Services</a>
						</li>
						<li>
							<a href="{{ url("services/bookkeeping-service") }}">Bookkeeping Services</a>
						</li>
						<li>
							<a href="{{ url("services/quickbooks-setup") }}">QuickBooks Setup</a>
						</li>
						<li>
							<a href="{{ url("services/quickbooks-data-migration") }}">QuickBooks Data Migration</a>
						</li>
						<li>
							<a href="{{ url("services/quickbooks-bookkeeping") }}">QuickBooks Bookkeeping</a>
						</li>
						<li>
							<a href="{{ url("services/quickbooks-consultation") }}">QuickBooks Consultation</a>
						</li>
					</ul>
				</div>

				<div class="col l3">
					<p class="header-font">Quick Links</p>
					<ul class="list">
						<li>
							<a href="{{ url("about") }}">About us</a>
						</li>
						<li>
							<a href="{{ url("services") }}">Services</a>
						</li>
						<li>
							<a href="{{ url("pricing") }}">Pricing</a>
						</li>
						<li>
							<a href="{{ url("resources/blog") }}">Our blog</a>
						</li>
					</ul>
				</div>

				<div class="col l3">
					<p class="header-font">Legal & Policies</p>
					<ul class="list">
						<li>
							<a href="{{ url("policies/terms-of-service") }}">Terms of Service</a>
						</li>
						<li>
							<a href="{{ url("policies/privacy-policy") }}">Privacy Policy</a>
						</li>
						<li>
							<a href="{{ url("policies/refund-policy") }}">Refund Policy</a>
						</li>
						<li>
							<a href="{{ url("policies/disclaimer") }}">Disclaimer</a>
						</li>
					</ul>
				</div>

				<div class="col l3">
					<p class="header-font">{{ config("app.company.name") }}</p>
					<ul>
						<li>{{ config("app.company.address") }}</li>
						<li>{{ config("app.company.phone") }}</li>
						<li>{{ config("app.company.email") }}</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container flexbox items-center">
				<div>&copy; 2026 All Rights Reserved To {{ config("app.company.name") }}</div>
			</div>
		</div>
	</footer>

	@component("components.dropdowns") @endcomponent

	<script>
		window.onscroll = () => {
			if (document.documentElement.scrollTop > 50) {
				document.querySelector('nav.website').classList.add("shadow")
			} else {
				document.querySelector('nav.website').classList.remove("shadow")
			}
		}
	</script>
</body>
</html>