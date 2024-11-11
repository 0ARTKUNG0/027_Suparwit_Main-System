<style>
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .news-item {
            animation: fadeIn 0.5s ease-in;
            animation-fill-mode: both;
        }

        .news-item:nth-child(2) { animation-delay: 0.2s; }
        .news-item:nth-child(3) { animation-delay: 0.4s; }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .username {
            color: #00f7a7;
            font-weight: 500;
        }

        .logout-btn {
            background-color: #f77;
            color: #fff;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .logout-btn:hover {
            background-color: #f55;
        }
    </style>
    <!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข่าวประชาสัมพันธ์ - มหาวิทยาลัยราชภัฏนครปฐม</title>
    <link rel="stylesheet" href="<?= base_url('css/public_relations.css') ?>">
</head>
<body>
    <!-- Header Section -->
    <header class="header">
    <div class="logo">
        <a href="<?= base_url('/') ?>">
            <img src="<?= base_url('images/Logo.png') ?>" alt="Logo">
        </a>
    </div>
    <nav class="nav-links">
        <a href="<?= base_url('/') ?>">หน้าหลัก</a>
        <a href="<?= base_url('news') ?>" class="active">ข่าวประชาสัมพันธ์</a>
        <a href="#">รายการประกวดแข่งขัน</a>
    </nav>
    <div class="search">
        <input type="text" placeholder="ค้นหา..." id="searchInput">
        <button onclick="handleSearch()">
            <img src="<?= base_url('images/search-icon.png') ?>" alt="Search">
        </button>
    </div>
    <button class="login-btn" onclick="location.href='<?= base_url('login') ?>'">เข้าสู่ระบบ</button>
</header>

    <!-- Main Content -->
    <main class="main-content">
        <h1>ข่าวประชาสัมพันธ์</h1>
        <div class="category-filters">
            <?php foreach ($categories as $category): ?>
                <a href="#" class="filter <?= $category === 'ทั้งหมด' ? 'active' : '' ?>" 
                   onclick="filterNews('<?= $category ?>')"><?= $category ?></a>
            <?php endforeach; ?>
        </div>

        <div class="news-grid">
            <?php foreach ($news as $item): ?>
                <div class="news-item" data-category="<?= $item['category'] ?>">
                    <img src="<?= base_url($item['image']) ?>" alt="<?= $item['title'] ?>">
                    <div class="news-info">
                        <h3><?= $item['title'] ?></h3>
                        <p><?= $item['category'] ?></p>
                        <div class="news-meta">
                            <span>
                                <img src="<?= base_url('images/calendar-icon.png') ?>" alt="Calendar">
                                <?= $item['date'] ?>
                            </span>
                            <span>
                                <img src="<?= base_url('images/eye-icon.png') ?>" alt="Views">
                                <?= $item['views'] ?>
                            </span>
                            <span>
                                <img src="<?= base_url('images/clock-icon.png') ?>" alt="Time">
                                <?= $item['readTime'] ?> นาที
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <script>
        function handleSearch() {
            const searchTerm = document.getElementById('searchInput').value;
            if (searchTerm) {
                window.location.href = `<?= base_url('search') ?>?q=${encodeURIComponent(searchTerm)}`;
            }
        }

        function filterNews(category) {
            const newsItems = document.querySelectorAll('.news-item');
            const filters = document.querySelectorAll('.filter');
            
            filters.forEach(filter => {
                filter.classList.remove('active');
                if (filter.textContent === category) {
                    filter.classList.add('active');
                }
            });

            newsItems.forEach(item => {
                if (category === 'ทั้งหมด' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                handleSearch();
            }
        });
    </script>
</body>
</html>