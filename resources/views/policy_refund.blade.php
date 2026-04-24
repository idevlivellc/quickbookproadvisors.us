@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>Refund Policy</h1>
		<p>Effective date: April 14th, 2026</p>
		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("policies") }}" class="breadcrumb">Policies</a>
					<a href="{{ url("policies/refund-policy") }}" class="breadcrumb">Refund Policy</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<section>
	<div class="container">
		<h2 class="text-h6">Introduction</h2>

		<p>At {{ config("app.company.name") }}, we strive to provide high-quality accounting and QuickBooks services. This Refund Policy explains the circumstances under which refunds may be issued.</p>

		<h2 class="text-h6">1. Refund Eligibility</h2>

		<p>Refunds may be issued under the following conditions:</p>

		<ul>
		<li>Refund requests made within <strong>3 days</strong> if the service has not yet started.</li>
		<li>Refund requests made within <strong>3 weeks after service begins</strong> if the service could not be completed or if the customer is not satisfied.</li>
		<li>If {{ config("app.company.name") }} is unable to deliver the agreed service.</li>
		</ul>

		<h2 class="text-h6">2. QuickBooks Subscription Refunds</h2>

		<p>Refunds for <strong>QuickBooks Online subscriptions</strong> purchased through {{ config("app.company.name") }} may be issued on a <strong>prorated basis</strong> depending on the duration of use.</p>

		<h2 class="text-h6">3. Bundle Service Refunds</h2>

		<p>If a customer purchases a bundled package containing multiple services and uses only part of the bundle:</p>

		<ul>
			<li>A partial refund may be issued for services not used.</li>
			<li>The refund amount will be adjusted according to the services already provided.</li>
		</ul>

		<h2 class="text-h6">4. Non-Refundable Situations</h2>

		<p>Refunds may not be granted in the following situations:</p>

		<ul>
			<li>Services that have already been completed.</li>
			<li>Customer failure to provide required information needed to perform the service.</li>
			<li>Refund requests submitted outside the eligible time period.</li>
		</ul>

		<h2 class="text-h6">5. Refund Processing</h2>

		<p>Approved refunds will be processed using the original payment method used during the transaction.</p>

		<p>Refund processing times may vary depending on your payment provider or financial institution.</p>

		<h2 class="text-h6">6. Payment Methods</h2>

		<p>Payments on qbpadvisor.com are securely processed through <strong>Stripe</strong> and may include:</p>

		<ul>
			<li>Credit Cards</li>
			<li>Debit Cards</li>
			<li>ACH Bank Transfers</li>
		</ul>

		<h2 class="text-h6">7. Cancellation Requests</h2>

		<p>To request a cancellation or refund, please contact our support team with your order details.</p>

		<h2 class="text-h6">8. Contact Information</h2>

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