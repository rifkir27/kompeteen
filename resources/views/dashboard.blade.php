<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Course - Kompeteen</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 220px;
            min-height: 100vh;
            background-color: #2c004b;
            color: white;
            padding: 30px 20px;
            position: fixed;
        }

        .sidebar .brand {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .sidebar .brand span {
            color: orange;
        }

        .sidebar .nav-link {
            color: white;
            padding: 10px 0;
            display: block;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background-color: orange;
            color: black;
            padding-left: 10px;
            border-radius: 8px;
        }

        .main-content {
            margin-left: 240px;
            padding: 30px;
        }

        .accordion-button:not(.collapsed) {
            background-color: #f5f0ff;
            color: #4b0082;
        }

        .progress-circle {
            width: 130px;
            height: 130px;
            position: relative;
        }

        .progress-circle svg {
            transform: rotate(-90deg);
        }

        .progress-circle .circle-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-weight: bold;
            font-size: 16px;
        }

        footer {
            background-color: #2c004b;
            color: white;
            padding: 40px 30px;
        }

        footer a {
            color: white;
            text-decoration: underline;
        }

        footer h5 span {
            color: orange;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="brand">Kompe<span>teen</span></div>
        <a href="#" class="nav-link"> Dashboard</a>
        <a href="#" class="nav-link active"> My Course</a>
        <a href="#" class="nav-link">Showcase</a>
        <a href="#" class="nav-link">Transaction</a>
        <a href="#" class="nav-link">Voucher</a>
        <a href="#" class="nav-link">Profile</a>
        <a href="#" class="nav-link"> Sign Out</a>
    </div>


    <div class="main-content">
        <nav style="font-size: 14px;" class="mb-3">
            <a href="#">Home</a> / <a href="#">My Course</a> / <strong>Details Course</strong>
        </nav>

        <h4 class="fw-bold mb-3">Membangun Mobile Apps Menggunakan Flutter</h4>

        <div class="mb-4">
            <img src="https://via.placeholder.com/800x400" class="img-fluid rounded shadow-sm" alt="Course Thumbnail">
        </div>

        <div class="mb-4">
            <h5 class="fw-bold">Materi 1 - Mengenal Dasar Flutter</h5>
            <div class="d-flex align-items-center">
                <img src="https://i.pravatar.cc/50" class="rounded-circle me-2" width="50">
                <div>
                    <strong>Angelica Dyson</strong> <br>
                    Mobile Developer <br>
                    ⭐ 4.5 rating • 📘 12 Courses
                </div>
            </div>
        </div>

        <div class="d-flex gap-5 flex-wrap">

        <div class="flex-fill" style="min-width: 300px;">
                <h6 class="fw-bold">Kurikulum E-Course</h6>
                <div class="accordion" id="accordionCourse">
                    @for($i = 1; $i <= 3; $i++)
                    <div class="accordion-item mb-2 border border-primary-subtle rounded">
                        <h2 class="accordion-header" id="heading{{ $i }}">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $i }}">
                                Materi-{{ $i }} Mengenal Flutter & Dart
                            </button>
                        </h2>
                        <div id="collapse{{ $i }}" class="accordion-collapse collapse" data-bs-parent="#accordionCourse">
                            <div class="accordion-body">
                                <ul class="list-unstyled mb-0">
                                    <li>🧠 Mengenal Dasar Flutter - 25:00</li>
                                    <li>🧠 Kegunaan Flutter - 20:00</li>
                                    <li>🧠 Mengenal dasar Dart - 20:00</li>
                                    <li>🧠 Kegunaan Dart - 20:00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
