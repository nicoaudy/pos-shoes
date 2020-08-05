<div class="nk-aside" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg" data-toggle-body="true">
	<div class="nk-sidebar-menu" data-simplebar>
		<ul class="nk-menu">
			<li class="nk-menu-heading">
				<h6 class="overline-title">Menu</h6>
			</li>
			<li class="nk-menu-item">
				<a href="{{ route('home') }}" class="nk-menu-link">
					<span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
					<span class="nk-menu-text">Dashboard</span>
				</a>
			</li>
			<li class="nk-menu-item">
				<a href="{{ route('impersonate.index') }}" class="nk-menu-link">
					<span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
					<span class="nk-menu-text">Impersonate</span>
				</a>
			</li>
			<li class="nk-menu-heading">
				<h6 class="overline-title">See Others</h6>
			</li>
			<li class="nk-menu-item">
				<a href="#" class="nk-menu-link">
					<span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
					<span class="nk-menu-text">Administration</span>
				</a>
				<ul class="nk-menu-sub">
					<li class="nk-menu-item">
						<a href="{{ route('admin.roles.index') }}" class="nk-menu-link">
							<span class="nk-menu-text">Roles</span>
						</a>
					</li>
					<li class="nk-menu-item">
						<a href="{{ route('admin.permissions.index') }}" class="nk-menu-link">
							<span class="nk-menu-text">Permissions</span>
						</a>
					</li>
					<li class="nk-menu-item">
						<a href="{{ route('admin.users.index') }}" class="nk-menu-link">
							<span class="nk-menu-text">Users</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
		<ul class="nk-menu nk-menu-sm">
			<li class="nk-menu-heading">
				<span>Help Center</span>
			</li>
			<li class="nk-menu-item">
				<a href="#" class="nk-menu-link">
					<span class="nk-menu-text">FAQs</span>
				</a>
			</li>
			<li class="nk-menu-item">
				<a href="#" class="nk-menu-link">
					<span class="nk-menu-text">Contact</span>
				</a>
			</li>
			<li class="nk-menu-item">
				<a href="#" class="nk-menu-link">
					<span class="nk-menu-text">Support</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="nk-aside-close">
		<a href="#" class="toggle" data-target="sideNav"><em class="icon ni ni-cross"></em></a>
	</div>
</div>
