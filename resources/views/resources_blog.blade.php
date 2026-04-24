@extends("templates.website")

@section("content")
<header class="center-align">
	<div class="container">
		<h1>{{ config("app.company.name") }} Blog</h1>
		<p>Stay up to date with latest industry trends for accounting, bookkeeping & QuickBooks software.</p>

		<nav class="navigation-breadcrumb">
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="{{ url("") }}" class="breadcrumb">Home</a>
					<a href="{{ url("resources") }}" class="breadcrumb">Resources</a>
					<a href="{{ url("resources/blog") }}" class="breadcrumb">Blog</a>
				</div>
			</div>
		</nav>
	</div>
</header>

<div class="container">
	<div class="divider"></div>
</div>

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
@endsection