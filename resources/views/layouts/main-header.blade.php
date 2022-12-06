<!-- main-header opened -->
			<div class="main-header sticky side-header nav nav-item">
				<div class="container-fluid">
					<div class="main-header-left ">
						<div class="responsive-logo">
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/favicon.png')}}" class="dark-logo-2" alt="logo"></a>
						</div>
						
					</div>

					<div class="main-header-right">
						
						<div class="nav nav-item  navbar-nav-right ml-auto">
							
							<div class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user d-flex" href=""><img alt="" src="{{URL::asset('assets/img/6.jpg')}}"></a>
								<div class="dropdown-menu">
									<div class="main-header-profile bg-primary p-3">
										<div class="d-flex wd-100p">
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/6.jpg')}}" class=""></div>
											<div class="mr-3 my-auto">
												<h6>{{Auth::user()->name}}</h6><span>{{Auth::user()->email}}</span>
											</div>
										</div>
									</div>
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
										<i class="bx bx-log-out"></i>تسجيل خروج</a> 
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> 
												@csrf
											</form>
											
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
<!-- /main-header -->
