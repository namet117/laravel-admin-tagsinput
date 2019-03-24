<div class="form-group {!! !$errors->has($errorKey) ?: 'has-error' !!}">

  <label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>

  <div class="col-sm-6">

    @include('admin::form.error')

    <input class="form-control {{ $class }}" name="{{$name}}" placeholder="{{ $placeholder }}" {!! $attributes !!} >{{ old($column, $value) }}</input>

    @include('admin::form.help-block')

  </div>
</div>
