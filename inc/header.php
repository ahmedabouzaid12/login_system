<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REVIVE MARKS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* تنسيقات عامة */
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #fff;
            display: flex;
            min-height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        /* شريط التنقل */
        .navbar {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f8f9fa;
            padding-top: 20px;
            z-index: 1000;
        }
        /* محتوى الصفحة */
        .content {
            margin-top: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
        }
        .login-container {
            max-width: 500px;
            width: 100%;
            padding: 30px;
            text-align: center;
        }
        .form-control {
            height: 60px; /* زيادة ارتفاع الحقل */
            transition: all 0.3s;
            text-align: right; /* محاذاة النص لليمين */
        }
        .form-control:focus {
            border-color: #2CA07A;
            box-shadow: none;
            color: #2CA07A;
        }
        .form-control::placeholder {
            color: #000;
            transition: all 0.3s;
        }
        .form-control:focus::placeholder {
            color: transparent;
        }
        .form-label {
    color: #000;
    font-size: 1em;
    transition: all 0.3s;
    position: absolute;
    pointer-events: none;
    right: 10px; /* وضع العنوان على الجانب الأيمن */
    top: 15px;
    transform: translateY(0);
    text-align: right; /* محاذاة النص لليمين */
}
        .form-control:focus + .form-label,
.form-control:not(:placeholder-shown) + .form-label {
    color: #2CA07A;
    transform: translateY(-32px);
    font-size: 0.9em;
    padding: 0 5px;
    background-color: #fff; /* الحفاظ على الخلفية بيضاء */
    z-index: 1; /* وضع العنصر فوق الحقل */
}
.form-group {
    margin-bottom: 25px; /* تكبير المسافة بين الحقول */
    position: relative; /* لجعل التسمية مطلوبة داخل الحقل */
}
        .btn-primary {
            background-color: #2CA07A;
            border: none;
            width: 100%;
            height: 50px;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #258a68;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #ffffff;
            color: #2CA07A;
            font-size: 1.1em;
            margin-top: auto;
            width: 100%;
        }
        .footer a {
            color: #2CA07A;
            text-decoration: none;
            margin: 0 10px;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .social-icons {
            margin-top: 10px;
        }
        .social-icons a {
            display: inline-block;
            margin: 0 5px;
            color: #2CA07A;
            font-size: 1.5em;
        }
        .social-icons a:hover {
            color: #258a68;
        }
        .icon-title {
            text-align: center;
            font-size: 2em;
            color: #000;
            margin-bottom: 20px;
        }
        .text-danger {
    font-size: 0.85em; /* تصغير حجم الخط */
    text-align: right; /* محاذاة النص لليمين */
    display: block; /* لضمان المحاذاة داخل الحاوية */
}
.form-label {
    color: #000;
    font-size: 1em;
    transition: all 0.3s;
    position: absolute;
    pointer-events: none;
    right: 10px; /* وضع العنوان على الجانب الأيمن */
    top: 15px;
    transform: translateY(0);
    text-align: right; /* محاذاة النص لليمين */
}
        .form-text {
            color: #2CA07A; /* تغيير لون النص للرابط */
            text-decoration: none;
        }
        .form-text:hover {
            text-decoration: underline; /* إضافة تأثير عند التمرير */
        }
        #addUser, #homeLink {
            color: #2CA07A; /* لون الأيقونة */
            transition: transform 0.2s ease; /* انتقال سلس */
        }
        #addUser:active, #homeLink:active {
            transform: scale(0.9); /* تصغير الأيقونة عند الضغط */
        }
        /* .content {
            margin-top: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: calc(100vh - 100px);
        }
        .welcome-message {
            font-size: 2em;
            color: #2CA07A;
            text-align: center;
        } */
    </style>
</head>
<body>

<!-- شريط التنقل -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
  <img src="https://i.postimg.cc/tg7yg4W3/revive-marks-high-resolution-logo-transparent.png" style="height: 30px;">
  </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="home.php" id="homeLink"><i class="fas fa-home"></i> الصفحة الرئيسية</a>
        <a class="nav-link" href="add-user.php" id="addUser"><i class="fas fa-user-plus"></i></a>
         <!-- زر تغيير اللغة -->
        <?php if(isset($_COOKIE['lang'])):?>
            <?php if($_COOKIE['lang']=="ar"):?>
                <?php 
                    $key = "en";
                    $lang = "English";
                    ?>
            <?php else:?>
                <?php 
                    $key = "ar";
                    $lang = "العربية";?>
            <?php endif; ?>
            <?php else:?>
                <?php 
                    $key = "en";
                    $lang = "English";
                    ?>
        <?php endif; ?>
      <div class="navbar-nav ms-auto">
        <a  class="nav-link" href="language.php?language=<?= $key;?>">
        <?= $lang; ?>
        </a>
      </div>
      </div>
    </div>
  </div>
</nav>