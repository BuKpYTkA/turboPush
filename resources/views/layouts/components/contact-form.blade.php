<div id="contact-form">
    <form class="" id="form" method="post" action="{{ route('order.create') }}">
        @csrf
        <div class="form-group">
            <label for="name">Имя<strong style="color: red">*</strong></label>
            @if ($errors->has('name'))
                <span role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
            @endif
            <input type="text" class="form-control input-style-2" id="name" name="name"
                   placeholder="Введите имя" required="" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="message">Марка машины<strong style="color: red">*</strong></label>
            @if ($errors->has('message'))
                <span role="alert">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
            @endif
            <input type="text" class="form-control input-style-2"
                   id="message"
                   name="message"
                   placeholder="Введите марку автомобиля" required="" value="{{ old('message') }}">
        </div>
        <div class="form-group">
            <label for="subject">Телефон<strong style="color: red">*</strong></label>
            @if ($errors->has('phone'))
                <span role="alert">
                                        <strong style="color: red">{{ $errors->first('phone') }}</strong>
                                    </span>
            @endif
            <div style="display: flex">
                <div class="form-local-number-input" style="padding-right: 0!important">
                    <input type="text" disabled="disabled" value="+38" class="form-control input-style-2">
                </div>
                <div style="padding-left: 0!important; margin-left: 15px; flex: 13">
                    <input type="text" class="form-control input-style-2"
                           id="phone"
                           name="phone"
                           placeholder="0631112233" required="" value="{{ old('phone') }}">
                </div>
            </div>
            <input type="text" style="display: none" id="consumer" name="consumer">
        </div>

        <button type="submit" class="st-btn primary-btn hvr-back hvr-sweep-to-right">Отправить
        </button>
    </form>
</div>