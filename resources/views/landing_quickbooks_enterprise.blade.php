@extends("templates.landing")

@section("content")

@component("components.callback") @endcomponent

<header>
	<div class="container">
		<div class="flexbox">
			<div class="col s12 l6">
				<h1>QuickBooks Enterprise Issue Resolution for Businesses</h1>
				<p>We help businesses diagnose and resolve QuickBooks Enterprise problems through structured troubleshooting and best-practice fixes.</p>

				<p class="flexbox items-center" style="gap: 1rem; margin-top: 2rem;">
					<img src="{{ asset("images/icons/hard-disk.svg") }}" alt="hard disk icon" height="24" width="24">
					Experience with large QuickBooks Enterprise files
				</p>
				<p class="flexbox items-center" style="gap: 1rem;">
					<img src="{{ asset("images/icons/supervisor-account.svg") }}" alt="supoervisor account icon" height="24" width="24">
					Multi-user & server-based environments
				</p>
				<p class="flexbox items-center" style="gap: 1rem;">
					<img src="{{ asset("images/icons/sync-saved-locally.svg") }}" alt="local sync icon" height="24" width="24">
					Data-safe troubleshooting approach
				</p>
				<p class="flexbox items-center" style="gap: 1rem;">
					{{-- <i class="material-symbols-rounded left hide-on-small-only" style="color: #1f7a6b">contact_support</i> --}}
					<img src="{{ asset("images/icons/contact-support.svg") }}" alt="contact support icon" height="24" width="24">
					Third-party QuickBooks consultants
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
					<p class="header-font">Discuss Your QuickBooks Enterprise Issue</p>

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

