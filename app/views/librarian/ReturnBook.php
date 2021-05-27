<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?php echo URLROOT;?>public/css/Main.css">
    <link rel="stylesheet" href= "<?php echo URLROOT;?>public/css/librarian/Return-book.css">
    <link rel="stylesheet" href= "<?php echo URLROOT;?>public/css/components/Info-form.css">
    <script src="https://kit.fontawesome.com/a7cf4e395f.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php
        require APPROOT."/views/includes/Librarian-nav-panel.php";
    ?>
    <div class="top-bar-wrapper">
        <div class="top-bar-container">
            <div class="title-container">
                <i class="fas fa-undo"></i>
                <h1>Return book</h1>
            </div>
            <div class="user-icon-container">
                <input type="checkbox" id= "user-account-icon">
                <label for="user-account-icon"></label>
                <i class="fas fa-user"></i>
                <div class="user-account-features-panel">
                    <ul>
                        <li><i class="fas fa-key"></i>password</li>
                        <li><i class="fas fa-sign-out-alt"></i>Sign out</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header -->
    <div class="feature-panel-wrapper">
        <div class="feature-panel" id="return-book-panel">
        <div class="info-form-outer">
                <div class="left-box">
                    <div class="title-icon"><i class="fas fa-undo"></i></div>
                    <div>
                        <h3>Nhận trả sách</h3>
                        <p>Nhập vào Mã độc giả và mã sách để được hệ thống kiểm tra và cho mượn sách</p>
                    </div>
                    <div class="right-arrow"><i class="fas fa-angle-right"></i></div>
                </div>
                <form method="POST" class="right-form">
                    <div class = "info-field">
                        <label for="">Mã phiếu mượn</label>
                        <div class="input-field">
                            <input type="number" placeholder = "Lending card Id" name = "rb_card_id" required>
                        </div>
                    </div>
                    <div class = "info-field">
                        <label for="">Ngày trả</label>
                        <div class="input-field">
                            <input type="date" name = "rb_date" required>
                        </div>
                    </div>
                    <div class = "info-field">
                        <label for="">Tên độc giả</label>
                        <div class="input-field">
                            <input type="text" placeholder="Reader's name" name = "rb_reader_name" readonly>
                        </div>
                    </div>
                    <div class = "info-field">
                        <label for="">Tên sách</label>
                        <div class="input-field">
                            <input type="text" placeholder="Book's name" name = "rb_book_name" readonly>
                        </div>
                    </div>
                    <div class = "info-field">
                        <label for="">Tiền phạt kỳ này</label>
                        <div class="input-field">
                            <input type="text" placeholder="this time fine" name = "rb_fine" readonly required>
                        </div>
                    </div>
                    <div class = "info-field">
                        <label for="">Tổng nợ</label>
                        <div class="input-field">
                            <input type="text" placeholder="Total Fine" name = "rb_total_fine" readonly required>
                        </div>
                    </div>
                    <input type="submit" value = "Trả sách" name = "submit_lend_book">
                </form>
            </div>
            <!-- <?php require APPROOT."/views/includes/Message-box.php"; ?> -->
        </div>
    </div>
     
</body>
</html>