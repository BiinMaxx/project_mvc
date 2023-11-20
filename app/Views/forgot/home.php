 <!-- BODY-LOGIN -->
 <section class="body-page page-v1">
        <div class="container">
            <div class="content">
                <h2 class="sky-h3" style="margin-bottom: 10px;padding-bottom: 30px;">Quên mật khẩu</h2>
              
                <form method="post" action="<?= BASE_URL ?>loginController/authentication">
                <div class="form-group">
                        <input type="email" name="email" class="form-control" value="" required="required" title="" placeholder="Email *">
                    </div>
                    <button type="submit" name="guiemail" class="btn btn-default">Gửi</button>
                </form>
                <p>Tôi không có tài khoản &nbsp;- &nbsp; Quên mật khẩu</p>
            </div>
        </div>
    </section>
    <!-- END/BODY-LOGIN-->