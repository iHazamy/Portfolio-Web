@extends('layouts.app')

@section('content')

<section class="section">

    <div class="container">

        <!-- HEADER -->
        <div class="page-header">

            <div class="hero-badge">
                API Showcase
            </div>

            <h1 class="page-title">
                REST APIs I Build
            </h1>

            <p class="page-subtitle">
                Real-world API designs used in payment systems,
                property platforms, and enterprise applications.
            </p>

        </div>

        <!-- API LIST -->
        <div class="api-grid">

            <!-- API CARD -->
            <div class="api-card">

                <div class="api-header">
                    <span class="method post">POST</span>
                    <code>/api/payment/create</code>
                </div>

                <p class="api-desc">
                    Create a new payment transaction
                </p>

                <!-- TOGGLE -->
                <div class="toggle-row">
                    <button onclick="showSuccess(this)" class="toggle active">Success</button>
                    <button onclick="showFail(this)" class="toggle">Fail</button>
                </div>

                <!-- RESPONSE -->
                <pre class="api-response">
{
  "success": true,
  "transaction_id": "TXN_98231",
  "amount": 100.00,
  "currency": "MYR"
}
                </pre>

            </div>

            <!-- API CARD -->
            <div class="api-card">

                <div class="api-header">
                    <span class="method get">GET</span>
                    <code>/api/booking/list</code>
                </div>

                <p class="api-desc">
                    Get all facility bookings for user
                </p>

                <div class="toggle-row">
                    <button onclick="showSuccess(this)" class="toggle active">Success</button>
                    <button onclick="showFail(this)" class="toggle">Fail</button>
                </div>

                <pre class="api-response">
{
  "success": true,
  "data": [
    {
      "id": 1,
      "facility": "Swimming Pool",
      "date": "2026-01-01"
    }
  ]
}
                </pre>

            </div>

            <!-- API CARD -->
            <div class="api-card">

                <div class="api-header">
                    <span class="method post">POST</span>
                    <code>/api/visitor/register</code>
                </div>

                <p class="api-desc">
                    Register visitor for security system
                </p>

                <div class="toggle-row">
                    <button onclick="showSuccess(this)" class="toggle active">Success</button>
                    <button onclick="showFail(this)" class="toggle">Fail</button>
                </div>

                <pre class="api-response">
{
  "success": true,
  "visitor_id": "VST_10291",
  "status": "approved"
}
                </pre>

            </div>

        </div>

    </div>

</section>

<script>

function showSuccess(btn) {

    const card = btn.closest('.api-card');

    const pre = card.querySelector('.api-response');

    const buttons = card.querySelectorAll('.toggle');

    buttons.forEach(b => b.classList.remove('active'));

    btn.classList.add('active');

    pre.textContent = JSON.stringify({
        success: true,
        message: "Request successful",
        data: "Sample response payload"
    }, null, 2);
}

function showFail(btn) {

    const card = btn.closest('.api-card');

    const pre = card.querySelector('.api-response');

    const buttons = card.querySelectorAll('.toggle');

    buttons.forEach(b => b.classList.remove('active'));

    btn.classList.add('active');

    pre.textContent = JSON.stringify({
        success: false,
        error: "INVALID_REQUEST",
        message: "Something went wrong"
    }, null, 2);
}

</script>

@endsection