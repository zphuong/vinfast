@extends('welcome')
@section("content")
    <!-- slide -->
    <div class="slide">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('public/frontend/image/vinfastbaner1.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('public/frontend/image/vinfastbaner2.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('public/frontend/image/vinfastbaner3.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
    <!-- slide -->
    <div class="container choose">
        <div class="row width70">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 text-center p-0 m-0">
                <div class="choose-item a"><i class="fa-2x fas fa-money-check"></i><br>YÊU CẦU BÁO GIÁ</div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 text-center p-0 m-0">
                <div class="choose-item c"><i class="fa-2x fas fa-file-invoice-dollar"></i><br>TÍNH PHÍ LĂN BÁNH</div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 text-center p-0 m-0">
                <div class="choose-item"><i class="fa-2x fas fa-chart-pie"></i><br>TÍNH LÃI TRẢ GÓP</div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 text-center p-0 m-0">
                <div class="choose-item"><i class="fa-2x fas fa-car"></i><br>ĐĂNG KÍ LÁI THỬ</div>
            </div>
        </div>
    </div>
    <div class="about-vinfast pb-5">
        <div class="container">
            <div class="text-center pt-5 pb-5">
                <h2>KHUYẾN MÃI VINFAST <hr></h2>
                
            </div>
            <div class="row ">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pt-5">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-12 col-xs-12 fas fa-gift big text-center">
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-12 col-xs-12">
                            <h4>TRƯỚC BẠ 0 ĐỒNG</h4>
                            <div>VinFast sẽ hỗ trợ toàn bộ phí trước bạ cho hai dòng xe này từ giờ cho đến hết năm 2020.</div>
                        </div>  
                    </div>
                    <div class="text">
                        Cụ thể, trong giai đoạn chờ Nghị quyết 84/NĐ-CP được áp dụng, khi người tiêu dùng vẫn phải đóng 100% lệ phí trước bạ, VinFast sẽ chi trả khoản phí này thay cho khách hàng. Khi Nghị quyết 84/NĐ-CP có hiệu lực, người tiêu dùng được giảm 50% lệ phí trước bạ, VinFast sẽ hỗ trợ chi trả 50% còn lại. Như vậy, kể từ ngày 4/6 đến hết năm 2020, khách hàng mua xe VinFast sẽ được tặng toàn bộ lệ phí trước bạ. Các chi phí này sẽ được trừ trực tiếp vào giá xe.
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pt-5">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-12 col-xs-12 fas fa-gift big text-center">
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-12 col-xs-12">
                            <h4>BẢO HÀNH 5 NĂM</h4>
                            <div>Nâng thời hạn bảo hành từ 3 lên 5 năm và cung cấp dịch vụ cứu hộ miễn phí 24/7 trong suốt thời gian bảo hành.</div>
                        </div>  
                    </div>
                    <div class="text">
                        Chương trình “Trước bạ 0 đồng – Bảo hành 5 năm” được áp dụng đồng thời với các ưu đãi khác đang được VinFast triển khai, như miễn lãi vay 2 năm đầu tiên cho khách hàng mua xe trả góp, hỗ trợ thêm nếu khách hàng thanh toán ngay 100%; “Đổi cũ lấy mới” tặng thêm tới 50 triệu đồng; sử dụng voucher được tặng khi mua nhà Vinhomes để mua xe VinFast; hay miễn phí gửi xe 6 tiếng/lần tại các cơ sở Vincom, Vinhomes trên toàn quốc…
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-vinfast bg-car pb-5">
        <div class="container">
            <div class="text-center pt-5 pb-5">
                <h2>XE VINFAST<hr></h2>
            </div>
            <div class="row text-center c">
                @foreach ($data as $key => $val)
                <div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 car">
                    <a href="{{URL::to($val->slug)}}" class="link">
                    <img src="{{asset('public/image/'.$val->image)}}">
                    <div class="car">{{$val->name_car}}</a></div>
                    <div class="price" >Giá từ: {{number_format($val->price_low).' '.'VNĐ'}}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="about-vinfast">
        <div class="container">
            <div class="text-center pt-5 pb-5">
                <h2>CÁC ƯU ĐÃI KHI MUA XE VINFAST TẠI QUẢNG NGÃI<hr></h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 pt-5">
                    <div class="row pt-5 pb-5">
                        <div class="col-xl-2 col-lg-2 col-md-12 col-xs-12 fas fa-gifts small text-center">
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-12 col-xs-12 text sale">
                            <h4>GIÁ CẢ ƯU ĐÃI - GIAO XE SỚM</h4>
                            <div>Vinfast Quảng Ngãi luôn cam kết mang lại mức giá ưu đãi nhất cho quý khách với thời gian giao xe nhanh nhất trong 1 ngày.</div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-12 col-xs-12 fas fa-globe-americas small text-center">
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-12 col-xs-12 text sale">
                            <h4>BẢO HÀNH THEO TIÊU CHUẨN TOÀN QUỐC</h4>
                            <div>Anh chị sẽ yên tâm khi mua xe tại Vinfast Quảng Ngãi, vì chúng tôi luôn bảo hành, bảo dưỡng và sửa chữa theo tiêu chuẩn chất lượng của Vinfast trên toàn quốc. BẢO HÀNH ĐẾN 5 NĂM.</div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-12 col-xs-12 fas fa-gift small text-center">
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-12 col-xs-12 text sale">
                            <h4>CÁC CHƯƠNG TRÌNH KHUYẾN MÃI KÈM THEO</h4>
                            <div>Với hoạt động bán hàng sôi nổi, chúng tôi luôn cập nhật sớm nhất các chương trình khuyến mãi của hãng và đại lý</div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-12 col-xs-12 fas fa-blender-phone small text-center">
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-12 col-xs-12 text sale">
                            <h4>HỖ TRỢ NHIỆT TÌNH</h4>
                            <div>Đội ngũ tư vấn luôn sẵn lòng giúp Anh chị tìm được chiếc xe ưng ý</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 pt-5">
                    <div class="image">
                        <img src="{{asset('public/frontend/image/VF32_frontview.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-vinfast">
        <div class="container">
            <div class="text-center pt-5 pb-5">
                <h2>ĐẶC ĐIỂM NỔI BẬT XE VINFAST<hr></h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 pt-2">
                    <div class="col-2 small2 fas fa-user-shield"></div>
                    <p class="text-center pt-3">AN TOÀN VƯỢT TRỘI</p>
                    <div class="col-11 charac text-center">
                        Với sự uy tín từ tập đoàn Vingroup xe Vinfast đảm bảo an toàn của bạn và người thân luôn đặt lên hàng đầu. Khung sườn làm bằng thép chịu lực chắc chắn, Túi khí an toàn, ABS, Cảm biến lùi, Cảnh báo va chạm, Cân bằng điện tử, Cảm biến áp suất lốp, Hệ thống chống trượt… Bạn cũng hoàn toàn yên tâm khi trải nghiệm những chuyến đi xa cùng cả gia đình mình.
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 pt-2">
                    <div class="col-2 small2 fas fa-fist-raised"></div>
                    <p class="text-center pt-3">VẬN HÀNH BỀN BỈ</p>
                    <div class="col-11 charac text-center">
                        Động cơ của Vinfast được thiết kế trên nguyên lý động cơ BMW mới là một trong những động cơ tiên tiến và hiện đại nhất thế giới. Động cơ được thiết kế tối ưu tiết kiệm nhiên liệu nhưng vẫn đảm bảo công xuất xe mạnh mẽ. Động cơ BMW N20 được coi là vận hành ổn định và tốt nhất trong các dòng xe, giúp bạn yên tâm trên mọi cung đường!
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 pt-2">
                    <div class="col-2 small2 far fa-gem"></div>
                    <p class="text-center pt-3">ĐẲNG CẤP - TIỆN NGHI</p>
                    <div class="col-11 charac text-center">
                        Xe Vinfast có đường nét thiết kế Mạnh mẽ, Sang trọng, Lịch lãm. Nội thất xe hoàn thiện tỉ mỉ từng chi tiết, từ vật liệu chế tác cho đến khâu hoàn thiện. Hệ thống giải trí trên Vinfast trang bị đầy đủ các tính năng của dòng xe cao cấp. Với cả gia đình bạn thì điều tuyệt vời nhất chính là trải nghiệm 1 chiếc xe tuyệt vời, đầy đủ tiện nghi trên từng cung đường!
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 pt-2">
                    <div class="col-2 small2 fas fa-star"></div>
                    <p class="text-center pt-3">THƯƠNG HIỆU</p>
                    <div class="col-11 charac text-center">
                        Đạt mức 5 sao về chỉ số An toàn tổng hợp cho xe hơi của Ủy ban An toàn giao thông Đường cao tốc Quốc gia “Vinfast” Lọt vào Top những chiếc xe bán chạy. Top những chiếc xe có nội thất tốt nhất Việt Nam. Với danh tiếng từ tập đoàn Vingroup tự hào khi là thương hiệu hàng đầu khi có mặt ở Việt Nam với nhiều danh hiệu nổi tiếng trong và ngoài nước!
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5 pb-5">
        <iframe width="100%" height="400" src="https://www.youtube.com/embed/AwJYy8rOCJo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
@endsection