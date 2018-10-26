<aside class="sidebar nice-scroll" id="main-nav" role="menu">
	<div class="inner-content">
		<div class="pm-box clearfix">
            <a href="{{ route('logout') }}" class="btn btn-xs btn-lightgray btn-logout" 
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Sign out
            </a>
			<a class="btn-hover btn-ico person-avatar">
	            KC
	            <span class="hover-text">Change</span>
	        </a>
	        <p class="c-orange text-center m-b-0">
	        	Kevin Cayton
	        	<small class="d-block c-gray">President</small>
	        </p>	        
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
		</div>
		<div class="nav-link-list">
			<div class="nav-item">
				<a href="#" class="nav-link">Profile management</a>
			</div>
			<div class="nav-item">
				<a href="#" class="nav-link">Settings</a>
			</div>
			<div class="nav-item">
				<a href="#" class="nav-link with-ico">
					<span class="ico"><i class="sprite main-nav-ico-home"></i></span>
					<span>Home</span>
				</a>
				<a href="#" class="nav-link with-ico">
					<span class="ico"><i class="sprite main-nav-ico-assets"></i></span>
					<span>Assets</span>
				</a>
				<a href="#" class="nav-link with-ico">
					<span class="ico"><i class="sprite main-nav-ico-liabilities"></i></span>
					<span>Liabilities</span>
				</a>
				<a href="#" class="nav-link with-ico">
					<span class="ico"><i class="sprite main-nav-ico-stockholders"></i></span>
					<span>Stock Holders</span>
				</a>
				<a href="#" class="nav-link with-ico">
					<span class="ico"><i class="sprite main-nav-ico-revenue"></i></span>
					<span>Revenue</span>
				</a>
				<a href="#" class="nav-link with-ico">
					<span class="ico"><i class="sprite main-nav-ico-expenses"></i></span>
					<span>Expenses</span>
				</a>
				<a href="#" class="nav-link with-ico">
					<span class="ico"><i class="sprite main-nav-ico-onboard"></i></span>
					<span>On boarding</span>
				</a>
				<a href="#" class="nav-link with-ico">
					<span class="ico"><i class="sprite main-nav-ico-clients"></i></span>
					<span>Applications</span>
				</a>
				<a href="#" class="nav-link with-ico">
					<span class="ico"><i class="sprite main-nav-ico-clients"></i></span>
					<span>Clients</span>
				</a>
				<a href="#" class="nav-link with-ico">
					<span class="ico"><i class="sprite main-nav-ico-clients"></i></span>
					<span>Categories</span>
				</a>
				<a href="{{ route('products-index') }}" class="nav-link with-ico">
					<span class="ico"><i class="sprite main-nav-ico-clients"></i></span>
					<span>Products</span>
				</a>
				<a href="#" class="nav-link with-ico">
					<span class="ico"><i class="zmdi zmdi-notifications f-28 c-yellow"></i></span>
					<span>Notifications</span>
				</a>
				<a href="#" class="nav-link with-ico">
					<span class="ico"><i class="sprite main-nav-ico-download"></i></span>
					<span>Download</span>
				</a>
				<a href="#" class="nav-link with-ico">
					<span class="ico"><i class="sprite main-nav-ico-myaccount"></i></span>
					<span>My Account</span>
				</a>
			</div>
		</div>
	</div>
</aside>