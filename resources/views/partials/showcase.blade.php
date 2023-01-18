<section id='showcase'>
    <div class="container show-container">
        <div class="show-left">
            <div class="bg-img-blur"></div>
            <x-data-content-tools file="showcase-hero-text.html">
                <h1>
                    Клининговая компания <br>
                    <span class="blue">Page Group</span>
                </h1>
            </x-data-content-tools>

            <x-data-content-tools file="showcase-hero-description.html">
                <p>
                    Ежедневно убираем
                    <strong>
                        более 20000 М2 коммерческой недвижимости
                    </strong>
                    <br> в Санкт-Петербурге и Лен. области
                </p>
            </x-data-content-tools>

            <a class="btn-hov-eff" href="#leave-form">
                <x-data-content-tools file="showcase-hero-button.html">
                    <div data-ce-tag="p">@lang('Leave a request')</div>
                </x-data-content-tools>

                <span class="blue-btn btn1"></span>
                <span class="blue-btn btn2"></span>
                <span class="blue-btn btn3"></span>
                <span class="blue-btn btn4"></span>
            </a>
        </div>

        <x-data-content-tools class="show-right" file="showcase-img.html">
            <img src="{{ asset('img/show-img.png') }}" alt="showcase image">
        </x-data-content-tools>
    </div>
</section>