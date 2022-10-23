<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
        <div class="header-top header-top-borders">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
                                        <span class="ps-0"><i class="far fa-dot-circle text-4 text-color-primary" style="top: 1px;"></i> Cevat Dündar Cad., Kat:1 N:1/1/10 Ostim Teknopark/Ankara</span>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2">
                                        <a href="tel:+905077455187"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> +90 507 745 51 87</a>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">
                                        <a href="mailto:info@physmart.com.tr"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> info@physmart.com.tr</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
                                        <a href="#">Blog</a>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2 pe-0 dropdown">
                                        <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="/porto/img/blank.gif" class="flag flag-tr" alt="Türkçe" /> Türkçe
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                                            <a class="dropdown-item" href="#"><img src="/porto/img/blank.gif" class="flag flag-us" alt="English" /> English</a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('index') }}">
                                <img alt="Porto" width="180" height="50" data-sticky-width="82" data-sticky-height="40" src="{{ asset('images/phy/logo.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-stripe order-2 order-lg-1" style="color:black">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav" >
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ Route::currentRouteName() == ''  ? 'active' : '' }}" href="/">
                                                Anasayfa
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-mega">
                                            <a class="dropdown-item dropdown-toggle" href="elements.html">
                                                Kurumsal
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="dropdown-mega-content">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <span class="dropdown-mega-sub-title">Elements 1</span>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a class="dropdown-item" href="elements-accordions.html">Accordions</a></li>
                                                                    <li><a class="dropdown-item" href="elements-alerts.html">Alerts</a></li>
                                                                    <li><a class="dropdown-item" href="elements-animations.html">Animations</a></li>
                                                                    <li><a class="dropdown-item" href="elements-arrows.html">Arrows</a></li>
                                                                    <li><a class="dropdown-item" href="elements-badges.html">Badges</a></li>
                                                                    <li><a class="dropdown-item" href="elements-before-after.html">Before / After</a></li>
                                                                    <li><a class="dropdown-item" href="elements-blockquotes.html">Blockquotes</a></li>
                                                                    <li><a class="dropdown-item" href="elements-buttons.html">Buttons</a></li>
                                                                    <li><a class="dropdown-item" href="elements-call-to-action.html">Call to Action</a></li>
                                                                    <li><a class="dropdown-item" href="elements-cards.html">Cards</a></li>
                                                                    <li><a class="dropdown-item" href="elements-carousels.html">Carousels</a></li>
                                                                    <li><a class="dropdown-item" href="elements-cascading-images.html">Cascading Images</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <span class="dropdown-mega-sub-title">Elements 2</span>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a class="dropdown-item" href="elements-content-rotate.html">Content Rotate</a></li>
                                                                    <li><a class="dropdown-item" href="elements-countdowns.html">Countdowns</a></li>
                                                                    <li><a class="dropdown-item" href="elements-counters.html">Counters</a></li>
                                                                    <li><a class="dropdown-item" href="elements-dividers.html">Dividers</a></li>
                                                                    <li><a class="dropdown-item" href="elements-forms.html">Forms</a></li>
                                                                    <li><a class="dropdown-item" href="elements-headings.html">Headings</a></li>
                                                                    <li><a class="dropdown-item" href="elements-icons.html">Icons</a></li>
                                                                    <li><a class="dropdown-item" href="elements-icon-boxes.html">Icon Boxes</a></li>
                                                                    <li><a class="dropdown-item" href="elements-image-frames.html">Image Frames</a></li>
                                                                    <li><a class="dropdown-item" href="elements-image-gallery.html">Image Gallery</a></li>
                                                                    <li><a class="dropdown-item" href="elements-image-hotspots.html">Image Hotspots</a></li>
                                                                    <li><a class="dropdown-item" href="elements-lightboxes.html">Lightboxes</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <span class="dropdown-mega-sub-title">Elements 3</span>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a class="dropdown-item" href="elements-lists.html">Lists</a></li>
                                                                    <li><a class="dropdown-item" href="elements-maps.html">Maps</a></li>
                                                                    <li><a class="dropdown-item" href="elements-medias.html">Medias</a></li>
                                                                    <li><a class="dropdown-item" href="elements-modals.html">Modals</a></li>
                                                                    <li><a class="dropdown-item" href="elements-parallax.html">Parallax</a></li>
                                                                    <li><a class="dropdown-item" href="elements-particles.html">Particles</a></li>
                                                                    <li><a class="dropdown-item" href="elements-posts.html">Posts</a></li>
                                                                    <li><a class="dropdown-item" href="elements-pricing-tables.html">Pricing Tables</a></li>
                                                                    <li><a class="dropdown-item" href="elements-process.html">Process</a></li>
                                                                    <li><a class="dropdown-item" href="elements-progressbars.html">Progress Bars</a></li>
                                                                    <li><a class="dropdown-item" href="elements-random-images.html">Random Images</a></li>
                                                                    <li><a class="dropdown-item" href="elements-read-more.html">Read More</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <span class="dropdown-mega-sub-title">Elements 4</span>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a class="dropdown-item" href="elements-sections.html">Sections</a></li>
                                                                    <li><a class="dropdown-item" href="elements-shape-dividers.html">Shape Dividers</a></li>
                                                                    <li><a class="dropdown-item" href="elements-star-ratings.html">Star Ratings</a></li>
                                                                    <li><a class="dropdown-item" href="elements-sticky-elements.html">Sticky Elements</a></li>
                                                                    <li><a class="dropdown-item" href="elements-tables.html">Tables</a></li>
                                                                    <li><a class="dropdown-item" href="elements-tabs.html">Tabs</a></li>
                                                                    <li><a class="dropdown-item" href="elements-testimonials.html">Testimonials</a></li>
                                                                    <li><a class="dropdown-item" href="elements-toggles.html">Toggles</a></li>
                                                                    <li><a class="dropdown-item" href="elements-tooltips-popovers.html">Tooltips & Popovers</a></li>
                                                                    <li><a class="dropdown-item" href="elements-typography.html">Typography</a></li>
                                                                    <li><a class="dropdown-item" href="elements-word-rotator.html">Word Rotator</a></li>
                                                                    <li><a class="dropdown-item" href="elements-360-image-viewer.html">360º Image Viewer</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                HİZMETLER
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Headers</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="feature-headers-overview.html">Overview</a></li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Classic</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-headers-classic.html">Classic</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-classic-language-dropdown.html">Classic + Language Dropdown</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-classic-big-logo.html">Classic + Big Logo</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Flat</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-headers-flat.html">Flat</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-flat-top-bar.html">Flat + Top Bar</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-flat-top-bar-top-borders.html">Flat + Top Bar + Top Border</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-flat-colored-top-bar.html">Flat + Colored Top Bar</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-flat-borders.html">Flat + Borders</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Center</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-headers-center.html">Center</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-center-double-navs.html">Center + Double Navs</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-center-nav-buttons.html">Center + Nav + Buttons</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-center-below-slider.html">Center Below Slider</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Floating</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-headers-floating-bar.html">Floating Bar</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-floating-icons.html">Floating Icons</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="dropdown-item" href="feature-headers-below-slider.html">Below Slider</a></li>
                                                        <li><a class="dropdown-item" href="feature-headers-full-video.html">Full Video</a></li>
                                                        <li><a class="dropdown-item" href="feature-headers-narrow.html">Narrow</a></li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Sticky</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-headers-sticky-shrink.html">Sticky Shrink</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-sticky-scroll-up.html">Sticky Scroll Up</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-sticky-static.html">Sticky Static</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-sticky-change-logo.html">Sticky Change Logo</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-sticky-reveal.html">Sticky Reveal</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Transparent</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-headers-transparent-light.html">Transparent Light</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-transparent-dark.html">Transparent Dark</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-transparent-light-bottom-border.html">Transparent Light + Bottom Border</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-transparent-dark-bottom-border.html">Transparent Dark + Bottom Border</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-transparent-bottom-slider.html">Transparent Bottom Slider</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-transparent-top-bar-extra-buttons.html">Transparent Top Bar Extra Buttons</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-semi-transparent-light.html">Semi Transparent Light</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-semi-transparent-dark.html">Semi Transparent Dark</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-semi-transparent-bottom-slider.html">Semi Transparent Bottom Slider</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-semi-transparent-top-bar-borders.html">Semi Transparent + Top Bar + Borders</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Full Width</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-headers-full-width.html">Full Width</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-full-width-borders.html">Full Width + Borders</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-full-width-transparent-light.html">Full Width Transparent Light</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-full-width-transparent-dark.html">Full Width Transparent Dark</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-full-width-semi-transparent-light.html">Full Width Semi Transparent Light</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-full-width-semi-transparent-dark.html">Full Width Semi Transparent Dark</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-full-width-2-rows-extra-buttons.html">Full Width 2 Rows + Extra Buttons</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Navbar</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-headers-navbar.html">Navbar</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-navbar-full.html">Navbar Full</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-navbar-pills.html">Navbar Pills</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-navbar-divisors.html">Navbar Divisors</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-navbar-icons-search.html">Nav Bar + Icons + Search</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Side Header</a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Side Header Left</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="feature-headers-side-header-left-dropdown.html">Dropdown</a></li>
                                                                        <li><a class="dropdown-item" href="feature-headers-side-header-left-expand.html">Expand</a></li>
                                                                        <li><a class="dropdown-item" href="feature-headers-side-header-left-columns.html">Columns</a></li>
                                                                        <li><a class="dropdown-item" href="feature-headers-side-header-left-slide.html">Slide</a></li>
                                                                        <li><a class="dropdown-item" href="feature-headers-side-header-left-semi-transparent.html">Semi Transparent</a></li>
                                                                        <li><a class="dropdown-item" href="feature-headers-side-header-left-dark.html">Dark</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Side Header Right</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="feature-headers-side-header-right-dropdown.html">Dropdown</a></li>
                                                                        <li><a class="dropdown-item" href="feature-headers-side-header-right-expand.html">Expand</a></li>
                                                                        <li><a class="dropdown-item" href="feature-headers-side-header-right-columns.html">Columns</a></li>
                                                                        <li><a class="dropdown-item" href="feature-headers-side-header-right-slide.html">Slide</a></li>
                                                                        <li><a class="dropdown-item" href="feature-headers-side-header-right-semi-transparent.html">Semi Transparent</a></li>
                                                                        <li><a class="dropdown-item" href="feature-headers-side-header-right-dark.html">Dark</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Side Header Offcanvas</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="feature-headers-side-header-offcanvas-push.html">Push</a></li>
                                                                        <li><a class="dropdown-item" href="feature-headers-side-header-offcanvas-slide.html">Slide</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="dropdown-item" href="feature-headers-side-header-narrow-bar.html">Side Header Narrow Bar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="dropdown-item" href="feature-headers-sign-in-sign-up.html">Sign In / Sign Up</a></li>
                                                        <li><a class="dropdown-item" href="feature-headers-logged.html">Logged</a></li>
                                                        <li><a class="dropdown-item" href="feature-headers-mini-cart.html">Mini Cart</a></li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Search Styles</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-headers-search-simple-input.html">Simple Input</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-search-simple-input-reveal.html">Simple Input Reveal</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-search-dropdown.html">Dropdown</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-search-big-input-hidden.html">Big Input Hidden</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-search-full-screen.html">Full Screen</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Extra</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-headers-extra-big-icon.html">Big Icon</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-extra-big-icons-top.html">Big Icons Top</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-extra-button.html">Button</a></li>
                                                                <li><a class="dropdown-item" href="feature-headers-extra-background-color.html">Background Color</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Navigations</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Pills</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-pills.html">Pills</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-pills-arrows.html">Pills + Arrows</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-pills-dark-text.html">Pills Dark Text</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-pills-color-dropdown.html">Pills Color Dropdown</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-pills-square.html">Pills Square</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-pills-rounded.html">Pills Rounded</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Stripes</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-stripe.html">Stripe</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-stripe-dark-text.html">Stripe Dark Text</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-stripe-color-dropdown.html">Stripe Color Dropdown</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Hover Effects</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-top-line.html">Top Line</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-top-line-animated.html">Top Line Animated</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-top-line-color-dropdown.html">Top Line Color Dropdown</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-bottom-line.html">Bottom Line</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-bottom-line-animated.html">Bottom Line Animated</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-slide.html">Slide</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-sub-title.html">Sub Title</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hover-line-under-text.html">Line Under Text</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Vertical</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-vertical-dropdown.html">Dropdown</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-vertical-expand.html">Expand</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-vertical-columns.html">Columns</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-vertical-slide.html">Slide</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Hamburguer</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-hamburguer-sidebar.html">Sidebar</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-hamburguer-overlay.html">Overlay</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Dropdown Styles</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-dark.html">Dark</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-light.html">Light</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-colors.html">Colors</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-top-line.html">Top Line</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-square.html">Square</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-arrow.html">Arrow Dropdown</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-arrow-center.html">Arrow Center Dropdown</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-modern-light.html">Modern Light</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-modern-dark.html">Modern Dark</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Dropdown Effects</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-no-effect.html">No Effect</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-opacity.html">Opacity</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-top.html">Move To Top</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-bottom.html">Move To Bottom</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-right.html">Move To Right</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-left.html">Move To Left</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Font Styles</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-font-small.html">Small</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-font-medium.html">Medium</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-font-large.html">Large</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-font-alternative.html">Alternative</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Icons</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-navigations-icons.html">Icons</a></li>
                                                                <li><a class="dropdown-item" href="feature-navigations-icons-float-icons.html">Float Icons</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="dropdown-item" href="feature-navigations-sub-title.html">Sub Title</a></li>
                                                        <li><a class="dropdown-item" href="feature-navigations-divisors.html">Divisors</a></li>
                                                        <li><a class="dropdown-item" href="feature-navigations-logo-between.html">Logo Between</a></li>
                                                        <li><a class="dropdown-item" href="feature-navigations-one-page.html">One Page Nav</a></li>
                                                        <li><a class="dropdown-item" href="feature-navigations-click-to-open.html">Click To Open</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Page Headers</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="feature-page-headers-overview.html">Overview</a></li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Classic</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-page-headers-classic-small.html">Small</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-classic-medium.html">Medium</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-classic-large.html">Large</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Modern</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-page-headers-modern-small.html">Small</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-modern-medium.html">Medium</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-modern-large.html">Large</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Colors</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-page-headers-colors-primary.html">Primary</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-colors-secondary.html">Secondary</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-colors-tertiary.html">Tertiary</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-colors-quaternary.html">Quaternary</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-colors-light.html">Light</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-colors-dark.html">Dark</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Title Position</a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Left</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="feature-page-headers-title-position-left-small.html">Small</a></li>
                                                                        <li><a class="dropdown-item" href="feature-page-headers-title-position-left-medium.html">Medium</a></li>
                                                                        <li><a class="dropdown-item" href="feature-page-headers-title-position-left-large.html">Large</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Right</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="feature-page-headers-title-position-right-small.html">Small</a></li>
                                                                        <li><a class="dropdown-item" href="feature-page-headers-title-position-right-medium.html">Medium</a></li>
                                                                        <li><a class="dropdown-item" href="feature-page-headers-title-position-right-large.html">Large</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Center</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="feature-page-headers-title-position-center-small.html">Small</a></li>
                                                                        <li><a class="dropdown-item" href="feature-page-headers-title-position-center-medium.html">Medium</a></li>
                                                                        <li><a class="dropdown-item" href="feature-page-headers-title-position-center-large.html">Large</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Background</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-page-headers-background-fixed.html">Fixed</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-background-parallax.html">Parallax</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-background-video.html">Video</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-background-transparent-header.html">Transparent Header</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-background-pattern.html">Pattern</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-background-overlay.html">Overlay</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-background-clean.html">Clean (No Background)</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Extra</a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Breadcrumb</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="feature-page-headers-extra-breadcrumb-outside.html">Outside</a></li>
                                                                        <li><a class="dropdown-item" href="feature-page-headers-extra-breadcrumb-dark.html">Dark</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-extra-scroll-to-content.html">Scroll to Content</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-extra-full-width.html">Full Width</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-extra-product.html">Product</a></li>
                                                                <li><a class="dropdown-item" href="feature-page-headers-extra-mouse-hover-split.html">Mouse Hover Split</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Footers</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="feature-footers-overview.html">Overview</a></li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Classic</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-footers-classic.html#footer">Classic</a></li>
                                                                <li><a class="dropdown-item" href="feature-footers-classic-advanced.html#footer">Advanced</a></li>
                                                                <li><a class="dropdown-item" href="feature-footers-classic-compact.html#footer">Compact</a></li>
                                                                <li><a class="dropdown-item" href="feature-footers-classic-simple.html#footer">Simple</a></li>
                                                                <li><a class="dropdown-item" href="feature-footers-classic-locations.html#footer">Locations</a></li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Copyright</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="feature-footers-classic-copyright-light.html#footer">Light</a></li>
                                                                        <li><a class="dropdown-item" href="feature-footers-classic-copyright-dark.html#footer">Dark</a></li>
                                                                        <li><a class="dropdown-item" href="feature-footers-classic-copyright-social-icons.html#footer">Social Icons</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Colors</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="feature-footers-classic-colors-primary.html#footer">Primary</a></li>
                                                                        <li><a class="dropdown-item" href="feature-footers-classic-colors-secondary.html#footer">Secondary</a></li>
                                                                        <li><a class="dropdown-item" href="feature-footers-classic-colors-tertiary.html#footer">Tertiary</a></li>
                                                                        <li><a class="dropdown-item" href="feature-footers-classic-colors-quaternary.html#footer			">Quaternary</a></li>
                                                                        <li><a class="dropdown-item" href="feature-footers-classic-colors-light.html#footer">Light</a></li>
                                                                        <li><a class="dropdown-item" href="feature-footers-classic-colors-light-simple.html#footer">Light Simple</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Modern</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-footers-modern.html#footer">Modern</a></li>
                                                                <li><a class="dropdown-item" href="feature-footers-modern-font-style-alternative.html#footer">Font Style Alternative</a></li>
                                                                <li><a class="dropdown-item" href="feature-footers-modern-clean.html#footer">Clean</a></li>
                                                                <li><a class="dropdown-item" href="feature-footers-modern-useful-links.html#footer">Useful Links</a></li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Background</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="feature-footers-modern-background-image-simple.html#footer">Image Simple</a></li>
                                                                        <li><a class="dropdown-item" href="feature-footers-modern-background-image-advanced.html#footer">Image Advanced</a></li>
                                                                        <li><a class="dropdown-item" href="feature-footers-modern-background-video-simple.html#footer">Video Simple</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Call to Action</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="feature-footers-modern-call-to-action-button.html#footer">Button</a></li>
                                                                        <li><a class="dropdown-item" href="feature-footers-modern-call-to-action-simple.html#footer">Simple</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Blog</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-footers-blog-classic.html#footer">Blog Classic</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">eCommerce</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-footers-ecommerce-classic.html#footer">eCommerce Classic</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Contact Form</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-footers-contact-form-classic.html#footer">Classic</a></li>
                                                                <li><a class="dropdown-item" href="feature-footers-contact-form-above-the-map.html#footer">Above the Map</a></li>
                                                                <li><a class="dropdown-item" href="feature-footers-contact-form-center.html#footer">Center</a></li>
                                                                <li><a class="dropdown-item" href="feature-footers-contact-form-columns.html#footer">Columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Map</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="feature-footers-map-hidden.html#footer">Hidden Map</a></li>
                                                                <li><a class="dropdown-item" href="feature-footers-map-full-width.html#footer">Full Width</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Extra</a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Simple</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="feature-footers-extra-top-social-icons.html#footer">Top Social Icons</a></li>
                                                                        <li><a class="dropdown-item" href="feature-footers-extra-big-icons.html#footer">Big Icons</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="dropdown-item" href="feature-footers-extra-recent-work.html#footer">Recent Work</a></li>
                                                                <li><a class="dropdown-item" href="feature-footers-extra-reveal.html#footeranchor">Reveal</a></li>
                                                                <li><a class="dropdown-item" href="feature-footers-extra-instagram.html#footer">Instagram</a></li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Full Width</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="feature-footers-extra-full-width-light.html#footer">Simple Light</a></li>
                                                                        <li><a class="dropdown-item" href="feature-footers-extra-full-width-dark.html#footer">Simple Dark</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Admin Extension <span class="tip tip-dark">hot</span><em class="not-included">(Not Included)</em></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="feature-admin-forms-basic.html">Forms Basic</a></li>
                                                        <li><a class="dropdown-item" href="feature-admin-forms-advanced.html">Forms Advanced</a></li>
                                                        <li><a class="dropdown-item" href="feature-admin-forms-wizard.html">Forms Wizard</a></li>
                                                        <li><a class="dropdown-item" href="feature-admin-forms-code-editor.html">Code Editor</a></li>
                                                        <li><a class="dropdown-item" href="feature-admin-tables-advanced.html">Tables Advanced</a></li>
                                                        <li><a class="dropdown-item" href="feature-admin-tables-responsive.html">Tables Responsive</a></li>
                                                        <li><a class="dropdown-item" href="feature-admin-tables-editable.html">Tables Editable</a></li>
                                                        <li><a class="dropdown-item" href="feature-admin-tables-ajax.html">Tables Ajax</a></li>
                                                        <li><a class="dropdown-item" href="feature-admin-charts.html">Charts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Sliders</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="index-slider-revolution.html">Revolution Slider</a></li>
                                                        <li><a class="dropdown-item" href="index-slider-owl.html">Owl Slider</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Layout Options</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="feature-layout-boxed.html">Boxed</a></li>
                                                        <li><a class="dropdown-item" href="feature-layout-dark.html">Dark</a></li>
                                                        <li><a class="dropdown-item" href="feature-layout-rtl.html">RTL</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Extra</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="feature-cursor-effect.html">Cursor Effect</a></li>
                                                        <li><a class="dropdown-item" href="feature-grid-system.html">Grid System</a></li>
                                                        <li><a class="dropdown-item" href="feature-reading-progress.html">Reading Progress</a></li>
                                                        <li><a class="dropdown-item" href="feature-lazy-load.html">Lazy Load</a></li>
                                                        <li><a class="dropdown-item" href="feature-page-loading.html">Page Loading</a></li>
                                                        <li><a class="dropdown-item" href="feature-page-transition.html">Page Transition</a></li>
                                                        <li><a class="dropdown-item" href="feature-side-panel.html">Side Panel</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="feature-gdpr.html">GDPR</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                ÜRÜNLER
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Contact Us</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="contact-us-advanced.php">Contact Us - Advanced</a></li>
                                                        <li><a class="dropdown-item" href="contact-us.html">Contact Us - Basic</a></li>
                                                        <li><a class="dropdown-item" href="contact-us-recaptcha.html">Contact Us - Recaptcha</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">About Us</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="about-us-advanced.html">About Us - Advanced</a></li>
                                                        <li><a class="dropdown-item" href="about-us.html">About Us - Basic</a></li>
                                                        <li><a class="dropdown-item" href="about-me.html">About Me</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Layouts</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="page-full-width.html">Full Width</a></li>
                                                        <li><a class="dropdown-item" href="page-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="page-right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="page-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
                                                        <li><a class="dropdown-item" href="page-sticky-sidebar.html">Sticky Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="page-secondary-navbar.html">Secondary Navbar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Extra</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="page-404.html">404 Error</a></li>
                                                        <li><a class="dropdown-item" href="page-500.html">500 Error</a></li>
                                                        <li><a class="dropdown-item" href="page-coming-soon.html">Coming Soon</a></li>
                                                        <li><a class="dropdown-item" href="page-maintenance-mode.html">Maintenance Mode</a></li>
                                                        <li><a class="dropdown-item" href="page-search-results.html">Search Results</a></li>
                                                        <li><a class="dropdown-item" href="sitemap.html">Sitemap</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Team</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="page-team-advanced.html">Team - Advanced</a></li>
                                                        <li><a class="dropdown-item" href="page-team.html">Team - Basic</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Services</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="page-services.html">Services - Version 1</a></li>
                                                        <li><a class="dropdown-item" href="page-services-2.html">Services - Version 2</a></li>
                                                        <li><a class="dropdown-item" href="page-services-3.html">Services - Version 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item" href="page-careers.html">Careers</a></li>
                                                <li><a class="dropdown-item" href="page-faq.html">FAQ</a></li>
                                                <li><a class="dropdown-item" href="page-login.html">Login / Register</a></li>
                                                <li><a class="dropdown-item" href="page-user-profile.html">User Profile</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item" href="#">
                                                Online Doz Takip
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ Route::currentRouteName() == 'contact'  ? 'active' : '' }}" href="{{ route('contact') }}">
                                                İLETİŞİM
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>