<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view("/", "home", [
	"title" => "QuickBooks Bookkeeping & Accounting for Small Businesses"
]);

Route::prefix("about")->group(function () {
	Route::view("our-firm", "about_ourfirm", [
		"title" => "Our Firm | Professional Bookkeeping & Accounting Services"
	]);
	Route::view("our-team", "about_ourteam", [
		"title" => "Our Team | Certified QuickBooks & Accounting Professionals"
	]);
	Route::view("why-choose-us", "about_whychooseus", [
		"title" => "Why Choose Quickbook Proadvisor | Trusted QuickBooks Experts"
	]);
});

Route::prefix("services")->group(function () {
	Route::view("accounting-service", "services_accounting", [
		"title" => "Professional Accounting & Bookkeeping Services | Quickbook Proadvisors"
	]);
	Route::view("bookkeeping-service", "services_bookkeeping", [
		"title" => "Small Business Bookkeeping Services | Certified QuickBooks Experts"
	]);
	Route::view("quickbooks-setup", "services_qbsetup", [
		"title" => "QuickBooks Setup Service for Small Businesses | Quickbook Proadvisors"
	]);
	Route::view("quickbooks-data-migration", "services_qbdatamigration", [
		"title" => "QuickBooks Data Migration Service | Safe & Accurate Transfer"
	]);
	Route::view("quickbooks-bookkeeping", "services_qbbookkeeping", [
		"title" => "QuickBooks Bookkeeping Services | Monthly Bookkeeping Support"
	]);
	Route::view("quickbooks-consultation", "services_qbconsultation", [
		"title" => "QuickBooks Consultation Services | Expert QuickBooks Help"
	]);
});

Route::prefix("resources")->group(function () {
	Route::view("blog", "resources_blog", [
		"title" => "QuickBooks Error Fixes & Accounting Guides | Quickbook Proadvisors Blog"
	]);
	Route::view("faqs", "resources_faqs", [
		"title" => "Frequently Asked Question | Quickbook Proadvisors"
	]);
	Route::view("customer-support", "resources_customersupport", [
		"title" => "Contact Customer Support Team | Quickbook Proadvisors"
	]);
});

Route::view("contact-us", "contact", [
	"title" => "Contact QuickBooks & Bookkeeping Experts | Quickbook Proadvisors"
]);
Route::view("pricing", "pricing", [
	"title" => "Bookkeeping & QuickBooks Service Pricing | Quickbook Proadvisors"
]);

Route::prefix("policies")->group(function () {
	Route::view("terms-of-service", "policy_tos", [
		"title" => "Terms of Service | Quickbook Proadvisors"
	]);
	Route::view("privacy-policy", "policy_privacy", [
		"title" => "Privacy Policy | Quickbook Proadvisors"
	]);
	Route::view("refund-policy", "policy_refund", [
		"title" => "Refund Policy | Quickbook Proadvisors"
	]);
	Route::view("disclaimer", "policy_disclaimer", [
		"title" => "Disclaimer | Quickbook Proadvisors"
	]);
});

Route::get("buy-quickbooks", function () {
	return "<h1>Coming Soon</h1>";
});