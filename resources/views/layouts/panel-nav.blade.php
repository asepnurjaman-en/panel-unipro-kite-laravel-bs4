@php
	$menus = [
		[
			'id'    => [
				'panel.dashboard.index',
				'panel.dashboard.analytics',
				'panel.dashboard.sales',
				'panel.dashboard.crm',
				'panel.dashboard.reports',
				'panel.dashboard.saas',
				'panel.dashboard.consulting',
				'panel.dashboard.profile',
				'panel.dashboard.starter-page',
				'panel.dashboard.layout-hover-tabs',
				'panel.dashboard.layout-daterange',
				'panel.dashboard.layout-breadcrumb',
				'panel.dashboard.layout-scroll-cards'
			],
			'name'  => 'dashboards-tab',
			'icon'  => 'icon-home2',
			'title' => 'dashboards',
			'category'	=> [
				[
					'title'	=> 'dashboard',
					'menu'	=> [
						[
							'id'    => ['panel.dashboard.index'],
							'title' => 'dashboard',
							'url'   => route('panel.dashboard.index'),
						],
						[
							'id'    => ['panel.dashboard.analytics'],
							'title' => 'analytics',
							'url'   => route('panel.dashboard.analytics'),
						],
						[
							'id'    => ['panel.dashboard.sales'],
							'title' => 'sales',
							'url'   => route('panel.dashboard.sales'),
						],
						[
							'id'    => ['panel.dashboard.crm'],
							'title' => 'crm',
							'url'   => route('panel.dashboard.crm'),
						],
						[
							'id'    => ['panel.dashboard.reports'],
							'title' => 'reports',
							'url'   => route('panel.dashboard.reports'),
						],
						[
							'id'    => ['panel.dashboard.saas'],
							'title' => 'saas',
							'url'   => route('panel.dashboard.saas'),
						],
						[
							'id'    => ['panel.dashboard.consulting'],
							'title' => 'consulting',
							'url'   => route('panel.dashboard.consulting'),
						],
						[
							'id'    => ['panel.dashboard.profile'],
							'title' => 'profile',
							'url'   => route('panel.dashboard.profile'),
						],
					]
				],
				[
					'title'	=> 'layouts',
					'menu'	=> [
						[
							'id'    => ['panel.dashboard.starter-page'],
							'title' => 'starter page',
							'url'   => route('panel.dashboard.starter-page'),
						],
						[
							'id'    => ['panel.dashboard.layout-hover-tabs'],
							'title' => 'hover tabs',
							'url'   => route('panel.dashboard.layout-hover-tabs'),
						],
						[
							'id'    => ['panel.dashboard.layout-daterange'],
							'title' => 'date range',
							'url'   => route('panel.dashboard.layout-daterange'),
						],
						[
							'id'    => ['panel.dashboard.layout-breadcrumb'],
							'title' => 'breadcrumb',
							'url'   => route('panel.dashboard.layout-breadcrumb'),
						],
						[
							'id'    => ['panel.dashboard.layout-scroll-cards'],
							'title' => 'scroll cards',
							'url'   => route('panel.dashboard.layout-scroll-cards'),
						],
					]
				]
			],
		],
		[
			'id'    => [
				'panel.products.products',
				'panel.products.products-list',
				'panel.products.add-product',
				'panel.products.product-reviews',
				'panel.products.orders',
				'panel.products.customers-list',
				'panel.calendar.daygrid-view',
				'panel.calendar.list-view',
				'panel.calendar.external-dragging',
				'panel.calendar.google-view',
				'panel.calendar.selectable'
			],
			'name'  => 'product-tab',
			'icon'  => 'icon-layers2',
			'title' => 'product',
			'category' => [
				[
					'title'	=> 'products',
					'menu'	=> [
						[
							'id'    => ['panel.products.products'],
							'title' => 'products',
							'url'   => route('panel.products.products'),
						],
						[
							'id'    => ['panel.products.products-list'],
							'title' => 'products list',
							'url'   => route('panel.products.products-list'),
						],
						[
							'id'    => ['panel.products.add-product'],
							'title' => 'add product',
							'url'   => route('panel.products.add-product'),
						],
						[
							'id'    => ['panel.products.product-reviews'],
							'title' => 'products reviews',
							'url'   => route('panel.products.product-reviews'),
						],
					]
				],
				[
					'title'	=> 'customers',
					'menu'	=> [
						[
							'id'    => ['panel.products.orders'],
							'title' => 'orders',
							'url'   => route('panel.products.orders'),
						],
						[
							'id'    => ['panel.products.customers-list'],
							'title' => 'customers list',
							'url'   => route('panel.products.customers-list'),
						],
					],
				],
				[
					'title'	=> 'calendar',
					'menu'	=> [
						[
							'id'    => ['panel.calendar.daygrid-view'],
							'title' => 'calendar daygrid',
							'url'   => route('panel.calendar.daygrid-view'),
							'active'=> 1
						],
						[
							'id'    => ['panel.calendar.list-view'],
							'title' => 'calendar list',
							'url'   => route('panel.calendar.list-view'),
							'active'=> 1
						],
						[
							'id'    => ['panel.calendar.external-dragging'],
							'title' => 'calendar dragable',
							'url'   => route('panel.calendar.external-dragging'),
							'active'=> 1
						],
						[
							'id'    => ['panel.calendar.google-view'],
							'title' => 'calendar google',
							'url'   => route('panel.calendar.google-view'),
							'active'=> 1
						],
						[
							'id'    => ['panel.calendar.selectable'],
							'title' => 'calendar selectable',
							'url'   => route('panel.calendar.selectable'),
							'active'=> 1
						],
					]
				]
			]
		],
		[
			'id'    => [
				'panel.pages.account-settings',
				'panel.pages.chat',
				'panel.pages.contacts',
				'panel.pages.create-invoice',
				'panel.pages.documents',
				'panel.pages.faqs',
				'panel.pages.gallery-tiles',
				'panel.pages.gallery',
				'panel.pages.pricing',
				'panel.pages.search-results',
				'panel.pages.tasks',
				'panel.pages.timeline',
				'panel.pages.user-profile',
				'panel.pages.view-invoice',
			],
			'name'  => 'pages-tab',
			'icon'  => 'icon-book-open',
			'title' => 'pages',
			'category' => [
				[
					'title'	=> 'user',
					'menu'	=> [
						[
							'id'    => ['panel.pages.user-profile'],
							'title' => 'user profile',
							'url'   => route('panel.pages.user-profile'),
							'active'=> 1
						],
						[
							'id'    => ['panel.pages.account-settings'],
							'title' => 'account settings',
							'url'   => route('panel.pages.account-settings'),
							'active'=> 1
						],
						[
							'id'    => ['panel.pages.chat'],
							'title' => 'chat',
							'url'   => route('panel.pages.chat'),
							'active'=> 1
						],
						[
							'id'    => ['panel.pages.contacts'],
							'title' => 'contacts',
							'url'   => route('panel.pages.contacts'),
							'active'=> 1
						],
					]
				],
				[
					'title'	=> 'invoice',
					'menu'	=> [
						[
							'id'    => ['panel.pages.create-invoice'],
							'title' => 'create invoice',
							'url'   => route('panel.pages.create-invoice'),
							'active'=> 1
						],
						[
							'id'    => ['panel.pages.view-invoice'],
							'title' => 'view invoice',
							'url'   => route('panel.pages.view-invoice'),
							'active'=> 1
						],
						[
							'id'    => ['panel.pages.documents'],
							'title' => 'documents',
							'url'   => route('panel.pages.documents'),
							'active'=> 1
						],
					]
				],
				[
					'title'	=> 'additional',
					'menu'	=> [
						[
							'id'    => ['panel.pages.faqs'],
							'title' => 'faqs',
							'url'   => route('panel.pages.faqs'),
							'active'=> 1
						],
						[
							'id'    => ['panel.pages.gallery'],
							'title' => 'gallery',
							'url'   => route('panel.pages.gallery'),
							'active'=> 1
						],
						[
							'id'    => ['panel.pages.gallery-tiles'],
							'title' => 'gallery tiles',
							'url'   => route('panel.pages.gallery-tiles'),
							'active'=> 1
						],
						[
							'id'    => ['panel.pages.pricing'],
							'title' => 'pricing',
							'url'   => route('panel.pages.pricing'),
							'active'=> 1
						],
						[
							'id'    => ['panel.pages.search-results'],
							'title' => 'search results',
							'url'   => route('panel.pages.search-results'),
							'active'=> 1
						],
						[
							'id'    => ['panel.pages.tasks'],
							'title' => 'tasks',
							'url'   => route('panel.pages.tasks'),
							'active'=> 1
						],
						[
							'id'    => ['panel.pages.timeline'],
							'title' => 'timeline',
							'url'   => route('panel.pages.timeline'),
							'active'=> 1
						],
					]
				]
			]
		],
		[
			'id'    => [
				'panel.forms.form-input',
				'panel.forms.form-input-group',
				'panel.forms.form-input-mask',
				'panel.forms.form-input-range',
				'panel.forms.form-validation',
				'panel.forms.form-bs-select',
				'panel.forms.form-checkbox-radio',
				'panel.forms.form-date-time-picker',
				'panel.forms.form-dropzone',
				'panel.forms.form-editor',
			],
			'name'  => 'forms-tab',
			'icon'  => 'icon-edit1',
			'title' => 'forms',
			'category' => [
				[
					'title'	=> 'basic',
					'menu'	=> [
						[
							'id'    => ['panel.forms.form-input'],
							'title' => 'form input',
							'url'   => route('panel.forms.form-input'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.form-input-group'],
							'title' => 'form input group',
							'url'   => route('panel.forms.form-input-group'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.form-checkbox-radio'],
							'title' => 'form checkbox',
							'url'   => route('panel.forms.form-checkbox-radio'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.form-validation'],
							'title' => 'form validation',
							'url'   => route('panel.forms.form-validation'),
							'active'=> 1
						],
					]
				],
				[
					'title'	=> 'plugins',
					'menu'	=> [
						[
							'id'    => ['panel.forms.form-bs-select'],
							'title' => 'form select option',
							'url'   => route('panel.forms.form-bs-select'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.form-date-time-picker'],
							'title' => 'form datetime picker',
							'url'   => route('panel.forms.form-date-time-picker'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.form-dropzone'],
							'title' => 'form dropzone',
							'url'   => route('panel.forms.form-dropzone'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.form-input-mask'],
							'title' => 'form input mask',
							'url'   => route('panel.forms.form-input-mask'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.form-input-range'],
							'title' => 'form input range',
							'url'   => route('panel.forms.form-input-range'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.form-editor'],
							'title' => 'form editor',
							'url'   => route('panel.forms.form-editor'),
							'active'=> 1
						],
					]
				]
			]
		],
		[
			'id'    => [
				'panel.forms.components.accordion',
				'panel.forms.components.alert',
				'panel.forms.components.badges',
				'panel.forms.components.cards',
				'panel.forms.components.carousel',
				'panel.forms.components.list-group',
				'panel.forms.components.modal',
				'panel.forms.components.paginations',
				'panel.forms.components.popovers',
				'panel.forms.components.progress',
				'panel.forms.components.spinners',
				'panel.forms.components.tabs',
				'panel.forms.components.toasts',
				'panel.forms.components.tooltips'
			],
			'name'  => 'components-tab',
			'icon'  => 'icon-box',
			'title' => 'components',
			'category' => [
				[
					'title' => 'basic',
					'menu'	=> [
						[
							'id'    => ['panel.forms.components.accordion'],
							'title' => 'accordion',
							'url'   => route('panel.forms.components.accordion'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.components.alert'],
							'title' => 'alert',
							'url'   => route('panel.forms.components.alert'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.components.badges'],
							'title' => 'badges',
							'url'   => route('panel.forms.components.badges'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.components.cards'],
							'title' => 'cards',
							'url'   => route('panel.forms.components.cards'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.components.carousel'],
							'title' => 'carousel',
							'url'   => route('panel.forms.components.carousel'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.components.list-group'],
							'title' => 'list group',
							'url'   => route('panel.forms.components.list-group'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.components.modal'],
							'title' => 'modal',
							'url'   => route('panel.forms.components.modal'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.components.paginations'],
							'title' => 'paginations',
							'url'   => route('panel.forms.components.paginations'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.components.popovers'],
							'title' => 'popovers',
							'url'   => route('panel.forms.components.popovers'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.components.progress'],
							'title' => 'progress',
							'url'   => route('panel.forms.components.progress'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.components.spinners'],
							'title' => 'spinners',
							'url'   => route('panel.forms.components.spinners'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.components.tabs'],
							'title' => 'tabs',
							'url'   => route('panel.forms.components.tabs'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.components.toasts'],
							'title' => 'toasts',
							'url'   => route('panel.forms.components.toasts'),
							'active'=> 1
						],
						[
							'id'    => ['panel.forms.components.tooltips'],
							'title' => 'tooltips',
							'url'   => route('panel.forms.components.tooltips'),
							'active'=> 1
						],
					]
				]
			]
		],
		[
			'id'    => [
				'panel.graphs.apex',
				'panel.graphs.morris',
				'panel.graphs.vector-map',
				'panel.table.bootstrap',
				'panel.table.custom',
				'panel.table.datatable',
			],
			'name'  => 'graphs-tab',
			'icon'  => 'icon-pie-chart1',
			'title' => 'graphs & table',
			'category' => [
				[
					'title'	=> 'graphs',
					'menu'	=> [
						[
							'id'    => ['panel.graphs.apex'],
							'title' => 'apex graph',
							'url'   => route('panel.graphs.apex'),
							'active'=> 1
						],
						[
							'id'    => ['panel.graphs.morris'],
							'title' => 'morris graph',
							'url'   => route('panel.graphs.morris'),
							'active'=> 1
						],
						[
							'id'    => ['panel.graphs.vector-map'],
							'title' => 'vector map',
							'url'   => route('panel.graphs.vector-map'),
							'active'=> 1
						],
					]
				],
				[
					'title'	=> 'tables',
					'menu'	=> [
						[
							'id'    => ['panel.table.bootstrap'],
							'title' => 'bootstrap table',
							'url'   => route('panel.table.bootstrap'),
							'active'=> 1
						],
						[
							'id'    => ['panel.table.custom'],
							'title' => 'custom table',
							'url'   => route('panel.table.custom'),
							'active'=> 1
						],
						[
							'id'    => ['panel.table.datatable'],
							'title' => 'data table',
							'url'   => route('panel.table.datatable'),
							'active'=> 1
						],
					]
				]
			]
		],
		[
			'id'    => [
				'password.request',
			],
			'name'  => 'authentication-tab',
			'icon'  => 'icon-unlock',
			'title' => 'authentication',
			'category' => [
				[
					'title'	=> 'security',
					'menu'	=> [
						[
							'id'    => ['password.request'],
							'title' => 'forgot password',
							'url'   => route('password.request'),
							'active'=> 1
						],
						[
							'id'    => ['password.confirm'],
							'title' => 'lock screen',
							'url'   => route('password.confirm'),
							'active'=> 1
						],
					]
				]
			]
		],
	];
@endphp
<!-- Sidebar wrapper start -->
<nav class="sidebar-wrapper">

	<!-- Sidebar content start -->
	<div class="sidebar-tabs">

		<!-- Tabs nav start -->
		<div class="nav" role="tablist" aria-orientation="vertical">
			<a href="{{ route('panel.dashboard.index') }}" class="logo">
				<img src="{{ asset('img/logo.svg') }}" alt="Uni Pro Admin">
			</a>
			@foreach ($menus as $item)                                
			<a class="nav-link {{ (in_array(Route::currentRouteName(), $item['id'])) ? 'active' : null }}" data-bs-toggle="tab" href="#{{ $item['name'] }}" role="tab" aria-controls="{{ $item['name'] }}">
				<i class="{{ $item['icon'] }}"></i>
				<span class="nav-link-text">{{ $item['title'] }}</span>
			</a>
			@endforeach
			<a class="nav-link settings" id="" data-bs-toggle="tab" href="#tab-settings" role="tab" aria-controls="tab-settings" aria-selected="false">
				<i class="icon-settings1"></i>
				<span class="nav-link-text">{{ __('Settings') }}</span>
			</a>
		</div>
		<!-- Tabs nav end -->

		<!-- Tabs content start -->
		<div class="tab-content">
			@foreach ($menus as $item)
			<!-- Chat tab -->
			<div class="tab-pane fade {{ (in_array(Route::currentRouteName(), $item['id'])) ? 'show active' : null }}" id="{{ $item['name'] }}" role="tabpanel" aria-labelledby="{{ $item['name'] }}">

				<!-- Tab content header start -->
				<div class="tab-pane-header">
					{{ Str::title($item['title']) }}
				</div>
				<!-- Tab content header end -->

				<!-- Sidebar menu starts -->
				<div class="sidebarMenuScroll">
					<div class="sidebar-menu">
						@foreach ($item['category'] as $category)
						<ul class="border-bottom">
							<li class="list-heading">{{ $category['title'] }}</li>
							@foreach ($category['menu'] as $menu)
							<li>
								<a href="{{ $menu['url'] }}" class="{{ (in_array(Route::currentRouteName(), $menu['id'])) ? 'current-page' : null }}">{{ Str::title($menu['title']) }}</a>
							</li>
							@endforeach
						</ul>
						@endforeach
					</div>
				</div>
				<!-- Sidebar menu ends -->

			</div>
			@endforeach
			
			<!-- Settings tab -->
			<div class="tab-pane fade" id="tab-settings" role="tabpanel" aria-labelledby="settings-tab">
				
				<!-- Tab content header start -->
				<div class="tab-pane-header">
					{{ __('Settings') }}
				</div>
				<!-- Tab content header end -->

				<!-- Settings start -->
				<div class="sidebarMenuScroll">
					<div class="sidebar-settings">
						<div class="m-0">
							<div class="noti-container">
								<div class="noti-block">
									<div>{{ __('Dark Mode') }}</div>
									<div class="form-switch">
										<input class="form-check-input" type="checkbox" id="darkMode" checked>
										<label class="form-check-label" for="darkMode"></label>
									</div>
								</div>
								<div class="noti-block">
									<div>{{ __('Enable Sound') }}</div>
									<div class="form-switch">
										<input class="form-check-input" type="checkbox" id="soundEnable">
										<label class="form-check-label" for="soundEnable"></label>
									</div>
								</div>
								<div class="noti-block">
									<div>{{ __('Allow Chat') }}</div>
									<div class="form-switch">
										<input class="form-check-input" type="checkbox" id="allowChat">
										<label class="form-check-label" for="allowChat"></label>
									</div>
								</div>
								<div class="noti-block">
									<div>{{ __('Desktop Messages') }}</div>
									<div class="form-switch">
										<input class="form-check-input" type="checkbox" id="desktopMessages">
										<label class="form-check-label" for="desktopMessages"></label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Settings end -->

				<!-- Sidebar actions starts -->
				<div class="sidebar-actions">
					<div class="support-tile blue">
						<i class="icon-github"></i>
						<a href="https://github.com/asepnurjaman-en" target="_BLANK" class="d-flex flex-column small">
							<small class="text-uppercase">{{ __('Devs by') }}</small>
							<span>{{ __('asepnurjaman-en') }}</span>
						</a>
					</div>
				</div>
				<!-- Sidebar actions ends -->
			</div>

		</div>
		<!-- Tabs content end -->

	</div>
	<!-- Sidebar content end -->
	
</nav>
<!-- Sidebar wrapper end -->
