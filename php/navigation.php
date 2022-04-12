<div class="containter-topbar ">
        <nav class="main-nav">
            <button id="btnMenu" class="nav-bar">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M47.0207 20L45 17.9793L42.9793 20L45 22.0207L47.0207 20ZM3 20.35H45V19.65H3V20.35Z" fill="black"/>
                    <path d="M10.9793 30L13 32.0207L15.0207 30L13 27.9793L10.9793 30ZM13 30.35H34V29.65H13V30.35Z" fill="black"/>
                    <title>iconmenu</title>
                    <desc>icon button menu for mobile</desc>
                </svg>
            </button> 
            <ul class="menu " id="menu">
                <!-- <li class="menu__item "><a href="" class="menu__link">Home</a></li> -->
                <li class=" container-submenu">
                    <a href="#" class="menu__link submenu-btn border-radius">Joyas<svg class="arrow__icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="arrow__icon" d="M3 22L24 44.5L45 22" stroke="black" stroke-linecap="round"/>
                        <title>arrow button</title>
                        <desc>arrow icon for submenu button</desc>
                        </svg>
                    </a>
                    <ul class="submenu ">
                    <li class="menu__item-sub "><a href="<?php echo $path; ?>tienda" class=" menu__link bg-color">Tienda</a></li>
                        <li class="menu__item-sub "><a href="<?php echo $path; ?>tienda" class="menu__link bg-color">Collares</a></li>
                        <li class="menu__item-sub "><a href="<?php echo $path; ?>tienda" class="menu__link bg-color">Anillos</a></li>
                        <li class="menu__item-sub "><a href="<?php echo $path; ?>tienda" class="menu__link bg-color">Pulseras</a></li>
                        <li class="menu__item-sub "><a href="<?php echo $path; ?>tienda" class="menu__link bg-color">Pendientes</a></li>
                    </ul>
                </li>
                <li class="menu__item "><a href="<?php echo $path; ?>test" class="menu__link border-radius">Test Mi Joya Perfecta</a></li>
                <li class="menu__item "><a href="<?php echo $path; ?>#sobre-las-joyas" class="menu__link border-radius">Sobre las joyas</a></li>
                <li class="menu__item "><a href="<?php echo $path; ?>#guia-de-tallas" class="menu__link border-radius">Guía de tallas</a></li>
            </ul>
        </nav>

        <div class="container-logo">
            <a href="<?php echo $path; ?>">
                <img width="50px" height="50px" class="logo-img" src="<?php echo $path; ?>images/logo/terralava-logo.png" alt="main logo of the jewelry store, when you click it takes you to the home">
            </a>
        </div>

        <div class="container-basket">
            <a href="#">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.1667 21.4286V11.9327C18.1667 8.10388 21.2705 5 25.0994 5V5C29.0025 5 32.1667 8.16244 32.1667 12.0656C32.1667 14.9227 32.1667 18.2833 32.1667 21.4286M3 14.5714L11.1667 42H36.8333L45 14.5714H3Z" stroke="black"/>
                <title>basket icon</title>
                <desc>shopping basket icon, clicking on it redirects you to the selected items </desc>
                </svg>
            </a>
        </div>
    </div>
    <script type="module" src="<?php echo $path; ?>js/sections/menu.js"></script>