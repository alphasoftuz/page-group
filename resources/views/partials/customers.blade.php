<section id="our-client">
    <div class="container">
        <h1 class="title">
            @lang('Our clients')
        </h1>
        <div class="client-body">
            <div id="carouselOurClients" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($customers as $customer)
                        <div class="carousel-item {{ $loop->index === 0 ? 'active' : '' }}">
                            <div class="carousel-card ">
                                <div class="carousel-img">
                                    <img src="{{ storage_url($customer->image) }}"
                                         alt="image">
                                </div>
                                <div class="carousel-desc">
                                    {!! nl2br(e($customer->content)) !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev prev " type="button"
                        data-bs-target="#carouselOurClients"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next next" type="button"
                        data-bs-target="#carouselOurClients" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div style="text-align: center; margin: 50px auto;">
            <a class="btn-hov-eff d-inline-block text-center" href="#">
                @lang('Leave a request')
                <span class="blue-btn btn1"></span>
                <span class="blue-btn btn2"></span>
                <span class="blue-btn btn3"></span>
                <span class="blue-btn btn4"></span>
            </a>
        </div>
    </div>
</section>
