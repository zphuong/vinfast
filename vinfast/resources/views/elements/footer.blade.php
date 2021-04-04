<footer>
    <div class="social-button">
        <div class="social-button-content">
         <a href="tel:0969012724" class="call-icon hide" rel="nofollow">
          <i class="fab fa-whatsapp-square" aria-hidden="true"></i>
          <div class="animated alo-circle-fill  "></div>
          <span>Hotline: 0969 012 724</span>
      </a>
      <a href="https://www.facebook.com/messages/t/100007405002857" class="mes">
          <i class="fab fa-facebook" aria-hidden="true"></i>
          <div class="animated alo-circle-fill  "></div>
          <span>Nhắn tin Facebook</span>
      </a>
      <a href="http://zalo.me/0969012724" class="zalo">
          <i class="fas fa-comments" aria-hidden="true"></i>
          <div class="animated alo-circle-fill  "></div>
          <span>Zalo: 0969 012 724</span>
      </a>
  </div>
</div>    
<div class="container-fluid">
    <div class="slide container row">
        <div class="col-xl-3 col-md-6 col-lg-3 col-xs-12">
          <form action="{{URL::to('saveuser')}}" method="post">
            {!!csrf_field()!!}      
            <span>TƯ VẤN NHANH</span>
            <hr>
            <div class="mb-3 pt-2">
                <label for="exampleInputEmail1" class="form-label">Tên của bạn</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="phone">
                <div id="emailHelp" class="form-text">Chúng tôi sẽ không bao giờ để lộ thông tin của bạn.</div>
            </div>
            <button type="submit" class="btn btn-primary" id="btn">ĐĂNG KÍ</button>
        </form>
    </div>
    <div class="col-xl-3 col-md-6 col-lg-3 col-xs-12">
        <span>THÔNG TIN NHANH</span>
        <hr>
        <ul>
            <li>Xem bản đồ</li>
        </ul>
    </div>
    <div class="col-xl-3 col-md-6 col-lg-3 col-xs-12">
        <span>LIÊN HỆ</span>
        <hr>
        <ul>
            <li>Địa chỉ:</li>
            <li>Số điện thoại:</li>
            <li>Email:</li>
        </ul>
    </div>
    <div class="col-xl-3 col-md-3 col-lg-3 col-xs-12">
        <span>XE VINFAST</span>
        <hr>
        <ul>
            <li>Địa chỉ:</li>
            <li>Số điện thoại:</li>
            <li>Email:</li>
        </ul>
    </div>
</div>
<div class="text-center">Thiết kế bởi zphuong</div>
</div>
<script language="javascript">
    var button = document.getElementById("btn");
    button.onclick = function(){
        alert("Cảm ơn bạn đã để lại thông tin, chúng tôi sẽ sớm liên hệ lại cho bạn");
    }
</script>
</footer>
