@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>Privacy Policy</h1>
		<p>Effective date: April 14th, 2026</p>
		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("policies") }}" class="breadcrumb">Policies</a>
					<a href="{{ url("policies/privacy-policy") }}" class="breadcrumb">Privacy Policy</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<section>
	<div class="container">
		<h2 class="text-h6">Introduction</h2>
		<p>{{ config("app.company.name") }} ("we", "our", or "us") operates the website <strong>{{ config("app.company.website") }}</strong>. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.</p>

		<p>By using our website, you consent to the practices described in this Privacy Policy.</p>


		<h2 class="text-h6">1. Information We Collect</h2>

		<p>We may collect the following types of information:</p>

		<h3 class="text-h6">Personal Information</h3>
		
		<ul class="numbers">
			<li>Name</li>
			<li>Email address</li>
			<li>Phone number</li>
			<li>Billing information</li>
			<li>Business information related to accounting or QuickBooks services</li>
		</ul>

		<h3 class="text-h6">Payment Information</h3>

		<p>Payments are processed securely through <strong>Stripe</strong>. We do not store your credit card, debit card, or bank account details on our servers.</p>

		<h3 class="text-h6">Automatically Collected Information</h3>

		<ul class="numbers">
			<li>IP address</li>
			<li>Browser type</li>
			<li>Device information</li>
			<li>Pages visited</li>
			<li>Referring website</li>
			<li>Usage statistics</li>
		</ul>


		<h2 class="text-h6">2. How We Collect Information</h2>

		<p>Information may be collected through:</p>

		<ul class="numbers">
			<li>Contact forms on our website</li>
			<li>Newsletter signup forms</li>
			<li>Customer service inquiries</li>
			<li>Payment transactions</li>
			<li>Website analytics tools</li>
		</ul>


		<h2 class="text-h6">3. Cookies and Tracking Technologies</h2>

		<p>Our website uses cookies and tracking technologies including:</p>

		<ul class="numbers">
			<li>Google Analytics</li>
			<li>Google Ads Conversion Tracking</li>
			<li>Facebook Pixel</li>
			<li>Website performance and analytics cookies</li>
		</ul>

		<p>
			These tools help us understand website usage, measure marketing performance, and improve user experience.
		</p>

		<p>
		You can disable cookies through your browser settings if you prefer not to allow tracking.
		</p>


		<h2 class="text-h6">4. How We Use Your Information</h2>

		<p>We may use your information for the following purposes:</p>

		<ul class="numbers">
			<li>Providing accounting and bookkeeping services</li>
			<li>Providing QuickBooks technical support</li>
			<li>Processing QuickBooks Online subscriptions</li>
			<li>Responding to inquiries or support requests</li>
			<li>Sending service updates or important notifications</li>
			<li>Improving our website and services</li>
			<li>Marketing and advertising optimization</li>
		</ul>


		<h2 class="text-h6">5. Sharing of Information</h2>

		<p>We may share information with:</p>

		<ul class="numbers">
			<li>Payment processors such as Stripe</li>
			<li>Service providers assisting with website operations</li>
			<li>Marketing and analytics platforms</li>
			<li>Government authorities when required by law</li>
		</ul>

		<p>We do not sell or rent your personal information to third parties.</p>


		<h2 class="text-h6">6. Data Security</h2>

		<p>We take reasonable security measures to protect your information, including encryption and secure payment processing. However, no method of transmission over the internet is completely secure.</p>


		<h2 class="text-h6">7. Third-Party Services</h2>

		<p>Our website may include links to third-party websites or services such as QuickBooks Online or other accounting tools. We are not responsible for the privacy practices of those websites.</p>


		<h2 class="text-h6">8. Children's Information</h2>

		<p>Our services are not directed toward individuals under the age of 13. We do not knowingly collect personal information from children.</p>


		<h2 class="text-h6">9. Changes to This Policy</h2>

		<p>We may update this Privacy Policy periodically. Updates will be posted on this page with the revised date.</p>


		<h2 class="text-h6">10. Contact Information</h2>

		<p>If you have questions about this Privacy Policy, please contact us:</p>

		<p>
			<strong>{{ config("app.company.name") }}</strong><br>
			1309 Coffeen Avenue, Suite 1200<br>
			Sheridan, Wyoming 82801<br>
			United States<br><br>

			Email: {{ config("app.company.email") }}<br>
			Phone: {{ config("app.company.phone") }}
		</p>
	</div>
</section>
@endsection