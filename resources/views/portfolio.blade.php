<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $p['name'] }} | ECV</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Source+Sans+3:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        :root {
            --bg-1: #0b1020;
            --bg-2: #181a33;
            --sidebar: #0e1427;
            --card: #1a2332;
            --card-2: #1f2a3a;
            --line: rgba(255, 255, 255, .08);
            --text: #f1f5f9;
            --muted: #94a3b8;
            --blue: #3b82f6;
            --purple: #a855f7;
            --bar: #82c8ff;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text);
            background: linear-gradient(135deg, var(--bg-1) 0%, #11172b 50%, var(--bg-2) 100%);
            min-height: 100vh;
        }
        h1, h2, h3 { font-family: 'Source Sans 3', sans-serif; font-weight: 700; }

        /* ---------- Sidebar ---------- */
        .sidebar {
            position: fixed; inset: 0 auto 0 0; width: 192px;
            background: var(--sidebar);
            border-right: 1px solid var(--line);
            padding: 58px 12px 0; text-align: center;
        }
        .sidebar strong { display: block; font-size: 12px; font-weight: 700; }
        .sidebar em { display: block; margin-top: 10px; font-size: 12px; color: #7c8699; }
        .sidebar hr { margin-top: 32px; border: 0; border-top: 1px solid rgba(255, 255, 255, .15); }

        /* ---------- Layout ---------- */
        main { margin-left: 192px; padding: 40px 48px 80px; }
        .wrap { max-width: 1060px; margin: 0 auto; }
        section + section { margin-top: 36px; }
        .divider { border: 0; border-top: 1px solid var(--line); margin: 36px 0; }

        /* ---------- Hero ---------- */
        .hero { text-align: center; }
        .avatar {
            width: 106px; height: 106px; border-radius: 50%; object-fit: cover; background: #c9c9c9;
            box-shadow: 0 0 0 2px rgba(96, 130, 255, .25), 0 0 26px rgba(80, 110, 255, .55);
        }
        .badge {
            display: inline-flex; align-items: center; gap: 8px; margin-top: 16px;
            padding: 8px 18px; border-radius: 999px;
            font-size: 11px; font-weight: 700; color: #c084fc;
            background: rgba(124, 58, 237, .14); border: 1px solid rgba(168, 85, 247, .45);
            box-shadow: 0 0 16px rgba(124, 58, 237, .25);
        }
        .hero h1 {
            margin-top: 24px; font-size: 44px; line-height: 1.2;
            background: linear-gradient(90deg, var(--blue), var(--purple));
            -webkit-background-clip: text; background-clip: text; color: transparent;
        }
        .hero .title { margin-top: 18px; font-size: 15px; font-weight: 600; color: var(--muted); }
        .hero .tagline { margin-top: 10px; font-size: 12.5px; font-style: italic; color: #2f7bff; }
        .btn-cv {
            display: block; width: 342px; max-width: 100%; margin: 38px auto 0;
            padding: 9px 0; font-size: 11px; font-weight: 500; color: var(--text); text-decoration: none;
            background: #111a2e; border: 1px solid #334155; border-radius: 6px;
        }
        .btn-cv:hover { border-color: var(--blue); }

        .stack-title { margin-top: 48px; font-size: 12px; font-weight: 700; text-align: center; }
        .core-grid { display: flex; justify-content: center; flex-wrap: wrap; gap: 16px; margin-top: 22px; }
        .core-card {
            width: 187px; padding: 22px 12px 20px; text-align: center; border-radius: 14px;
            background: var(--card);
            border: 1px solid rgba(var(--c), .55);
            box-shadow: 0 0 22px rgba(var(--c), .12);
        }
        .core-card img { width: 38px; height: 38px; }
        .core-card h3 { margin-top: 20px; font-size: 14px; }
        .core-card p { margin-top: 14px; font-size: 10px; color: var(--muted); }

        /* ---------- Kartu umum ---------- */
        .card {
            background: var(--card); border: 1px solid var(--line); border-radius: 14px; padding: 22px 16px;
        }
        h2.sec { font-size: 18px; display: flex; align-items: center; gap: 8px; }
        .about .card { padding: 26px 16px 22px; }
        .about p { margin-top: 24px; font-size: 11px; line-height: 1.6; }

        .two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
        .two-col h2.sec { margin-bottom: 14px; }
        .contact-item {
            display: flex; align-items: center; gap: 12px; padding: 11px 10px;
            font-size: 10.5px; font-weight: 600; color: var(--text); text-decoration: none;
            background: var(--card-2); border: 1px solid var(--line); border-radius: 8px;
        }
        .contact-item + .contact-item { margin-top: 8px; }
        .contact-item i { width: 14px; text-align: center; font-size: 13px; }
        .contact-item:hover { border-color: rgba(96, 130, 255, .5); }
        .skills-note { font-size: 10px; color: #8493a8; }
        .pills { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 14px; }
        .pill {
            padding: 5px 11px; font-size: 9px; font-weight: 700; color: var(--text);
            background: #12284a; border: 1px solid #1e3a6e; border-radius: 999px;
        }

        /* ---------- Akademik ---------- */
        .ipk-grid { display: grid; grid-template-columns: 1fr 1.9fr; gap: 24px; margin-top: 22px; align-items: start; }
        .metric-label { font-size: 11px; color: #bfe3ff; }
        .metric-value { margin-top: 4px; font-size: 40px; font-weight: 400; font-family: 'Plus Jakarta Sans', sans-serif; }
        .delta {
            display: inline-block; margin-top: 2px; padding: 1px 7px; font-size: 10px; font-weight: 500;
            color: #4ade80; background: rgba(34, 197, 94, .18); border-radius: 999px;
        }
        .ipk-note { margin-top: 24px; font-size: 9.5px; color: #a3917a; }
        .chart-box { height: 215px; }

        .tr-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-top: 28px; }
        .tr-card { padding: 18px 10px 10px; border-top: 1px solid rgba(168, 85, 247, .65); }
        .tr-card h3 { font-size: 14px; }
        .tr-card p { margin: 22px 0 12px; font-size: 10px; color: #7c8699; }
        .tr-card a {
            display: flex; justify-content: center; align-items: center; gap: 6px; padding: 7px 0;
            font-size: 10px; font-weight: 700; color: var(--text); text-decoration: none;
            background: #1d3470; border: 1px solid #2f52b0; border-radius: 4px;
        }
        .tr-card a:hover { background: #24409a; }

        /* ---------- Proyek ---------- */
        .project {
            position: relative; margin-top: 16px; padding: 28px 18px 24px; border-radius: 14px;
            background: linear-gradient(135deg, #1b2c52 0%, #16213d 100%);
            border: 1px solid rgba(96, 130, 255, .22);
        }
        .project .tag { position: absolute; top: 14px; right: 18px; font-size: 8.5px; font-weight: 700; }
        .project h3 { font-size: 22px; }
        .project p { margin-top: 10px; font-size: 11px; line-height: 1.6; color: #cbd5e1; }
        .project .pills { margin-top: 14px; }
        .project a.link { display: inline-block; margin-top: 14px; font-size: 11px; font-weight: 700; color: #7db4ff; text-decoration: none; }

                /* ---------- Proyek Lainnya ---------- */
        .proj-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-top: 26px; align-items: start; }
        .proj-card { padding: 22px 16px 18px; }
        .proj-card h3 { font-size: 16px; }
        .proj-card .tags { display: flex; flex-wrap: wrap; gap: 6px; margin-top: 16px; }
        .proj-card .tag-sm {
            padding: 3px 7px; font-size: 8px; font-weight: 700;
            background: #2a3446; border-radius: 4px;
        }
        .proj-card p { margin-top: 18px; font-size: 10px; line-height: 1.6; }


                /* ---------- Lisensi & Sertifikasi ---------- */
        .cert-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-top: 30px; align-items: start; }
        .cert-card { padding: 24px 16px 16px; transition: border-color .2s, box-shadow .2s; }
        .cert-card:hover, .cert-card:focus-within {
            border-color: rgba(168, 85, 247, .8);
            box-shadow: 0 0 14px rgba(168, 85, 247, .35);
        }
        .cert-card h3 { font-size: 16px; }
        .cert-card .meta { margin-top: 16px; font-size: 10px; font-weight: 700; }
        .cert-card p { margin-top: 10px; font-size: 10px; line-height: 1.5; }
        .cert-card a {
            display: inline-flex; align-items: center; gap: 7px; margin-top: 10px; padding: 7px 11px;
            font-size: 9px; font-weight: 700; color: var(--text); text-decoration: none;
            background: #0f1626; border-radius: 6px;
        }
        .cert-card a:hover { background: #172036; }

            // Pemutar Spotify di bagian atas halaman
    'spotify' => [
        'type'   => 'track',   // track | album | playlist
        'id'     => '3hEfpBHxgieRLz4t3kLNEg',        // isi dengan ID dari link Spotify
        'height' => 80,        // 80 = ringkas, 152 = dengan cover
    ],

        /* ---------- Responsif ---------- */
        @media (max-width: 900px) {
            .sidebar { position: static; width: auto; padding: 18px 12px 14px; border-right: 0; border-bottom: 1px solid var(--line); }
            .sidebar hr { display: none; }
            .sidebar em { margin-top: 4px; }
            main { margin-left: 0; padding: 28px 18px 60px; }
             .two-col, .ipk-grid, .tr-grid, .proj-grid  .cert-grid { grid-template-columns: 1fr; }
            .hero h1 { font-size: 34px; }
        }
        @media (prefers-reduced-motion: reduce) { html { scroll-behavior: auto; } }
        a:focus-visible { outline: 2px solid var(--blue); outline-offset: 2px; }
    </style>
</head>
<body>

<aside class="sidebar">
    <strong>{{ $p['name'] }}</strong>
    <em>{{ $p['role'] }}</em>
    <hr>
</aside>

<main>
<div class="wrap">

        @if (!empty($p['spotify']['id']))
        <div class="spotify-top">
            <iframe
                src="https://open.spotify.com/embed/{{ $p['spotify']['type'] }}/{{ $p['spotify']['id'] }}?utm_source=generator&theme=0"
                height="{{ $p['spotify']['height'] ?? 80 }}"
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                loading="lazy"
                title="Pemutar Spotify"></iframe>
        </div>
    @endif

    {{-- HERO --}}
    <section class="hero">
        <img class="avatar" src="{{ asset($p['photo']) }}" alt="Foto {{ $p['name'] }}">
        <div><span class="badge"><i class="fa-solid fa-rocket"></i> {{ $p['badge'] }}</span></div>
        <h1>{{ $p['name'] }}</h1>
        <p class="title">{{ $p['title'] }}</p>
        <p class="tagline">"{{ $p['tagline'] }}"</p>

        <a class="btn-cv" href="{{ route('cv.download') }}">📄 Download CV PDF</a>

        <p class="stack-title">🔥 CORE TECH STACK</p>
        <div class="core-grid">
            @foreach ($p['core_stack'] as $s)
                <div class="core-card" style="--c: {{ $s['color'] }}">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/icons/{{ $s['icon'] }}" alt="{{ $s['name'] }}">
                    <h3>{{ $s['name'] }}</h3>
                    <p>{{ $s['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <hr class="divider">

    {{-- ABOUT --}}
    <section class="about">
        <div class="card">
            <h2 class="sec">🧑‍💻 About Me</h2>
            <p>{{ $p['about'] }}</p>
        </div>
    </section>

    {{-- KONTAK & SKILL --}}
    <section class="two-col">
        <div>
            <h2 class="sec">📌 Kontak &amp; Sosial Media</h2>
            <div class="card" style="padding: 8px 16px 16px;">
                <div style="height: 8px"></div>
                @foreach ($p['contacts'] as $c)
                    <a class="contact-item" href="{{ $c['url'] }}" target="_blank" rel="noopener">
                        <i class="{{ $c['icon'] }}"></i> {{ $c['text'] }}
                    </a>
                @endforeach
            </div>
        </div>
        <div>
            <h2 class="sec">🛠️ Tech Stack &amp; Keahlian</h2>
            <div class="card">
                <p class="skills-note">Teknologi yang biasa saya gunakan dalam pengembangan software:</p>
                <div class="pills">
                    @foreach ($p['skills'] as $skill)
                        <span class="pill">{{ $skill }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <hr class="divider">

    {{-- AKADEMIK --}}
    <section>
        <h2 class="sec">📈 Perkembangan Akademik (IPK)</h2>

        <div class="ipk-grid">
            <div>
                <div class="metric-label">IPK Terakhir (Semester {{ $latestSemester }})</div>
                <div class="metric-value">{{ number_format($latestIpk, 2) }}</div>
                <span class="delta">↑ {{ $p['ipk']['status'] }}</span>
                <p class="ipk-note">*Catatan: Nilai perkembangan IPK diambil dari berkas config/portfolio.php.</p>
            </div>
            <div class="chart-box"><canvas id="ipkChart" aria-label="Grafik IPK per semester" role="img"></canvas></div>
        </div>

        <div class="tr-grid">
            @foreach ($p['transcripts'] as $sem => $url)
                <div class="card tr-card">
                    <h3>Transkrip Sem {{ $sem }}</h3>
                    <p>NIM disamarkan (Sanitized)</p>
                    <a href="{{ $url }}" target="_blank" rel="noopener">Lihat Transkrip <i class="fa-solid fa-link"></i></a>
                </div>
            @endforeach
        </div>
    </section>

    <hr class="divider">

    {{-- PROYEK --}}
    <section>
        <h2 class="sec">🔥 Proyek Utama</h2>
        @foreach ($p['projects'] as $proj)
            <article class="project">
                <span class="tag">{{ $proj['badge'] }}</span>
                <h3>{{ $proj['title'] }}</h3>
                <p>{{ $proj['desc'] }}</p>
                <div class="pills">
                    @foreach ($proj['tags'] as $t) <span class="pill">{{ $t }}</span> @endforeach
                </div>
                @if ($proj['url'])
                    <a class="link" href="{{ $proj['url'] }}" target="_blank" rel="noopener">Buka proyek <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                @endif
            </article>
        @endforeach
    </section>

</div>
    <hr class="divider">

    {{-- PROYEK LAINNYA --}}
    <section>
        <h2 class="sec">🗒️ Portofolio Proyek Lainnya</h2>
        <div class="proj-grid">
            @foreach ($p['other_projects'] as $op)
                <article class="card proj-card">
                    <h3>{{ $op['title'] }}</h3>
                    <div class="tags">
                        @foreach ($op['tags'] as $t) <span class="tag-sm">{{ $t }}</span> @endforeach
                    </div>
                    <p>{{ $op['desc'] }}</p>
                </article>
            @endforeach
        </div>
            <hr class="divider">

    {{-- LISENSI & SERTIFIKASI --}}
    <section>
        <h2 class="sec">📜 Lisensi &amp; Sertifikasi</h2>
        <div class="cert-grid">
            @foreach ($p['certificates'] as $cert)
                <article class="card cert-card">
                    <h3>{{ $cert['title'] }}</h3>
                    <div class="meta">{{ $cert['issuer'] }} • {{ $cert['year'] }}</div>
                    <p>{{ $cert['desc'] }}</p>
                    <a href="{{ $cert['url'] }}" target="_blank" rel="noopener">Lihat Sertifikat <i class="fa-solid fa-certificate"></i></a>
                </article>
            @endforeach
        </div>
    </section>
    </section>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.min.js"></script>
<script>
    const sem = @json($p['ipk']['semesters']);
    new Chart(document.getElementById('ipkChart'), {
        type: 'bar',
        data: {
            labels: Object.keys(sem),
            datasets: [{ data: Object.values(sem), backgroundColor: '#82c8ff', barPercentage: .97, categoryPercentage: .8 }]
        },
        options: {
            responsive: true, maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: {
                y: { min: 0, max: 4, ticks: { stepSize: .5, color: '#cbd5e1', font: { size: 8 }, callback: v => v.toFixed(1) },
                     grid: { color: 'rgba(255,255,255,.07)' }, border: { display: false } },
                x: { ticks: { color: '#cbd5e1', font: { size: 8 } }, grid: { display: false }, border: { display: false } }
            }
        }
    });
</script>
</body>
</html>
