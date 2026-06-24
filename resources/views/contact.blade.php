@extends('layouts.app')

@section('content')

<section class="section">

    <div class="container">

        <div class="page-header">

            <div class="hero-badge">
                Contact
            </div>

            <h1 class="page-title">
                Let’s build something practical
            </h1>

            <p class="page-subtitle">
                Have a PHP project, API, JavaScript feature, Vue interface, or
                backend problem to solve? Send a message and I’ll get back to you.
            </p>

        </div>

        <div class="contact-layout">

            <div class="contact-card contact-panel">

                <h2>
                    Send a Message
                </h2>

                <form class="contact-form" action="mailto:hazamy.damia@gmail.com" method="post" enctype="text/plain">

                    <label for="name">
                        Name
                    </label>
                    <input id="name" type="text" name="name" placeholder="Your name" required>

                    <label for="email">
                        Email
                    </label>
                    <input id="email" type="email" name="email" placeholder="your@email.com" required>

                    <label for="message">
                        Message
                    </label>
                    <textarea id="message" name="message" rows="6" placeholder="Tell me about your project or question" required></textarea>

                    <button type="submit" class="btn primary">
                        Send Message
                    </button>

                </form>

            </div>

            <aside class="contact-stack">

                <div class="contact-card detail-card">

                    <span class="detail-label">
                        Email
                    </span>

                    <a href="mailto:hazamy.damia@gmail.com">
                        hazamy.damia@gmail.com
                    </a>

                </div>

                <div class="contact-card detail-card">

                    <span class="detail-label">
                        WhatsApp
                    </span>

                    <a href="https://wa.me/6013628426" target="_blank" rel="noopener">
                        013628426
                    </a>

                </div>

                <div class="contact-card detail-card">

                    <span class="detail-label">
                        GitHub
                    </span>

                    <a href="https://github.com/iHazamy" target="_blank" rel="noopener">
                        github.com/iHazamy
                    </a>

                </div>

                <div class="contact-card detail-card">

                    <span class="detail-label">
                        LinkedIn
                    </span>

                    <a href="https://www.linkedin.com/in/muhammad-izzat-damia-hazamy-bin-zamri-b0840a30a/" target="_blank" rel="noopener">
                        Muhammad Izzat Damia Hazamy
                    </a>

                </div>

                <div class="contact-card detail-card">

                    <span class="detail-label">
                        Location
                    </span>

                    <p>
                        Malaysia
                    </p>

                </div>

                <a href="mailto:hazamy.damia@gmail.com" class="btn secondary contact-email-button">
                    Email Me Directly
                </a>

            </aside>

        </div>

    </div>

</section>

@endsection
