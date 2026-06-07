@extends("templates.landing")

@section("content")

<style>
	.common-errors-grid {
		display: grid;
		gap: 2rem;
		grid-template-columns: auto;
		grid-template-rows: auto;
		grid-template-areas: "box-1 box-2 box-3" "box-1 box-4 box-5";
	}

	.common-errors-grid > .grid-item > .card {
		height: 100%;
	}
</style>

@component("components.callback") @endcomponent

<header>
	<div class="container">
		<div class="flexbox">
			<div class="col s12 l6">
				<h1>QuickBooks Error 6000 Series Preventing Access to Your Company File?</h1>
				<p>The QuickBooks Error 6000 series can occur when opening, restoring, or accessing a company file. Our QuickBooks consultants help identify the cause, guide troubleshooting, and assist with restoring access to your business data.</p>

				<p class="flexbox items-center" style="gap: 1rem; margin-top: 2rem;">
					<img src="{{ asset("images/icons/hard-disk.svg") }}" alt="hard disk icon" height="24" width="24">
					Assistance with QuickBooks Error 6000 Series Troubleshooting
				</p>
				<p class="flexbox items-center" style="gap: 1rem;">
					<img src="{{ asset("images/icons/supervisor-account.svg") }}" alt="supoervisor account icon" height="24" width="24">
					Help Accessing Company Files and Network Data Files
				</p>
				<p class="flexbox items-center" style="gap: 1rem;">
					<img src="{{ asset("images/icons/sync-saved-locally.svg") }}" alt="local sync icon" height="24" width="24">
					Guidance for Multi-User and Hosting Configuration Issues
				</p>
				<p class="flexbox items-center" style="gap: 1rem;">
					{{-- <i class="material-symbols-rounded left hide-on-small-only" style="color: #1f7a6b">contact_support</i> --}}
					<img src="{{ asset("images/icons/contact-support.svg") }}" alt="contact support icon" height="24" width="24">
					QuickBooks Data Recovery and File Repair Assistance
				</p>

				<div class="card primary square center-align" style="margin-block: 2rem">
					<h5 class="hide-on-small-only" style="color: #ffffff !important; font-size: 1.2rem">
						Prefer to speak with a QuickBooks consultant?
					</h5>
					<h5 class="hide-on-small-only text-h5" style="color: #ffffff !important">
						Call {{ config("app.company.phone") }}
					</h5>
				</div>
			</div>

			<div class="col s12 l5 offset-l1">
				<div class="card">
					<p class="header-font">Need Help With a QuickBooks Error?</p>
					<p>Tell us about the error you're experiencing and a consultant will contact you shortly.</p>

					<form action="{{ url("quickbooks-callback") }}" method="POST">
						@csrf
						<div class="input-field">
							<input type="text" name="name" id="name" class="@error("name") invalid @enderror capitalize" placeholder=" ">
							<label for="name">First & last name</label>
							<span class="helper-text">{{ $errors->first("name") }}</span>
						</div>

						<div class="input-field">
							<input type="email" name="email" id="email" class="@error("email") invalid @enderror lowercase" placeholder=" ">
							<label for="email">Email address</label>
							<span class="helper-text">{{ $errors->first("email") }}</span>
						</div>

						<div class="input-field">
							<input type="text" name="phone" id="phone" class="@error("phone") invalid @enderror" placeholder=" ">
							<label for="phone">Phone number</label>
							<span class="helper-text">{{ $errors->first("phone") }}</span>
						</div>

						<div class="input-field">
							<textarea name="issue" id="issue" class="@error("issue") invalid @enderror" placeholder=" "></textarea>
							<label for="issue">Brief description of the issue</label>
							<span class="helper-text">{{ $errors->first("issue") }}</span>
						</div>

						<button class="btn-large primary full-width">Request a Callback</button>
					</form>
				</div>
				<p class="text-sm center-align">We respect your privacy. Your information is used only to respond to your request.</p>
			</div>
		</div>
	</div>
</header>

<div class="container">
	<div class="divider"></div>
</div>

