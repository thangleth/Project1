<section>
    <div class="form-box" id="login">
        <div class="form-value">
            <form action="" method="POST" enctype="multipart/form-data">
                <h2>Đăng nhập</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="email" required>
                    <label for="">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" required>
                    <label for="">Mật khẩu</label>
                </div>
                <button type="submit" name="submit">Đăng nhập</button>
                <div class="register">
                    <p><a href="?ctrl=user&view=register" class="nav-link">Đăng ký</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>