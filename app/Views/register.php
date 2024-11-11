<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน - มหาวิทยาลัยราชภัฏนครปฐม</title>
    <link rel="stylesheet" href="<?= base_url('css/register.css') ?>">
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
            <a href="<?= base_url('news') ?>">ข่าวประชาสัมพันธ์</a>
            <a href="#">รายการประกวดแข่งขัน</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="register-container">
            <div class="register-box">
                <h2>ลงทะเบียน</h2>

                <?php if(isset($validation)): ?>
                    <div class="alert alert-danger">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('register/registerUser') ?>" method="post">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label for="username">ชื่อผู้ใช้</label>
                        <input type="text" name="username" id="username" value="<?= old('username') ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email">อีเมล</label>
                        <input type="email" name="email" id="email" value="<?= old('email') ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="password">รหัสผ่าน</label>
                        <div class="password-input">
                            <input type="password" name="password" id="password" required>
                            <button type="button" class="toggle-password" onclick="togglePassword('password', 'eyeIcon1')">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="eyeIcon1" class="eye-icon show">
                                    <path class="eye-open" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                    <path class="eye-closed" d="M12 7c2.76 0 5 2.24 5 5 0 .65-.13 1.26-.36 1.83l2.92 2.92c1.51-1.26 2.7-2.89 3.43-4.75-1.73-4.39-6-7.5-11-7.5-1.4 0-2.74.25-3.98.7l2.16 2.16C10.74 7.13 11.35 7 12 7zM2 4.27l2.28 2.28.46.46C3.08 8.3 1.78 10.02 1 12c1.73 4.39 6 7.5 11 7.5 1.55 0 3.03-.3 4.38-.84l.42.42L19.73 22 21 20.73 3.27 3 2 4.27zM7.53 9.8l1.55 1.55c-.05.21-.08.43-.08.65 0 1.66 1.34 3 3 3 .22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.41.53-2.2.53-2.76 0-5-2.24-5-5 0-.79.2-1.53.53-2.2zm4.31-.78l3.15 3.15.02-.16c0-1.66-1.34-3-3-3l-.17.01z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">ยืนยันรหัสผ่าน</label>
                        <div class="password-input">
                            <input type="password" name="confirm_password" id="confirm_password" required>
                            <button type="button" class="toggle-password" onclick="togglePassword('confirm_password', 'eyeIcon2')">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="eyeIcon2" class="eye-icon show">
                                    <path class="eye-open" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                    <path class="eye-closed" d="M12 7c2.76 0 5 2.24 5 5 0 .65-.13 1.26-.36 1.83l2.92 2.92c1.51-1.26 2.7-2.89 3.43-4.75-1.73-4.39-6-7.5-11-7.5-1.4 0-2.74.25-3.98.7l2.16 2.16C10.74 7.13 11.35 7 12 7zM2 4.27l2.28 2.28.46.46C3.08 8.3 1.78 10.02 1 12c1.73 4.39 6 7.5 11 7.5 1.55 0 3.03-.3 4.38-.84l.42.42L19.73 22 21 20.73 3.27 3 2 4.27zM7.53 9.8l1.55 1.55c-.05.21-.08.43-.08.65 0 1.66 1.34 3 3 3 .22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.41.53-2.2.53-2.76 0-5-2.24-5-5 0-.79.2-1.53.53-2.2zm4.31-.78l3.15 3.15.02-.16c0-1.66-1.34-3-3-3l-.17.01z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="register-button">ลงทะเบียน</button>
                </form>

                <div class="login-link">
                    มีบัญชีอยู่แล้ว? <a href="<?= base_url('login') ?>">เข้าสู่ระบบ</a>
                </div>
            </div>
        </div>
    </main>

    <script>
        function togglePassword(inputId, iconId) {
            const passwordInput = document.getElementById(inputId);
            const eyeIcon = document.getElementById(iconId);
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('show');
                eyeIcon.classList.add('hide');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('hide');
                eyeIcon.classList.add('show');
            }
        }
    </script>
</body>
</html>