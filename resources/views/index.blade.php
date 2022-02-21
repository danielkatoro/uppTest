<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bulkit.cssninja.io/kit17-landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Feb 2022 09:17:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{$app_config->name}}  :: Blockchain</title>
    <link rel="icon" type="image/png" href="{{asset('images') }}/{{$app_config->logoimage}}" />

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link id="theme-sheet" rel="stylesheet" href="{{asset('css/core.css') }}">
</head>

<body class="is-theme-core">
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <!--Hero-->
    <div class="hero product-hero is-fullheight is-relative has-shape-layer-2">
        <nav class="navbar navbar-wrapper navbar-default navbar-fade is-transparent">
            <div class="container">
                <!-- Brand -->
                <div class="navbar-brand">
                    <a class="navbar-item" href="index.html">
                        <img class="switcher-logo" src="{{ asset('images') }}/{{ $app_config->logoimage}}" alt="">
                    </a>

                    <!-- Sidebar Trigger -->
                    <a id="navigation-trigger" class="navbar-item hamburger-btn" href="javascript:void(0);">
                        <span class="menu-toggle">
                          <span class="icon-box-toggle">
                              <span class="rotate">
                                  <i class="icon-line-top"></i>
                                  <i class="icon-line-center"></i>
                                  <i class="icon-line-bottom"></i>
                              </span>
                        </span>
                        </span>
                    </a>

                    <!-- Responsive toggle -->
                    <div class="custom-burger" data-target="">
                        <a id="" class="responsive-btn" href="javascript:void(0);">
                            <span class="menu-toggle">
                              <span class="icon-box-toggle">
                                  <span class="rotate">
                                      <i class="icon-line-top"></i>
                                      <i class="icon-line-center"></i>
                                      <i class="icon-line-bottom"></i>
                                  </span>
                            </span>
                            </span>
                        </a>
                    </div>
                    <!-- /Responsive toggle -->
                </div>

                <!-- Navbar menu -->
                <div class="navbar-menu">
                    <!-- Navbar Start -->
                    <div class="navbar-start">
                        <!-- Navbar item -->
                        <a class="navbar-item is-slide" href="kit1-features.html">
                            Features
                        </a>
                        <!-- Navbar item -->
                        <a class="navbar-item is-slide" href="kit1-pricing.html">
                            Pricing
                        </a>
                        <!-- Navbar item -->
                        <a class="navbar-item is-slide" href="kit1-login.html">
                            Login
                        </a>
                    </div>

                    <!-- Navbar end -->
                    <div class="navbar-end">
                        <!-- Signup button -->
                        <div class="navbar-item">
                            <a id="#signup-btn" href="kit1-signup.html" class="button button-cta btn-outlined is-bold btn-align primary-btn rounded raised">
                                Sign Up
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--Shape Layer-->
        <img class="shape-layer" src="{{asset('img/graphics/shapes/blockchain-shape.svg') }}" alt="" />

        <!-- Hero image -->
        <div id="main-hero" class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-vcentered">
                    <div class="column is-5 signup-column has-text-left">
                        <h1 class="title main-title dark-text text-bold is-2">
                            {{ $principal_banner->titre}}
                        </h1>
                        <h2 class="subtitle is-5 no-margin-bottom body-color">
                            {{ $principal_banner->text}}
                        </h2>
                        <br />
                        <!-- Signup form -->
                        <div class="signup-block is-rounded">
                            <form>
                                <div class="control">
                                    <input type="email" class="input" placeholder="Search Currencies" />
                                    <button type="submit" class="button btn-align primary-btn raised">
                                        Search
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="column is-7">
                        <!-- Hero mockup -->
                        <figure class="image blob-figure">
                            <img class="animated preFadeInUp fadeInUp" src="{{asset('images')}}/{{$principal_banner->image}}" data-base-url="{{asset('img/graphics/compositions/blockchain-hero-1') }}" data-extension=".png" alt="" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero Foot marquee-->
        <div class="hero-foot">
            <div class="marquee-container">
                <div class="marquee crypto-marquee">
                    <div class="marquee-inner">
                        <div class="marquee-item">
                            <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/btc.svg') }}" alt="" />
                            <div>
                                <span>BTC $6,843.21</span>
                                <span class="positive">+2.47%</span>
                            </div>
                        </div>
                        <div class="marquee-item">
                            <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/ltc.svg') }}" alt="" />
                            <div>
                                <span>LTC $2,840.15</span>
                                <span class="positive">+1.31%</span>
                            </div>
                        </div>
                        <div class="marquee-item">
                            <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/bao.svg') }}" alt="" />
                            <div>
                                <span>BAO $832.18</span>
                                <span class="positive">+8.1%</span>
                            </div>
                        </div>
                        <div class="marquee-item">
                            <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/flow.svg') }}" alt="" />
                            <div>
                                <span>FLOW $1187,26</span>
                                <span class="negative">-3.65%</span>
                            </div>
                        </div>
                        <div class="marquee-item">
                            <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/husd.svg') }}" alt="" />
                            <div>
                                <span>HUSD $489.16</span>
                                <span class="positive">+2.24%</span>
                            </div>
                        </div>
                        <div class="marquee-item">
                            <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/oxt.svg') }}" alt="" />
                            <div>
                                <span>OXT $1,516.98</span>
                                <span class="negative">-6.28%</span>
                            </div>
                        </div>
                        <div class="marquee-item">
                            <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/uos.svg') }}" alt="" />
                            <div>
                                <span>UOS $948.12</span>
                                <span class="negative">-1.31%</span>
                            </div>
                        </div>
                        <div class="marquee-item">
                            <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/snt.svg') }}" alt="" />
                            <div>
                                <span>SNT $1,831.54</span>
                                <span class="positive">+5.27%</span>
                            </div>
                        </div>
                        <div class="marquee-item">
                            <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/rlc.svg') }}" alt="" />
                            <div>
                                <span>RLC $1,221.98</span>
                                <span class="positive">+1.13%</span>
                            </div>
                        </div>
                        <div class="marquee-item">
                            <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/bqx.svg') }}" alt="" />
                            <div>
                                <span>BQX $3,879.32</span>
                                <span class="positive">+3.22%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Onboarding-->
    <div class="section">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered">
                <h2 class="section-title-landing">Buy and Sell Cryptocurrencies</h2>
                <h4>A decentralized exchange finance marketplace</h4>
            </div>

            <div class="content-wrapper">
                <div class="columns is-vcentered is-multiline has-text-centered">
                    <!-- Icon block -->
                    <div class="column is-3">
                        <div class="wavy-icon-box">
                            <div class="is-icon-reveal">
                                <i class="im im-icon-Bitcoin"></i>
                            </div>
                            <div class="box-title">250+ Currencies</div>
                            <p class="box-content is-tablet-padded">
                                Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel
                                hinc solet tincidunt, nec et iisque placerat pertinax.
                            </p>
                        </div>
                    </div>
                    <!-- Icon block -->
                    <div class="column is-3">
                        <div class="wavy-icon-box">
                            <div class="is-icon-reveal">
                                <i class="im im-icon-Structure"></i>
                            </div>
                            <div class="box-title">Blockchain +</div>
                            <p class="box-content is-tablet-padded">
                                Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel
                                hinc solet tincidunt, nec et iisque placerat pertinax.
                            </p>
                        </div>
                    </div>
                    <!-- Icon block -->
                    <div class="column is-3">
                        <div class="wavy-icon-box">
                            <div class="is-icon-reveal">
                                <i class="im im-icon-Wallet-2"></i>
                            </div>
                            <div class="box-title">Secured Wallet</div>
                            <p class="box-content is-tablet-padded">
                                Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel
                                hinc solet tincidunt, nec et iisque placerat pertinax.
                            </p>
                        </div>
                    </div>
                    <!-- Icon block -->
                    <div class="column is-3">
                        <div class="wavy-icon-box">
                            <div class="is-icon-reveal">
                                <i class="im im-icon-Timer-2"></i>
                            </div>
                            <div class="box-title">Real Time</div>
                            <p class="box-content is-tablet-padded">
                                Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel
                                hinc solet tincidunt, nec et iisque placerat pertinax.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="has-text-centered pt-40 pb-40">
                    <div class="tabs partner-tabs is-centered">
                        <ul>
                            <li>
                                <a><img class="partner-logo" src="{{asset('img/logos/custom/covenant.svg') }}" alt="" /></a>
                            </li>
                            <li>
                                <a><img class="partner-logo" src="{{asset('img/logos/custom/infinite.svg') }}" alt="" /></a>
                            </li>
                            <li>
                                <a><img class="partner-logo" src="{{asset('img/logos/custom/phasekit.svg') }}" alt="" /></a>
                            </li>
                            <li>
                                <a><img class="partner-logo" src="{{asset('img/logos/custom/grubspot.svg') }}" alt="" /></a>
                            </li>
                            <li>
                                <a><img class="partner-logo" src="{{asset('img/logos/custom/gutwork.svg') }}" alt="" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Video-->
    <div class="section is-app-grey">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered pt-40 pb-40">
                <h2 class="section-title-landing">Download the App</h2>
                <h4>And try an amazing set of renewed features</h4>
            </div>

            <div class="columns is-vcentered is-multiline pb-60">
                <div class="column is-8 is-offset-2 is-relative is-centered-portrait">
                    <!-- 16by9 video -->
                    <div class="bulkit-player-container is-16by9 reversed-play">
                        <video id="hero-player" class="bulkit-player" playsinline controls data-poster="https://via.placeholder.com/1200x675" data-demo-poster="{{asset('img/demo/video/poster-2f.jpg') }}">
                            <source src="{{asset('img/video/hands.mp4') }}" type="video/mp4" />
                            <source src="{{asset('img/video/hands.webm') }}" type="video/webm" />
                        </video>
                    </div>
                </div>

                <div class="column is-4 is-offset-2">
                    <div class="side-title mb-10">
                        <h3 class="title is-5">Fast transactions</h3>
                    </div>
                    <p class="side-paragraph is-size-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eodem modo is
                        enim tibi nemo dabit, quod, expetendum sit, id esse laudabile.
                    </p>
                </div>

                <div class="column is-4">
                    <div class="side-title mb-10">
                        <h3 class="title is-5">Live compensation</h3>
                    </div>
                    <p class="side-paragraph is-size-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eodem modo is
                        enim tibi nemo dabit, quod, expetendum sit, id esse laudabile.
                    </p>
                </div>

                <div class="column is-4 is-offset-2">
                    <div class="side-title mb-10">
                        <h3 class="title is-5">Advanced Cryptography</h3>
                    </div>
                    <p class="side-paragraph is-size-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eodem modo is
                        enim tibi nemo dabit, quod, expetendum sit, id esse laudabile.
                    </p>
                </div>

                <div class="column is-4">
                    <div class="side-title mb-10">
                        <h3 class="title is-5">Daily Bonuses</h3>
                    </div>
                    <p class="side-paragraph is-size-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eodem modo is
                        enim tibi nemo dabit, quod, expetendum sit, id esse laudabile.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Features section -->
    <div class="section">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered pt-40 pb-40">
                <h2 class="section-title-landing">Amazing Features</h2>
                <h4>Great tools that will make your life easier</h4>
            </div>

            <div class="content-wrapper">
                <div class="columns is-vcentered pb-40 pt-40">
                    <div class="column is-4 is-offset-1">
                        <!-- Title -->
                        <div class="icon-subtitle"><i class="im im-icon-Structure"></i></div>
                        <div class="title quick-feature has-numbers text-bold">
                            <div>Powerful Blockchain</div>
                        </div>
                        <div class="title-divider is-small"></div>
                        <span class="body-text"
                >Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum
                inermis iudicabit. Ex vidit fierent hendrerit eum, sed stet
                periculis ut.</span>
                        <div class="pt-10 pb-10">
                            <a href="#" class="button btn-align btn-more is-link color-primary">
                                Learn more <i class="sl sl-icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="column is-7">
                        <img class="featured-image-large" src="{{asset('img/graphics/compositions/crypto-feature-1-core.png') }}" data-base-url="{{asset('img/graphics/compositions/crypto-feature-1') }}" data-extension=".png" alt="" />
                    </div>
                </div>

                <div class="columns is-vcentered pb-40 pt-40">
                    <!-- This column will display only on mobile -->
                    <div class="column is-4 is-offset-1 is-hidden-tablet is-hidden-desktop">
                        <!-- Title -->
                        <div class="icon-subtitle"><i class="im im-icon-Mine"></i></div>
                        <div class="title quick-feature has-numbers text-bold">
                            <h2>Crypto Mining</h2>
                        </div>
                        <div class="title-divider is-small"></div>
                        <span class="body-text"
                >Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum
                inermis iudicabit. Ex vidit fierent hendrerit eum, sed stet
                periculis ut.</span>
                        <div class="pt-10 pb-10">
                            <a href="#" class="button btn-align btn-more is-link color-primary">
                                Learn more <i class="sl sl-icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- /so the original floww is kept -->
                    <div class="column is-7">
                        <img class="featured-image-large" src="{{asset('img/graphics/compositions/crypto-feature-3-core.png') }}" data-base-url="{{asset('img/graphics/compositions/crypto-feature-3') }}" data-extension=".png" alt="" />
                    </div>
                    <!-- This column will display only on desktop and tablet landscape resolutions -->
                    <div class="column is-4 is-hidden-mobile">
                        <!-- Title -->
                        <div class="icon-subtitle"><i class="im im-icon-Mine"></i></div>
                        <div class="title quick-feature has-numbers text-bold">
                            <h2>Crypto Mining</h2>
                        </div>
                        <div class="title-divider is-small"></div>
                        <span class="body-text"
                >Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum
                inermis iudicabit. Ex vidit fierent hendrerit eum, sed stet
                periculis ut.</span>
                        <div class="pt-10 pb-10">
                            <a href="#" class="button btn-align btn-more is-link color-primary">
                                Learn more <i class="sl sl-icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- /so the original flow is kept -->
                </div>

                <div class="columns is-vcentered pb-40 pt-40">
                    <div class="column is-4 is-offset-1">
                        <!-- Title -->
                        <div class="icon-subtitle"><i class="im im-icon-Financial"></i></div>
                        <div class="title quick-feature has-numbers text-bold">
                            <h2>Crypto Trading</h2>
                        </div>
                        <div class="title-divider is-small"></div>
                        <span class="body-text"
                >Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum
                inermis iudicabit. Ex vidit fierent hendrerit eum, sed stet
                periculis ut.</span>
                        <div class="pt-10 pb-10">
                            <a href="#" class="button btn-align btn-more is-link color-primary">
                                Learn more <i class="sl sl-icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="column is-7">
                        <img class="featured-image-large" src="{{asset('img/graphics/compositions/crypto-feature-4-core.png') }}" data-base-url="{{asset('img/graphics/compositions/crypto-feature-4') }}" data-extension=".png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services section -->
    <div class="section is-app-grey">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered pt-40 pb-40">
                <h2 class="section-title-landing">Additional Services</h2>
                <h4>Great tools that will make your life easier</h4>
            </div>

            <div class="
            columns
            is-multiline is-flex-tablet-portrait is-flex-tablet-portrait-3
            pb-60
          ">
                <!-- Benefit box -->
                <div class="column is-3">
                    <a class="flex-card is-feature is-link padding-30 no-margin-bottom">
                        <!-- Icon -->
                        <div class="image-container is-first is-icon-reveal">
                            <img class="full-icon" src="{{asset('img/graphics/icons/crypto-icon-1-core.svg') }}" data-base-url="{{asset('img/graphics/icons/crypto-icon-1') }}" data-extension=".svg" alt="" />
                        </div>
                        <!-- Content -->
                        <div class="content-container has-text-centered">
                            <h3>Live Exchange</h3>
                            <p>
                                Duplexque isdem diebus acciderat malum, quod et Theophilum
                                insontem atrox interceperat.
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Benefit box -->
                <div class="column is-3">
                    <a class="flex-card is-feature is-link padding-30 no-margin-bottom">
                        <!-- Icon -->
                        <div class="image-container is-first is-icon-reveal">
                            <img class="full-icon" src="{{asset('img/graphics/icons/crypto-icon-2-core.svg') }}" data-base-url="{{asset('img/graphics/icons/crypto-icon-2') }}" data-extension=".svg" alt="" />
                        </div>
                        <!-- Content -->
                        <div class="content-container has-text-centered">
                            <h3>Individual Mining</h3>
                            <p>
                                Duplexque isdem diebus acciderat malum, quod et Theophilum
                                insontem atrox interceperat.
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Benefit box -->
                <div class="column is-3">
                    <a class="flex-card is-feature is-link padding-30 no-margin-bottom">
                        <!-- Icon -->
                        <div class="image-container is-first is-icon-reveal">
                            <img class="full-icon" src="{{asset('img/graphics/icons/crypto-icon-3-core.svg') }}" data-base-url="{{asset('img/graphics/icons/crypto-icon-3') }}" data-extension=".svg" alt="" />
                        </div>
                        <!-- Content -->
                        <div class="content-container has-text-centered">
                            <h3>Delegate Mining</h3>
                            <p>
                                Duplexque isdem diebus acciderat malum, quod et Theophilum
                                insontem atrox interceperat.
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Benefit box -->
                <div class="column is-3">
                    <a class="flex-card is-feature is-link padding-30 no-margin-bottom">
                        <!-- Icon -->
                        <div class="image-container is-first is-icon-reveal">
                            <img class="full-icon" src="{{asset('img/graphics/icons/crypto-icon-4-core.svg') }}" data-base-url="{{asset('img/graphics/icons/crypto-icon-4') }}" data-extension=".svg" alt="" />
                        </div>
                        <!-- Content -->
                        <div class="content-container has-text-centered">
                            <h3>Financial Advice</h3>
                            <p>
                                Duplexque isdem diebus acciderat malum, quod et Theophilum
                                insontem atrox interceperat.
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Benefit box -->
                <div class="column is-3">
                    <a class="flex-card is-feature is-link padding-30 no-margin-bottom">
                        <!-- Icon -->
                        <div class="image-container is-first is-icon-reveal">
                            <img class="full-icon" src="{{asset('img/graphics/icons/crypto-icon-5-core.svg') }}" data-base-url="{{asset('img/graphics/icons/crypto-icon-5') }}" data-extension=".svg" alt="" />
                        </div>
                        <!-- Content -->
                        <div class="content-container has-text-centered">
                            <h3>App Platform</h3>
                            <p>
                                Duplexque isdem diebus acciderat malum, quod et Theophilum
                                insontem atrox interceperat.
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Benefit box -->
                <div class="column is-3">
                    <a class="flex-card is-feature is-link padding-30 no-margin-bottom">
                        <!-- Icon -->
                        <div class="image-container is-first is-icon-reveal">
                            <img class="full-icon" src="{{asset('img/graphics/icons/crypto-icon-6-core.svg') }}" data-base-url="{{asset('img/graphics/icons/crypto-icon-6') }}" data-extension=".svg" alt="" />
                        </div>
                        <!-- Content -->
                        <div class="content-container has-text-centered">
                            <h3>Advanced Cryptography</h3>
                            <p>
                                Duplexque isdem diebus acciderat malum, quod et Theophilum
                                insontem atrox interceperat.
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Benefit box -->
                <div class="column is-3">
                    <a class="flex-card is-feature is-link padding-30 no-margin-bottom">
                        <!-- Icon -->
                        <div class="image-container is-first is-icon-reveal">
                            <img class="full-icon" src="{{asset('img/graphics/icons/crypto-icon-7-core.svg') }}" data-base-url="{{asset('img/graphics/icons/crypto-icon-7') }}" data-extension=".svg" alt="" />
                        </div>
                        <!-- Content -->
                        <div class="content-container has-text-centered">
                            <h3>Consolidation</h3>
                            <p>
                                Duplexque isdem diebus acciderat malum, quod et Theophilum
                                insontem atrox interceperat.
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Benefit box -->
                <div class="column is-3">
                    <a class="flex-card is-feature is-link padding-30 no-margin-bottom">
                        <!-- Icon -->
                        <div class="image-container is-first is-icon-reveal">
                            <img class="full-icon" src="{{asset('img/graphics/icons/crypto-icon-8-core.svg') }}" data-base-url="{{asset('img/graphics/icons/crypto-icon-8') }}" data-extension=".svg" alt="" />
                        </div>
                        <!-- Content -->
                        <div class="content-container has-text-centered">
                            <h3>Investment</h3>
                            <p>
                                Duplexque isdem diebus acciderat malum, quod et Theophilum
                                insontem atrox interceperat.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Table section -->
    <div class="section">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered pt-40 pb-40">
                <h2 class="section-title-landing">Start Trading</h2>
                <h4>Great tools that will make your life easier</h4>
            </div>

            <div class="currencies-table">
                <table class="responsive-table mb-40">
                    <tbody>
                        <tr>
                            <th>Logo</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Evolution</th>
                            <th class="has-text-right">Buy</th>
                        </tr>
                        <tr>
                            <td data-th="Logo">
                                <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/btc.svg') }}" alt="" />
                            </td>
                            <td data-th="Code">BTC</td>
                            <td data-th="Name" class="light-cell">Bitcoin</td>
                            <td data-th="Status">
                                <span class="tag is-rounded">Trending</span>
                            </td>
                            <td data-th="Price">$6,840.658</td>
                            <td data-th="Evolution">
                                <div class="evolution is-positive">
                                    <span>+ 2.4%</span>
                                    <i data-feather="trending-up"></i>
                                </div>
                            </td>
                            <td data-th="Buy" class="has-text-right">
                                <button class="button btn-align primary-btn raised">
                                    Trade Now
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td data-th="Logo">
                                <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/ltc.svg') }}" alt="" />
                            </td>
                            <td data-th="Code">LTC</td>
                            <td data-th="Name" class="light-cell">Litecoin</td>
                            <td data-th="Status">
                                <span class="tag is-rounded">Stable</span>
                            </td>
                            <td data-th="Price">$2,840.154</td>
                            <td data-th="Evolution">
                                <div class="evolution is-positive">
                                    <span>+ 1.3%</span>
                                    <i data-feather="trending-up"></i>
                                </div>
                            </td>
                            <td data-th="Buy" class="has-text-right">
                                <button class="button btn-align primary-btn raised">
                                    Trade Now
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td data-th="Logo">
                                <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/bao.svg') }}" alt="" />
                            </td>
                            <td data-th="Code">BAO</td>
                            <td data-th="Name" class="light-cell">Bao Finance</td>
                            <td data-th="Status">
                                <span class="tag is-rounded">Trending</span>
                            </td>
                            <td data-th="Price">$832.189</td>
                            <td data-th="Evolution">
                                <div class="evolution is-positive">
                                    <span>+ 8.1%</span>
                                    <i data-feather="trending-up"></i>
                                </div>
                            </td>
                            <td data-th="Buy" class="has-text-right">
                                <button class="button btn-align primary-btn raised">
                                    Trade Now
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td data-th="Logo">
                                <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/flow.svg') }}" alt="" />
                            </td>
                            <td data-th="Code">FLOW</td>
                            <td data-th="Name" class="light-cell">Flow</td>
                            <td data-th="Status">
                                <span class="tag is-rounded">Downing</span>
                            </td>
                            <td data-th="Price">$1187,26</td>
                            <td data-th="Evolution">
                                <div class="evolution is-negative">
                                    <span>-3.6%</span>
                                    <i data-feather="trending-down"></i>
                                </div>
                            </td>
                            <td data-th="Buy" class="has-text-right">
                                <button class="button btn-align primary-btn raised">
                                    Trade Now
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td data-th="Logo">
                                <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/husd.svg') }}" alt="" />
                            </td>
                            <td data-th="Code">HUSD</td>
                            <td data-th="Name" class="light-cell">Husd</td>
                            <td data-th="Status">
                                <span class="tag is-rounded">Trending</span>
                            </td>
                            <td data-th="Price">$489.165</td>
                            <td data-th="Evolution">
                                <div class="evolution is-positive">
                                    <span>+ 2.1%</span>
                                    <i data-feather="trending-up"></i>
                                </div>
                            </td>
                            <td data-th="Buy" class="has-text-right">
                                <button class="button btn-align primary-btn raised">
                                    Trade Now
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td data-th="Logo">
                                <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/oxt.svg') }}" alt="" />
                            </td>
                            <td data-th="Code">OXT</td>
                            <td data-th="Name" class="light-cell">Oxt</td>
                            <td data-th="Status">
                                <span class="tag is-rounded">Downing</span>
                            </td>
                            <td data-th="Price">$1,516.98</td>
                            <td data-th="Evolution">
                                <div class="evolution is-negative">
                                    <span>- 6.2%</span>
                                    <i data-feather="trending-down"></i>
                                </div>
                            </td>
                            <td data-th="Buy" class="has-text-right">
                                <button class="button btn-align primary-btn raised">
                                    Trade Now
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td data-th="Logo">
                                <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/uos.svg') }}" alt="" />
                            </td>
                            <td data-th="Code">UOS</td>
                            <td data-th="Name" class="light-cell">Uos</td>
                            <td data-th="Status">
                                <span class="tag is-rounded">Downing</span>
                            </td>
                            <td data-th="Price">$948.127</td>
                            <td data-th="Evolution">
                                <div class="evolution is-negative">
                                    <span>- 1.3%</span>
                                    <i data-feather="trending-down"></i>
                                </div>
                            </td>
                            <td data-th="Buy" class="has-text-right">
                                <button class="button btn-align primary-btn raised">
                                    Trade Now
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td data-th="Logo">
                                <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/snt.svg') }}" alt="" />
                            </td>
                            <td data-th="Code">SNT</td>
                            <td data-th="Name" class="light-cell">Snt</td>
                            <td data-th="Status">
                                <span class="tag is-rounded">Trending</span>
                            </td>
                            <td data-th="Price">$1,831.549</td>
                            <td data-th="Evolution">
                                <div class="evolution is-positive">
                                    <span>+ 5.2%</span>
                                    <i data-feather="trending-up"></i>
                                </div>
                            </td>
                            <td data-th="Buy" class="has-text-right">
                                <button class="button btn-align primary-btn raised">
                                    Trade Now
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td data-th="Logo">
                                <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/rlc.svg') }}" alt="" />
                            </td>
                            <td data-th="Code">RLC</td>
                            <td data-th="Name" class="light-cell">Rlc</td>
                            <td data-th="Status">
                                <span class="tag is-rounded">Trending</span>
                            </td>
                            <td data-th="Price">$1,221.987</td>
                            <td data-th="Evolution">
                                <div class="evolution is-positive">
                                    <span>+ 1.1%</span>
                                    <i data-feather="trending-up"></i>
                                </div>
                            </td>
                            <td data-th="Buy" class="has-text-right">
                                <button class="button btn-align primary-btn raised">
                                    Trade Now
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td data-th="Logo">
                                <img class="currency-icon" src="{{asset('img/graphics/icons/cryptocurrencies/bqx.svg') }}" alt="" />
                            </td>
                            <td data-th="Code">BQX</td>
                            <td data-th="Name" class="light-cell">Bqx</td>
                            <td data-th="Status">
                                <span class="tag is-rounded">Trending</span>
                            </td>
                            <td data-th="Price">$3,879.32</td>
                            <td data-th="Evolution">
                                <div class="evolution is-positive">
                                    <span>+ 3.2%</span>
                                    <i data-feather="trending-up"></i>
                                </div>
                            </td>
                            <td data-th="Buy" class="has-text-right">
                                <button class="button btn-align primary-btn raised">
                                    Trade Now
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="section-cta has-text-centered pb-40">
                <a href="#" class="button button-cta primary-btn is-rounded">See All Coins</a>
                <p>No credit card required.</p>
            </div>
        </div>
    </div>

    <!--Mockup Section-->
    <div class="section is-app-grey">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered pt-40 pb-40">
                <h2 class="section-title-landing">Get ready for serious income</h2>
                <h4>You won't be able to go back after this one.</h4>
            </div>

            <!--Mockup-->
            <div class="mockup-wrap">
                <div class="image-wrap">
                    <img class="full-image-minimal" src="{{asset('img/graphics/compositions/crypto-feature-2-core.png') }}" data-base-url="{{asset('img/graphics/compositions/crypto-feature-2') }}" data-extension=".png" alt="" />

                    <div class="columns is-multiline app-features is-pulled">
                        <div class="column is-6">
                            <!-- Side icon box -->
                            <div class="content content-flex">
                                <div class="dark-text">
                                    <i class="im im-icon-Safe-Box2 is-size-2 color-primary"></i>
                                </div>
                                <div class="dark-text has-text-left ml-30">
                                    <h5 class="text-bold">Virtual Safebox</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, ea vis numquam vivendo, voluptua
                                        argumentum an pri. Duo illud consequat in, eum eu veri ipsum
                                        oporteat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <!-- Side icon box -->
                            <div class="content content-flex">
                                <div class="dark-text">
                                    <i class="im im-icon-Bank is-size-2 color-primary"></i>
                                </div>
                                <div class="dark-text has-text-left ml-30">
                                    <h5 class="text-bold">Bank Connectors</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, ea vis numquam vivendo, voluptua
                                        argumentum an pri. Duo illud consequat in, eum eu veri ipsum
                                        oporteat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <!-- Side icon box -->
                            <div class="content content-flex">
                                <div class="dark-text">
                                    <i class="im im-icon-Lock is-size-2 color-primary"></i>
                                </div>
                                <div class="dark-text has-text-left ml-30">
                                    <h5 class="text-bold">Secured transactions</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, ea vis numquam vivendo, voluptua
                                        argumentum an pri. Duo illud consequat in, eum eu veri ipsum
                                        oporteat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <!-- Side icon box -->
                            <div class="content content-flex">
                                <div class="dark-text">
                                    <i class="im im-icon-Wallet-2 is-size-2 color-primary"></i>
                                </div>
                                <div class="dark-text has-text-left ml-30">
                                    <h5 class="text-bold">Robust wallet</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, ea vis numquam vivendo, voluptua
                                        argumentum an pri. Duo illud consequat in, eum eu veri ipsum
                                        oporteat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-cta has-text-centered pb-40">
                        <a href="#" class="button button-cta primary-btn is-rounded">Start my Free Trial</a>
                        <p>No credit card required.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FAQ-->
    <div class="section">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered pt-40 pb-40">
                <h2 class="section-title-landing">Frequently Asked Questions</h2>
                <h4>Everything you need to know to get started.</h4>
            </div>

            <div class="faq-wrapper">
                <div class="columns">
                    <div class="column is-5 is-offset-1">
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>How can I properly setup an account?</h3>
                            </div>
                            <div class="block-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Invidiosum nomen est, infame, suspectum. Utilitatis causa
                                    amicitia est quaesita. Non laboro, inquit, de nomine. Duo Reges:
                                    constructio interrete. Aliter homines, aliter philosophos loqui
                                    putas oportere?
                                </p>
                            </div>
                        </div>
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>Can I setup email alerts?</h3>
                            </div>
                            <div class="block-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Invidiosum nomen est, infame, suspectum. Utilitatis causa
                                    amicitia est quaesita. Non laboro, inquit, de nomine. Duo Reges:
                                    constructio interrete. Aliter homines, aliter philosophos loqui
                                    putas oportere?
                                </p>
                            </div>
                        </div>
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>Can I buy coins anytime, any day?</h3>
                            </div>
                            <div class="block-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Invidiosum nomen est, infame, suspectum. Utilitatis causa
                                    amicitia est quaesita. Non laboro, inquit, de nomine. Duo Reges:
                                    constructio interrete. Aliter homines, aliter philosophos loqui
                                    putas oportere?
                                </p>
                            </div>
                        </div>
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>Can I change my plan after sign up?</h3>
                            </div>
                            <div class="block-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Invidiosum nomen est, infame, suspectum. Utilitatis causa
                                    amicitia est quaesita. Non laboro, inquit, de nomine. Duo Reges:
                                    constructio interrete. Aliter homines, aliter philosophos loqui
                                    putas oportere?
                                </p>
                            </div>
                        </div>
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>Can I ask for payouts?</h3>
                            </div>
                            <div class="block-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Invidiosum nomen est, infame, suspectum. Utilitatis causa
                                    amicitia est quaesita. Non laboro, inquit, de nomine. Duo Reges:
                                    constructio interrete. Aliter homines, aliter philosophos loqui
                                    putas oportere?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-5">
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>Can I automate trading?</h3>
                            </div>
                            <div class="block-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Invidiosum nomen est, infame, suspectum. Utilitatis causa
                                    amicitia est quaesita. Non laboro, inquit, de nomine. Duo Reges:
                                    constructio interrete. Aliter homines, aliter philosophos loqui
                                    putas oportere?
                                </p>
                            </div>
                        </div>
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>Can I schedule trading operations in advance?</h3>
                            </div>
                            <div class="block-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Invidiosum nomen est, infame, suspectum. Utilitatis causa
                                    amicitia est quaesita. Non laboro, inquit, de nomine. Duo Reges:
                                    constructio interrete. Aliter homines, aliter philosophos loqui
                                    putas oportere?
                                </p>
                            </div>
                        </div>
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>How do I contact an advisor?</h3>
                            </div>
                            <div class="block-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Invidiosum nomen est, infame, suspectum. Utilitatis causa
                                    amicitia est quaesita. Non laboro, inquit, de nomine. Duo Reges:
                                    constructio interrete. Aliter homines, aliter philosophos loqui
                                    putas oportere?
                                </p>
                            </div>
                        </div>
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>Can I add members of my team to my account?</h3>
                            </div>
                            <div class="block-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Invidiosum nomen est, infame, suspectum. Utilitatis causa
                                    amicitia est quaesita. Non laboro, inquit, de nomine. Duo Reges:
                                    constructio interrete. Aliter homines, aliter philosophos loqui
                                    putas oportere?
                                </p>
                            </div>
                        </div>
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>Can I manage user roles?</h3>
                            </div>
                            <div class="block-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Invidiosum nomen est, infame, suspectum. Utilitatis causa
                                    amicitia est quaesita. Non laboro, inquit, de nomine. Duo Reges:
                                    constructio interrete. Aliter homines, aliter philosophos loqui
                                    putas oportere?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel section -->
    <div class="section is-medium">
        <!-- Left rouned images -->
        <img id="greg" class="testimonials-cover is-active" src="https://via.placeholder.com/1920x1277" alt="" data-demo-src="{{asset('img/demo/covers/greg-cover-core.png') }}" data-base-url="{{asset('img/demo/covers/greg-cover') }}" data-extension=".png" />
        <img id="jane" class="testimonials-cover" src="https://via.placeholder.com/1920x1277" alt="" data-demo-src="{{asset('img/demo/covers/jane-cover-core.png') }}" data-base-url="{{asset('img/demo/covers/jane-cover') }}" data-extension=".png" />
        <img id="andres" class="testimonials-cover" src="https://via.placeholder.com/1920x1277" alt="" data-demo-src="{{asset('img/demo/covers/andres-cover-core.png') }}" data-base-url="{{asset('img/demo/covers/andres-cover') }}" data-extension=".png" />
        <img id="yuko" class="testimonials-cover" src="https://via.placeholder.com/1920x1277" alt="" data-demo-src="{{asset('img/demo/covers/yuko-cover-core.png') }}" data-base-url="{{asset('img/demo/covers/yuko-cover') }}" data-extension=".png" />
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3">
                    <!-- CSS Carousel -->
                    <div class="css-carousel">
                        <i class="fa fa-quote-left"></i>
                        <!-- Hidden inputs -->
                        <input type="radio" name="slides" id="radio-1" checked data-testimonial-image="greg" />
                        <input type="radio" name="slides" id="radio-2" data-testimonial-image="jane" />
                        <input type="radio" name="slides" id="radio-3" data-testimonial-image="andres" />
                        <input type="radio" name="slides" id="radio-4" data-testimonial-image="yuko" />
                        <ul class="slides">
                            <!-- Carousel item -->
                            <li class="slide">
                                <p>
                                    <q>It is a pleasure to use this service</q>
                                    <span class="text">An awesome platform to learn from</span>
                                    <span class="author">
                      <img
                        src="https://via.placeholder.com/150x150"
                        alt=""
                        data-demo-src="{{asset('img/demo/covers/greg.png') }}"
                      />
                      Greg Norton
                    </span>
                                </p>
                            </li>
                            <!-- Carousel item -->
                            <li class="slide">
                                <p>
                                    <q>Awesome and available mentors</q>
                                    <span class="text">There is always somebody to help you.</span>
                                    <span class="author">
                      <img
                        src="https://via.placeholder.com/150x150"
                        alt=""
                        data-demo-src="{{asset('img/demo/covers/jane.png') }}"
                      />
                      Jane Mitchells
                    </span>
                                </p>
                            </li>
                            <!-- Carousel item -->
                            <li class="slide">
                                <p>
                                    <q>A cool place to learn cool things</q>
                                    <span class="text"
                      >Tons of quality design materials available.</span>
                                    <span class="author">
                      <img
                        src="https://via.placeholder.com/150x150"
                        alt=""
                        data-demo-src="{{asset('img/demo/covers/andres.png') }}"
                      />
                      Andres Fogossa
                    </span>
                                </p>
                            </li>
                            <!-- Carousel item -->
                            <li class="slide">
                                <p>
                                    <q>From wannabe to professional</q>
                                    <span class="text"
                      >Great experience and awesome learning curve.</span>
                                    <span class="author">
                      <img
                        src="https://via.placeholder.com/150x150"
                        alt=""
                        data-demo-src="{{asset('img/demo/covers/yuko.png') }}"
                      />
                      Yuko Hattori
                    </span>
                                </p>
                            </li>
                        </ul>
                        <!-- Slider controls -->
                        <div class="carousel-dots">
                            <label for="radio-1" id="dotForRadio-1"></label>
                            <label for="radio-2" id="dotForRadio-2"></label>
                            <label for="radio-3" id="dotForRadio-3"></label>
                            <label for="radio-4" id="dotForRadio-4"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News section -->
    <div class="section">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered pt-40 pb-40">
                <h2 class="section-title-landing">Latest News</h2>
                <h4>You won't be able to go back after this one.</h4>
            </div>
            <!-- Wrapper -->
            <div class="content-wrapper">
                <div class="columns">
                    <!-- Featured Post -->
                    <div class="column is-8">
                        <div class="main-post">
                            <!-- Featured image -->
                            <div class="post-image">
                                <img src="https://via.placeholder.com/1600x900" alt="" data-demo-src="../images.pexels.com/photos/844124/pexels-photo-8441241751.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940" />
                                <div class="image-overlay"></div>
                            </div>
                            <!-- Featured Content -->
                            <div class="post-content">
                                <h3>
                                    <a href="#">How to invest in Blockchain efficiently in 2021?</a>
                                </h3>
                                <span class="time">April 11 2021</span>
                                <p>
                                    Homines enim eruditos et sobrios ut infaustos et inutiles
                                    vitant, eo quoque accedente quod et nomenclatores adsueti haec
                                    et talia venditare, mercede accepta lucris quosdam et prandiis
                                    inserunt subditicios ignobiles et obscuros.
                                </p>
                                <!-- Read more -->
                                <a class="read-more" href="#">Continue reading <i class="im im-icon-Right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4">
                        <!-- Recent Post -->
                        <div class="side-post">
                            <!-- Featured image -->
                            <div class="post-image">
                                <img src="https://via.placeholder.com/1600x900" alt="" data-demo-src="../images.pexels.com/photos/4874400/pexels-photo-4874400d93f.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=340" />
                                <div class="image-overlay"></div>
                            </div>
                            <!-- Featured content -->
                            <div class="post-content">
                                <h3>
                                    <a href="#">Affraid that the market eventually collapses?</a>
                                </h3>
                                <p>
                                    Homines enim eruditos et sobrios ut infaustos et inutiles
                                    vitant, eo...
                                </p>
                            </div>
                        </div>
                        <!-- Recent Post -->
                        <div class="side-post">
                            <!-- Featured image -->
                            <div class="post-image">
                                <img src="https://via.placeholder.com/1600x900" alt="" data-demo-src="../images.pexels.com/photos/1037913/pexels-photo-103791303b0.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=340&amp;w=340" />
                                <div class="image-overlay"></div>
                            </div>
                            <!-- Featured content -->
                            <div class="post-content">
                                <h3><a href="#">Say Hello to Nina Lopez, our new mentor</a></h3>
                                <p>
                                    Homines enim eruditos et sobrios ut infaustos et inutiles
                                    vitant, eo...
                                </p>
                            </div>
                        </div>
                        <!-- Recent Post -->
                        <div class="side-post">
                            <!-- Featured image -->
                            <div class="post-image">
                                <img src="https://via.placeholder.com/1600x900" alt="" data-demo-src="../images.pexels.com/photos/210600/pexels-photo-21060003b0.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=340&amp;w=340" />
                                <div class="image-overlay"></div>
                            </div>
                            <!-- Featured content -->
                            <div class="post-content">
                                <h3>
                                    <a href="#">5 tips to make (almost) perfect investments</a>
                                </h3>
                                <p>
                                    Homines enim eruditos et sobrios ut infaustos et inutiles
                                    vitant, eo...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer class="footer-light-medium">
        <div class="container">
            <div class="footer-head">
                <div class="head-text">
                    <h3>Ready to get started?</h3>
                    <p>Create your free account now</p>
                </div>
                <div class="head-action">
                    <div class="buttons">
                        <a class="button primary-btn raised action-button is-bold">Try it free</a>
                        <a class="button chat-button">Chat with us</a>
                    </div>
                </div>
            </div>
            <div class="columns footer-body">
                <!-- Column -->
                <div class="column is-4">
                    <div class="pt-10 pb-10">
                        <img class="small-footer-logo" src="{{asset('images') }}/{{$app_config->logoimage}}" alt="">
                        <div class="footer-description">
                            {{$app_config->description}}
                        </div>
                    </div>
                    <div>
                        <span class="moto">Designed and coded with <i class="fa fa-heart color-red"></i> by CSS
                            Ninja.</span>
                        <div class="social-links">
                            <a href="#">
                                <span class="icon"><i class="fa fa-facebook"></i></span>
                            </a>
                            <a href="#">
                                <span class="icon"><i class="fa fa-twitter"></i></span>
                            </a>
                            <a href="#">
                                <span class="icon"><i class="fa fa-linkedin"></i></span>
                            </a>
                            <a href="#">
                                <span class="icon"><i class="fa fa-dribbble"></i></span>
                            </a>
                            <a href="#">
                                <span class="icon"><i class="fa fa-github"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="column is-6 is-offset-2">
                    <div class="columns">
                        <!-- Column -->
                        <div class="column">
                            <ul class="footer-column">
                                <li class="column-header">
                                    {{$app_config->name}}
                                </li>
                                <li class="column-item"><a href="#">Home</a></li>
                                <li class="column-item"><a href="#">Pricing</a></li>
                                <li class="column-item"><a href="#">Get started</a></li>
                                <li class="column-item"><a href="#">Help</a></li>
                            </ul>
                        </div>
                        <!-- Column -->
                        <div class="column">
                            <ul class="footer-column">
                                <li class="column-header">
                                    Ressources
                                </li>
                                <li class="column-item"><a href="#">Learning</a></li>
                                <li class="column-item"><a href="#">Support center</a></li>
                                <li class="column-item"><a href="#">Frequent questions</a></li>
                                <li class="column-item"><a href="#">Schedule a demo</a></li>
                            </ul>
                        </div>
                        <!-- Column -->
                        <div class="column">
                            <ul class="footer-column">
                                <li class="column-header">
                                    Terms
                                </li>
                                <li class="column-item"><a href="#">Terms of Service</a></li>
                                <li class="column-item"><a href="#">Privacy policy</a></li>
                                <li class="column-item"><a href="#">SaaS services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright has-text-centered">
                <p>&copy; 2019-2020 | <a href="https://cssninja.io/">Css Ninja</a> | All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Side navigation -->
    <div class="side-navigation-menu">
        <!-- Categories menu -->
        <div class="category-menu-wrapper">
            <!-- Menu -->
            <ul class="categories">
                <li class="square-logo"><img src="{{asset('img/logos/square-white.svg') }}" alt=""></li>
                <li class="category-link is-active" data-navigation-menu="demo-pages"><i class="sl sl-icon-layers"></i></li>
                <li class="category-link" data-navigation-menu="onepagers"><i class="sl sl-icon-docs"></i></li>
                <li class="category-link" data-navigation-menu="components"><i class="sl sl-icon-grid"></i></li>
            </ul>
            <!-- Menu -->

            <ul class="author">
                <li>
                    <!-- Theme author -->
                    <a href="https://cssninja.io/" target="_blank">
                        <img class="main-menu-author" src="{{asset('img/logos/cssninja.svg') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <!-- /Categories menu -->

        <!-- Navigation menu -->
        <div id="demo-pages" class="navigation-menu-wrapper animated preFadeInRight fadeInRight">
            <!-- Navigation Header -->
            <div class="navigation-menu-header">
                <span>Demo pages</span>
                <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                    <span class="menu-toggle">
                        <span class="icon-box-toggle">
                            <span class="rotate">
                                <i class="icon-line-top"></i>
                                <i class="icon-line-center"></i>
                                <i class="icon-line-bottom"></i>
                            </span>
                    </span>
                    </span>
                </a>
            </div>
            <!-- Navigation Body -->
            <ul class="navigation-menu">
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">weekend</span>Agency</a>
                    <ul>
                        <li><a class="is-submenu" href="agency-home.html">Homepage</a></li>
                        <li><a class="is-submenu" href="agency-about.html">About</a></li>
                        <li><a class="is-submenu" href="agency-portfolio.html">Portfolio</a></li>
                        <li><a class="is-submenu" href="agency-contact.html">Contact</a></li>
                        <li><a class="is-submenu" href="agency-blog.html">Blog</a></li>
                        <li><a class="is-submenu" href="agency-post-nosidebar.html">Post no sidebar</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">wb_incandescent</span>Startup</a>
                    <ul>
                        <li><a class="is-submenu" href="startup-landing.html">Homepage</a></li>
                        <li><a class="is-submenu" href="startup-about.html">About</a></li>
                        <li><a class="is-submenu" href="startup-product.html">Product</a></li>
                        <li><a class="is-submenu" href="startup-contact.html">Contact</a></li>
                        <li><a class="is-submenu" href="startup-login.html">Login</a></li>
                        <li><a class="is-submenu" href="startup-signup.html">Sign up</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">apps</span>Software</a>
                    <ul>
                        <li><a class="is-submenu" href="kit15-landing-5.html">Conference v1</a></li>
                        <li><a class="is-submenu" href="kit15-landing-6.html">Conference v2</a></li>
                        <li><a class="is-submenu" href="kit1-landing.html">Projects v1</a></li>
                        <li><a class="is-submenu" href="kit1-landing-2.html">Healthcare v1</a></li>
                        <li><a class="is-submenu" href="kit1-landing-3.html">Healthcare v2</a></li>
                        <li><a class="is-submenu" href="kit1-landing-4.html">Business v1</a></li>
                        <li><a class="is-submenu" href="kit1-landing-5.html">Business v2</a></li>
                        <li><a class="is-submenu" href="kit1-landing-6.html">Business v3</a></li>
                        <li><a class="is-submenu" href="kit1-landing-7.html">Business v4</a></li>
                        <li><a class="is-submenu" href="kit1-landing-8.html">Business v5</a></li>
                        <li><a class="is-submenu" href="kit1-landing-9.html">Business v6</a></li>
                        <li><a class="is-submenu" href="kit1-landing-10.html">Business v7</a></li>
                        <li><a class="is-submenu" href="kit1-landing-11.html">Business v8</a></li>
                        <li><a class="is-submenu" href="kit1-landing-12.html">Business v9</a></li>
                        <li><a class="is-submenu" href="kit1-landing-13.html">Business 10</a></li>
                        <li><a class="is-submenu" href="kit1-features.html">Features v1</a></li>
                        <li><a class="is-submenu" href="kit1-features-2.html">Features v2</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">timer</span>Freelancer</a>
                    <ul>
                        <li><a class="is-submenu" href="kit2-landing-9.html">Freelancer v1</a></li>
                        <li><a class="is-submenu" href="kit2-landing.html">Freelancer v2</a></li>
                        <li><a class="is-submenu" href="kit2-landing-2.html">Freelancer v3</a></li>
                        <li><a class="is-submenu" href="kit2-landing-3.html">Freelancer v4</a></li>
                        <li><a class="is-submenu" href="kit2-landing-10.html">Freelancer v5</a></li>
                        <li><a class="is-submenu" href="kit2-landing-11.html">Freelancer v6</a></li>
                        <li><a class="is-submenu" href="kit2-landing-4.html">Freelancer v7</a></li>
                        <li><a class="is-submenu" href="kit2-landing-5.html">Freelancer v8</a></li>
                        <li><a class="is-submenu" href="kit2-landing-6.html">Freelancer v9</a></li>
                        <li><a class="is-submenu" href="kit2-landing-7.html">Freelancer v10</a></li>
                        <li><a class="is-submenu" href="kit2-landing-8.html">Freelancer v11</a></li>
                        <li><a class="is-submenu" href="kit2-features.html">Features v1</a></li>
                        <li><a class="is-submenu" href="kit2-features-2.html">Features v2</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">voice_chat</span>Videoconference</a>
                    <ul>
                        <li><a class="is-submenu" href="kit16-landing.html">Videoconference v1</a></li>
                        <li><a class="is-submenu" href="kit16-landing-2.html">Videoconference v2</a></li>
                        <li><a class="is-submenu" href="kit16-landing-3.html">Videoconference v3</a></li>
                        <li><a class="is-submenu" href="kit3-landing.html">Chat v1</a></li>
                        <li><a class="is-submenu" href="kit3-landing-2.html">Chat v2</a></li>
                        <li><a class="is-submenu" href="kit3-features.html">Features v1</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">domain</span>Business</a>
                    <ul>
                        <li><a class="is-submenu" href="kit17-landing.html">Crypto v1</a></li>
                        <li><a class="is-submenu" href="kit17-landing-2.html">Crypto v2</a></li>
                        <li><a class="is-submenu" href="kit17-landing-3.html">Crypto v3</a></li>
                        <li><a class="is-submenu" href="kit17-landing-4.html">Crypto v4</a></li>
                        <li><a class="is-submenu" href="kit15-landing.html">Business v1</a></li>
                        <li><a class="is-submenu" href="kit15-landing-2.html">Business v2</a></li>
                        <li><a class="is-submenu" href="kit15-landing-3.html">Business v3</a></li>
                        <li><a class="is-submenu" href="kit15-landing-4.html">Business v4</a></li>
                        <li><a class="is-submenu" href="kit10-landing.html">Banking v1</a></li>
                        <li><a class="is-submenu" href="kit10-landing-2.html">Banking v2</a></li>
                        <li><a class="is-submenu" href="kit10-landing-3.html">Banking v3</a></li>
                        <li><a class="is-submenu" href="kit18-landing.html">Car Rental v1</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">shopping_cart</span>Ecommerce</a>
                    <ul>
                        <li><a class="is-submenu" href="commerce-home.html">Shop page</a></li>
                        <li><a class="is-submenu" href="commerce-product-landing.html">Landing page</a></li>
                        <li><a class="is-submenu" href="commerce-product-landing-2.html">Landing page</a></li>
                        <li><a class="is-submenu" href="commerce-product-1.html">Product page</a></li>
                        <li><a class="is-submenu" href="commerce-cart.html">Cart</a></li>
                        <li><a class="is-submenu" href="commerce-payment-flow.html">Payment</a></li>
                        <li><a class="is-submenu" href="kit11-landing.html">SaaS v1</a></li>
                        <li><a class="is-submenu" href="kit11-landing-2.html">SaaS v2</a></li>
                        <li><a class="is-submenu" href="kit11-landing-3.html">SaaS v3</a></li>
                        <li><a class="is-submenu" href="kit11-landing-4.html">SaaS v4</a></li>
                        <li><a class="is-submenu" href="kit11-landing-5.html">SaaS v5</a></li>
                        <li><a class="is-submenu" href="kit11-landing-6.html">SaaS v6</a></li>
                        <li><a class="is-submenu" href="kit11-landing-7.html">SaaS v7</a></li>
                        <li><a class="is-submenu" href="kit11-landing-8.html">SaaS v8</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">mouse</span>Services</a>
                    <ul>
                        <li><a class="is-submenu" href="kit12-landing.html">Consulting v1</a></li>
                        <li><a class="is-submenu" href="kit12-landing-2.html">Consulting v2</a></li>
                        <li><a class="is-submenu" href="kit12-landing-3.html">Consulting v3</a></li>
                        <li><a class="is-submenu" href="kit12-landing-4.html">Consulting v4</a></li>
                        <li><a class="is-submenu" href="kit4-landing.html">HR v1</a></li>
                        <li><a class="is-submenu" href="kit4-landing-2.html">HR v2</a></li>
                        <li><a class="is-submenu" href="kit5-landing.html">Collaboration v1</a></li>
                        <li><a class="is-submenu" href="kit5-features.html">Collaboration v2</a></li>
                        <li><a class="is-submenu" href="kit6-landing.html">Collaboration v3</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">work</span>Jobs</a>
                    <ul>
                        <li><a class="is-submenu" href="kit13-landing.html">Jobs v1</a></li>
                        <li><a class="is-submenu" href="kit13-landing-2.html">Jobs v2</a></li>
                        <li><a class="is-submenu" href="kit8-landing.html">Work v1</a></li>
                        <li><a class="is-submenu" href="kit8-landing-1.html">Work v2</a></li>
                        <li><a class="is-submenu" href="kit8-landing-5.html">Work v3</a></li>
                        <li><a class="is-submenu" href="kit8-landing-2.html">Work v4</a></li>
                        <li><a class="is-submenu" href="kit8-landing-6.html">Work v5</a></li>
                        <li><a class="is-submenu" href="kit8-landing-3.html">Work v6</a></li>
                        <li><a class="is-submenu" href="kit8-landing-4.html">Work v7</a></li>
                        <li><a class="is-submenu" href="kit14-landing.html">Development v1</a></li>
                        <li><a class="is-submenu" href="kit14-landing-3.html">Development v2</a></li>
                        <li><a class="is-submenu" href="kit14-landing-2.html">Development v3</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a class="parent-link" href="#">
                        <span class="material-icons">people</span>Customers</a>
                    <ul>
                        <li><a class="is-submenu" href="kit7-landing.html">CRM v1</a></li>
                        <li><a class="is-submenu" href="kit7-landing-alt.html">CRM v2</a></li>
                        <li><a class="is-submenu" href="kit7-landing-3.html">CRM v3</a></li>
                        <li><a class="is-submenu" href="kit7-landing-4.html">CRM v4</a></li>
                        <li><a class="is-submenu" href="kit7-landing-5.html">CRM v5</a></li>
                        <li><a class="is-submenu" href="kit9-landing.html">CRM v6</a></li>
                        <li><a class="is-submenu" href="kit9-landing-2.html">CRM v7</a></li>
                        <li><a class="is-submenu" href="kit9-landing-3.html">CRM v8</a></li>
                        <li><a class="is-submenu" href="kit9-landing-4.html">CRM v9</a></li>
                        <li><a class="is-submenu" href="kit8-jobs.html">Job List</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Navigation menu -->
        <div id="onepagers" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
            <!-- Navigation Header -->
            <div class="navigation-menu-header">
                <span>Sub Pages</span>
                <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                    <span class="menu-toggle">
                        <span class="icon-box-toggle">
                            <span class="rotate">
                                <i class="icon-line-top"></i>
                                <i class="icon-line-center"></i>
                                <i class="icon-line-bottom"></i>
                            </span>
                    </span>
                    </span>
                </a>
            </div>
            <!-- Navigation body -->
            <ul class="navigation-menu">
                <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">account_circle</span>Personal</a>
                    <ul>
                        <li><a class="is-submenu" href="profile-1.html">Profile v1</a></li>
                        <li><a class="is-submenu" href="profile-2.html">Profile v2</a></li>
                        <li><a class="is-submenu" href="profile-3.html">Profile v3</a></li>
                        <li><a class="is-submenu" href="profile-4.html">Profile v4</a></li>
                        <li><a class="is-submenu" href="profile-5.html">Profile v5</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">shopping_cart</span>Commerce</a>
                    <ul>
                        <li><a class="is-submenu" href="commerce-home.html">Shop Home</a></li>
                        <li><a class="is-submenu" href="commerce-product-landing.html">Product landing v1</a></li>
                        <li><a class="is-submenu" href="commerce-product-landing-2.html">Product landing v2</a></li>
                        <li><a class="is-submenu" href="commerce-product-1.html">Product page</a></li>
                        <li><a class="is-submenu" href="commerce-cart.html">Cart page</a></li>
                        <li><a class="is-submenu" href="commerce-payment-flow.html">Checkout page</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">domain</span>Company</a>
                    <ul>
                        <li><a class="is-submenu" href="about-page-1.html">About v1</a></li>
                        <li><a class="is-submenu" href="about-page-2.html">About v2</a></li>
                        <li><a class="is-submenu" href="case-study-1.html">Case Study v1</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">call</span>Contact</a>
                    <ul>
                        <li><a class="is-submenu" href="contact-page-1.html">Contact v1</a></li>
                        <li><a class="is-submenu" href="contact-page-2.html">Contact v2</a></li>
                        <li><a class="is-submenu" href="contact-page-3.html">Contact v3</a></li>
                        <li><a class="is-submenu" href="contact-page-4.html">Contact v4</a></li>
                        <li><a class="is-submenu" href="contact-page-5.html">Contact v5</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">book</span>Blog</a>
                    <ul>
                        <li><a class="is-submenu" href="blog-posts-full.html">Posts List v1</a></li>
                        <li><a class="is-submenu" href="blog-posts-full-alt.html">Posts List v2</a></li>
                        <li><a class="is-submenu" href="blog-posts-side.html">Posts List v3</a></li>
                        <li><a class="is-submenu" href="blog-posts-side-alt.html">Posts List v4</a></li>
                        <li><a class="is-submenu" href="blog-posts-grid-full.html">Posts Grid v1</a></li>
                        <li><a class="is-submenu" href="blog-posts-grid-full-masonry.html">Posts Grid v2</a></li>
                        <li><a class="is-submenu" href="blog-posts-grid-side.html">Posts Grid v3</a></li>
                        <li><a class="is-submenu" href="blog-posts-grid-side-masonry.html">Posts Grid v4</a></li>
                        <li><a class="is-submenu" href="blog-single-full.html">Single Post V1</a></li>
                        <li><a class="is-submenu" href="blog-single-side.html">Single Post V2</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a class="parent-link has-new" href="#"><span class="material-icons">verified_user</span>Authentication</a>
                    <ul>
                        <li><a class="is-submenu" href="startup-login.html">Login v1</a></li>
                        <li><a class="is-submenu" href="startup-login-2.html">Login v2</a></li>
                        <li><a class="is-submenu" href="kit1-login.html">Login v3</a></li>
                        <li><a class="is-submenu" href="kit2-login.html">Login v4</a></li>
                        <li><a class="is-submenu" href="kit3-login.html">Login v5</a></li>
                        <li><a class="is-submenu" href="kit4-login.html">Login v6</a></li>
                        <li><a class="is-submenu" href="kit5-login.html">Login v7</a></li>
                        <li><a class="is-submenu" href="kit6-login.html">Login v8</a></li>
                        <li><a class="is-submenu" href="kit8-login.html">Login v9</a></li>
                        <li><a class="is-submenu" href="startup-signup.html">Signup v1</a></li>
                        <li><a class="is-submenu" href="startup-signup-2.html">Signup v2</a></li>
                        <li><a class="is-submenu" href="kit3-signup.html">Signup v3</a></li>
                        <li><a class="is-submenu" href="kit4-signup.html">Signup v4</a></li>
                        <li><a class="is-submenu" href="kit6-signup.html">Signup v5</a></li>
                        <li><a class="is-submenu" href="kit8-signup.html">Signup v6</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a class="parent-link has-new" href="#"><span class="material-icons">highlight</span>Error Pages</a>
                    <ul>
                        <li><a class="is-submenu" href="error-1.html">Error v1</a></li>
                        <li><a class="is-submenu" href="error-2.html">Error v2</a></li>
                        <li><a class="is-submenu" href="error-3.html">Error v3</a></li>
                        <li><a class="is-submenu" href="error-4.html">Error v4</a></li>
                        <li><a class="is-submenu" href="error-5.html">Error v5</a></li>
                        <li><a class="is-submenu" href="error-6.html">Error v6</a></li>
                        <li><a class="is-submenu" href="error-7.html">Error v7</a></li>
                        <li><a class="is-submenu" href="error-8.html">Error v8</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Navigation menu -->
        <div id="components" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
            <!-- Navigation Header -->
            <div class="navigation-menu-header">
                <span>Components</span>
                <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                    <span class="menu-toggle">
                        <span class="icon-box-toggle">
                            <span class="rotate">
                                <i class="icon-line-top"></i>
                                <i class="icon-line-center"></i>
                                <i class="icon-line-bottom"></i>
                            </span>
                    </span>
                    </span>
                </a>
            </div>
            <!-- Navigation body -->
            <ul class="navigation-menu">
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">view_quilt</span>Layout</a>
                    <ul>
                        <li><a class="is-submenu" href="_components-layout-grid.html">Grid system</a></li>
                        <li><a class="is-submenu" href="_components-layout-parallax.html">Parallax</a></li>
                        <li><a class="is-submenu" href="_components-layout-headers.html">Headers</a></li>
                        <li><a class="is-submenu" href="_components-layout-footers.html">Footers</a></li>
                        <li><a class="is-submenu" href="_components-layout-typography.html">Typography</a></li>
                        <li><a class="is-submenu" href="_components-layout-colors.html">Colors</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">subject</span>Navbars</a>
                    <ul>
                        <li><a class="is-submenu" href="_components-layout-navbar-fade-light.html">Fade light</a></li>
                        <li><a class="is-submenu" href="_components-layout-navbar-fade-dark.html">Fade dark</a></li>
                        <li><a class="is-submenu" href="_components-layout-navbar-static-light.html">Static
                                light</a></li>
                        <li><a class="is-submenu" href="_components-layout-navbar-static-dark.html">Static
                                dark</a></li>
                        <li><a class="is-submenu" href="_components-layout-navbar-static-solid.html">Static
                                solid</a></li>
                        <li><a class="is-submenu" href="_components-layout-navbar-double-dark.html">Double
                                dark</a></li>
                        <li><a class="is-submenu" href="_components-layout-navbar-double-light.html">Double
                                light</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">view_stream</span>Sections</a>
                    <ul>
                        <li><a class="is-submenu" href="_components-sections-features.html">Features</a></li>
                        <li><a class="is-submenu" href="_components-sections-pricing.html">Pricing</a></li>
                        <li><a class="is-submenu" href="_components-sections-team.html">Team</a></li>
                        <li><a class="is-submenu" href="_components-sections-testimonials.html">Testimonials</a></li>
                        <li><a class="is-submenu" href="_components-sections-clients.html">Clients</a></li>
                        <li><a class="is-submenu" href="_components-sections-faq.html">FAQ</a></li>
                        <li><a class="is-submenu" href="_components-sections-counters.html">Counters</a></li>
                        <li><a class="is-submenu" href="_components-sections-carousel.html">Carousel</a></li>
                        <li><a class="is-submenu" href="_components-sections-cta.html">Call To Action</a></li>
                        <li><a class="is-submenu" href="_components-sections-posts.html">Posts</a></li>
                        <li><a class="is-submenu" href="_components-sections-video.html">Video</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add_check</span>Basic
                        UI</a>
                    <ul>
                        <li><a class="is-submenu" href="_components-basicui-cards.html">Cards</a></li>
                        <li><a class="is-submenu" href="_components-basicui-buttons.html">Buttons</a></li>
                        <li><a class="is-submenu" href="_components-basicui-dropdowns.html">Dropdowns</a></li>
                        <li><a class="is-submenu" href="_components-basicui-lists.html">Lists</a></li>
                        <li><a class="is-submenu" href="_components-basicui-modals.html">Modals</a></li>
                        <li><a class="is-submenu" href="_components-basicui-tabs.html">Tabs & pills</a></li>
                        <li><a class="is-submenu" href="_components-basicui-accordion.html">Accordions</a></li>
                        <li><a class="is-submenu" href="_components-basicui-badges.html">Badges & labels</a></li>
                        <li><a class="is-submenu" href="_components-basicui-popups.html">Popups</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add</span>Advanced
                        UI</a>
                    <ul>
                        <li><a class="is-submenu" href="_components-advancedui-tables.html">Tables</a></li>
                        <li><a class="is-submenu" href="_components-advancedui-timeline.html">Timeline</a></li>
                        <li><a class="is-submenu" href="_components-advancedui-boxes.html">Boxes</a></li>
                        <li><a class="is-submenu" href="_components-advancedui-messages.html">Messages</a></li>
                        <li><a class="is-submenu" href="_components-advancedui-megamenu.html">Megamenu</a></li>
                        <li><a class="is-submenu" href="_components-advancedui-calendar.html">Calendar</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">check_box</span>Forms</a>
                    <ul>
                        <li><a class="is-submenu" href="_components-forms-inputs.html">Inputs</a></li>
                        <li><a class="is-submenu" href="_components-forms-controls.html">Controls</a></li>
                        <li><a class="is-submenu" href="_components-forms-layouts.html">Form layouts</a></li>
                        <li><a class="is-submenu" href="_components-forms-steps.html">Step forms</a></li>
                        <li><a class="is-submenu" href="_components-forms-uploader.html">Uploader</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">adjust</span>Icons</a>
                    <ul>
                        <li><a class="is-submenu" href="_components-icons-im.html">Icons Mind</a></li>
                        <li><a class="is-submenu" href="_components-icons-sl.html">Simple Line Icons</a></li>
                        <li><a class="is-submenu" href="_components-icons-fa.html">Font Awesome</a></li>
                        <li><a class="is-submenu" href="https://material.io/icons/" target="_blank">Material Icons</a></li>
                        <li><a class="is-submenu" href="_components-extensions-iconpicker.html">Icon Picker</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /Navigation menu -->
    </div>
    <!-- /Side navigation -->
    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>
    <div id="style-switcher" class="style-switcher visible">
        <div class="switcher-close">
            <i class="material-icons">close</i>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="core" name="theme_selector" checked>
            <div class="style-dot-inner"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="purple" name="theme_selector">
            <div class="style-dot-inner is-purple"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="teal" name="theme_selector">
            <div class="style-dot-inner is-teal"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="green" name="theme_selector">
            <div class="style-dot-inner is-green"></div>
        </div>

        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="azur" name="theme_selector">
            <div class="style-dot-inner is-azur"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="blue" name="theme_selector">
            <div class="style-dot-inner is-blue"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="night" name="theme_selector">
            <div class="style-dot-inner is-night"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="yellow" name="theme_selector">
            <div class="style-dot-inner is-yellow"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="orange" name="theme_selector">
            <div class="style-dot-inner is-orange"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="red" name="theme_selector">
            <div class="style-dot-inner is-red"></div>
        </div>
    </div> <!-- Bulchat Button -->
    <div id="bulchat" class="open">
        <div class="chat-button open g-item"></div>
    </div> <!-- Chat widget -->
    <div id="chat-widget">
        <div class="chat-widget-body is-closed">
            <div class="chat-header">
                <div class="close-chat is-hidden-desktop is-hidden-tablet"><img src="{{asset('img/graphics/legacy/close-small.svg') }}" alt=""></div>
                <div class="chat-team">
                    <div class="team-member has-text-centered">
                        <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{asset('img/avatars/alan.jpg') }}">
                        <div class="is-handwritten">Alan maynard</div>
                    </div>
                </div>
                <div class="response-delay has-text-centered">
                    Answers in less than 18 hours
                </div>
            </div>
            <div class="message-container">
                <div class="divider">
                    <span class="before-divider"></span>
                    <div class="children">Today</div>
                    <span class="after-divider"></span>
                </div>
                <div class="chat-message from">
                    <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{asset('img/avatars/alan.jpg') }}">
                    <div class="bubble-wrapper">
                        <div class="timestamp">02:49 pm</div>
                        <div class="chat-bubble">
                            Hey iam Alan ! Iam here to help. What can i do for you ?
                        </div>
                    </div>
                </div>
                <div class="chat-message to">
                    <div class="bubble-wrapper">
                        <div class="timestamp">02:48 pm</div>
                        <div class="chat-bubble">
                            Hello, someone out there ? I could use some help
                        </div>
                    </div>
                    <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{asset('img/avatars/helen.jpg') }}">
                </div>
            </div>
            <div class="message-input">
                <textarea class="" rows="1" placeholder="Send a message ..."></textarea>
                <div class="message-options">
                    <div class="emoji-button"></div>
                    <div class="attach-button"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Chat widget -->
    <script src="{{ asset('api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
</body>


<!-- Mirrored from bulkit.cssninja.io/kit17-landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Feb 2022 09:45:30 GMT -->
</html>