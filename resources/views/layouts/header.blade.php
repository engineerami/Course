<section x-data="toggleSidebar">
    <section x-cloak class="sidebar" :class="open || 'inactive'">
        <div class="d-flex align-items-center justify-content-between justify-content-lg-center">
            <h4 class="fw-bold">دوره های رنگ مو</h4>
            <i @click="toggle" class="d-lg-none fs-1 bi bi-x"></i>
        </div>
        <div class="mt-4">
            <ul class="list-unstyled">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        <i class="bi bi-house-door-fill me-2"></i>
                        <span>خانه</span>
                    </a>
                </li>

                <li x-data="dropdown" class="sidebar-item">
                    <div @click="toggle" class="sidebar-link">
                        <i class="bi bi-book-fill me-2"></i>
                        <span>مدریت دوره</span>
                        <i class="ms-auto bi bi-chevron-down"></i>
                    </div>
                    <ul x-show="open" x-transition class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('course.index') }}"><i class="bi bi-chevron-left me-1"></i>لیست دوره ها</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('course.create') }}"><i class="bi bi-chevron-left me-1"></i>اضافه کردن دوره</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#"><i class="bi bi-chevron-left me-1"></i>وضعیت دوره</a>
                        </li>
                    </ul>
                </li>

                <li x-data="dropdown" class="sidebar-item">
                    <div @click="toggle" class="sidebar-link">
                        <i class="bi bi-people-fill me-2"></i>
                        <span>استاد ها</span>
                        <i class="ms-auto bi bi-chevron-down"></i>
                    </div>
                    <ul x-show="open" x-transition class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('teacher.index') }}"><i class="bi bi-chevron-left me-1"></i>لیست استاد ها</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('teacher.create') }}"><i class="bi bi-chevron-left me-1"></i>اضافه کردن استاد</a>
                        </li>
                       

                    </ul>
                </li>

                <li x-data="dropdown" class="sidebar-item">
                    <div @click="toggle" class="sidebar-link">
                        <i class="bi bi-gear-fill me-2"></i>
                        <span>تنظیمات سایت</span>
                    </div>
                </li>

                <li x-data="dropdown" class="sidebar-item">
                    <div @click="toggle" class="sidebar-link">
                        <i class="bi bi-person-fill me-2"></i>
                        <span>کاربران</span>
                    </div>
                   
                </li>





                <li x-data="dropdown" class="sidebar-item">
                    <div @click="toggle" class="sidebar-link">
                        <i class="me-2 bi bi-chat-dots-fill"></i>
                        <span>کامنت ها</span>
                        <i class="ms-auto bi bi-chevron-down"></i>
                    </div>
                    <ul x-show="open" x-transition class="submenu">
                        <li class="submenu-item">
                            <a href="#">لیست کامنت ها</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#">کامنت های تایید شده</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#">کامنت های تایید نشده</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>

    <section class="main" :class="open || 'active'">
        <header class="header d-flex justify-content-between p-3 align-items-center">
            <div>
                <a href="#">
                    <i @click="toggle" class="toggle-sidebar-icon bi bi-justify fs-3"></i>
                </a>
            </div>

            <div class="d-flex align-items-center">
                <div class="dropdown">
                    <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="position-absolute top-0 end-50 translate-middle badge rounded-pill bg-red">
                                9
                            </span>
                        <i class="bi bi-envelope fs-4 text-gray-600"></i>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item fs-7" href="#"> لورم ایپسوم </a></li>
                        <li><a class="dropdown-item fs-7" href="#"> لورم ایپسوم متن </a></li>
                        <li><a class="dropdown-item fs-7" href="#"> لورم ایپسوم متن ساختگی </a></li>
                    </ul>
                </div>

                <div class="dropdown mx-4">
                    <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell fs-4 text-gray-600"></i>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item fs-7" href="#"> لورم ایپسوم </a></li>
                        <li><a class="dropdown-item fs-7" href="#"> لورم ایپسوم متن </a></li>
                        <li><a class="dropdown-item fs-7" href="#"> لورم ایپسوم متن ساختگی </a></li>
                    </ul>
                </div>

                <div class="dropdown">
                    <div class="dropdown-toggle profile d-flex align-items-center" data-bs-toggle="dropdown"
                         aria-expanded="false">
                        <img width="45" class="img-fluid rounded-circle me-2" src="./images/7.jpg" alt="">
                        <div>
                            <h6 class="fs-6 fw-bold text-gray-600 mb-0">امیرحسین فیض آبادی</h6>
                            <p class="fs-8 text-gray-600 mb-0">سوپر ادمین</p>
                        </div>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item fs-7" href="#">
                                <i class="bi bi-person fs-5 me-1"></i>
                                پروفایل
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item fs-7" href="#">
                                <i class="bi bi-gear fs-6 me-1"></i>
                                تنظیمات
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item fs-7" href="#">
                                <i class="bi bi-wallet fs-6 me-1"></i>
                                حساب کاربری
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item fs-7" href="{{ route('front') }}">
                                <i class="bi bi-box-arrow-left fs-5 me-1"></i>
                                خروج
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
