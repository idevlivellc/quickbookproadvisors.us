@extends("templates.website")

@section("content")
<header>
	<div class="container-wide">
		<div class="image-card with-content">
			<img src="{{ asset("images/hero-1440w.webp") }}" alt="people discussing work in office" class="responsive-img">
			<div class="content center-align">
				<h1 class="white-text">Reliable Bookkeeping & Accounting Services for Growing Businesses</h1>
				<p class="white-text">We're a Certified QuickBooks ProAdvisor firm helping small and medium businesses manage their books efficiently with accurate, timely, and transparent accounting support.</p>
			</div>
		</div>
	</div>
</header>

<section class="center-align">
	<div class="container">
		<h3 class="text-h4">About us</h3>
		<p>At Qbp Advisors, we help small business owners and startups manage their finances with precision and confidence. Our team of certified bookkeepers and QuickBooks professionals specializes in setting up, organizing, and maintaining accurate financial records so you can focus on growing your business. With 24/7 support and personalized service, we make bookkeeping simple, efficient, and affordable - ensuring you always stay on top of your numbers.</p>
	</div>
</section>

@php
	$services = (object) [
		(object) [
			"number" => "01.",
			"title" => "Accounting<br>Services",
			"description" => "Comprehensive accounting solutions tailored to small businesses. From financial statements to compliance-ready reports, our team ensures your books are always accurate, organized, and ready for decision-making.",
			"icon" => "",
			"alt" => "",
			"url" => "services/accounting-services"
		],
		(object) [
			"number" => "02.",
			"title" => "Bookkeeping<br>Services",
			"description" => "Get consistent and error-free bookkeeping - including transaction recording, reconciliations, expense categorization, and monthly reporting. Stay organized year-round without lifting a finger.",
			"icon" => "",
			"alt" => "",
			"url" => "services/bookkeeping-services"
		],
		(object) [
			"number" => "03.",
			"title" => "QuickBooks<br>Setup",
			"description" => "Starting with QuickBooks? We handle the complete setup - chart of accounts, industry-specific configuration, tax settings, custom reports, and integrations - so your system works correctly from day one.",
			"icon" => "",
			"alt" => "",
			"url" => "services/quickbooks-setup"
		],
		(object) [
			"number" => "04.",
			"title" => "QuickBooks<br>Data Migration",
			"description" => "Switching from another software? We move your data securely to QuickBooks, ensuring your historical records, charts, vendors, customers, and balances migrate safely and accurately.",
			"icon" => "",
			"alt" => "",
			"url" => "services/quickbooks-data-migration"
		],
		(object) [
			"number" => "05.",
			"title" => "QuickBooks<br>Bookkeeping",
			"description" => "Ongoing bookkeeping inside QuickBooks, managed by experts who understand the platform. Perfect for businesses that want seamless QuickBooks-based bookkeeping without the headaches.",
			"icon" => "",
			"alt" => "",
			"url" => "services/quickbooks-bookkeeping"
		],
		(object) [
			"number" => "06.",
			"title" => "QuickBooks<br>Consultation",
			"description" => "Need help understanding QuickBooks features, reports, or workflows? Get expert consultation on optimizing your setup, improving accuracy, and using QuickBooks efficiently for your daily operations.",
			"icon" => "",
			"alt" => "",
			"url" => "services/quickbooks-consultation"
		]
	];
@endphp

<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h3 class="text-h4">Our services</h3>
		</div>
		<div class="flexbox flex-wrap gap-2">
			@foreach ($services as $service)
				<div class="col l4">
					<a href="{{ url($service->url) }}">
						<div class="card">
							<h3 class="text-h5">{!! $service->title !!}</h3>
							<p class="text-sm">{{ $service->description }}</p>
						</div>
					</a>
				</div>
			@endforeach
		</div>
	</div>
</section>