<section>
	<div class="container">
		<div class="flexbox">
			<div class="col s12 l6">
				<h2 class="text-h4">Common QuickBooks Enterprise Issues We Help Resolve</h2>
				<br>
				<p class="header-font">01. Company file won't open or freezes</p>
				<p>When a QuickBooks Enterprise company file fails to open or becomes unresponsive, it often points to file-level or environment-related issues rather than a single error. This can occur after updates, system interruptions, or as the file grows over time.</p>
				<p>Common situations include:</p>
				<ul>
					<li>
						&bull; 
						<span>Freezing during the loading screen</span>
					</li>
					<li>
						&bull; 
						<span>File opening very slowly or not at all</span>
					</li>
					<li>
						&bull; 
						<span>QuickBooks closing when accessing the file</span>
					</li>
				</ul>
				<p>Our team helps review the company file structure, identify underlying causes, and apply safe troubleshooting steps to restore stable access.</p>

				<div class="divider" style="margin-block: 2rem"></div>

				<p class="header-font">02. Multi-User Mode Issues (H-Series Errors)</p>
				<p>QuickBooks Enterprise is frequently used in multi-user environments, and configuration issues can prevent users from accessing the company file simultaneously. Errors such as H202 or H505 typically indicate connectivity or hosting problems.</p>
				<p>Common symptoms include:</p>
				<ul>
					<li>
						&bull; 
						<span>Unable to switch to multi-user mode</span>
					</li>
					<li>
						&bull; 
						<span>Other users losing connection to the file</span>
					</li>
					<li>
						&bull; 
						<span>Access issues when working across systems</span>
					</li>
				</ul>
				<p>We assist with reviewing hosting setup, network configuration, and QuickBooks settings to help stabilize multi-user access.</p>

				<div class="divider" style="margin-block: 2rem"></div>

				<p class="header-font">03. Performance Slowness With Large Files</p>
				<p>As transaction volume increases, QuickBooks Enterprise files can become slower if they are not properly optimized. This can impact daily workflows and reporting efficiency.</p>
				<p>Businesses often notice:</p>
				<ul>
					<li>
						&bull;
						<span>Delays when opening reports</span>
					</li>
					<li>
						&bull;
						<span>Slow transaction entry</span>
					</li>
					<li>
						&bull;
						<span>Freezing during routine tasks</span>
					</li>
				</ul>
				<p>We help evaluate file size, list management, and system setup to improve overall performance and usability.</p>

				<div class="divider" style="margin-block: 2rem"></div>

				<p class="header-font">04. Frequent Crashes or Unexpected Shutdowns</p>
				<p>Unexpected crashes can interrupt important accounting tasks and may indicate installation, system, or compatibility issues.</p>
				<p>This may appear as:</p>
				<ul>
					<li>
						&bull;
						<span>QuickBooks closing without warning</span>
					</li>
					<li>
						&bull;
						<span>Freezing during payroll or reporting</span>
					</li>
					<li>
						&bull;
						<span>Repeated crashes during specific actions</span>
					</li>
				</ul>
				<p>Our approach focuses on identifying contributing factors and applying structured fixes to improve stability.</p>

				<div class="divider" style="margin-block: 2rem"></div>

				<p class="header-font">05. Error Codes (6000 Series, 3371, Update Errors)</p>
				<p>QuickBooks Enterprise error codes often relate to company file access, licensing components, or update processes. While the message may look specific, the root cause can vary.</p>
				<p>Common examples include:</p>
				<ul>
					<li>
						&bull;
						<span>6000-series company file errors</span>
					</li>
					<li>
						&bull;
						<span>Error 3371 related to licensing components</span>
					</li>
					<li>
						&bull;
						<span>Update or maintenance release failures</span>
					</li>
				</ul>
				<p>We assist in diagnosing the cause behind these errors and applying safe, non-destructive resolution steps.</p>

				<div class="divider" style="margin-block: 2rem"></div>

				<p class="header-font">06. Data Balance Discrepancies & Report Mismatches</p>
				<p>When reports don't align or balances appear incorrect, it can create confusion and affect financial decision-making.</p>
				<p>Businesses may notice:</p>
				<ul>
					<li>
						&bull;
						<span>Balance sheet and profit & loss mismatches</span>
					</li>
					<li>
						&bull;
						<span>Reports not reflecting recent entries</span>
					</li>
					<li>
						&bull;
						<span>Unexpected totals or missing data</span>
					</li>
				</ul>
				<p>We help review data integrity, identify inconsistencies, and support corrective actions to restore reporting accuracy.</p>

				<div class="divider" style="margin-block: 2rem"></div>

				<p class="header-font">07. Update & Payroll Issues</p>
				<p>Keeping QuickBooks Enterprise up to date is important, but update failures can disrupt normal operations—especially when payroll is involved.</p>
				<p>Common challenges include:</p>
				<ul>
					<li>
						&bull;
						<span>Maintenance releases not installing properly</span>
					</li>
					<li>
						&bull;
						<span>Payroll updates failing or looping</span>
					</li>
					<li>
						&bull;
						<span>Version mismatches in multi-user environments</span>
					</li>
				</ul>
				<p>We assist with troubleshooting update issues and helping ensure system consistency.</p>

				<div class="divider" style="margin-block: 2rem"></div>

				<p class="header-font">08. User Access & Permission Problems</p>
				<p>QuickBooks Enterprise relies on role-based access, and incorrect configurations can limit user functionality.</p>
				<p>This often includes:</p>
				<ul>
					<li>
						&bull;
						<span>Users unable to access certain features</span>
					</li>
					<li>
						&bull;
						<span>Permission settings not applying correctly</span>
					</li>
					<li>
						&bull;
						<span>Login or role-related errors</span>
					</li>
				</ul>
				<p>We help review user roles and permissions to ensure appropriate access while maintaining internal controls.</p>

				<div class="divider" style="margin-block: 2rem"></div>

				<p class="header-font">09. Third-Party Integration Conflicts</p>
				<p>Many businesses use QuickBooks Enterprise alongside other tools for inventory, CRM, or reporting. Integration conflicts can occur when settings or versions are misaligned.</p>
				<p>Signs of integration issues include:</p>
				<ul>
					<li>
						&bull;
						<span>Sync failures or incomplete data transfers</span>
					</li>
					<li>
						&bull;
						<span>Errors after connecting third-party tools</span>
					</li>
					<li>
						&bull;
						<span>Unexpected behavior after updates</span>
					</li>
				</ul>
				<p>We assist in identifying compatibility issues and supporting smoother integration workflows.</p>
			</div>

			<div class="col s12 l5 offset-l1 hide-on-small-only" style="height: fit-content; position: sticky; top: 96px;">
				<div class="card primary solid square center-align">
					<p class="white-text text-sm">If you're experiencing a QuickBooks Enterprise issue and need assistance, our team can help review the situation and guide you on the next steps.</p>
					<h5 class="white-text text-h5">{{ config("app.company.phone") }}</h5>
					<p class="white-text">Talk to a QuickBooks Enterprise Specialist</p>
					<p class="text-xs white-text">Independent third-party QuickBooks service. Not affiliated with Intuit.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="divider"></div>
