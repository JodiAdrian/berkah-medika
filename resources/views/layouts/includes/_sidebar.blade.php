<!--begin::Aside-->
<div class="aside aside-left d-flex flex-column flex-row-auto" id="kt_aside">
	<!--begin::Aside Menu-->
	<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
		<!--begin::Menu Container-->
		<div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
			<!--begin::Menu Nav-->
			<ul class="menu-nav">
				<li class="menu-item {{ Route::is('patient') ? 'menu-item-active' : '' }}" aria-haspopup="true">
					<a href="{{ route('patient') }}" class="menu-link">
						<span class="svg-icon menu-icon">
							<!-- begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
							<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo5\dist/../src/media/svg/icons\General\User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <polygon points="0 0 24 0 24 24 0 24"/> <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/> <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/> </g> </svg><!--end::Svg Icon--></span>
							<!--end::Svg Icon -->
						</span>
						<span class="menu-text">Pasien</span>
					</a>
				</li>
				<li class="menu-item {{ Route::is('medical-record') ? 'menu-item-active' : '' }}" aria-haspopup="true">
					<a href="{{ route('medical-record') }}" class="menu-link">
						<span class="svg-icon menu-icon">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
							<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo5\dist/../src/media/svg/icons\Files\User-folder.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect x="0" y="0" width="24" height="24"/> <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/> <path d="M12,13 C10.8954305,13 10,12.1045695 10,11 C10,9.8954305 10.8954305,9 12,9 C13.1045695,9 14,9.8954305 14,11 C14,12.1045695 13.1045695,13 12,13 Z" fill="#000000" opacity="0.3"/> <path d="M7.00036205,18.4995035 C7.21569918,15.5165724 9.36772908,14 11.9907452,14 C14.6506758,14 16.8360465,15.4332455 16.9988413,18.5 C17.0053266,18.6221713 16.9988413,19 16.5815,19 C14.5228466,19 11.463736,19 7.4041679,19 C7.26484009,19 6.98863236,18.6619875 7.00036205,18.4995035 Z" fill="#000000" opacity="0.3"/> </g> </svg><!--end::Svg Icon--></span>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-text">Rekam Medis</span>
					</a>
				</li>
				<li class="menu-item {{ Route::is('medicine') ? 'menu-item-active' : '' }}" aria-haspopup="true">
					<a href="{{ route('medicine') }}" class="menu-link">
						<span class="svg-icon menu-icon">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
							<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo5\dist/../src/media/svg/icons\Food\Bottle1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect x="0" y="0" width="24" height="24"/> <path d="M6.2,9.73333333 L8.7,6.4 C8.88885438,6.14819416 9.1852427,6 9.5,6 L14.5,6 C14.8147573,6 15.1111456,6.14819416 15.3,6.4 L17.8,9.73333333 C17.9298221,9.9064295 18,10.1169631 18,10.3333333 L18,21 C18,22.1045695 17.1045695,23 16,23 L8,23 C6.8954305,23 6,22.1045695 6,21 L6,10.3333333 C6,10.1169631 6.07017787,9.9064295 6.2,9.73333333 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,20 C8,20.5522847 8.44771525,21 9,21 L10,21 C10.5522847,21 11,20.5522847 11,20 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z" fill="#000000"/> <rect fill="#000000" opacity="0.3" x="9" y="1" width="6" height="3" rx="1"/> </g> </svg><!--end::Svg Icon--></span>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-text">Obat</span>
					</a>
				</li>
				<li class="menu-item {{ Route::is('device') ? 'menu-item-active' : '' }}" aria-haspopup="true">
					<a href="{{ route('device') }}" class="menu-link">
						<span class="svg-icon menu-icon">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
							<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo5\dist/../src/media/svg/icons\Food\Bottle1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24"/>
								<path d="M7.70696074,11.6465196 L4.15660341,9.75299572 C3.96167938,9.64903623 3.88793804,9.40674327 3.99189753,9.21181925 C4.08361072,9.03985702 4.28590727,8.95902234 4.47087102,9.0204286 L9.57205231,10.7139738 L7.70696074,11.6465196 Z M12.7322989,14.3267 L16.3686753,12.9703901 L18.6316817,13.7216874 L18.6299527,13.7225513 C20.0084876,14.1925077 21,15.4985341 21,17.0361406 C21,18.9691372 19.4329966,20.5361406 17.5,20.5361406 C15.5670034,20.5361406 14,18.9691372 14,17.0361406 C14,16.3880326 14.176158,15.7810686 14.4832056,15.2605169 L12.7322989,14.3267 Z M17.5,15.5361406 C16.6715729,15.5361406 16,16.2077134 16,17.0361406 C16,17.8645677 16.6715729,18.5361406 17.5,18.5361406 C18.3284271,18.5361406 19,17.8645677 19,17.0361406 C19,16.2077134 18.3284271,15.5361406 17.5,15.5361406 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
								<path d="M17.5,9 C18.3284271,9 19,8.32842712 19,7.5 C19,6.67157288 18.3284271,6 17.5,6 C16.6715729,6 16,6.67157288 16,7.5 C16,8.32842712 16.6715729,9 17.5,9 Z M14.4832056,9.27562366 C14.176158,8.75507197 14,8.14810794 14,7.5 C14,5.56700338 15.5670034,4 17.5,4 C19.4329966,4 21,5.56700338 21,7.5 C21,9.03760648 20.0084876,10.3436328 18.6299527,10.8135893 L18.6316817,10.8144531 L4.47087102,15.515712 C4.28590727,15.5771182 4.08361072,15.4962835 3.99189753,15.3243213 C3.88793804,15.1293973 3.96167938,14.8871043 4.15660341,14.7831448 L14.4832056,9.27562366 Z" fill="#000000" fill-rule="nonzero"/>
							</g> </svg><!--end::Svg Icon--></span>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-text">Alat Medis</span>
					</a>
				</li>
			</ul>
			<!--end::Menu Nav-->
		</div>
		<!--end::Menu Container-->
	</div>
	<!--end::Aside Menu-->
	</div>
	<!--end::Aside-->