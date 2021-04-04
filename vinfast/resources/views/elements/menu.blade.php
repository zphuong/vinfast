    <header class="sticky"> 
    	<!-- menu -->
    	<nav class="menu navbar navbar-expand-sm navbar-light">
    		<div class="container"> 
    			<!-- logo --> 
    			<a href="#" class="logo"><img src="{{asset('public/frontend/image/logo1.png')}}" alt=""></a>
    			<!-- toggler/ collapsibe button -->
    			<button class="navbar-toggler menu-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
    			</button>
    			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    				<ul class="navbar-nav ml-auto">
    					<li class="nav-item"> <a class="nav-link dark" href="{{URL::to('/')}}">TRANG CHỦ</a> </li>
    					<li class="nav-item"> <a class="nav-link" href="{{URL::to('/gioi-thieu-vinfast-quang-ngai')}}">GIỚI THIỆU</a> </li>
    					<li class="nav-item"> <a class="nav-link" href="{{URL::to('/xe-vinfast')}}">XE VINFAST</a> </li>
    					<li class="nav-item"> <a class="nav-link" href="{{URL::to('tra-gop')}}">TRẢ GÓP</a> </li>
    					<li class="nav-item"> <a class="nav-link" href="{{URL::to('lien-he-vinfast-quang-ngai')}}">LIÊN HỆ</a> </li>

    				</ul>
    			</div>
    			<!-- navbar links --> 
    		</div>
    	</nav>
    	<!-- menu --> 
    </header>