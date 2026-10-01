@extends('layouts.app')

@section('title', 'Privacy & Refund Policy - Nissa Awards')

@section('content')
<div class="pt-32 pb-20 lg:pt-40 lg:pb-24 bg-[#fdfaf6]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-black text-nissa-dark tracking-tight uppercase mb-8">
            Privacy & Refund Policy
        </h1>
        
        <div class="prose prose-lg text-gray-600">
            <p><strong>Last Updated: October 2026</strong></p>
            
            <h2 class="text-2xl font-bold text-nissa-dark mt-8 mb-4">1. Privacy Policy</h2>
            <p>We respect your privacy and are committed to protecting personally identifiable information you may provide us through the Website. We have adopted this privacy policy to explain what information may be collected on our Website, how we use this information, and under what circumstances we may disclose the information to third parties.</p>
            
            <h3 class="text-xl font-bold text-nissa-dark mt-6 mb-3">Information We Collect</h3>
            <p>Like most website operators, Nissa Awards collects non-personally-identifying information of the sort that web browsers and servers typically make available. We also collect potentially personally-identifying information like Internet Protocol (IP) addresses.</p>
            
            <h2 class="text-2xl font-bold text-nissa-dark mt-12 mb-4">2. Refund Policy</h2>
            <p>We want you to be completely satisfied with your purchase. However, because our products involve event ticketing and sponsorships, our refund policies are strict.</p>
            
            <h3 class="text-xl font-bold text-nissa-dark mt-6 mb-3">Event Tickets</h3>
            <p>All ticket sales are final. We do not offer refunds or exchanges for tickets purchased for the Nissa Awards ceremony, except in the unlikely event that the ceremony is cancelled outright.</p>
            
            <h3 class="text-xl font-bold text-nissa-dark mt-6 mb-3">Sponsorships</h3>
            <p>Sponsorship agreements are legally binding. Please refer to your specific sponsorship contract for terms regarding cancellations or modifications.</p>
            
            <h2 class="text-2xl font-bold text-nissa-dark mt-8 mb-4">3. Contact Us</h2>
            <p>If you have any questions about these policies, please contact us at {{ $settings['email'] ?? 'contact@nissaawards.com' }}.</p>
        </div>
    </div>
</div>
@endsection
