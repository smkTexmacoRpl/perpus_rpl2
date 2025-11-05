<div>
    <!-- We must ship. - Taylor Otwell -->

    ini user dashboard {{ Auth::user()->role }}
    <div>
        <form action="{{ route('logout') }}" method="POST" id="logout-form">
            @csrf

            <a href="{{ route('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">>logout</a>
        </form>

    </div>
</div>