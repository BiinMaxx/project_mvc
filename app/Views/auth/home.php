 <!-- BODY-LOGIN -->
 <section class="body-page page-v1">
        <div class="container">
            <div class="content">
                <h2 class="sky-h3" style="margin-bottom: 10px;padding-bottom: 30px;">Đăng nhập tài khoản</h2>
              
                <form method="post" action="<?= BASE_URL ?>loginController/authentication">
                    <div class="form-group">
                        <input type="text" class="form-control" name="user" value="" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <input id="password-field" type="password" class="form-control" name="pass" placeholder="Password">
                        <span class="fa fa-fw fa-eye field-icon toggle-password " data-toggle="#password-field"></span>
                    </div>
                    <button type="submit" class="btn btn-default">Đăng nhập</button>
                </form>
                <p>Tôi không có tài khoản &nbsp;- &nbsp; Quên mật khẩu</p>
            </div>
        </div>
    </section>
    <!-- END/BODY-LOGIN-->