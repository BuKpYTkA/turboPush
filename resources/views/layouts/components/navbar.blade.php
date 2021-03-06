<?php
    /**
     * @var $navBarElements \App\Models\NavBarElement\NavBarElement[]
     * @var $childElement \App\Models\NavBarElement\NavBarElement
     * @var $phoneNumbers \App\Models\PhoneNumber\PhoneNumber[]
     */
?>
<div class="header menu-style-2">
    <div class="top-menu">
        <div class="container-fluid custom-container transparent">
            <div class="logo">
                <a href="/"><img height="80px" width="150px" src="{{ asset('images') }}/main-logo.svg" alt="Salt"></a>
            </div>
            <div class="right-div pull-right header-phones">
                @foreach($phoneNumbers as $phoneNumber)
                    <a href="tel:{{ $phoneNumber->getPhone() }}"><span><i class="fa fa-phone"></i></span> <b>{{ $phoneNumber->getFormat() }}</b></a>
                @endforeach
            </div>
        </div> <!-- end container-fluid -->
    </div> <!-- end top-menu -->
    <div class=" container-fluid custom-container" style="position: relative">
        <div class="menu" id="menu">
            <!-- ========== Logo ========== -->
             <!-- end logo -->
            <!-- ========== main-menu ========== -->
            {{--<div class="navbar-phone">--}}
                {{--<p class="phone-text"><a href="tel:+380935138448">+38(093)513-84-48</a></p>--}}
            {{--</div>--}}
            <ul class="main-menu">
                @foreach($navBarElements as $navBarElement)
                    @if(!$navBarElement->hasParent())
                        <li class="menu-item"><a href="{{ $navBarElement->getLink() === 'blank' ? '#' : $navBarElement->getLink()}}"><i class="menu-icon fa {{ $navBarElement->getIcon() }}"></i> {{ $navBarElement->getText() }}</a>
                        @if($navBarElement->hasChildren())
                            <ul class="mega-submenu normal-sub">
                                @foreach($navBarElement->getChild()->orderBy('order')->get() as $childElement)
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
