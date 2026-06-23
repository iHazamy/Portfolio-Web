@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero">

    <div class="container hero-content">

        <div class="hero-badge">
            Full Stack Developer • Laravel • APIs • Payments
        </div>

        <h1>
            Building scalable
            <span>enterprise platforms</span>
            & payment systems
        </h1>

        <p class="hero-text">
            Experienced in building production-grade backend systems,
            fintech integrations, and multi-user web applications.
        </p>

        <div class="hero-buttons">

            <a href="/projects" class="btn primary">
                View Projects
            </a>

            <a href="/contact" class="btn secondary">
                Contact Me
            </a>

        </div>

    </div>

    <!-- FLOATING CARDS -->
    <div class="floating-card card-1">
        Laravel
    </div>

    <div class="floating-card card-2">
        Payment Gateway
    </div>

    <div class="floating-card card-3">
        REST APIs
    </div>

</section>

@endsection