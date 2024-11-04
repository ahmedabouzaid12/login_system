<?php
session_start();
require_once "./inc/header.php";
?>
<div class="content">
    <div class="login-container">
        <h1 class="icon-title">مرحبــاً</h1>
        <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>تم !</strong> <?= $_SESSION['success']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
        <form action="./actions/store_user.php" method="POST">
            <!-- حقل الاسم -->
            <div class="form-group position-relative mb-4">
                <input type="" name="user_name" class="form-control" placeholder=" " required>
                <label class="form-label">الاسم *</label>
                <?php if (isset($_SESSION['errors']['user_name'])): ?>
                            <span class="text-danger"><?= $_SESSION['errors']['user_name']; ?></span>
                        <?php endif; ?>
            </div>

            <!-- حقل البريد الإلكتروني -->
            <div class="form-group position-relative mb-4">
                <input type="" name="user_email" class="form-control" placeholder=" " required>
                <label class="form-label">البريد الإلكتروني *</label>
                <?php if (isset($_SESSION['errors']['user_email'])): ?>
                            <span class="text-danger"><?= $_SESSION['errors']['user_email']; ?></span>
                        <?php endif; ?>
            </div>

            <!-- حقل كلمة المرور -->
            <div class="form-group position-relative mb-3">
                <input type="" name="user_password" class="form-control" placeholder=" " required>
                <label class="form-label">كلمة المرور *</label>
                <?php if (isset($_SESSION['errors']['user_password'])): ?>
                            <span class="text-danger"><?= $_SESSION['errors']['user_password']; ?></span>
                        <?php endif; ?>
            </div>

            <a href="#" class="form-text">نسيت كلمة المرور؟</a>
            <button class="btn btn-primary mt-3">متابعة</button>
            <p class="mt-3">ليس لديك حساب؟ <a href="#" class="form-text">تسجيل</a></p>
        </form>
    </div>
</div>

<?php unset($_SESSION['errors']);
      unset($_SESSION['success']);  ?>
<?php require_once "./inc/footer.php" ?>
