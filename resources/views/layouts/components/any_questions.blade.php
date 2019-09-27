<?php
/**
 * @var $phoneNumbers \App\Models\PhoneNumber\PhoneNumber[]
 */
?>

<div class="mt40">
    <div class="cta-3">
        <h3 class="title">Консультация по телефону</h3>
        @if($phoneNumbers->count() > 0)
            {{--@if($phoneNumbers->count() === 1)--}}
                {{--<p style="color: white">Позвоните нам по указаному телефону</p>--}}
            {{--@elseif($phoneNumbers->count() > 1)--}}
                {{--<p style="color:white;">Позвоните нам по одному из указанных телефонов</p>--}}
            {{--@endif--}}
            <p style="color:white; font-size: 20px">
                @foreach($phoneNumbers as $phoneNumber)
                    <a href="tel:{{ $phoneNumber->getPhone() }}"><span>{{ $phoneNumber->getFormat() }}</span></a>
                @endforeach
            </p>
        @endif
        {{--<p style="color: white">Или оставьте заявку и мы вам перезвоним</p>--}}
        {{--<p style="color: white">Мы работаем с 9.00 до 18.00--}}
            {{--с Понедельника по Субботу--}}
        {{--</p>--}}
        {{--<a href="#contact-us" class="st-btn primary-btn hvr-back hvr-sweep-to-right contact-modal">Свяжитесь--}}
            {{--с нами</a>--}}
        <div class="clearfix"></div>
        <span class="fa fa-phone bg-icon mr30"></span>
    </div> <!-- end cta-3 -->
</div> <!-- end col-md-12 -->