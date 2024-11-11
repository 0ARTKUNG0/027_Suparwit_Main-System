<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - มหาวิทยาลัยราชภัฏนครปฐม</title>
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="<?= base_url('/') ?>">
                <img src="<?= base_url('images/Logo.png') ?>" alt="Logo">
            </a>
        </div>
        <nav class="nav-links">
            <a href="<?= base_url('/') ?>">หน้าหลัก</a>
            <a href="<?= base_url('news') ?>">ข่าวประชาสัมพันธ์</a>
            <a href="#">รายการประกวดแข่งขัน</a>
        </nav>
        <div class="user-menu">
            <span class="username">ยินดีต้อนรับ, <?= esc($username) ?></span>
            <a href="<?= base_url('logout') ?>" class="logout-btn">ออกจากระบบ</a>
        </div>
    </header>

    <main class="main-content">
        <div class="dashboard-container">
            <h1>แผงควบคุม</h1>
            
            <div class="dashboard-grid">
                <div class="dashboard-card">
                    <h3>ข้อมูลส่วนตัว</h3>
                    <p>จัดการข้อมูลส่วนตัวของคุณ</p>
                    <a href="#" class="card-link">แก้ไขข้อมูล</a>
                </div>

                <div class="dashboard-card">
                    <h3>ประวัติการทำรายการ</h3>
                    <p>ดูประวัติการทำรายการทั้งหมด</p>
                    <a href="#" class="card-link">ดูประวัติ</a>
                </div>

                <div class="dashboard-card">
                    <h3>การแจ้งเตือน</h3>
                    <p>จัดการการแจ้งเตือนของคุณ</p>
                    <a href="#" class="card-link">ตั้งค่า</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>