</div>

<!-- How do we work on the issue (start) -->
<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12" style="margin-bottom: 5rem">
				<h2 class="text-h4">How Our QuickBooks Enterprise Assistance Works</h2>
				<p>We follow a structured, business-focused approach to help identify and resolve QuickBooks Enterprise issues. Our process is designed to be clear, non-disruptive, and aligned with best practices—so you know what to expect before reaching out.</p>
			</div>

			<div class="col s12 m8 l6 offset-m2 offset-l3 step-wrapper">
				<div class="card steps-card" style="max-width: 500px">
					<p class="header-font">01. Issue Review</p>
					<p>We begin by understanding the issue you're experiencing and how your QuickBooks Enterprise environment is set up. This includes reviewing the type of problem, when it occurs, and how your system is currently being used.</p>
				</div>

				<div class="card steps-card" style="max-width: 500px">
					<p class="header-font">02. Diagnosis</p>
					<p>Once the issue is reviewed, we evaluate possible causes based on your setup. This may involve identifying whether the problem is related to the company file, configuration settings, network environment, system compatibility, or software components.</p>
				</div>

				<div class="card steps-card" style="max-width: 500px">
					<p class="header-font">03. Resolution</p>
					<p>After identifying the cause, we apply safe troubleshooting steps and best-practice solutions tailored to your specific QuickBooks Enterprise environment.</p>
				</div>

				<div class="card steps-card" style="max-width: 500px">
					<p class="header-font">04. Stability Check</p>
					<p>Once the issue is addressed, we help verify that QuickBooks Enterprise is functioning as expected. Where applicable, we also suggest preventive steps to reduce the likelihood of similar issues occurring again.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- How do we work on the issue (end) -->

<div class="container">
	<div class="divider"></div>
</div>

<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h4 class="text-h4">Why Businesses Choose Us</h4>
		</div>
		<div class="flexbox why-choose-us-wrapper">
			<div class="card">
				<h2 class="header-font">01.</h2>
				<p style="min-height: 68px">Experience with complex Enterprise setups</p>
			</div>
			<div class="card">
				<h2 class="header-font">02.</h2>
				<p style="min-height: 68px">Focus on data-safe troubleshooting</p>
			</div>
			<div class="card">
				<h2 class="header-font">03.</h2>
				<p style="min-height: 68px">Clear communication, no pressure</p>
			</div>
			<div class="card">
				<h2 class="header-font">04.</h2>
				<p style="min-height: 68px">Independent third-party QuickBooks consultants</p>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="divider"></div>
</div>

