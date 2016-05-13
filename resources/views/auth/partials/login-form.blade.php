<form role="form" method="POST" action="{{ url('/auth/login') }}">
    {!! csrf_field() !!}
    <div class="group">
        <input type="text" name="email" value="{{ old('email') }}" placeholder="Email"><span class="highlight"></span><span class="bar"></span>
    </div>
    <div class="group">
        <input type="password" name="password" placeholder="Password"><span class="highlight"></span><span class="bar"></span>
    </div>
    <button type="submit" class="button buttonBlue">Sign In<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div></button>
</form>