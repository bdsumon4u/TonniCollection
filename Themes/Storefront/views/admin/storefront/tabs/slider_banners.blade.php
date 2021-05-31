<div class="accordion-box-content">
    <div class="tab-content clearfix">
        <div class="panel-wrap">
            @include('admin.storefront.tabs.partials.single_banner', [
                'label' => trans('storefront::storefront.form.banner_1'),
                'name' => 'storefront_slider_banner_1',
                'banner' => $banners['banner_1'],
                'size' => '470x290',
            ])

            @include('admin.storefront.tabs.partials.single_banner', [
                'label' => trans('storefront::storefront.form.banner_2'),
                'name' => 'storefront_slider_banner_2',
                'banner' => $banners['banner_2'],
                'size' => '470x290',
            ])
        </div>
    </div>
</div>
