@php
    $content = $priceList?->content ?: [];
@endphp

<section id="price">
    <h1 class="title">
        @lang('Price list')
    </h1>
    <div class="container">
        <div class="price-list">
            <div class="accordion accordion-flush" id="accordionPriceList">
                @foreach ($content as $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="pricelist-heading-{{ $loop->index }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pricelist-collapse-{{ $loop->index }}" aria-expanded="false"
                                aria-controls="pricelist-collapse-{{ $loop->index }}">
                                {{ $item['name'] }}
                                <span class="plus">
                                    <div class="row"></div>
                                    <div class="col"></div>
                                </span>
                            </button>
                        </h2>
                        <div id="pricelist-collapse-{{ $loop->index }}" class="accordion-collapse collapse"
                            aria-labelledby="pricelist-heading-{{ $loop->index }}"
                            data-bs-parent="#accordionPriceList">
                            <div class="accordion-body">
                                <ul>
                                    @foreach ($item['prices'] as $priceItem)
                                        <li>
                                            <span>{{ $priceItem['name'] }}</span>
                                            <span>{{ $priceItem['price'] }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
