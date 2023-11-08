<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('panel')->middleware('auth')->group(function() {
    Route::get('/', function() {
        return view('panel.dashboards.index');
    })->name('panel.dashboard.index');
    Route::get('analytics', function() {
        return view('panel.dashboards.analytics');
    })->name('panel.dashboard.analytics');
    Route::get('sales', function() {
        return view('panel.dashboards.sales');
    })->name('panel.dashboard.sales');
    Route::get('crm', function() {
        return view('panel.dashboards.crm');
    })->name('panel.dashboard.crm');
    Route::get('reports', function() {
        return view('panel.dashboards.reports');
    })->name('panel.dashboard.reports');
    Route::get('saas', function() {
        return view('panel.dashboards.saas');
    })->name('panel.dashboard.saas');
    Route::get('consulting', function() {
        return view('panel.dashboards.consulting');
    })->name('panel.dashboard.consulting');
    Route::get('profile', function() {
        return view('panel.dashboards.profile');
    })->name('panel.dashboard.profile');
    // Layouts
    Route::get('starter-page', function() {
        return view('panel.dashboards.starter-page');
    })->name('panel.dashboard.starter-page');
    Route::get('layout-hover-tabs', function() {
        return view('panel.dashboards.layout-hover-tabs');
    })->name('panel.dashboard.layout-hover-tabs');
    Route::get('layout-daterange', function() {
        return view('panel.dashboards.layout-daterange');
    })->name('panel.dashboard.layout-daterange');
    Route::get('layout-breadcrumb', function() {
        return view('panel.dashboards.layout-breadcrumb');
    })->name('panel.dashboard.layout-breadcrumb');
    Route::get('layout-scroll-cards', function() {
        return view('panel.dashboards.layout-scroll-cards');
    })->name('panel.dashboard.layout-scroll-cards');
    // Products
    Route::get('products', function() {
        return view('panel.product.product');
    })->name('panel.products.products');
    Route::get('products-list', function() {
        return view('panel.product.product-list');
    })->name('panel.products.products-list');
    Route::get('add-product', function() {
        return view('panel.product.add-product');
    })->name('panel.products.add-product');
    Route::get('orders', function() {
        return view('panel.product.orders');
    })->name('panel.products.orders');
    Route::get('customers-list', function() {
        return view('panel.product.customers-list');
    })->name('panel.products.customers-list');
    Route::get('product-reviews', function() {
        return view('panel.product.product-reviews');
    })->name('panel.products.product-reviews');
    // Calendar
    Route::get('calendar-daygrid-view', function() {
        return view('panel.product.calendar-daygrid-view');
    })->name('panel.calendar.daygrid-view');
    Route::get('calendar-list-view', function() {
        return view('panel.product.calendar-list-view');
    })->name('panel.calendar.list-view');
    Route::get('calendar-external-dragging', function() {
        return view('panel.product.calendar-external-dragging');
    })->name('panel.calendar.external-dragging');
    Route::get('calendar-google-view', function() {
        return view('panel.product.calendar-google-view');
    })->name('panel.calendar.google-view');
    Route::get('calendar-selectable', function() {
        return view('panel.product.calendar-selectable');
    })->name('panel.calendar.selectable');
    // Pages
    Route::get('account-settings', function() {
        return view('panel.pages.account-settings');
    })->name('panel.pages.account-settings');
    Route::get('chat', function() {
        return view('panel.pages.chat');
    })->name('panel.pages.chat');
    Route::get('contacts', function() {
        return view('panel.pages.contacts');
    })->name('panel.pages.contacts');
    Route::get('create-invoice', function() {
        return view('panel.pages.create-invoice');
    })->name('panel.pages.create-invoice');
    Route::get('documents', function() {
        return view('panel.pages.documents');
    })->name('panel.pages.documents');
    Route::get('faqs', function() {
        return view('panel.pages.faqs');
    })->name('panel.pages.faqs');
    Route::get('gallery-tiles', function() {
        return view('panel.pages.gallery-tiles');
    })->name('panel.pages.gallery-tiles');
    Route::get('gallery', function() {
        return view('panel.pages.gallery');
    })->name('panel.pages.gallery');
    Route::get('pricing', function() {
        return view('panel.pages.pricing');
    })->name('panel.pages.pricing');
    Route::get('search-results', function() {
        return view('panel.pages.search-results');
    })->name('panel.pages.search-results');
    Route::get('tasks', function() {
        return view('panel.pages.tasks');
    })->name('panel.pages.tasks');
    Route::get('timeline', function() {
        return view('panel.pages.timeline');
    })->name('panel.pages.timeline');
    Route::get('user-profile', function() {
        return view('panel.pages.user-profile');
    })->name('panel.pages.user-profile');
    Route::get('view-invoice', function() {
        return view('panel.pages.view-invoice');
    })->name('panel.pages.view-invoice');
    // Forms
    Route::get('form-bs-select', function() {
        return view('panel.forms.form-bs-select');
    })->name('panel.forms.form-bs-select');
    Route::get('form-checkbox-radio', function() {
        return view('panel.forms.form-checkbox-radio');
    })->name('panel.forms.form-checkbox-radio');
    Route::get('form-date-time-picker', function() {
        return view('panel.forms.form-date-time-picker');
    })->name('panel.forms.form-date-time-picker');
    Route::get('form-dropzone', function() {
        return view('panel.forms.form-dropzone');
    })->name('panel.forms.form-dropzone');
    Route::get('form-editor', function() {
        return view('panel.forms.form-editor');
    })->name('panel.forms.form-editor');
    Route::get('form-input-group', function() {
        return view('panel.forms.form-input-group');
    })->name('panel.forms.form-input-group');
    Route::get('form-input-mask', function() {
        return view('panel.forms.form-input-mask');
    })->name('panel.forms.form-input-mask');
    Route::get('form-input-range', function() {
        return view('panel.forms.form-input-range');
    })->name('panel.forms.form-input-range');
    Route::get('form-input', function() {
        return view('panel.forms.form-input');
    })->name('panel.forms.form-input');
    Route::get('form-validation', function() {
        return view('panel.forms.form-validation');
    })->name('panel.forms.form-validation');
    // Components
    Route::get('accordion', function() {
        return view('panel.components.accordion');
    })->name('panel.forms.components.accordion');
    Route::get('alert', function() {
        return view('panel.components.alert');
    })->name('panel.forms.components.alert');
    Route::get('badges', function() {
        return view('panel.components.badges');
    })->name('panel.forms.components.badges');
    Route::get('cards', function() {
        return view('panel.components.cards');
    })->name('panel.forms.components.cards');
    Route::get('carousel', function() {
        return view('panel.components.carousel');
    })->name('panel.forms.components.carousel');
    Route::get('list-group', function() {
        return view('panel.components.list-group');
    })->name('panel.forms.components.list-group');
    Route::get('modal', function() {
        return view('panel.components.modal');
    })->name('panel.forms.components.modal');
    Route::get('paginations', function() {
        return view('panel.components.paginations');
    })->name('panel.forms.components.paginations');
    Route::get('popovers', function() {
        return view('panel.components.popovers');
    })->name('panel.forms.components.popovers');
    Route::get('progress', function() {
        return view('panel.components.progress');
    })->name('panel.forms.components.progress');
    Route::get('spinners', function() {
        return view('panel.components.spinners');
    })->name('panel.forms.components.spinners');
    Route::get('tabs', function() {
        return view('panel.components.tabs');
    })->name('panel.forms.components.tabs');
    Route::get('toasts', function() {
        return view('panel.components.toasts');
    })->name('panel.forms.components.toasts');
    Route::get('tooltips', function() {
        return view('panel.components.tooltips');
    })->name('panel.forms.components.tooltips');
    // Graphs
    Route::get('apex', function() {
        return view('panel.graphs.apex');
    })->name('panel.graphs.apex');
    Route::get('morris', function() {
        return view('panel.graphs.morris');
    })->name('panel.graphs.morris');
    Route::get('vector-map', function() {
        return view('panel.graphs.vector-map');
    })->name('panel.graphs.vector-map');
    Route::get('datatable', function() {
        return view('panel.graphs.table-datatable');
    })->name('panel.table.datatable');
    Route::get('table', function() {
        return view('panel.graphs.table-custom');
    })->name('panel.table.custom');
    Route::get('bootstrap table', function() {
        return view('panel.graphs.table-bootstrap');
    })->name('panel.table.bootstrap');
});