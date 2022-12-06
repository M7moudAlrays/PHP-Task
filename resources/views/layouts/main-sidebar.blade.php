<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
	<div class="main-sidebar-header active">	
	</div>
	<div class="main-sidemenu">
		<div class="app-sidebar__user clearfix">
			<div class="dropdown user-pro-body">
				<div class="">
					<img alt="user-img" class="avatar avatar-xl brround" src="{{ URL::asset('assets/img/user.jpg')}}"><span class="avatar-status profile-status bg-green"></span>						</div>
				<div class="user-info">
					<h4 class="font-weight-semibold mt-3 mb-0">{{Auth::user()->name}}</h4>
					<span class="mb-0 text-muted">{{Auth::user()->email}}</span>
				</div>
			</div>
		</div>

		<ul class="side-menu">	
			<li class="slide">
				<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
					<span class="side-menu__label"> الموظفين </span><i class="angle fe fe-chevron-down"></i>
				</a>
				<ul class="slide-menu">
					@can ('الموظفين')
					<li><a class="slide-item" href="{{ url('/' . $page='users') }}"> قائمة الموظفين </a></li>
					@endcan
				</ul>
			</li>	
		</ul>

		<ul class="side-menu">	
			<li class="slide">
				<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
					<span class="side-menu__label"> العملاء </span><i class="angle fe fe-chevron-down"></i>
				</a>
				<ul class="slide-menu">
					@can ('الموظفين')
					<li><a class="slide-item" href="{{ url('/' . $page='csts') }}"> قائمة العملاء </a></li>
					@endcan
				</ul>
			</li>	
		</ul>

		<ul class="side-menu">	
			<li class="slide">
				<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
					<span class="side-menu__label"> الصلاحيات </span><i class="angle fe fe-chevron-down"></i>
				</a>
				<ul class="slide-menu">
					{{-- @can ('عرض الصلاحيات') --}}
					<li><a class="slide-item" href="{{ url('/' . $page='roles') }}"> عرض الصلاحيات </a></li>
					{{-- @endcan --}}
				</ul>
			</li>	
		</ul>
		
	</div>
</aside>

