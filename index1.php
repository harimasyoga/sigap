<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAP - Layanan Pengadilan Negeri Muara Teweh</title>
    <meta name="description" content="Sistem Informasi Alur Pelayanan Pengadilan Negeri Muara Teweh - Hukum & Informasi, Pidana, Perdata">
    <meta property="og:title" content="SIAP - Pengadilan Negeri Muara Teweh">
    <meta property="og:description" content="Akses layanan kepaniteraan Pengadilan Negeri Muara Teweh dengan mudah.">
    <meta property="og:type" content="website">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <style>
        /* =====================
           CSS VARIABLES
        ===================== */
        :root {
            --maroon:    #7B1818;
            --maroon-dk: #560F0F;
            --maroon-lt: #A63232;
            --gold:      #C9A84C;
            --gold-lt:   #E8C97A;
            --cream:     #FDF6EC;
            --cream-dk:  #F5E9D0;
            --dark:      #1A0A0A;
            --text:      #3D2020;
            --text-muted:#7A5555;
            --white:     #FFFFFF;
            --green:     #1B6E3A;
            --blue:      #1A3E6E;
            --orange:    #B85A00;

            --shadow-sm: 0 2px 12px rgba(123,24,24,.10);
            --shadow-md: 0 6px 28px rgba(123,24,24,.16);
            --shadow-lg: 0 16px 48px rgba(123,24,24,.20);
            --radius:    20px;
            --radius-sm: 12px;
        }

        /* =====================
           RESET & BASE
        ===================== */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--cream);
            color: var(--text);
            min-height: 100vh;
        }

        /* =====================
           WRAPPER (mobile-first)
        ===================== */
        .page-wrap {
            max-width: 480px;
            margin: 0 auto;
            background: var(--white);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
            box-shadow: 0 0 60px rgba(0,0,0,.18);
        }

        /* =====================
           HEADER
        ===================== */
        .site-header {
            background: linear-gradient(135deg, var(--maroon-dk) 0%, var(--maroon) 60%, var(--maroon-lt) 100%);
            padding: 18px 20px 14px;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow-md);
        }
        .header-inner {
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .logo-ring {
            width: 52px; height: 52px;
            border-radius: 50%;
            border: 2.5px solid var(--gold);
            background: rgba(255,255,255,.12);
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
            overflow: hidden;
            box-shadow: 0 0 0 4px rgba(201,168,76,.2);
        }
        .logo-ring img { width: 38px; height: 38px; object-fit: contain; }
        .logo-ring .logo-placeholder {
            font-size: 22px; color: var(--gold-lt);
        }
        .header-text h1 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 11.5px;
            font-weight: 800;
            color: var(--white);
            text-transform: uppercase;
            letter-spacing: .5px;
            line-height: 1.3;
        }
        .header-text p {
            font-size: 9.5px;
            color: rgba(255,255,255,.65);
            margin-top: 2px;
            line-height: 1.4;
        }
        .header-badge {
            margin-left: auto;
            background: var(--gold);
            color: var(--maroon-dk);
            font-size: 8.5px;
            font-weight: 800;
            padding: 3px 9px;
            border-radius: 20px;
            letter-spacing: .6px;
            text-transform: uppercase;
            flex-shrink: 0;
        }

        /* =====================
           HERO BANNER
        ===================== */
        .hero {
            background: linear-gradient(160deg, var(--maroon-dk) 0%, var(--maroon) 45%, #9B2020 100%);
            padding: 36px 24px 44px;
            position: relative;
            overflow: hidden;
            text-align: center;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: -60px; right: -60px;
            width: 220px; height: 220px;
            border-radius: 50%;
            background: rgba(201,168,76,.12);
            pointer-events: none;
        }
        .hero::after {
            content: '';
            position: absolute;
            bottom: -40px; left: -40px;
            width: 160px; height: 160px;
            border-radius: 50%;
            background: rgba(255,255,255,.05);
            pointer-events: none;
        }
        .hero-seal {
            width: 90px; height: 90px;
            border-radius: 50%;
            border: 3px solid var(--gold);
            background: rgba(255,255,255,.1);
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 16px;
            box-shadow: 0 0 0 8px rgba(201,168,76,.15), var(--shadow-lg);
            position: relative; z-index: 1;
        }
        .hero-seal i { font-size: 36px; color: var(--gold-lt); }
        .hero-label {
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--gold-lt);
            margin-bottom: 8px;
            position: relative; z-index: 1;
        }
        .hero h2 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 800;
            color: var(--white);
            line-height: 1.2;
            margin-bottom: 10px;
            position: relative; z-index: 1;
        }
        .hero h2 span { color: var(--gold-lt); }
        .hero-desc {
            font-size: 12.5px;
            color: rgba(255,255,255,.75);
            line-height: 1.7;
            max-width: 320px;
            margin: 0 auto 20px;
            position: relative; z-index: 1;
        }
        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 8px;
            position: relative; z-index: 1;
            flex-wrap: wrap;
        }
        .hero-stat {
            background: rgba(255,255,255,.12);
            border: 1px solid rgba(201,168,76,.35);
            border-radius: 30px;
            padding: 6px 14px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .hero-stat i { font-size: 11px; color: var(--gold-lt); }
        .hero-stat span { font-size: 10.5px; font-weight: 600; color: var(--white); }

        /* =====================
           SECTION TITLE
        ===================== */
        .section-title {
            padding: 28px 24px 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .section-title-line {
            width: 4px; height: 28px;
            background: linear-gradient(to bottom, var(--gold), var(--maroon));
            border-radius: 4px;
            flex-shrink: 0;
        }
        .section-title h3 {
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: 700;
            color: var(--maroon-dk);
        }
        .section-title p {
            font-size: 11px;
            color: var(--text-muted);
            margin-top: 2px;
        }

        /* =====================
           LAYANAN CARDS (3 utama)
        ===================== */
        .layanan-grid {
            padding: 6px 20px 4px;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .layanan-card {
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            border: 1.5px solid rgba(0,0,0,.06);
            cursor: pointer;
            transition: transform .22s ease, box-shadow .22s ease;
            text-decoration: none;
            display: block;
            position: relative;
        }
        .layanan-card:active { transform: scale(.97); }
        .layanan-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }

        .card-top {
            padding: 20px 20px 14px;
            display: flex;
            align-items: flex-start;
            gap: 16px;
        }
        .card-icon-wrap {
            width: 56px; height: 56px;
            border-radius: 16px;
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
            font-size: 24px;
            box-shadow: var(--shadow-sm);
        }
        .card-info { flex: 1; }
        .card-tag {
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 2px 8px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 5px;
        }
        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 17px;
            font-weight: 700;
            line-height: 1.25;
            margin-bottom: 5px;
        }
        .card-desc {
            font-size: 11.5px;
            line-height: 1.65;
            color: var(--text-muted);
        }
        .card-arrow {
            position: absolute;
            top: 20px; right: 18px;
            width: 30px; height: 30px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 12px;
        }

        /* Layanan items chips */
        .card-chips {
            padding: 0 20px 16px;
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }
        .chip {
            font-size: 10px;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        .chip i { font-size: 9px; }

        /* =====================
           CARD: HUKUM & INFORMASI
        ===================== */
        .card-hukum .card-top { background: linear-gradient(135deg, #F0FAF4 0%, #E0F4E8 100%); }
        .card-hukum .card-icon-wrap { background: var(--green); color: #fff; }
        .card-hukum .card-tag { background: #C8EDD6; color: var(--green); }
        .card-hukum .card-title { color: var(--green); }
        .card-hukum .card-arrow { background: var(--green); color: #fff; }
        .card-hukum .card-chips { background: #F7FCF9; }
        .card-hukum .chip { background: #D6F0E0; color: #145C2F; }

        /* =====================
           CARD: PIDANA
        ===================== */
        .card-pidana .card-top { background: linear-gradient(135deg, #FFF5EE 0%, #FEEADB 100%); }
        .card-pidana .card-icon-wrap { background: var(--orange); color: #fff; }
        .card-pidana .card-tag { background: #FDDCC0; color: var(--orange); }
        .card-pidana .card-title { color: var(--orange); }
        .card-pidana .card-arrow { background: var(--orange); color: #fff; }
        .card-pidana .card-chips { background: #FFFAF6; }
        .card-pidana .chip { background: #FDEBD8; color: #8F4000; }

        /* =====================
           CARD: PERDATA
        ===================== */
        .card-perdata .card-top { background: linear-gradient(135deg, #EEF3FF 0%, #DDE6FF 100%); }
        .card-perdata .card-icon-wrap { background: var(--blue); color: #fff; }
        .card-perdata .card-tag { background: #C8D8F8; color: var(--blue); }
        .card-perdata .card-title { color: var(--blue); }
        .card-perdata .card-arrow { background: var(--blue); color: #fff; }
        .card-perdata .card-chips { background: #F6F9FF; }
        .card-perdata .chip { background: #D8E4FF; color: #0E2C5A; }

        /* =====================
           INFOGRAFIS ALUR
        ===================== */
        .alur-section {
            margin: 8px 20px 0;
            background: linear-gradient(135deg, var(--maroon-dk) 0%, var(--maroon) 100%);
            border-radius: var(--radius);
            padding: 22px 20px;
            position: relative;
            overflow: hidden;
        }
        .alur-section::before {
            content: '';
            position: absolute;
            top: -30px; right: -30px;
            width: 120px; height: 120px;
            border-radius: 50%;
            background: rgba(201,168,76,.15);
            pointer-events: none;
        }
        .alur-title {
            font-family: 'Playfair Display', serif;
            font-size: 16px;
            color: var(--gold-lt);
            font-weight: 700;
            margin-bottom: 4px;
        }
        .alur-sub {
            font-size: 10.5px;
            color: rgba(255,255,255,.65);
            margin-bottom: 18px;
        }
        .alur-steps {
            display: flex;
            flex-direction: column;
            gap: 0;
            position: relative;
        }
        .alur-step {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            position: relative;
        }
        .alur-step:not(:last-child)::after {
            content: '';
            position: absolute;
            left: 15px;
            top: 36px;
            width: 2px;
            height: calc(100% - 4px);
            background: rgba(201,168,76,.35);
        }
        .step-num {
            width: 32px; height: 32px;
            border-radius: 50%;
            background: var(--gold);
            color: var(--maroon-dk);
            font-size: 12px;
            font-weight: 800;
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 2px 8px rgba(201,168,76,.4);
            z-index: 1;
        }
        .step-body {
            padding: 5px 0 18px;
        }
        .step-name {
            font-size: 12.5px;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 2px;
        }
        .step-detail {
            font-size: 11px;
            color: rgba(255,255,255,.6);
            line-height: 1.5;
        }

        /* =====================
           KONTAK & SOSMED
        ===================== */
        .kontak-section {
            margin: 20px 20px 0;
            background: var(--cream);
            border-radius: var(--radius);
            padding: 20px;
            border: 1.5px solid var(--cream-dk);
        }
        .kontak-title {
            font-family: 'Playfair Display', serif;
            font-size: 15px;
            color: var(--maroon-dk);
            font-weight: 700;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .kontak-title i { color: var(--gold); font-size: 14px; }
        .kontak-row {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 0;
            border-bottom: 1px solid var(--cream-dk);
        }
        .kontak-row:last-of-type { border-bottom: none; }
        .kontak-icon {
            width: 36px; height: 36px;
            border-radius: 10px;
            background: var(--maroon);
            color: var(--gold-lt);
            display: flex; align-items: center; justify-content: center;
            font-size: 14px;
            flex-shrink: 0;
        }
        .kontak-text { flex: 1; }
        .kontak-label { font-size: 9.5px; color: var(--text-muted); font-weight: 600; text-transform: uppercase; letter-spacing: .5px; }
        .kontak-val { font-size: 12px; font-weight: 600; color: var(--text); margin-top: 1px; }

        .sosmed-row {
            display: flex;
            gap: 10px;
            margin-top: 16px;
            justify-content: center;
        }
        .sosmed-btn {
            width: 42px; height: 42px;
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 17px;
            text-decoration: none;
            transition: transform .18s;
        }
        .sosmed-btn:hover { transform: translateY(-3px); }
        .sosmed-ig { background: #F3E0F0; color: #C13584; }
        .sosmed-wa { background: #D9F5E0; color: #25D366; }
        .sosmed-fb { background: #DCE8FB; color: #1877F2; }
        .sosmed-yt { background: #FDDEDE; color: #FF0000; }

        /* =====================
           FOOTER
        ===================== */
        .site-footer {
            margin-top: 24px;
            background: var(--maroon-dk);
            padding: 20px;
            text-align: center;
        }
        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 14px;
            color: var(--gold-lt);
            font-weight: 700;
            margin-bottom: 4px;
        }
        .footer-sub {
            font-size: 10px;
            color: rgba(255,255,255,.45);
            line-height: 1.6;
        }
        .footer-copy {
            margin-top: 14px;
            padding-top: 14px;
            border-top: 1px solid rgba(255,255,255,.1);
            font-size: 10px;
            color: rgba(255,255,255,.35);
        }

        /* =====================
           DISCLAIMER POPUP
        ===================== */
        .popup-overlay {
            position: fixed;
            inset: 0;
            background: rgba(20,5,5,.75);
            z-index: 999;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding: 0;
            backdrop-filter: blur(4px);
        }
        .popup-box {
            background: var(--white);
            border-radius: 28px 28px 0 0;
            padding: 28px 24px 36px;
            max-width: 480px;
            width: 100%;
            animation: slideUp .35s ease;
        }
        @keyframes slideUp {
            from { transform: translateY(100%); opacity: 0; }
            to   { transform: translateY(0);    opacity: 1; }
        }
        .popup-handle {
            width: 40px; height: 4px;
            background: var(--cream-dk);
            border-radius: 4px;
            margin: 0 auto 20px;
        }
        .popup-icon {
            width: 56px; height: 56px;
            border-radius: 16px;
            background: var(--maroon);
            color: var(--gold-lt);
            display: flex; align-items: center; justify-content: center;
            font-size: 24px;
            margin: 0 auto 14px;
        }
        .popup-title {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            font-weight: 700;
            color: var(--maroon-dk);
            text-align: center;
            margin-bottom: 8px;
        }
        .popup-text {
            font-size: 12.5px;
            color: var(--text-muted);
            line-height: 1.75;
            text-align: center;
            margin-bottom: 22px;
        }
        .popup-btns {
            display: flex;
            gap: 10px;
        }
        .btn-primary {
            flex: 1;
            background: linear-gradient(135deg, var(--maroon), var(--maroon-lt));
            color: var(--white);
            border: none;
            border-radius: 14px;
            padding: 14px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: var(--shadow-sm);
            transition: transform .18s;
        }
        .btn-primary:active { transform: scale(.97); }
        .btn-outline {
            background: var(--cream);
            color: var(--maroon);
            border: 1.5px solid var(--cream-dk);
            border-radius: 14px;
            padding: 14px 18px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: transform .18s;
        }
        .btn-outline:active { transform: scale(.97); }

        /* =====================
           SCROLL ANIMATION
        ===================== */
        [data-aos] { pointer-events: none; }
        [data-aos].aos-animate { pointer-events: auto; }

        /* =====================
           RESPONSIVE DESKTOP
        ===================== */
        @media (min-width: 520px) {
            .page-wrap { margin: 20px auto; border-radius: 24px; min-height: auto; }
            .popup-box { border-radius: 28px; margin-bottom: 40px; }
        }
    </style>
</head>
<body>

<div class="page-wrap">

    <!-- ===== HEADER ===== -->
    <header class="site-header">
        <div class="header-inner">
            <div class="logo-ring">
                <!-- Ganti src dengan path logo asli: assets/img/logo-pn.png -->
                <i class="fas fa-scale-balanced logo-placeholder"></i>
            </div>
            <div class="header-text">
                <h1>Pengadilan Negeri<br>Muara Teweh</h1>
                <p>Jl. A. Yani No.1, Muara Teweh<br>Kab. Barito Utara, Kalteng</p>
            </div>
            <div class="header-badge">Kelas II</div>
        </div>
    </header>

    <!-- ===== HERO ===== -->
    <section class="hero">
        <div class="hero-label">Sistem Informasi Alur Pelayanan</div>
        <div class="hero-seal">
            <i class="fas fa-landmark"></i>
        </div>
        <h2>Layanan <span>Kepaniteraan</span><br>PN Muara Teweh</h2>
        <p class="hero-desc">
            Akses informasi, alur, dan persyaratan layanan kepaniteraan secara mudah, cepat, dan transparan untuk seluruh masyarakat.
        </p>
        <div class="hero-stats">
            <div class="hero-stat">
                <i class="fas fa-circle-check"></i>
                <span>Transparan</span>
            </div>
            <div class="hero-stat">
                <i class="fas fa-bolt"></i>
                <span>Cepat & Mudah</span>
            </div>
            <div class="hero-stat">
                <i class="fas fa-shield-halved"></i>
                <span>Akuntabel</span>
            </div>
        </div>
    </section>

    <!-- ===== LAYANAN SECTION ===== -->
    <div class="section-title" data-aos="fade-up">
        <div class="section-title-line"></div>
        <div>
            <h3>Pilih Layanan</h3>
            <p>3 kepaniteraan tersedia untuk Anda</p>
        </div>
    </div>

    <div class="layanan-grid">

        <!-- HUKUM & INFORMASI -->
        <a href="hukum.php" class="layanan-card card-hukum" data-aos="fade-up" data-aos-delay="60">
            <div class="card-top">
                <div class="card-icon-wrap">
                    <i class="fas fa-landmark"></i>
                </div>
                <div class="card-info">
                    <div class="card-tag">Kepaniteraan</div>
                    <div class="card-title">Hukum &<br>Informasi</div>
                    <div class="card-desc">Akta, legalisasi, salinan putusan, dan informasi perkara</div>
                </div>
            </div>
            <div class="card-arrow" style="background:var(--green);color:#fff;">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="card-chips">
                <div class="chip"><i class="fas fa-file-circle-check"></i> Salinan Putusan</div>
                <div class="chip"><i class="fas fa-stamp"></i> Legalisasi</div>
                <div class="chip"><i class="fas fa-certificate"></i> Akta</div>
                <div class="chip"><i class="fas fa-circle-info"></i> Info Perkara</div>
            </div>
        </a>

        <!-- PIDANA -->
        <a href="pidana.php" class="layanan-card card-pidana" data-aos="fade-up" data-aos-delay="120">
            <div class="card-top">
                <div class="card-icon-wrap">
                    <i class="fas fa-gavel"></i>
                </div>
                <div class="card-info">
                    <div class="card-tag">Kepaniteraan</div>
                    <div class="card-title">Perkara<br>Pidana</div>
                    <div class="card-desc">Pendaftaran, upaya hukum, dan layanan perkara pidana</div>
                </div>
            </div>
            <div class="card-arrow" style="background:var(--orange);color:#fff;">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="card-chips">
                <div class="chip"><i class="fas fa-folder-plus"></i> Pendaftaran</div>
                <div class="chip"><i class="fas fa-arrow-up-right-from-square"></i> Banding</div>
                <div class="chip"><i class="fas fa-rotate-left"></i> Kasasi</div>
                <div class="chip"><i class="fas fa-key"></i> Pra-Peradilan</div>
            </div>
        </a>

        <!-- PERDATA -->
        <a href="perdata.php" class="layanan-card card-perdata" data-aos="fade-up" data-aos-delay="180">
            <div class="card-top">
                <div class="card-icon-wrap">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <div class="card-info">
                    <div class="card-tag">Kepaniteraan</div>
                    <div class="card-title">Perkara<br>Perdata</div>
                    <div class="card-desc">Gugatan, permohonan, dan layanan perkara perdata umum</div>
                </div>
            </div>
            <div class="card-arrow" style="background:var(--blue);color:#fff;">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="card-chips">
                <div class="chip"><i class="fas fa-file-pen"></i> Gugatan</div>
                <div class="chip"><i class="fas fa-handshake"></i> Permohonan</div>
                <div class="chip"><i class="fas fa-arrow-up-right-from-square"></i> Banding</div>
                <div class="chip"><i class="fas fa-users"></i> POSBAKUM</div>
            </div>
        </a>

    </div>

    <!-- ===== ALUR PELAYANAN ===== -->
    <div class="section-title" data-aos="fade-up" style="margin-top:8px;">
        <div class="section-title-line"></div>
        <div>
            <h3>Alur Pelayanan</h3>
            <p>Panduan umum mengurus layanan</p>
        </div>
    </div>

    <div class="alur-section" data-aos="fade-up">
        <div class="alur-title">📋 Tahapan Pelayanan</div>
        <div class="alur-sub">Berlaku untuk seluruh kepaniteraan</div>
        <div class="alur-steps">
            <div class="alur-step">
                <div class="step-num">1</div>
                <div class="step-body">
                    <div class="step-name">Persiapan Berkas</div>
                    <div class="step-detail">Siapkan dokumen persyaratan sesuai jenis layanan yang dipilih</div>
                </div>
            </div>
            <div class="alur-step">
                <div class="step-num">2</div>
                <div class="step-body">
                    <div class="step-name">Pengambilan Nomor Antrian</div>
                    <div class="step-detail">Ambil nomor antrian di meja informasi atau secara online</div>
                </div>
            </div>
            <div class="alur-step">
                <div class="step-num">3</div>
                <div class="step-body">
                    <div class="step-name">Penyerahan Berkas</div>
                    <div class="step-detail">Serahkan berkas ke petugas kepaniteraan terkait untuk diperiksa</div>
                </div>
            </div>
            <div class="alur-step">
                <div class="step-num">4</div>
                <div class="step-body">
                    <div class="step-name">Verifikasi & Pembayaran</div>
                    <div class="step-detail">Berkas diverifikasi, lalu dilakukan pembayaran PNBP jika diperlukan</div>
                </div>
            </div>
            <div class="alur-step">
                <div class="step-num">5</div>
                <div class="step-body">
                    <div class="step-name">Pengambilan Produk</div>
                    <div class="step-detail">Dokumen/produk layanan diberikan sesuai estimasi waktu yang ditetapkan</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== KONTAK ===== -->
    <div class="section-title" data-aos="fade-up">
        <div class="section-title-line"></div>
        <div>
            <h3>Hubungi Kami</h3>
            <p>Kami siap melayani Anda</p>
        </div>
    </div>

    <div class="kontak-section" data-aos="fade-up">
        <div class="kontak-title"><i class="fas fa-headset"></i> Informasi Kontak</div>

        <div class="kontak-row">
            <div class="kontak-icon"><i class="fas fa-location-dot"></i></div>
            <div class="kontak-text">
                <div class="kontak-label">Alamat</div>
                <div class="kontak-val">Jl. A. Yani No.1, Muara Teweh, Kab. Barito Utara, Kalteng 73812</div>
            </div>
        </div>
        <div class="kontak-row">
            <div class="kontak-icon"><i class="fas fa-phone"></i></div>
            <div class="kontak-text">
                <div class="kontak-label">Telepon</div>
                <div class="kontak-val">(0519) 21015</div>
            </div>
        </div>
        <div class="kontak-row">
            <div class="kontak-icon"><i class="fas fa-envelope"></i></div>
            <div class="kontak-text">
                <div class="kontak-label">Email</div>
                <div class="kontak-val">pn.muarateweh@gmail.com</div>
            </div>
        </div>
        <div class="kontak-row">
            <div class="kontak-icon"><i class="fas fa-clock"></i></div>
            <div class="kontak-text">
                <div class="kontak-label">Jam Pelayanan</div>
                <div class="kontak-val">Sen–Kam 08.00–16.00 · Jum 08.00–16.30 WITA</div>
            </div>
        </div>

        <div class="sosmed-row">
            <a href="#" class="sosmed-btn sosmed-ig"><i class="fab fa-instagram"></i></a>
            <a href="#" class="sosmed-btn sosmed-wa"><i class="fab fa-whatsapp"></i></a>
            <a href="#" class="sosmed-btn sosmed-fb"><i class="fab fa-facebook"></i></a>
            <a href="#" class="sosmed-btn sosmed-yt"><i class="fab fa-youtube"></i></a>
        </div>
    </div>

    <!-- ===== FOOTER ===== -->
    <footer class="site-footer">
        <div class="footer-logo">PN Muara Teweh</div>
        <div class="footer-sub">
            Pengadilan Negeri Muara Teweh Kelas II<br>
            Jl. A. Yani No.1, Barito Utara, Kalimantan Tengah
        </div>
        <div class="footer-copy">&copy; <?php echo date('Y'); ?> Pengadilan Negeri Muara Teweh. Hak cipta dilindungi.</div>
    </footer>

</div><!-- end .page-wrap -->

<!-- ===== DISCLAIMER POPUP ===== -->
<div class="popup-overlay" id="popupDisclaimer">
    <div class="popup-box">
        <div class="popup-handle"></div>
        <div class="popup-icon">
            <i class="fas fa-circle-info"></i>
        </div>
        <div class="popup-title">Informasi Penting</div>
        <p class="popup-text">
            Aplikasi ini menyediakan informasi layanan, persyaratan, dan alur pelayanan 
            Pengadilan Negeri Muara Teweh. Pelaksanaan layanan dapat disesuaikan 
            dengan kondisi dan kebijakan pengadilan yang berlaku.
        </p>
        <div class="popup-btns">
            <button class="btn-outline" onclick="window.open('https://pn-muarateweh.go.id','_blank')">
                <i class="fas fa-globe"></i> Website Resmi
            </button>
            <button class="btn-primary" onclick="tutupPopup()">
                <i class="fas fa-circle-check"></i> Saya Mengerti
            </button>
        </div>
    </div>
</div>

<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    // AOS init
    AOS.init({ duration: 500, once: true, offset: 60 });

    // Popup logic
    document.addEventListener('DOMContentLoaded', function () {
        var seen = localStorage.getItem('siap_disclaimer_mtwh');
        if (seen) {
            document.getElementById('popupDisclaimer').style.display = 'none';
        }
    });

    function tutupPopup() {
        localStorage.setItem('siap_disclaimer_mtwh', '1');
        var el = document.getElementById('popupDisclaimer');
        el.style.opacity = '0';
        el.style.transition = 'opacity .3s';
        setTimeout(function(){ el.style.display = 'none'; }, 300);
    }
</script>

</body>
</html>
