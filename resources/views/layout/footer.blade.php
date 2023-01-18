<footer>
    <div class="container-fluid">
        <div class="row container">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 col-md-12 col-sm-12 col-12">
                <div class="row">
                    {{-- Contact information --}}
                    <div class="col-lg-5 col-md-5 col-sm-6 col-12">
                        <div class="white-title">
                            @lang('Contact information')
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-phones">
                                <p class="d-flex">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <a href="tel:+{{ $siteSettings->phone }}"><span
                                            class="new-phone">{{ $siteSettings->phone }}</span></a>
                                </p>
                            </div>
                            <div class="contact-info-map">
                                <p>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>{{ $siteSettings->getTranslated('address') }}</span>
                                </p>
                            </div>
                            <div class="contact-info-mail">
                                <p>
                                    <i class="far fa-envelope"></i>
                                    <a href="mailto:{{ $siteSettings->email }}">
                                        {{ $siteSettings->email }}
                                    </a>
                                </p>
                            </div>
                            <div class="contact-info-time">
                                <p>
                                    <i class="far fa-clock"></i>
                                    <span>Ежедневно: с 8:00 до 22:00</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Useful sections --}}
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="white-title">
                            @lang('Useful sections')
                        </div>
                        <div class="footer-services">
                            <ul>
                                <li><a href="#why-page-group">@lang('About us')</a></li>
                                <li><a href="#reviews">@lang('Reviews')</a></li>
                                <li><a href="#kontakt">@lang('Contacts')</a></li>
                                <li><a href="#question">@lang('Questions')</a></li>
                                <li><a href="{{ route('posts.index') }}">@lang('Articles')</a></li>
                            </ul>
                        </div>
                    </div>

                    {{-- Social networks --}}
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="white-title">@lang('We are in the social networks:')</div>
                        <div class="social-icons">
                            <ul>
                                <li><a target="_blank" href="https://www.instagram.com/bestcleaning.uz/" rel="nofollow">
                                        <img width="20px" src="{{ asset('img/instagram.png') }}">
                                        Instagram</a>
                                </li>

                                <li><a target="_blank" href="https://t.me/bestcleaning_PG" rel="nofollow">
                                        <img width="20px" src="{{ asset('img/telegram.png') }}">
                                        Telegram</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="col-12 hidden-md-down"></div>
                        <div class="col-12">
                            <div class="developer" style="justify-content: center;">
                                <x-data-content-tools file="footer-end.html">
                                    <p data-ce-tag="p" class="text-center">
                                        &copy; 2018 — {{ date('Y') }} {{ $siteSettings->site_name }}</p>
                                </x-data-content-tools>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
