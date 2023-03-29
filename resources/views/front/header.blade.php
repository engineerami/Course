    <!-- Header -->
    <header x-data="{ navShow : false }" @scroll.window="navShow = window.scrollY > 100 ? true : false ">
        <nav class="header navbar navbar-expand-lg navbar-light fixed-top" :class="{'header-scrolled' : navShow}">
            <div class="container">
                <a class="navbar-brand" href="#">رنگ مو</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">صفحه اصلی</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                دوره ها
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">رنگ مو</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">لورم ایپسوم متن ساختگی</a></li>
                            </ul>
                        </li>

                            <a href="#" class="nav-link">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">تماس با ما</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>