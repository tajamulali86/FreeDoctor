<aside class=" p-5  w-48 bg-zinc-800 text-white " style=" height:90vh">
    <nav class=" flex  flex-col " >    
        {{-- <a class="nav-link active" aria-current="page" href="{{ route('dashboard.index') }}">Home</a> --}}
        {{-- <a class="nav-link" href="{{ route('dashboard.list') }}">Volunteers list</a> --}}
        {{-- <a class="" href="/">Back to website</a> --}}
        <x-dash-link route="/" message="Back to website"/>     
        <x-dash-link route="#" message="Edit my Profile"/>     
        <x-dash-link route="#" message="All Patients"/>     
        {{-- <a class="" href="{{route('edit.doctor')}}">Edit my Profile</a>
        <a class="" href="{{route('view.patients')}}">All Patients</a> --}}
        {{-- <a class="" href="#">Edit my Profile</a>
        <a class="" href="#">All Patients</a> --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="p-3 hover:outline-2 hover:outline-neutral-50 hover:bg-white hover:text-black hover:rounded-md hover:shadow-lg">
                {{ __('Log Out') }}
            </button>
        </form>
        {{-- <a class="nav-link" href="{{ route('logout') }}">logout</a> --}}
      </nav>
    </aside>
