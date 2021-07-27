<a class="dropdown-item" href="{{ route('doctor.logout') }}" onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">
  {{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('doctor.logout') }}" method="POST" class="d-none">
   @csrf
</form> 