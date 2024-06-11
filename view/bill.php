<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Góp ý</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Trang chủ</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Góp ý</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h1 class="px-5"><span class="px-2">Thanh toán thành công</span></h1><br>
        <h4 class="section-title px-5"><span class="px-2">Góp ý khách hàng</span></h4>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg mb-5">
            <div class="contact-form">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" placeholder="Your Name"
                            value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['name'] : ''; ?>"
                            data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>

                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" placeholder="Your Email"
                            value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['email'] : ''; ?>"
                            data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required"
                            data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" rows="6" id="message" placeholder="Message" required="required"
                            data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Gửi góp
                            ý</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->