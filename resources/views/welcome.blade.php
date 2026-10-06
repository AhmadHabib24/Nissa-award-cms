@extends('layouts.app')

@section('title', 'Nissa Awards 2026 - Apply Now')

@section('content')

<x-hero-banner />

<x-engagement-cards />

<x-event-schedule />

<x-image-gallery :images="$galleryImages" />

<x-core-team :teamMembers="$teamMembers" />

<x-featured-nominees :nominees="$featuredNominees" :categories="$categories" />

<x-hall-of-fame :pastWinners="$pastWinners" />

<x-event-partners :partners="$partners" />

@endsection
