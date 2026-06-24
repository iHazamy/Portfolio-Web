@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero">

    <div class="container hero-content">

        <div class="hero-layout">

            <div class="hero-copy">

                <div class="hero-badge">
                    Full Stack Developer • PHP • JavaScript • Vue
                </div>

                <h1>
                    Building modern
                    <span>web solutions</span>
                    for real business needs
                </h1>

                <p class="hero-text">
                    I design and develop websites, web applications, dashboards,
                    APIs, and responsive interfaces that help ideas become useful
                    digital products.
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

            <div class="hero-panel">

                <div class="panel-topline">
                    Web development across frontend and backend
                </div>

                <div class="terminal-card">
                    <div class="terminal-bar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <pre>Route::post('/payment/create', ...);
DB::table('bookings')->where(...);
return response()->json($data);</pre>
                </div>

                <div class="hero-metrics">

                    <div>
                        <strong>Web Apps</strong>
                        <span>Frontend & backend</span>
                    </div>

                    <div>
                        <strong>APIs</strong>
                        <span>System integration</span>
                    </div>

                    <div>
                        <strong>MySQL</strong>
                        <span>Data design</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- FLOATING CARDS -->
    <div class="floating-card card-1">
        Web Apps
    </div>

    <div class="floating-card card-2">
        UI & Dashboards
    </div>

    <div class="floating-card card-3">
        REST APIs
    </div>

</section>

<section class="home-section">

    <div class="container">

        <div class="section-heading">

            <span>
                What I Build
            </span>

            <h2>
                Practical development for websites, apps, and systems
            </h2>

        </div>

        <div class="service-grid">

            <div class="service-card">
                <span class="service-icon blue">API</span>
                <h3>Web Applications</h3>
                <p>Custom features, dashboards, forms, user flows, and database-driven application logic.</p>
            </div>

            <div class="service-card">
                <span class="service-icon green">DB</span>
                <h3>Backend & APIs</h3>
                <p>Structured backend logic, REST APIs, integrations, payment flows, and database design.</p>
            </div>

            <div class="service-card">
                <span class="service-icon amber">UI</span>
                <h3>Frontend Interfaces</h3>
                <p>Responsive pages, interactive interfaces, business landing pages, and clean user experiences.</p>
            </div>

        </div>

    </div>

</section>

<section class="home-section alt-band">

    <div class="container featured-layout">

        <div class="featured-copy">

            <span>
                Featured Direction
            </span>

            <h2>
                Projects built to show complete web development ability
            </h2>

            <p>
                My portfolio focuses on projects that show practical thinking:
                payment flows, resident systems, API payloads, admin tools,
                frontend interfaces, and business pages that guide users toward
                action.
            </p>

            <a href="/apiShowcase" class="project-link">
                Explore API showcase
            </a>

        </div>

        <div class="featured-list">

            <div>
                <strong>Property Platform</strong>
                <span>Bookings, visitors, payments, dashboard workflows</span>
            </div>

            <div>
                <strong>Payment Gateway Concept</strong>
                <span>Transaction creation, callbacks, success and failure states</span>
            </div>

            <div>
                <strong>Business Landing Page</strong>
                <span>Services, offers, gallery, WhatsApp and contact CTA</span>
            </div>

        </div>

    </div>

</section>

<section class="home-section">

    <div class="container cta-strip">

        <div>
            <span>
                Need a PHP or full-stack developer?
            </span>

            <h2>
                Let’s turn your idea into a working web system.
            </h2>
        </div>

        <a href="/contact" class="btn primary">
            Start Conversation
        </a>

    </div>

</section>

@endsection