<!-- Who Do We Serve (start) -->
<section>
	<div class="container">
		<div class="flexbox">
			<div class="col s12 m6 l6">
				<div class="heading-wrapper">
					<h2 class="text-h4">Who Do We Serve</h2>
					<p>Our services are designed for businesses using QuickBooks Enterprise that require structured, methodical assistance rather than general how-to guidance. This helps ensure our support is aligned with more complex accounting environments.</p>
				</div>

				<ul>
					<li>
						01. Businesses currently using QuickBooks Enterprise
					</li>
					<br>
					<li>
						02. Multi-user or server-based QuickBooks setups
					</li>
					<br>
					<li>
						03. Companies managing large volumes of transactions or data
					</li>
					<br>
					<li>
						04. Businesses experiencing recurring or complex issues that require detailed troubleshooting
					</li>
				</ul>

				<p>These environments often benefit from a systematic review and resolution approach rather than basic instructions.</p>

				<br>

				<p class="header-font">When This Service May Not Be the Right Fit</p>
				<p>This service may not be ideal for basic QuickBooks Online questions or simple how-to inquiries that can be resolved through standard documentation.</p>
			</div>
		</div>

		<div class="card primary solid square center-align" style="margin-top: 5rem;">
			<h5 class="text-h5" style="color: #ffffff !important;">Need Help With a QuickBooks Enterprise Issue?</h5>
			<p class="white-text">If you're unable to resolve a QuickBooks Enterprise issue on your own, our team can help review the problem and suggest the right next steps.</p>
			<p class="header-font" style="font-size: 22px; color: white !important">{{ env("PHONE") }}</p>
		</div>
	</div>
</section>
<!-- Who Do We Serve (end) -->

<div class="container">
	<div class="divider"></div>
</div>

<!-- FAQs (start) -->
<section>
	<div class="container">
		<div class="heading-wrapper">
			<h4 class="text-h4">Frequently Asked Questions</h4>
		</div>
		<p class="header-font">Are you Intuit or QuickBooks official support?</p>
		<p>No. We are an independent third-party service provider that assists businesses using QuickBooks software. We are not affiliated with, endorsed by, or sponsored by Intuit Inc.</p>
		<br>
		
		<p class="header-font">Do you work with existing QuickBooks Enterprise company files?</p>
		<p>Yes. We assist businesses with reviewing, diagnosing, and troubleshooting issues within existing QuickBooks Enterprise setups, including company file-related concerns.</p>
		<br>
		
		<p class="header-font">Can you help with multi-user issues in QuickBooks Enterprise?</p>
		<p>Yes. We help identify and address common multi-user configuration issues, including access problems, hosting setup concerns, and connectivity-related errors.</p>
		<br>
		
		<p class="header-font">What types of QuickBooks Enterprise issues do you typically handle?</p>
		<p>We commonly assist with company file access problems, performance slowness, error codes, update-related issues, reporting discrepancies, and user permission concerns in QuickBooks Enterprise environments.</p>
		<br>
		
		<p class="header-font">Do you provide assistance for QuickBooks Online?</p>
		<p>Our primary focus for this service is QuickBooks Enterprise. For basic QuickBooks Online questions or simple how-to guidance, this service may not be the best fit.</p>
		<br>
		
		<p class="header-font">How does the initial consultation work?</p>
		<p>We begin by discussing the issue you're experiencing and reviewing your QuickBooks Enterprise setup. This helps determine the nature of the problem and the most appropriate next steps.</p>
		<br>
		
		<p class="header-font">Is my data safe during troubleshooting?</p>
		<p>We follow a structured and cautious approach when assisting with QuickBooks Enterprise issues. The focus is on diagnostics and best-practice troubleshooting to avoid unnecessary changes to your data.</p>
		<br>
	</div>
</section>
<!-- FAQs (end) -->
@endsection

@if (session("success"))
	@section("script")
	<script>
		function showToast(message, type = "info", duration = 3000) {
			const container = document.getElementById("toast-container");
			const toast = document.createElement("div");
			toast.classList.add("toast", `toast-${type}`);
			toast.innerText = message;
			container.appendChild(toast);
			
			// Trigger animation
			setTimeout(() => {
				toast.classList.add("show");
			}, 10);

			// Auto remove
			setTimeout(() => {
				toast.classList.remove("show");
				toast.classList.add("hide");
				setTimeout(() => {
					toast.remove();
				}, 400);
			}, duration);
		}
		document.addEventListener("DOMContentLoaded", function () {
			showToast("Your query has been submitted! You will get a reply from the support team shortly.", "success");
		});
	</script>
	@endsection
@endif