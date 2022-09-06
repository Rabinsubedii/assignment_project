  @if(session ('email'))
    <h4 class="alert alert-success">{{session ('email')}}</h4>
    @endif