<!-- Why choose us (start) -->
<section>
	<div class="container">
		<div class="flexbox flex-wrap">
			<div class="col s12 l5">
				<div class="heading-wrapper">
					<h3 class="text-h4">Why Choose QBP Advisor</h3>
				</div>
				<ul class="list">
					<li>
						<span class="header-font">01. Experienced Professionals</span>
						<br>
						<span class="grey-text">Our bookkeeping and QuickBooks experts bring years of experience working with small businesses across multiple industries.</span>
					</li>
					<li>
						<span class="header-font">02. Affordable Pricing</span>
						<br>
						<span class="grey-text">We offer transparent, flexible plans designed to fit every budget - without compromising on quality.</span>
					</li>
					<li>
						<span class="header-font">03. Accuracy & Reliability</span>
						<br>
						<span class="grey-text">From reconciliations to financial reporting, accuracy is our top priority. You can count on us to deliver error-free, timely results.</span>
					</li>
					<li>
						<span class="header-font">04. Round the clock Availability & Support</span>
						<br>
						<span class="grey-text">Your business doesn't stop - and neither do we. Get round-the-clock assistance from our support team whenever you need help.</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- Why choose us (end) -->
<div class="container">
	<div class="divider"></div>
</div>
<!-- Testimonial (start) -->
@php
	$testimonials = (object) [
		(object) [
			"name" => "John M., Startup Owner",
			"image" => "john-150w.jpg",
			"alt" => "",
			"content" => "Qbp Advisors helped us organize our books and set up QuickBooks within a week. Their team is responsive, professional, and really understands small business challenges."
		],
		(object) [
			"name" => "Emily R., E-Commerce Founder",
			"image" => "emily-150w.jpg",
			"alt" => "",
			"content" => "Their bookkeeping service is a lifesaver. I now have clear financial reports every month and peace of mind knowing my numbers are accurate."
		],
		(object) [
			"name" => "Michael D., Consultant",
			"image" => "michael-150w.jpg",
			"alt" => "",
			"content" => "Excellent support and attention to detail. Qbp Advisors delivers top-notch service at a price that fits my budget."
		],
	];
