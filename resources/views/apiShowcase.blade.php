@extends('layouts.app')

@section('content')

<section class="section api-coming-soon">

    <div class="container">

        <div class="api-soon-layout">

            <div class="api-soon-copy">

                <div class="hero-badge">
                    API Showcase
                </div>

                <h1 class="page-title">
                    API Showcase Coming Soon
                </h1>

                <p class="page-subtitle">
                    I’m preparing a cleaner showcase for real API examples,
                    including request payloads, response formats, validation
                    states, and payment or system workflow samples.
                </p>

                <div class="api-progress-card">

                    <div>
                        <span>Progress</span>
                        <strong>In Development</strong>
                    </div>

                    <div class="progress-track">
                        <span></span>
                    </div>

                    <p>
                        Building the page structure, API examples, and polished
                        documentation-style previews.
                    </p>

                </div>

                <div class="hero-buttons">

                    <a href="/projects" class="btn primary">
                        View Projects
                    </a>

                    <a href="/contact" class="btn secondary">
                        Ask About APIs
                    </a>

                </div>

            </div>

            <div class="api-preview-card">

                <div class="preview-header">

                    <div>
                        <span class="method post">POST</span>
                        <code>/api/transactions/create</code>
                    </div>

                    <span class="preview-status">
                        Sneak Peek
                    </span>

                </div>

                <p class="api-desc">
                    Example of a multi-currency transaction endpoint preview.
                </p>

                <div class="preview-columns">

                    <div>
                        <span>Request</span>

                        <pre class="api-response">{
  "amount": 120.50,
  "currency": "USD",
  "customer_email": "user@example.com"
}</pre>

                    </div>

                    <div>
                        <span>Response</span>

                        <pre class="api-response">{
  "success": true,
  "transaction_id": "TXN_20481",
  "status": "pending",
  "redirect_url": "https://..."
}</pre>

                    </div>

                </div>

            </div>

        </div>

        <div class="api-roadmap">

            <div class="api-roadmap-item">
                <span>01</span>
                <h2>Payment Flow Examples</h2>
                <p>Create transaction, update status, callback response, and error handling.</p>
            </div>

            <div class="api-roadmap-item">
                <span>02</span>
                <h2>System Workflow APIs</h2>
                <p>Booking, visitor registration, user records, and dashboard data endpoints.</p>
            </div>

            <div class="api-roadmap-item">
                <span>03</span>
                <h2>Documentation Preview</h2>
                <p>Clean request and response samples arranged like developer documentation.</p>
            </div>

        </div>

    </div>

</section>

@endsection
