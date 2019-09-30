<?php
/**
 * @var $phoneNumbers \App\Models\PhoneNumber\PhoneNumber[]
 */
?>

<div class="mt40">
    <div class="cta-3">
        <h3 class="title">Остались вопросы?</h3>
        <h3 class="title">Перезвоните и получите консультацию</h3>
        <hr style="margin-top: 0!important;border-top: 1px solid #ff4a21">
        @if($phoneNumbers->count() > 0)
            <p style="color:white;">
            @foreach($phoneNumbers as $phoneNumber)
                    <span>
                        <a class="advantage-tel" href="tel:{{ $phoneNumber->getPhone() }}">
                            {{ $phoneNumber->getFormat() }}
                        </a>
                    </span>
            @endforeach
            </p>
        @endif
        <div class="clearfix"></div>
        <span class="fa fa-phone bg-icon mr30"></span>
    </div> <!-- end cta-3 -->
</div> <!-- end col-md-12 -->