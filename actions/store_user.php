<?php
session_start();
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Sanitization
    $name = trim(htmlspecialchars_decode($_POST['user_name'])); // تعديل هنا
    $email = trim(htmlspecialchars_decode($_POST['user_email'])); // تعديل هنا
    $password = trim(htmlspecialchars_decode($_POST['user_password'])); // تعديل هنا

    // Validations Of Name
    if (empty($name)) {
        $errors['user_name'] = "الاسم مطلوب."; // تعديل هنا
    } else if (strlen($name) < 3) {
        $errors['user_name'] = "يجب أن يكون الاسم مكوناً من 3 أحرف على الأقل.";
    } else if (strlen($name) > 15) {
        $errors['user_name'] = "يجب أن يكون الاسم أقل من 15 حرفاً.";
    }

    // Validations Of Email
    if (empty($email)) {
        $errors['user_email'] = "البريد الإلكتروني مطلوب."; // تعديل هنا
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['user_email'] = "صيغة البريد الإلكتروني غير صحيحة.";
    }

    // Validations Of Password
    if (empty($password)) {
        $errors['user_password'] = "كلمة المرور مطلوبة."; // تعديل هنا
    } else if (strlen($password) < 6) {
        $errors['user_password'] = "يجب أن تكون كلمة المرور 6 أحرف على الأقل.";
    } else if (strlen($password) > 50) {
        $errors['user_password'] = "يجب أن تكون كلمة المرور أقل من 50 حرفاً.";
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
    } else {
        $_SESSION['success'] = "تمت إضافة المستخدم بنجاح.";
    }

    header("Location: ../add-user.php");
    exit;
}
?>