@endphp
<section class="center-align">
	<div class="container">
		<div class="heading-wrapper">
			<h3 class="text-h4">Testimonials</h3>
			<p>Have a look at what our customers have to say about us.</p>
		</div>

		<div class="testimonial-wrapper flex-scroll">
			@foreach ($testimonials as $testimonial)
				<div class="col s12 l4">
					<div class="card">
						<img src="{{ asset("images/clients/$testimonial->image") }}" alt="" class="circle">
						<p class="header-font">{{ $testimonial->name }}</p>
						<p class="text-sm">{{ $testimonial->content }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- Testimonial (end) -->
<section class="primary center-align">
	<div class="container">
		<h2 class="text-h5">Talk to a QuickBooks Expert Today</h2>
		<h5 class="text-h1">Call us at {{ config("app.company.phone") }}</h5>
		<p>Let's simplify your bookkeeping and get your finances on track.</p>
	</div>
</section>

<!-- Who do we serve (start) -->
@php
	$industries = [
		(object) [
			"title" => "E-Commerce Businesses",
			"description" => "Track sales, fees, refunds, and inventory across platforms like Shopify, WooCommerce, Etsy, and Amazon. We help you maintain clean books, reconcile payment gateways, and understand profitability with clarity."
		],
		(object) [
			"title" => "Consultants & Professional Services",
			"description" => "From independent consultants to agencies, we manage expense tracking, invoicing, cash flow, and project-based reporting. Know exactly where your money is coming from — and where it's going."
		],
		(object) [
			"title" => "Retail Stores",
			"description" => "Whether brick-and-mortar or hybrid retail, we organize sales, vendor payments, inventory purchases, and daily transactions. Get accurate books without the back-office burden."
		],
		(object) [
			"title" => "Real Estate & Property Management",
			"description" => "Keep track of rental income, property expenses, maintenance costs, and owner statements. Our team ensures your financials are organized, compliant, and easy to review."
		],
		(object) [
			"title" => "Construction & Trades",
			"description" => "For contractors, builders, electricians, and other trade professionals, we handle job costing, project expenses, subcontractor payments, and estimating support."
		],
		(object) [
			"title" => "Healthcare & Wellness Providers",
			"description" => "From small clinics to wellness studios, we manage recurring payments, insurance reimbursements, payroll categorization, and operational expenses with accuracy and care."
		],
		(object) [
			"title" => "Startups & Tech Companies",
			"description" => "We help early-stage companies maintain investor-ready books, monitor burn rate, and prepare financial reports suitable for fundraising, grants, and compliance.
"
		],
		(object) [
			"title" => "Hospitality & Food Services",
			"description" => "Restaurants, cafés, food trucks, and catering businesses rely on accurate expense tracking, supplier management, and daily sales reconciliation — all of which we handle seamlessly."
		],
		(object) [
			"title" => "Freelancers & Solo Business Owners",
			"description" => "For independent professionals, we simplify bookkeeping by managing income tracking, expense categorization, quarterly reviews, and annual financial summaries."
		]
	];
@endphp
<section>
	<div class="container">
		<div class="flexbox gap-2">
			<div class="col s12 l6">
				<div class="heading-wrapper">
					<h3 class="text-h4">Who Do We Serve</h3>
					<p>At QBP Advisor, we work with a wide range of industries and business types. Every industry has unique accounting needs, reporting styles, and financial workflows - and our team understands how to adapt bookkeeping and QuickBooks systems to fit those requirements.</p>
					<p>Whether you're running a small local business or scaling a fast-growing startup, we provide personalized, accurate, and reliable bookkeeping and QuickBooks support tailored to your operations.</p>
				</div>

				<ul class="list">
					@foreach ($industries as $key => $industry)
						<li>
							<span class="header-font">0{{ $key + 1 }}. {{ $industry->title }}</span>
							<br>
							<span class="grey-text">{{ $industry->description }}</span>
						</li>
					@endforeach
				</ul>
			</div>

			<div class="col s12 l5 offset-l1">
				@component("components.contactcard") @endcomponent
			</div>
		</div>
	</div>
</section>
<!-- Who do we serve (end) -->
<div class="container"><div class="divider"></div></div>
<!-- Blog (start) -->
@php
	$posts = [
		(object) [
			"topic" => "QuickBooks Error 6010: How to Fix Network Connection Problems",
			"slug" => "#!",
			"excerpt" => "QuickBooks Error 6144 occurs when QuickBooks Desktop cannot open the company file due to network configuration issues, corrupted files, or permission problems. Learn the causes, symptoms, and step-by-step methods to fix this error.",
			"author" => "Kevin P.",
			"date" => "3 days ago"
		],
		(object) [
			"topic" => "QuickBooks Error 6147: Cannot Open Company File (Complete Troubleshooting Guide)",
			"slug" => "#!",
			"excerpt" => "QuickBooks Error 6144 occurs when QuickBooks Desktop cannot open the company file due to network configuration issues, corrupted files, or permission problems. Learn the causes, symptoms, and step-by-step methods to fix this error.",
			"author" => "Christy P.",
			"date" => "5 days ago"
		],
		(object) [
			"topic" => "QuickBooks Error 6010: How to Fix Network Connection Problems",
			"slug" => "#!",
			"excerpt" => "QuickBooks Error 6144 occurs when QuickBooks Desktop cannot open the company file due to network configuration issues, corrupted files, or permission problems. Learn the causes, symptoms, and step-by-step methods to fix this error.",
			"author" => "Kevin P.",
			"date" => "1 week ago"
		],
	];
@endphp
<section>
	<div class="container">
		<div class="heading-wrapper center-align">
			<h3 class="text-h4">{{ config("app.company.name") }} Blog</h3>
			<p>Stay up to date with latest industry trends for accounting, bookkeeping & QuickBooks software.</p>
		</div>
		<div class="flexbox flex-wrap gap-2">
			@foreach ($posts as $post)
				<div class="col s12 m6 l4">
					<a href="{{ url("$post->slug") }}" class="blog-card">
						<div class="card">
							<img src="{{ asset("images/blog/thumbnail.webp") }}" alt="placeholder image for blogs" class="responsive-img">
							<div class="flexbox justify-between">
								<p class="text-xs">By {{ $post->author }}</p>
								<p class="text-xs">{{ $post->date }}</p>
							</div>
							<p class="header-font truncate-2">{{ $post->topic }}</p>
							<p class="text-sm truncate-3">{{ $post->excerpt }}</p>
						</div>
					</a>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- Blog (end) -->
@endsection