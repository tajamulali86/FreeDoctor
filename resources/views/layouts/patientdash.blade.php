{{-- <aside class=" p-5  w-48 bg-zinc-800 text-white " style=" height:90vh">
    <nav class=" flex  flex-col " >
    
        <a class="" href="/">Back to website</a>
        @if (isset($patient))
        <a class="" href="{{url('/patients/create')}}">Create my Profile</a>
            
        @else
        <a class="" href="{{url('/patients/'."$patient->id")}}">View my Profile</a>
        <a class="" href="{{url('/patients/'.$patient->id.'/edit')}}">Edit my Profile</a>
        <a class="" href="{{url('/our-doctors')}}">View Doctors </a>
        <a class="" href="#">Consultation of doctor</a>
        @endif
        
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="">
                {{ __('Log Out') }}
            </button>
        </form>
      </nav>
    </aside> --}}


    {{-- <aside class="p-5 w-48 bg-zinc-800 text-white" style="height: 90vh">
        <nav class="flex flex-col">
            <a href="/">Back to website</a>
            @if (isset($patient))
                <a href="{{ url('/patients/create') }}">Create my Profile</a>
            @else
                <a href="{{ url('/patients/' . $patient->id) }}">View my Profile</a>
                <a href="{{ url('/patients/' . $patient->id . '/edit') }}">Edit my Profile</a>
                <a href="{{ url('/our-doctors') }}">View Doctors</a>
                <a href="#">Consultation of doctor</a>
            @endif
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Log Out</button>
            </form>
        </nav>
    </aside>
     --}}
     <aside class="p-5 w-48 bg-zinc-800 text-white" style="height: 90vh">
        <nav class="flex flex-col">
            <a href="/">Back to website</a>
            
            @if (!$patient)
                <a href="{{ url('/patients/create') }}">Create my Profile</a>
            @else
                <a href="{{ url('/patients/' . $patient->id) }}">View my Profile</a>
                <a href="{{ url('/patients/' . $patient->id . '/edit') }}">Edit my Profile</a>
                <a href="{{ url('/our-doctors') }}">View Doctors</a>
                <a href="#">Consultation with a doctor</a>
            @endif
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Log Out</button>
            </form>
        </nav>
    </aside>
    