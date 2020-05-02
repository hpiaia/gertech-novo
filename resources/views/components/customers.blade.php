<div class="swiper-container customers-slide">
    <div class="swiper-wrapper">
        @foreach ($customers as $customer)
            <div class="swiper-slide">
                <img src="{{ Storage::url($customer->image) }}" class="mx-auto" width="120" height="65" />
            </div>
        @endforeach
    </div>
</div>
