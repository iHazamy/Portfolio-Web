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
                Projects & Systems
            </h1>

            <p class="page-subtitle">
                Production-grade platforms, APIs, and enterprise systems
                built for real-world usage.
            </p>

        </div>

        <!-- PROJECT GRID -->
        <div class="projects-grid">

            <!-- PROJECT -->
            <div class="project-card">

                <div class="project-image glow-blue">
                    Condo Platform
                </div>

                <div class="project-content">

                    <div class="project-tags">
                        <span>Laravel</span>
                        <span>MySQL</span>
                        <span>REST API</span>
                    </div>

                    <h2>
                        Property Management Platform
                    </h2>

                    <p>
                        Enterprise multi-role platform for residents,
                        management teams, and security guards.
                    </p>

                    <ul>
                        <li>Facility booking system</li>
                        <li>Visitor registration</li>
                        <li>Resident payment system</li>
                        <li>Admin & management dashboards</li>
                    </ul>

                </div>

            </div>

            <!-- PROJECT -->
            <div class="project-card">

                <div class="project-image glow-purple">
                    T-Pay
                </div>

                <div class="project-content">

                    <div class="project-tags">
                        <span>Payments</span>
                        <span>API</span>
                        <span>Laravel</span>
                    </div>

                    <h2>
                        Payment Gateway System
                    </h2>

                    <p>
                        Built payment gateway infrastructure and merchant
                        integration system.
                    </p>

                    <ul>
                        <li>Transaction processing</li>
                        <li>Merchant API integration</li>
                        <li>Payment status callbacks</li>
                        <li>Secure payment architecture</li>
                    </ul>

                </div>

            </div>

            <!-- PROJECT -->
            <div class="project-card">

                <div class="project-image glow-green">
                    Freelance
                </div>

                <div class="project-content">

                    <div class="project-tags">
                        <span>Laravel</span>
                        <span>Docker</span>
                        <span>Full Stack</span>
                    </div>

                    <h2>
                        Freelance Development
                    </h2>

                    <p>
                        Various freelance projects including FYP systems,
                        debugging, integrations, and custom applications.
                    </p>

                    <ul>
                        <li>University systems</li>
                        <li>Bug fixing</li>
                        <li>Backend architecture</li>
                        <li>API integrations</li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection