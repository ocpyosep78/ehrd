<div id="left">
			<form action="search-results.html" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Search here...">
					<button type="submit"><i class="icon-search"></i></button>
				</div>
			</form>
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><span>Dashboard</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="#">{{ Auth::user()->idjabatan == '1' }}</a>
					</li>
				</ul>
			</div>
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Penggajian</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="#">Home</a>
					</li>
				</ul>
			</div>
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Absensi</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{ URL::asset('hrdmanager/absensi') }}">Daftar Absensi</a>
					</li>
				</ul>
			</div>
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Cuti</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{ URL::asset('hrdmanager/cuti') }}">Accept Cuti</a>
					</li>
				</ul>
			</div>
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Pelatihan</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{ URL::asset('hrdmanager/pelatihan') }}">Accept Pelatihan</a>
					</li>
				</ul>
			</div>
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Pengunduran Diri</span></a>
				</div>
				<ul class="subnav-menu subnav-hidden">
					<li>
						<a href="{{Url::asset('hrdmanager/pengunduran-diri')}}">Accept Pengunduran Diri</a>
					</li>
				</ul>
			</div>
		</div>