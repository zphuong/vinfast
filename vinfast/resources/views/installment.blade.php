@extends('welcome')
@section("content")
<div class="installment">
    <div class="container">
        <div class="text-center pt-5 pb-5">
            <h2>MUA XE VINFAST TRẢ GÓP<hr></h2>
        </div>
        <div class="row pb-5">
            <div class="col-xl-6 col-lg-6 col-md-12 col-xs-12">
                <p>Là trả trước một phần tiền mua xe, phần còn thiếu sẽ vay ngân hàng rồi hàng tháng trả dần cho ngân hàng cả gốc và lãi theo phuơng thức trừ lùi trong suốt thời gian trả góp.</p>
                <p>Ví dụ:</p>
                <p class="installment-box">Khách hàng A mua trả góp xe VinFast Fadil trị giá 336 triệu theo phương thức: TRẢ TRƯỚC 20% = 68 triệu, phần còn lại là 268 triệu sẽ vay ngân hàng với lãi suất 7.9%/năm không đổi trong 12 tháng đầu tháng đầu, sau 12 tháng lãi suất là (10.5%/ 1 năm) và trả góp trong 5-7 năm (Cụ thể: sau khi tính toán, mỗi tháng khách hàng A phải trả 1.764.333 VNĐ (tiền lãi cho tháng đầu tiên) và biên độ giảm dần đến tháng cuối cùng là theo quy tắc trừ lùi 29.563 VNĐ (tiễn lãi tháng cuối cùng). Như vậy trong 5 năm tổng số tiền lãi khách hàng phải chịu là 54.099.375 VNĐ.</p>
                <p>Hỗ trợ tư vẫn mua xe Vinfast trả góp tới 80% giá trị xe, thời gian vay tối đa 7 năm. Thủ tục đơn giản nhanh gọn, thời gian thẩm duyệt trong vòng 24h, kể cả khách hàng ở tỉnh, bao đậu hồ sơ khó. Vui lòng liên hệ để được tư vấn chính xác.</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-xs-12">
               <form action="{{URL::to('saveuser')}}" method="post">
                {!!csrf_field()!!}      
                
                <h4>ĐĂNG KÍ MUA XE VINFAST TRẢ GÓP</h4>
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
                <button type="submit" class="btn btn-primary">ĐĂNG KÍ</button>
            </form>
        </div>
    </div>
</div>
<div class="installment-item pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="installment-item">
                    <div class="col-2 small3 fas fa-star pt-3"></div>
                    <p class="text-center pt-3 item">Lợi ích khi mua xe trả góp <hr></p>
                    <ul>
                        <li>Số tiền vay lên đến 95% giá trị xe.</li>
                        <li>Thời gian vay lên đến 7 năm.</li>
                        <li>Tài trợ vay mua xe ô tô mới và xe ô tô đã qua sử dụng.</li>
                        <li>Thủ tục vay đơn giản, thời gian xử lý hồ sơ nhanh chóng</li>
                        <li>Phương thức trả nợ linh hoạt: lãi trả hàng tháng/hàng quý, vốn trả theo phương thức vốn góp đều hoặc vốn góp bậc thang giảm dần.</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="installment-item">
                    <div class="col-2 small3 fas fa-star pt-3"></div>
                    <p class="text-center pt-3 item">Điều kiện mua xe trả góp <hr></p>
                    <ul>
                        <li>Cá nhân từ 18 tuổi trở lên.</li>
                        <li>Doanh nghiệp thành lập trên 6 tháng.</li>
                        <li>Có hợp đồng mua bán xe và các giấy tờ có liên quan.</li>
                        <li>Có thu nhập đảm bảo cho việc trả nợ cho Ngân hàng.</li>
                        <li>Có tài sản đảm bảo: là chính chiếc xe ô tô mà Quý khách mua, bất động sản hoặc tài sản khác.</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="installment-item">

                    <div class="col-2 small3 fas fa-star pt-3"></div>
                    <p class="text-center pt-3 item">Đối tượng thích hợp nhất
                        <hr></p>
                        <ul>
                            <li>Doanh nhân, doanh nghiệp: những người có khả năng sử dụng tiền để kinh doanh sinh lời nhiều hơn là tỷ lệ lãi suất tiền cho vay của ngân hàng.</li>
                            <li>Những người rất cần sử dụng xe, sẽ có đủ tiền mua xe trong một tương lai gần nhưng hiện tại chưa tập trung đủ tiền để mua xe trả thẳng.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pt-5">
                <h3 class="text-center">I. ĐỐI VỚI CÁ NHÂN</h3>
                <ul>
                    <li>Chứng Minh Nhân Dân và Hộ khẩu.</li>
                    <li>Giấy chứng nhận độc thân hoặc Giấy chứng nhận đăng ký kết hôn.</li>
                    <li>Những giấy tờ chứng minh thu nhập:
                        <ul>
                            <li>Giấy xác nhận mức lương và hợp đồng lao động, sổ tiết kiệm, tài khoản cá nhân.</li>
                            <li>Hợp đồng cho thuê nhà, cho thuê xe, cho thuê xưởng, giấy góp vốn, cổ phần, cổ phiếu, trái phiếu.</li>
                            <li>Giấy tờ xác nhận sở hữu tài sản có giá trị: bất động sản, các loại xe ô tô, máy móc, dây chuyền nhà máy, nhà xưởng…</li>
                            <li>Nếu cá nhân có công ty riêng mà thu nhập chủ yếu từ công ty thì cần thêm: giấy phép kinh doanh, báo cáo thuế, báo cáo tài chính, bảng lương, bảng chia lợi nhuận từ công ty.</li>
                        </ul>
                    </li>
                </ul>
                <p>(Trong trường hợp cá nhân không đủ điều kiện vay Ngân hàng, có thể nhờ người thân có khả năng và thu nhập tốt làm giấy bảo lãnh cho Ngân hàng thẩm định).</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pt-5">
                <h3 class="text-center">II. ĐỐI VỚI DOANH NGHIỆP</h3>
                <ul>
                 <li>Giấy phép kinh doanh.</li>
                 <li>Mã số thuế.</li>
                 <li>Giấy bổ nhiệm Giám đốc, bổ nhiệm Kế toán trưởng.</li>
                 <li>Giấy đăng kí sử dụng mẫu dấu.</li>
                 <li>Báo cáo thuế một năm (hoặc 6 tháng) gần nhất.</li>
                 <li>Báo cáo hóa đơn VAT một năm (hoặc 6 tháng) gần nhất.</li>
                 <li>Báo cáo tài chính một năm (hoặc 6 tháng) gần nhất.</li>
                 <li>Hợp đồng kinh tế đầu ra, đầu vào.</li>
             </ul>
             <p>(Trong trường hợp cá nhân không đủ điều kiện vay Ngân hàng, có thể nhờ người thân có khả năng và thu nhập tốt làm giấy bảo lãnh cho Ngân hàng thẩm định).</p>
         </div>

     </div>
 </div>
</div>
@endsection