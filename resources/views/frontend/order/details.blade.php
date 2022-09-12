  @if(session ('name'))
<p>{{Session::get('name','default value')}}</p>

    @endif