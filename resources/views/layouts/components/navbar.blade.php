<?php
    /**
     * @var $navBarElements \App\Models\NavBarElement\NavBarElement[]
     * @var $childElement \App\Models\NavBarElement\NavBarElement
     * @var $phoneNumbers \App\Models\PhoneNumber\PhoneNumber[]
     */
?>
<div class="header menu-style-2">
    <div class="top-menu">
        <div class="container">
            <div class="right-div pull-right">
                @foreach($phoneNumbers as $phoneNumber)
                    <a href="tel:{{ $phoneNumber->getPhone() }}">{{ $phoneNumber->getPhone() }}</a>
                @endforeach
                <a href="#">support@themesease.com</a>
            </div>
        </div> <!-- end container-fluid -->
    </div> <!-- end top-menu -->
    <div class="container">
        <div class="menu" id="menu">

            <!-- ========== Logo ========== -->
            <div class="logo">
                <a href="/"><img height="75px" width="150px" src="{{ asset('images') }}/main-logo.svg" alt="Salt" class="logo-img"></a>
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
                </ul> <!-- end main-menu -->

        </div> <!-- end menu -->
    </div> <!-- end container-fluid -->
</div> <!-- end header -->