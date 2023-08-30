<aside class=" p-5  w-48 bg-zinc-800 text-white " style=" height:90vh">
    <nav class=" flex  flex-col " >
    
        {{-- <a class="nav-link active" aria-current="page" href="{{ route('dashboard.index') }}">Home</a> --}}
        {{-- <a class="nav-link" href="{{ route('dashboard.list') }}">Volunteers list</a> --}}
        <a class="" href="/">Back to website</a>
        {{-- <a class="" href="{{route('edit.doctor')}}">Edit my Profile</a>
        <a class="" href="{{route('view.patients')}}">All Patients</a> --}}
        <a class="" href="#">Edit my Profile</a>
        <a class="" href="#">All Patients</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="">
                {{ __('Log Out') }}
            </button>
        </form>
        {{-- <a class="nav-link" href="{{ route('logout') }}">logout</a> --}}
      </nav>
    </aside>
