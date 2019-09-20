<?php
    /**
     * @var $navBarElements \App\Models\NavBarElement\NavBarElement[]
     * @var $childElement \App\Models\NavBarElement\NavBarElement
     */
?>
<div class="header menu-style-2">
    <div class="top-menu">
        <div class="container-fluid">
            <div class="right-div pull-right">
                <a href="#">+1 (123) 456-7890</a>
                <a href="#">support@themesease.com</a>
            </div>
        </div> <!-- end container-fluid -->
    </div> <!-- end top-menu -->

    <div class="container-fluid">
    </div>
    <div class="container-fluid">
        <div class="menu" id="menu">

            <!-- ========== Logo ========== -->
            <div class="logo">
                <a href="/"><img src="{{ asset('frontEnd') }}/images/logo-dark.png" alt="Salt" class="logo-img"></a>
            </div> <!-- end logo -->

            <!-- ========== main-menu ========== -->
            <ul class="main-menu">
                @foreach($navBarElements as $navBarElement)
                    @if(!$navBarElement->hasParent())
                        <li class="menu-item"><a href="{{ $navBarElement->getLink() }}" {{ $navBarElement->hasChildren() ? 'data-scroll' : '' }}><i class="menu-icon fa {{ $navBarElement->getIcon() }}"></i> {{ $navBarElement->getText() }}</a>
                        @if($navBarElement->hasChildren())
                            <ul class="mega-submenu normal-sub">
                                @foreach($navBarElement->getChild()->get() as $childElement)
                                    <li><a href="{{ $childElement->getLink() }}"><i class="fa {{ $childElement->getIcon() }}"></i> {{ $childElement->getText() }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    @endif
                @endforeach
                <li class=" menu-item left-separator"><a href="#"><i class="menu-icon fa fa-facebook"></i> Facebook</a></li>
                <li class="menu-item"><a href="#"><i class="menu-icon fa fa-twitter"></i> Twitter</a></li>
            </ul> <!-- end main-menu -->

        </div> <!-- end menu -->
    </div> <!-- end container-fluid -->
</div> <!-- end header -->