<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h3 class="text-h4">Common QuickBooks 6000 Series Errors</h3>
			<p>QuickBooks 6000 series errors are commonly associated with company file access, hosting configuration, or network communication issues in QuickBooks Desktop environments.</p>
		</div>

		<div class="common-errors-grid">
			<div class="grid-item" style="grid-area: box-1">
				<div class="card">
					<h4 class="text-base">QuickBooks Error 6000</h4>
					<p>This error may appear when QuickBooks Desktop is unable to access or open a company file. In some cases, it can be related to damaged company files, network interruptions, or hosting configuration problems.</p>
				</div>
			</div>
			<div class="grid-item" style="grid-area: box-2">
				<div class="card">
					<h4 class="text-base">QuickBooks Error 6000 83</h4>
					{{-- <p>This error may occur when QuickBooks cannot access the company file location properly. It can sometimes be related to permission or network configuration issues.</p> --}}
					<p>Company file access issue caused by network or permission conflicts.</p>
				</div>
			</div>
			<div class="grid-item" style="grid-area: box-3">
				<div class="card">
					<h4 class="text-base">QuickBooks Error 6177</h4>
					<p>QuickBooks cannot locate the company file path correctly.</p>
				</div>
			</div>
			<div class="grid-item" style="grid-area: box-4">
				<div class="card">
					<h4 class="text-base">QuickBooks Error 6147</h4>
					<p>This issue may occur while restoring or opening a company file.</p>
				</div>
			</div>
			<div class="grid-item" style="grid-area: box-5">
				<div class="card">
					<h4 class="text-base">QuickBooks Error 6000 301</h4>
					<p>Communication issue between QuickBooks Desktop and the company file environment.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="divider"></div>
</div>

<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h3 class="text-h4">Signs of QuickBooks 6000 Series Errors</h3>
			<p>QuickBooks 6000 series errors can affect company file access, multi-user connectivity, and backup restoration in QuickBooks Desktop.</p>
		</div>

		<div class="grid symptoms-wrapper">
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Company File Won't Open</h4>
					<p>QuickBooks fails to access or load the company file.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Multi-User Mode Problems</h4>
					<p>Users may experience interruptions while accessing shared company files.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Backup Restore Errors</h4>
					<p>Issues may appear while restoring a QuickBooks backup file.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Network Connection Interruptions</h4>
					<p>QuickBooks may lose communication with the company file server.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Hosting Configuration Issues</h4>
					<p>Incorrect hosting settings can prevent proper file access or data corrpution.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">QuickBooks Freezes or Crashes</h4>
					<p>The application may stop responding during company file operations.</p>
				</div>
			</div>
		</div>

		<div style="margin-block: 2rem">
			<a href="tel:{{ config("app.name.phone") }}" class="btn primary">Discuss Your QuickBooks Issue</a>
		</div>
	</div>
</section>

<div class="container">
	<div class="divider"></div>
</div>

<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h3 class="text-h4">Possible Causes of QuickBooks 6000 Series Errors</h3>
			<p>Company file, hosting, network, or permission-related issues can sometimes contribute to QuickBooks 6000 series errors.</p>
		</div>

		<div class="grid possible-causes-wrapper">
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Damaged Company Files</h4>
					<p>Corrupted or incomplete company files may prevent QuickBooks from opening properly.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Hosting Configuration Issues</h4>
					<p>Incorrect hosting settings can interrupt multi-user file access or multiple users.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Firewall Restrictions</h4>
					<p>Firewall or security software may block QuickBooks communication processes.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Network Connectivity Problems</h4>
					<p>Unstable network connections may affect company file accessibility or damage them.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Incorrect File Permissions</h4>
					<p>Restricted folder permissions can prevent QuickBooks from accessing company files.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Damaged Network Files</h4>
					<p>Corrupted .ND or .TLG files may interfere with QuickBooks Desktop operations.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="divider"></div>
</div>

{{-- @php
	$steps = (object) [
		"Review Company File Access",
		"Verify Hosting Settings",
		"Check Network Configuration",
		"Use QuickBooks Tool Hub",
		"Review Firewall Permissions",
		"Test Multi-User Connectivity",
	];
@endphp --}}

