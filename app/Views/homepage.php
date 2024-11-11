<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Science Day - มหาวิทยาลัยราชภัฏนครปฐม</title>
    <link rel="stylesheet" href="<?= base_url('css/Homepage.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="<?= base_url('/') ?>">
                <img src="<?= base_url('images/Logo.png') ?>" alt="Logo">
            </a>
        </div>
        <nav class="nav-links">
            <a href="<?= base_url('/') ?>" class="<?= service('uri')->getSegment(1) == '' ? 'active' : '' ?>">หน้าหลัก</a>
            <a href="<?= base_url('news') ?>" class="<?= service('uri')->getSegment(1) == 'news' ? 'active' : '' ?>">ข่าวประชาสัมพันธ์</a>
            <a href="<?= base_url('activities') ?>" class="<?= service('uri')->getSegment(1) == 'activities' ? 'active' : '' ?>">กิจกรรมนักศึกษา</a>
        </nav>
        <div class="search">
            <input type="text" placeholder="ค้นหา..." id="searchInput">
            <button onclick="handleSearch()">
                <img src="<?= base_url('images/search-icon.png') ?>" alt="Search">
            </button>
        </div>
    </header>

    <main class="main-content">
        <h1 class="animate__animated animate__fadeInDown">Science<br>Day</h1>
        <div class="circle-image animate__animated animate__fadeIn animate__delay-1s">
            <img src="<?= base_url('images/science-day.png') ?>" alt="Science Day Image">
        </div>
        <p class="university-name animate__animated animate__fadeInUp animate__delay-2s">
            มหาวิทยาลัยราชภัฏนครปฐม
        </p>
    </main>

    <script>
        function handleSearch() {
            const searchTerm = document.getElementById('searchInput').value;
            if (searchTerm) {
                window.location.href = `<?= base_url('search') ?>?q=${encodeURIComponent(searchTerm)}`;
            }
        }

        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                handleSearch();
            }
        });
    </script>
</body>
</html>