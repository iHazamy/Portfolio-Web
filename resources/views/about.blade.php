@extends('layouts.app')

@section('content')

<section class="section">

    <div class="container">

        <div class="page-header">

            <div class="hero-badge">
                About Me
            </div>

            <h1 class="page-title">
                Practical full-stack work for real systems
            </h1>

            <p class="page-subtitle">
                I build PHP applications, APIs, JavaScript interfaces, and
                full-stack features with a focus on systems that are useful,
                maintainable, and ready to grow.
            </p>

        </div>

        <div class="about-layout">

            <div class="about-main glass-card">

                <h2>
                    Web Developer focused on PHP, JavaScript & Vue
                </h2>

                <p>
                    I’m a web developer focused on building practical, real-world
                    applications using PHP, Laravel, CodeIgniter, JavaScript, and
                    Vue. I enjoy creating clean backend systems, APIs, and
                    full-stack features that solve real problems and are easy to
                    scale.
                </p>

                <p>
                    I’m currently building personal and portfolio projects that
                    simulate real-world systems such as APIs, payment flows, and
                    web applications. My focus is on improving backend development
                    skills, frontend workflows, and understanding how production
                    systems work.
                </p>

                <div class="about-actions">

                    <a href="/projects" class="btn primary">
                        View Projects
                    </a>

                    <a href="/contact" class="btn secondary">
                        Contact Me
                    </a>

                </div>

            </div>

            <aside class="about-side">

                <div class="profile-card glass-card">

                    <span class="profile-initial">
                        H
                    </span>

                    <h2>
                        Hazamy
                    </h2>

                    <p>
                        PHP and full-stack developer building APIs, backend
                        systems, Vue interfaces, and portfolio projects from
                        Malaysia.
                    </p>

                </div>

                <div class="focus-card glass-card">

                    <h3>
                        Current Focus
                    </h3>

                    <ul>
                        <li>Real-world PHP systems</li>
                        <li>Laravel and CodeIgniter workflows</li>
                        <li>JavaScript and Vue interfaces</li>
                        <li>REST API structure</li>
                        <li>Payment flow simulation</li>
                        <li>Production-ready development habits</li>
                    </ul>

                </div>

            </aside>

        </div>

        <div class="skills-section">

            <h2>
                Skills
            </h2>

            <div class="skills-grid">

                <div class="skill-card">PHP</div>
                <div class="skill-card">Laravel</div>
                <div class="skill-card">CodeIgniter</div>
                <div class="skill-card">JavaScript</div>
                <div class="skill-card">Vue</div>
                <div class="skill-card">REST API Development</div>
                <div class="skill-card">MySQL / Database Design</div>
                <div class="skill-card">Backend Architecture</div>
                <div class="skill-card">HTML & CSS</div>
                <div class="skill-card">Git & GitHub</div>
                <div class="skill-card">VS Code Workflow</div>
                <div class="skill-card">Debugging</div>

            </div>

        </div>

    </div>

</section>

@endsection