{{-- <section>
	<div class="container">
		<div class="heading-wrapper">
			<h3 class="text-h4">Troubleshooting Steps for QuickBooks 6000 Series Errors</h3>
			<p>Basic troubleshooting may help identify company file, hosting, or network-related issues in QuickBooks Desktop environments.</p>
		</div>
		<div class="flexbox flex-wrap">
			<div class="col s12 l5">
				<div class="steps-wrapper">
					@foreach ($steps as $key => $step)
						<div class="card steps-card-left {{ $key == 0 ? 'active' : '' }}">
							<p>
								<span class="header-font">Step {{ $key + 1 }}</span>
								<br>
								<span>{{ $step }}</span>
							</p>
						</div>
					@endforeach
				</div>
			</div>

			<div class="col s12 l6 offset-l1">
				<p>Verify that the company file is stored in an accessible location and is not restricted by folder permissions.</p>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="divider"></div>
</div> --}}

<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h3 class="text-h4">How We Help With QuickBooks Error 6000 Series Issues</h3>
			<p>QuickBooks Error 6000 series issues can arise from company file access problems, hosting configuration conflicts, network communication failures, or multi-user environment settings. Our consultants help identify potential causes, review your setup, and guide you through the troubleshooting process to restore access to your QuickBooks company file.</p>
		</div>

		<div class="gridbox how-we-help-wrapper">
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Company File Diagnostics</h4>
					<p>We review your QuickBooks company file setup, storage location, and accessibility to identify factors that may be contributing to Error 6000 series issues.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Multi-User Environment Review</h4>
					<p>Our consultants evaluate hosting settings, Database Server Manager configuration, and multi-user access settings that commonly affect shared QuickBooks environments.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Network & Connectivity Assessment</h4>
					<p>We help identify network-related issues that may prevent QuickBooks from communicating properly with the company file server or workstation.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Backup & Restore Assistance</h4>
					<p>If the error occurs while restoring a backup or accessing a restored company file, we can help review the restoration process and related configuration settings.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">QuickBooks Tool Hub Guidance</h4>
					<p>We provide guidance on using QuickBooks diagnostic utilities, including QuickBooks Tool Hub and File Doctor, to help identify common company file issues.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="card">
					<h4 class="text-base">Remote Support Available</h4>
					<p>Work with a QuickBooks consultant remotely to discuss your issue, review your environment, and receive assistance with troubleshooting steps.</p>
				</div>
			</div>
		</div>

		<button class="btn-large primary" popovertarget="callback-modal" style="margin-top: 2rem;">Speak With a Consultant</button>
	</div>
</section>

<div class="container">
	<div class="divider"></div>
</div>

<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h3 class="text-h4">What Clients Say</h3>
			<p>Businesses and QuickBooks users rely on our consultants for guidance with company file accessibility, multi-user configuration, and troubleshooting assistance.</p>
		</div>

		<div class="flexbox flex-wrap gap-2">
			<div class="col s12 l4">
				<div class="card" style="height: 100%;">
					<img src="{{ asset("images/clients/emily-150w.jpg") }}" alt="" style="width: 35%; margin-block: auto; padding: 5px; border: 1px solid #e0e0e0" class="circle">
					<p class="header-font">
						Michael R.
						<br>
						Operations Manager
					</p>
					<p>We were unable to access our QuickBooks company file and couldn't determine what was causing the issue. The consultant walked us through the troubleshooting process, helped identify the problem, and got us back to work much faster than expected.</p>
				</div>
			</div>
			<div class="col s12 l4">
				<div class="card" style="height: 100%;">
					<img src="{{ asset("images/clients/john-150w.jpg") }}" alt="" style="width: 35%; margin-block: auto; padding: 5px; border: 1px solid #e0e0e0" class="circle">
					<p class="header-font">
						Jennifer T.
						<br>
						Office Administrator
					</p>
					<p>Our team was experiencing repeated QuickBooks Error 6000 messages in a multi-user environment. The support we received was professional, patient, and focused on finding the root cause of the issue.</p>
				</div>
			</div>
			<div class="col s12 l4">
				<div class="card" style="height: 100%;">
					<img src="{{ asset("images/clients/michael-150w.jpg") }}" alt="" style="width: 35%; margin-block: auto; padding: 5px; border: 1px solid #e0e0e0" class="circle">
					<p class="header-font">
						David S.
						<br>
						Business Owner
					</p>
					<p>We appreciated how clearly everything was explained throughout the troubleshooting process. The consultant helped us review our hosting and network configuration and answered all of our questions.</p>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection