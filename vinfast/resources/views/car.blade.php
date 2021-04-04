@extends('welcome')
@section("content")
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
    <div class="about-vinfast pb-5">
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
@endsection