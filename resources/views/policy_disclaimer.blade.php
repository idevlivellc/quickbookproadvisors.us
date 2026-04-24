@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>Disclaimer</h1>
		<p>Effective date: April 14th, 2026</p>
		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("policies") }}" class="breadcrumb">Policies</a>
					<a href="{{ url("policies/disclaimer") }}" class="breadcrumb">Disclaimer</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<section>
	<div class="container">
		<h2 class="text-h6" class="text-h6">1. Introduction</h2>

		<p>The information provided on <strong>{{ config("app.company.website") }}</strong> is for general informational purposes only. All information on the website is provided in good faith; however, {{ config("app.company.name") }} makes no representation or warranty of any kind regarding the accuracy, adequacy, validity, reliability, availability, or completeness of any information on the website.</p>

		<h2 class="text-h6">2. Professional Disclaimer</h2>

		<p>{{ config("app.company.name") }} provides accounting, bookkeeping, and QuickBooks support services. However, information on this website should not be considered financial, tax, or legal advice.</p>

		<p>Users should consult a qualified professional before making financial, accounting, or tax decisions.</p>

		<h2 class="text-h6">3. QuickBooks Trademark Disclaimer</h2>

		<p>{{ config("app.company.name") }} is an independent service provider and is not affiliated with Intuit Inc.</p>

		<p><strong>QuickBooks® is a registered trademark of Intuit Inc.</strong></p>

		<p>Any references to QuickBooks are used solely for identification and compatibility purposes.</p>

		<h2 class="text-h6">4. External Links Disclaimer</h2>

		<p>Our website may contain links to external websites that are not provided or maintained by {{ config("app.company.name") }}.</p>

		<p>We do not guarantee the accuracy or reliability of information found on external websites.</p>

		<h2 class="text-h6">5. Limitation of Liability</h2>

		<p>Under no circumstances shall {{ config("app.company.name") }} be liable for any loss or damage resulting from the use of the website or reliance on any information provided on the website.</p>

		<p>Your use of the website and reliance on any information is solely at your own risk.</p>

		<h2 class="text-h6">6. Contact Information</h2>

		<p>If you have questions regarding this Disclaimer, please contact us:</p>

		<p>
		<strong>{{ config("app.company.name") }}</strong><br>
			{{ config("app.company.address") }}<br>
			Sheridan, Wyoming 82801<br>
			United States<br><br>

			Email: {{ config("app.company.email") }}<br>
			Phone: {{ config("app.company.phone") }}
		</p>
	</div>
</section>
@endsection