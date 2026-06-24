@extends('layouts.app')

@section('content')

<section class="section">

    <div class="container">

        <!-- PAGE HEADER -->
        <div class="page-header">

            <div class="hero-badge">
                Selected Work
            </div>

            <h1 class="page-title">
                Projects Built Around Real Workflows
            </h1>

            <p class="page-subtitle">
                PHP applications, JavaScript interfaces, backend systems, and API
                concepts designed around practical use cases like payments,
                resident services, and admin operations.
            </p>

        </div>

        <div class="project-overview">

            <div class="overview-card">
                <span>Focus</span>
                <strong>Complete Web Solutions</strong>
                <p>Frontend pages, backend workflows, APIs, dashboards, and database-driven features.</p>
            </div>

            <div class="overview-card">
                <span>Stack</span>
                <strong>PHP + JavaScript</strong>
                <p>Laravel, CodeIgniter, Vue, REST APIs, MySQL, Git, and responsive UI work.</p>
            </div>

            <div class="overview-card">
                <span>Delivery</span>
                <strong>Practical & Maintainable</strong>
                <p>Projects are arranged around clear use cases, readable code, and real user actions.</p>
            </div>

        </div>

        <!-- PROJECT GRID -->
        <div class="projects-grid">

            <!-- PROJECT -->
            <div class="project-card">

                <div class="project-image glow-blue">
                    <span class="project-number">
                        01
                    </span>

                    <div>
                        <p>Property</p>
                        <strong>Management</strong>
                    </div>
                </div>

                <div class="project-content">

                    <div class="project-meta">
                        <span>Portfolio Case Study</span>
                        <span>Backend + Dashboard</span>
                    </div>

                    <div class="project-tags">
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>MySQL</span>
                        <span>REST API</span>
                    </div>

                    <h2>
                        Property Management Platform
                    </h2>

                    <p>
                        A multi-role property management concept for residents,
                        management teams, and security guards. The system is
                        structured around everyday condo workflows and clean
                        backend data flow.
                    </p>

                    <div class="project-feature-grid">

                        <div>
                            <span>Core Modules</span>
                            <p>Facility bookings, visitor registration, resident payments</p>
                        </div>

                        <div>
                            <span>Admin Tools</span>
                            <p>Management dashboards, user roles, operational records</p>
                        </div>

                    </div>

                    <a href="/contact" class="project-link">
                        Discuss similar system
                    </a>

                </div>

            </div>

            <!-- PROJECT -->
            <div class="project-card">

                <div class="project-image glow-purple">
                    <span class="project-number">
                        02
                    </span>

                    <div>
                        <p>Payment</p>
                        <strong>Gateway</strong>
                    </div>
                </div>

                <div class="project-content">

                    <div class="project-meta">
                        <span>API Concept</span>
                        <span>Multi-Currency Flow</span>
                    </div>

                    <div class="project-tags">
                        <span>Payments</span>
                        <span>API</span>
                        <span>Multi-Currency</span>
                        <span>PHP</span>
                        <span>Laravel</span>
                    </div>

                    <h2>
                        Payment Gateway System
                    </h2>

                    <p>
                        A payment gateway concept focused on creating
                        transactions, supporting different currencies, connecting
                        merchant systems, and handling secure status callbacks.
                    </p>

                    <div class="project-feature-grid">

                        <div>
                            <span>Transaction Flow</span>
                            <p>Create payments, store currency and amount, update status</p>
                        </div>

                        <div>
                            <span>Integration</span>
                            <p>Merchant API structure, callbacks, response payloads</p>
                        </div>

                    </div>

                    <a href="/apiShowcase" class="project-link">
                        View API examples
                    </a>

                </div>

            </div>

            <!-- PROJECT -->
            <div class="project-card">

                <div class="project-image glow-green">
                    <span class="project-number">
                        03
                    </span>

                    <div>
                        <p>Full Stack</p>
                        <strong>Support</strong>
                    </div>
                </div>

                <div class="project-content">

                    <div class="project-meta">
                        <span>Freelance Work</span>
                        <span>Debugging + Features</span>
                    </div>

                    <div class="project-tags">
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>CodeIgniter</span>
                        <span>Docker</span>
                        <span>Full Stack</span>
                    </div>

                    <h2>
                        Freelance Development
                    </h2>

                    <p>
                        Practical development work across student systems,
                        debugging tasks, backend features, integrations, and
                        custom web application improvements.
                    </p>

                    <div class="project-feature-grid">

                        <div>
                            <span>Common Tasks</span>
                            <p>Bug fixing, feature updates, database changes, UI cleanup</p>
                        </div>

                        <div>
                            <span>Delivery Focus</span>
                            <p>Readable code, practical fixes, and clear project structure</p>
                        </div>

                    </div>

                    <a href="/contact" class="project-link">
                        Start a project
                    </a>

                </div>

            </div>

            <!-- PROJECT -->
            <div class="project-card">

                <div class="project-image glow-pink">
                    <span class="project-number">
                        04
                    </span>

                    <div>
                        <p>Business</p>
                        <strong>Landing Page</strong>
                    </div>
                </div>

                <div class="project-content">

                    <div class="project-meta">
                        <span>Business Website</span>
                        <span>Frontend + CTA</span>
                    </div>

                    <div class="project-tags">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                        <span>Vue</span>
                        <span>Responsive UI</span>
                    </div>

                    <h2>
                        Business Landing Page
                    </h2>

                    <p>
                        A modern landing page concept for small businesses,
                        designed to present the brand, services, offers, opening
                        details, and customer contact actions clearly.
                    </p>

                    <div class="project-feature-grid">

                        <div>
                            <span>Business Sections</span>
                            <p>Hero banner, service highlights, offers, gallery, location</p>
                        </div>

                        <div>
                            <span>Conversion Focus</span>
                            <p>WhatsApp order button, contact CTA, mobile-friendly layout</p>
                        </div>

                    </div>

                    <a href="/contact" class="project-link">
                        Request a business page
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
