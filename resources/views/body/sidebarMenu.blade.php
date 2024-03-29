<!-- Start: Sidebar Menu -->
	<ul class="nav sidebar-menu">
		{{-- <li class="sidebar-label pt20">EMPLOYEE</li> --}}
		{{-- DASHBOARD --}}
		{{-- <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
			<a href="{{route('dashboard')}}">
				<span class="fa-solid fa-house"></span>
				<span class="sidebar-title">Dashbooard</span>
				<span class="caret"></span>
			</a>
		</li> --}}

		{{-- E-COMMERCE --}}
		<li class="{{ Request::is('e-commerce*') ? 'active' : '' }}">
			<a class="accordion-toggle {{ Request::is('e-commerce*') ? 'menu-open' : '' }}">
				<span class="glyphicon glyphicon-shopping-cart"></span>
				<span class="sidebar-title">E-commerce</span>
				<span class="caret"></span>
			</a>

			<ul class="nav sub-nav">
				{{-- SUPPLY --}}
				<li class="{{ Request::is('e-commerce/supply*') ? 'active' : '' }}">
					<a href="{{ route('e-commerce.supply.index') }}">
						<span class="glyphicon glyphicon-inbox"></span>
						<span class="sidebar-title">Supply</span>
					</a>
				</li>

				{{-- DELIVERY --}}
				<li class="{{ Request::is('e-commerce/delivery*') ? 'active' : '' }}">
					<a class="accordion-toggle {{ Request::is('e-commerce/delivery*') ? 'menu-open' : '' }}">
						<span class="glyphicon glyphicon-circle-arrow-left"></span>
						<span class="sidebar-title">Delivery</span>
						<span class="caret"></span>
					</a>

					<ul class="nav sub-nav sub-nav">
						{{-- DELIVERED --}}
						<li class="{{ Request::is('e-commerce/delivery/delivered*') ? 'active' : '' }}">
							<a href="{{ route('e-commerce.delivery.delivered') }}">
								<span class="glyphicon glyphicon-ok-circle"></span> Delivered
							</a>
						</li>

						{{-- PEDNING --}}
						<li class="{{ Request::is('e-commerce/delivery/pending*') ? 'active' : '' }}">
							<a href="{{ route('e-commerce.delivery.pending') }}">
								<span class="glyphicon glyphicon-time"></span> Pending
							</a>
						</li>
					</ul>
				</li>

				{{-- RETURNS --}}
				<li class="{{ Request::is('e-commerce/returns*') ? 'active' : '' }}">
					<a class="accordion-toggle {{ Request::is('e-commerce/returns*') ? 'menu-open' : '' }}">
						<span class="glyphicon glyphicon-circle-arrow-right"></span>
						<span class="sidebar-title">Returns</span>
						<span class="caret"></span>
					</a>

					<ul class="nav sub-nav sub-nav">
						{{-- CANCELLED --}}
						<li class="{{ Request::is('e-commerce/returns/cancelled*') ? 'active' : '' }}">
							<a href="{{ route('e-commerce.returns.cancelled') }}">
								<span class="glyphicon glyphicon-remove-circle"></span> Cancelled
							</a>
						</li>

						{{-- DEFECTIVE --}}
						<li class="{{ Request::is('e-commerce/returns/defective*') ? 'active' : '' }}">
							<a href="{{ route('e-commerce.returns.defective') }}">
								<span class="glyphicon glyphicon-time"></span> Defective
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</li>

		{{-- TRANSACTIONS --}}
		<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
			<a href="{{ route('transactions.index') }}">
				<span class="glyphicon glyphicon-list-alt"></span>
				<span class="sidebar-title">Transactions</span>
				{{-- <span class="caret"></span> --}}
			</a>
		</li>
	</ul>

<!-- CHANGED THIS -->
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

	{{-- <div class="sidebar-toggle-mini">
		<a href="employee_pending#">
			<span class="fa fa-sign-out"></span>
		</a>
	</div> --}}
<!-- End: Sidebar Menu -->
