@if (Auth::guard('web')->check())
  <p>You are logged IN as a <b>USER</b> </p>
@else
  <p>You are logged OUT as a <b>USER</b> </p>
@endif

@if (Auth::guard('admin')->check())
  <p>You are logged IN as a <b>ADMIN</b> </p>
@else
  <p>You are logged OUT as a <b>ADMIN</b> </p>
@endif
