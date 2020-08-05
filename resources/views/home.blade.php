@extends('laraboi.app')

@section('content')
	<div class="nk-block-head nk-block-head-lg">
		<div class="nk-block-between-md g-4">
			<div class="nk-block-head-content">
				<h2 class="nk-block-title fw-normal">Welcome, {{ ucfirst(auth()->user()->name) }}</h2>
				<div class="nk-block-des">
					<p>Welcome to our dashboard ☕️.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="nk-block">
		<div class="row g-gs">
			<div class="col-md-6">
				<div class="card card-bordered card-full">
					<div class="nk-wg1">
						<div class="nk-wg1-block">
							<div class="nk-wg1-img">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
									<rect x="5" y="7" width="60" height="56" rx="7" ry="7" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<rect x="25" y="27" width="60" height="56" rx="7" ry="7" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<rect x="15" y="17" width="60" height="56" rx="7" ry="7" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<line x1="15" y1="29" x2="75" y2="29" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
									<circle cx="53" cy="23" r="2" fill="#c4cefe" />
									<circle cx="60" cy="23" r="2" fill="#c4cefe" />
									<circle cx="67" cy="23" r="2" fill="#c4cefe" />
									<rect x="22" y="39" width="20" height="20" rx="2" ry="2" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<circle cx="32" cy="45.81" r="2" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<path d="M29,54.31a3,3,0,0,1,6,0" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<line x1="49" y1="40" x2="69" y2="40" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<line x1="49" y1="51" x2="69" y2="51" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<line x1="49" y1="57" x2="59" y2="57" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<line x1="64" y1="57" x2="66" y2="57" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<line x1="49" y1="46" x2="59" y2="46" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<line x1="64" y1="46" x2="66" y2="46" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" /></svg>
							</div>
							<div class="nk-wg1-text">
								<h5 class="title">Personal Info</h5>
								<p>See your profile data and manage your Account to choose what is saved in our system.</p>
							</div>
						</div>
						<div class="nk-wg1-action">
							<a href="{{ route('profile.index') }}" class="link"><span>Manage Your Account</span> <em class="icon ni ni-chevron-right"></em></a>
						</div>
					</div>
				</div>
			</div><!-- .col -->
			<div class="col-md-6">
				<div class="card card-bordered card-full">
					<div class="nk-wg1">
						<div class="nk-wg1-block">
							<div class="nk-wg1-img">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
									<path d="M40.74,5.16l38.67,9.23a6,6,0,0,1,4.43,7.22L70.08,80a6,6,0,0,1-7.17,4.46L24.23,75.22A6,6,0,0,1,19.81,68L33.56,9.62A6,6,0,0,1,40.74,5.16Z" fill="#eff1ff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<path d="M50.59,6.5,11.18,11.73a6,6,0,0,0-5.13,6.73L13.85,78a6,6,0,0,0,6.69,5.16l39.4-5.23a6,6,0,0,0,5.14-6.73l-7.8-59.49A6,6,0,0,0,50.59,6.5Z" fill="#eff1ff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<rect x="15" y="15" width="54" height="70" rx="6" ry="6" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<line x1="42" y1="77" x2="58" y2="77" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<circle cx="38" cy="77" r="0.5" fill="#c4cefe" stroke="#c4cefe" stroke-miterlimit="10" />
									<line x1="42" y1="72" x2="58" y2="72" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<circle cx="38" cy="72" r="0.5" fill="#c4cefe" stroke="#c4cefe" stroke-miterlimit="10" />
									<line x1="42" y1="66" x2="58" y2="66" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<circle cx="38" cy="66" r="0.5" fill="#c4cefe" stroke="#c4cefe" stroke-miterlimit="10" />
									<path d="M46,40l-15-.3V40A15,15,0,1,0,46,25h-.36Z" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<path d="M42,22A14,14,0,0,0,28,36H42V22" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<polyline points="33.47 30.07 28.87 23 23 23" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
									<polyline points="25 56 35 56 40.14 49" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" /></svg>
							</div>
							<div class="nk-wg1-text">
								<h5 class="title">Account Reports</h5>
								<p>Check your reports of uses and manage your packages or subscriptions that you have.</p>
							</div>
						</div>
						<div class="nk-wg1-action">
							<a href="#" class="link"><span>Manage Subscription</span> <em class="icon ni ni-chevron-right"></em></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="nk-block">
		<div class="card card-bordered">
			<div class="card-inner card-inner-md">
				<div class="card-title-group">
					<h6 class="card-title">User Activity</h6>
					<div class="card-action">
						<a href="{{ route('admin.users.index') }}" class="link link-sm">See All <em class="icon ni ni-chevron-right"></em></a>
					</div>
				</div>
			</div>
			<table class="table table-tranx">
				<thead>
					<tr class="tb-tnx-head">
						<th class="tb-tnx-id"><span class="">#</span></th>
						<th class="tb-tnx-info">
							<span class="tb-tnx-desc d-none d-sm-inline-block">
								<span>Email</span>
							</span>
							<span class="tb-tnx-date d-md-inline-block d-none">
								<span class="d-md-none">Activity</span>
								<span class="d-none d-md-block">
									<span>Created At</span>
									<span>Last Logged In</span>
								</span>
							</span>
						</th>
						<th class="tb-tnx-amount">
							<span class="tb-tnx-status d-none d-md-inline-block">Status</span>
						</th>
				</thead>
				<tbody>
					@foreach($users as $log)
					<tr class="tb-tnx-item">
						<td class="tb-tnx-id">
							<a href="{{ route('admin.users.show', $log->id) }}"><span>{{ $log->id }}</span></a>
						</td>
						<td class="tb-tnx-info">
							<div class="tb-tnx-desc">
								<span class="title">{{ $log->username }}</span>
							</div>
							<div class="tb-tnx-date">
								<span class="date">{{ $log->created_at }}</span>
								<span class="date">{{ \Carbon\Carbon::parse($log->last_login)->diffForHumans() }}</span>
							</div>
						</td>
						<td class="tb-tnx-amount">
							<div class="tb-tnx-status">
								<span class="badge badge-dot badge-{{ $log->active ? 'success' : 'warning' }}">{{ $log->active ? 'Active' : 'Inactive' }}</span>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection