<div class="swiper-container customers-slide">
    <div class="swiper-wrapper">
        @foreach ($customers as $customer)
            <div class="swiper-slide">
                <img src="{{ $customer->image }}" class="mx-auto" />
            </div>
        @endforeach
    </div>
</div>
