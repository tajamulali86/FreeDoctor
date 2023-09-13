<aside class=" p-5   w-48 bg-zinc-800 text-white h-screen min-h-full  " >
    <nav class="flex fixed  flex-col ">
        
        <x-dash-link route="/" message="Back to website"/>            
        {{-- @dd($patient) --}}
        @if (!$patient)
            <x-dash-link route="{{ url('/patients/create') }}" message="Create my Profile"/>
        @else
            <x-dash-link route="{{ url('/patients/' . $patient->id) }}" message="View my Profile"/>
            <x-dash-link route="{{ url('/patients/' . $patient->id.'/edit') }}" message="Edit my Profile"/>
            <x-dash-link route="{{ url('/our-doctors') }}" message="View Doctors"/>
            {{-- <x-dash-link route="#" message="Consultation "/> --}}
        @endif
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="p-3 hover:outline-2 hover:outline-neutral-50 hover:bg-white hover:text-black hover:rounded-md hover:shadow-lg" type="submit">Log Out</button>
        </form>
    </nav>
</aside>
