@extends('layouts.app')

@section('title', 'Shipping Policy - Nissa Awards')

@section('content')
<div class="pt-32 pb-20 lg:pt-40 lg:pb-24 bg-[#fdfaf6]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-black text-nissa-dark tracking-tight uppercase mb-8">
            Shipping Policy
        </h1>
        
        <div class="prose prose-lg text-gray-600">
            <p><strong>Last Updated: October 2026</strong></p>
            
            <h2 class="text-2xl font-bold text-nissa-dark mt-8 mb-4">1. General Information</h2>
            <p>All orders for tickets, merchandise, or sponsorships are subject to product availability. If an item is not in stock at the time you place your order, we will notify you and refund you the total amount of your order, using the original method of payment.</p>
            
            <h2 class="text-2xl font-bold text-nissa-dark mt-8 mb-4">2. Delivery Location</h2>
            <p>Items offered on our website are only available for delivery to addresses in the regions specified during checkout. For digital tickets or passes, delivery is strictly via email or your online dashboard.</p>
            
            <h2 class="text-2xl font-bold text-nissa-dark mt-8 mb-4">3. Delivery Time</h2>
            <p>An estimated delivery time will be provided to you once your order is placed. Delivery times are estimates and commence from the date of shipping, rather than the date of order. Digital products are delivered immediately.</p>
            
            <h2 class="text-2xl font-bold text-nissa-dark mt-8 mb-4">4. Shipping Costs</h2>
            <p>Shipping costs are based on the weight of your order and the delivery method. To find out how much your order will cost, simply add the items you would like to purchase to your cart, and proceed to the checkout page.</p>
            
            <h2 class="text-2xl font-bold text-nissa-dark mt-8 mb-4">5. Questions</h2>
            <p>If you have any questions about the delivery and shipment or your order, please contact us at {{ $settings['email'] ?? 'contact@nissaawards.com' }}.</p>
        </div>
    </div>
</div>
@endsection
