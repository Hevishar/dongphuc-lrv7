<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="Description" content="Enter your description here" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/css.gg/icons/all.css"
        />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Title</title>
        <style>
            .bottom-header {
                border: 1px solid #eb1c24;
            }
            ul {
                list-style-type: none;
                padding: 0;
            }
            #header-bottom .left-category {
                padding: 0 10px;
                border-right: 1px solid #eb1c24;
            }
            #header-bottom .left-category ul {
                list-style-type: none;
            }
            .top-menu {
                width: 100%;
                display: flex;
                justify-content: flex-start;
                align-items: center;
                height: 34px;
                margin-bottom: 0px;
                text-transform: uppercase;
            }

            .top-menu li {
                height: 100%;
                display: flex;
                align-items: center;
            }

            .top-menu li a{
                width: 100%;
                height: 100%;
                text-decoration: none;
                color: #000;
                padding-right: 10px;
                padding-left: 10px;
                align-items: center;
                display: inherit;
            }

            .top-menu li a:hover{
                background: #eb1c24;
                color: #fff;
            }


            .left-category-header {
                width: 100%;
                height: 34px;
                padding: 10px 10px;
                background: #eb1c24;
                color: white;
                text-transform: uppercase;
                margin: 0;
            }
            .left-category ul li{
                width: 100%;
                display: block;
            }
            .left-category ul li a{
                width: 100%;
                color: black;
                text-decoration: none;
            }
            .list-group{
                height: 300px;
                border-radius: unset;
                overflow: auto;
            }
            .list-group .list-group-item{
                padding: 5px 10px;
                border:none;
                border-bottom: 1px solid #d5d5d5;
            }
            .list-group .list-group-item:last-child{
                border-bottom: 0;
            }
            .list-group .list-group-item:hover{
                background: #b3b3b3;
                color: #fff;
            }

            .list-group .list-group-item:hover a{
                color: #fff;
                padding-left: 5px;
                transition: all 1;
            }
        </style>
    </head>
    <body>
        <div id="header" class="tp_header">
            <div class="container">
                <div class="content-header">
                    <div class="row align-items-center">
                        <div
                            class="col-lg-8 col-12 tab-logo d-flex align-items-center p-0 left-header"
                        >
                            <div class="col-lg-3 col-4">
                                <a href="/" class="logo">
                                    <img
                                        src="https://bucket.nhanh.vn/store3/108267/logo_1646820085_T - house.png"
                                        alt="t0321.store.nhanh.vn"
                                    />
                                </a>
                            </div>
                            <div class="col-lg-9 pr-0 menu-mobile-right">
                                <form
                                    id="search-site"
                                    action="/search"
                                    method="get"
                                    autocomplete="off"
                                >
                                    <span
                                        role="status"
                                        aria-live="polite"
                                        class="ui-helper-hidden-accessible"
                                    ></span
                                    ><input
                                        class="topinput ui-autocomplete-input"
                                        id="search-keyword"
                                        name="q"
                                        type="text"
                                        aria-label="Bạn tìm gì..."
                                        placeholder="Bạn tìm gì..."
                                        autocomplete="off"
                                    />
                                    <button
                                        class="btntop"
                                        type="submit"
                                        aria-label="tìm kiếm"
                                    >
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <div id="searchFolding"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 right-header d-none d-lg-block">
                            <ul class="d-flex align-items-center m-0">
                                <li
                                    class="box-user d-flex align-items-center justify-content-center"
                                >
                                    <div></div>
                                    <ul>
                                        <li>
                                            <a
                                                class="font-weight-bold"
                                                href="/profile"
                                                >Tài khoản</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                class="d-lg-block d-xl-inline-block"
                                                href="/user/signup"
                                                title="signup"
                                                >Đăng ký / </a
                                            ><a
                                                href="/user/signin"
                                                title="signin"
                                                >Đăng nhập</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li
                                    class="box-cart d-flex align-items-center justify-content-center"
                                >
                                    <div class="position-relative">
                                        <span
                                            class="position-absolute countcart"
                                            >0</span
                                        >
                                    </div>
                                    <ul>
                                        <li>
                                            <a
                                                href="/cart"
                                                class="font-weight-bold"
                                                >Giỏ hàng</a
                                            >
                                        </li>
                                        <li>
                                            <a href="/cart" title="cart"
                                                >Vận chuyển toàn quốc</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0)" class="btn-menu-bar"
                            ><i class="fas fa-bars"></i
                        ></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-bottom">
            <div class="container d-flex bottom-header">
                <div class="row w-100">
                    <div class="col-3 left-category p-0">
                        <div class="left-category-header d-flex justify-content-between align-items-center">
                            <i class="gg-menu align-self-center mr-1"></i>Danh Mục Sản phẩm
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                            <li class="list-group-item"><a href="#">Dapibus ac facilisis in</a></li>
                            <li class="list-group-item"><a href="#">Morbi leo risus</a></li>
                            <li class="list-group-item"><a href="#">Porta ac consectetur ac</a></li>
                            <li class="list-group-item"><a href="#">Vestibulum at eros</a></li>
                        </ul>
                    </div>
                    <div class="col-9 p-0">
                        <ul class="top-menu">
                            <li><a href="#">Tin tức</a></li>
                            <li><a href="#">Tin tức</a></li>
                            <li><a href="#">Tin tức</a></li>
                            <li><a href="#">Tin tức</a></li>
                        </ul>
                        <div class="slide swiper">Slide swiper</div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    </body>
</html>
