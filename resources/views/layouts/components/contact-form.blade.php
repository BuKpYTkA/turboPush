<div>
    <form class="" id="form" method="post" action="{{ route('order.create') }}">
        @csrf
        <div class="form-group">
            <label for="name">Имя<strong>*</strong></label>
            @if ($errors->has('name'))
                <span role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
            @endif
            <input type="text" class="form-control input-style-2" id="name" name="name"
                   placeholder="Введите имя" required="" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">Email<strong>*</strong></label>
            @if ($errors->has('email'))
                <span role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
            @endif
            <input type="email" class="form-control input-style-2" id="email" name="email"
                   placeholder="Введите email адрес" required="" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <div class="row" style="display: flex; align-items: center;">
                <div class="col-md-1 col-xs-2" style="margin-top: 15px">
                    <label for="" style="font-size: 16px;">+380</label>
                </div>
                <div class="col-md-11 col-xs-10">
                    <label for="subject">Телефон</label>
                    @if ($errors->has('phone'))
                        <span role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                    @endif
                    <input type="text" class="form-control input-style-2" id="phone" name="phone"
                           placeholder="Введите номер телефона" value="{{ old('phone') }}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="message">Текст Сообщения<strong>*</strong></label>
            @if ($errors->has('message'))
                <span role="alert">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
            @endif
            <textarea class="form-control input-style-2" id="message" name="message"
                      placeholder="Текст сообщения.." required="" rows="3">{{ old('message') }}</textarea>
        </div>

        <button type="submit" class="st-btn primary-btn hvr-back hvr-sweep-to-right">Submit
        </button>
    </form>
</div>