<section id="question">
    <h1 class="title">
        @lang('Questions')
    </h1>
    <x-data-content-tools file="faq-desc.html">
        <p class="text">
            Questions text
        </p>
    </x-data-content-tools>
    <div class="container">
        <div class="accordion accordion-flush" id="accordionFAQ">
            @foreach ($faqs as $faq)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq-heading-{{$faq->id}}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-collapse-{{$faq->id}}">
                            {{ $faq->question }}
                            <span class="plus">
                                <div class="row"></div>
                                <div class="col"></div>
                            </span>
                        </button>
                    </h2>
                    <div id="faq-collapse-{{$faq->id}}" class="accordion-collapse collapse"
                        aria-labelledby="faq-heading-{{$faq->id}}" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            {{ $faq->answer }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
