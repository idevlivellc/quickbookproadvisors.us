@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>Terms of Service</h1>
		<p>Effective date: April 14th, 2026</p>
		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("policies") }}" class="breadcrumb">Policies</a>
					<a href="{{ url("policies/terms-of-service") }}" class="breadcrumb">Terms of Service</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<section>
	<div class="container">
		<h2 class="text-h6">Introduction</h2>
		<p>
			Please read these Terms of Service carefully before using <strong>{{ config("app.company.website") }}</strong> (the “Website” or “Site”). These Terms govern your access to and use of the Website and any services provided by <strong>{{ config("app.company.name") }}</strong>.
		</p>

		<p>
			By accessing or using this Website, you agree to be bound by these Terms of Service. If you do not agree with these Terms, please do not use this Website.
		</p>

		<p>
			{{ config("app.company.name") }} reserves the right to modify these Terms of Service at any time. Changes will become effective once posted on this page. Your continued use of the Website after such modifications constitutes your acceptance of the updated Terms.
		</p>

		<h2 class="text-h6">1. Description of Services</h2>

		<p>{{ config("app.company.name") }} provides professional accounting-related services and software assistance, including but not limited to:</p>

		<ul class="numbers">
			<li>QuickBooks Online subscriptions as an authorized QuickBooks ProAdvisor</li>
			<li>Accounting and bookkeeping services</li>
			<li>Tax preparation and financial assistance</li>
			<li>QuickBooks setup, configuration, and troubleshooting</li>
			<li>QuickBooks data migration and consultation</li>
			<li>Technical support and assistance for QuickBooks products</li>
		</ul>

		<p>All services are provided subject to the terms outlined in this document.</p>

		<h2 class="text-h6">2. User Information</h2>

		<p>When using this Website, you agree to:</p>

		<ul class="numbers">
			<li>Provide true, accurate, current, and complete information</li>
			<li>Maintain and update your information when necessary</li>
			<li>Use the Website only for lawful purposes</li>
		</ul>

		<p>
			If any information you provide is false, inaccurate, outdated, or incomplete, {{ config("app.company.name") }} reserves the right to suspend or terminate your access to the Website or services.
		</p>

		<p>
			You agree not to resell, transfer, or commercially exploit access to this Website or its services without written permission.
		</p>

		<h2 class="text-h6">3. Access to the Website</h2>

		<p>You acknowledge that you are responsible for:</p>

		<ul class="numbers">
			<li>Obtaining access to the Internet</li>
			<li>Paying any service fees associated with such access</li>
			<li>Providing your own equipment such as a computer, smartphone, or other device needed to access the Website</li>
		</ul>

		<p>
			{{ config("app.company.name") }} is not responsible for connectivity issues caused by your equipment, internet provider, or external factors.
		</p>

		<h2 class="text-h6">4. Disclaimer of Warranties</h2>

		<p>Your use of this Website is entirely at your own risk.</p>

		<p>
			The Website and all services are provided <strong>"as is"</strong> and <strong>"as available"</strong> without warranties of any kind, either express or implied.
		</p>

		<p>{{ config("app.company.name") }} does not guarantee:</p>

		<ul class="numbers">
			<li>Uninterrupted or error-free access to the Website</li>
			<li>The accuracy or completeness of Website information</li>
			<li>That the Website will be free of viruses or harmful components</li>
			<li>That services will meet your specific business requirements</li>
		</ul>

		<p>
			To the fullest extent permitted by law, {{ config("app.company.name") }} disclaims all warranties including merchantability, fitness for a particular purpose, and non-infringement.
		</p>

		<h2 class="text-h6">5. Limitation of Liability</h2>

		<p>
			Under no circumstances shall {{ config("app.company.name") }}, its employees, affiliates, contractors, or partners be liable for any direct, indirect, incidental, special, or consequential damages arising out of:
		</p>

		<ul class="numbers">
			<li>Your use of the Website</li>
			<li>Inability to access the Website</li>
			<li>Errors, interruptions, or technical issues</li>
			<li>Reliance on information provided on the Website</li>
		</ul>

		<p>Some jurisdictions do not allow limitations on certain liabilities, so these limitations may not apply to you.</p>

		<h2 class="text-h6">6. QuickBooks and Third-Party Services</h2>

		<p>{{ config("app.company.name") }} is an independent service provider and QuickBooks ProAdvisor.</p>

		<p>QuickBooks® and related trademarks are registered trademarks of <strong>Intuit Inc.</strong></p>

		<p>{{ config("app.company.name") }} is not affiliated with or endorsed by Intuit Inc. unless explicitly stated.</p>

		<p>Subscriptions or services purchased through this Website may involve third-party platforms such as QuickBooks Online or other accounting software.</p>

		<p>{{ config("app.company.name") }} is not responsible for:</p>

		<ul class="numbers">
			<li>Third-party platform outages</li>
			<li>Software changes or policy updates</li>
			<li>Third-party service interruptions</li>
			<li>Pricing changes by software providers</li>
		</ul>

		<h2 class="text-h6">7. Intellectual Property</h2>

		<p>All content on this Website including text, graphics, logos, images, software, design, and layout is the property of <strong>{{ config("app.company.name") }}</strong> or its licensors and is protected by copyright and intellectual property laws.</p>

		<p>You may:</p>

		<ul class="numbers">
			<li>View the Website content</li>
			<li>Print copies for personal reference</li>
		</ul>

		<p>You may not:</p>

		<ul class="numbers">
			<li>Reproduce or republish Website content</li>
			<li>Distribute or modify content</li>
			<li>Use Website content for commercial purposes without written permission</li>
		</ul>

		<h2 class="text-h6">8. User Conduct</h2>

		<p>While using the Website, you agree not to:</p>

		<ul class="numbers">
			<li>Violate any local, national, or international law</li>
			<li>Upload harmful software or malware</li>
			<li>Post abusive, defamatory, or offensive content</li>
			<li>Send spam or unsolicited marketing messages</li>
			<li>Attempt unauthorized access to Website systems</li>
			<li>Exploit Website content for commercial purposes without permission</li>
		</ul>

		<p>Violation of these rules may result in termination of access to the Website.</p>

		<h2 class="text-h6">9. Monitoring and Content Removal</h2>

		<p>{{ config("app.company.name") }} is not obligated to monitor Website activity but reserves the right to:</p>

		<ul class="numbers">
			<li>Monitor use of the Website</li>
			<li>Remove content that violates these Terms</li>
			<li>Disclose information if required by law</li>
		</ul>

		<h2 class="text-h6">10. User Communications</h2>

		<p>Any communication you send through this Website including emails, suggestions, feedback, or questions may be treated as non-confidential unless otherwise stated.</p>

		<p>{{ config("app.company.name") }} may use such communications for business purposes without compensation to you.</p>

		<h2 class="text-h6">11. External Links</h2>

		<p>This Website may contain links to external websites operated by third parties.</p>

		<p>{{ config("app.company.name") }} does not control or guarantee the accuracy of third-party websites and is not responsible for their content or services.</p>

		<p>You access external websites at your own risk.</p>

		<h2 class="text-h6">12. Payments and Pricing</h2>

		<p>Pricing displayed on this Website may change at any time without prior notice.</p>

		<p>If you purchase services or subscriptions:</p>

		<ul class="numbers">
			<li>You agree to provide accurate billing information</li>
			<li>You agree to pay all applicable fees and taxes</li>
			<li>Pricing may vary depending on service requirements</li>
		</ul>

		<h2 class="text-h6">13. Indemnification</h2>

		<p>You agree to defend, indemnify, and hold harmless {{ config("app.company.name") }} and its affiliates from any claims, damages, liabilities, and expenses resulting from:</p>

		<ul class="numbers">
			<li>Your use of the Website</li>
			<li>Your violation of these Terms</li>
			<li>Your misuse of the services</li>
		</ul>

		<h2 class="text-h6">14. Termination</h2>

		<p>{{ config("app.company.name") }} reserves the right to suspend or terminate your access to the Website if you violate these Terms or misuse the services.</p>

		<h2 class="text-h6">15. Privacy</h2>

		<p>Your use of this Website is also governed by our <strong><a href="{{ url("policies/privacy-policy") }}">Privacy Policy</a></strong>, which explains how your information is collected and used.</p>

		<h2 class="text-h6">16. Governing Law</h2>

		<p>These Terms of Service shall be governed by the laws of the United States.</p>

		<p>Any disputes arising from the use of this Website shall be handled in the appropriate courts within the United States.</p>

		<h2 class="text-h6">17. Contact Information</h2>

		<p>If you have questions about these Terms of Service, you may contact us:</p>

		<p>
			<strong>{{ config("app.company.name") }}</strong><br>
			Website: https://{{ config("app.company.website") }}<br>
			Email: {{ config("app.company.email") }}
		</p>
	</div>
</section>
@endsection