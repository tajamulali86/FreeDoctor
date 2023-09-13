{{-- @dd($comments) --}}

{{-- @foreach($comments as $comment)
<div class="w-2/3 shadow p-5 m-5 rounded-xl text-white bg-zinc-800">

    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{{ $comment->user->name }}</strong>
        @if($comment->body)<p class="">{{ $comment->body }}</p>@endif
        @if($comment->file_path)
        <a href="{{ asset('storage/' . $comment->file_path) }}" class="pt-2 mt-3 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" target="_blank">View File</a>
        @endif
        <a href="" id="reply"></a>
    
    </div>
</div>
    @endforeach --}}
    {{-- <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="patient_id" value="{{ $patient_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" value="Reply" />
                
                  
            </div>
            <hr />
        </form> --}}
        {{-- @include('post.commentsDisplay', ['comments' => $comment->replies]) --}}
        @foreach($comments as $comment)
        <div class="w-2/3 shadow p-5 m-5 ">
        
            <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
                @if(auth()->user()->id == $comment->user_id)
                    <div class="bg-green-500 rounded    ">
                        {{-- <strong>{{ $comment->user->name }}</strong> --}}
                        @if($comment->body)<p class="text-right  rounded-lg p-2 text-black">{{ $comment->body }}</p>@endif
                        @if($comment->file_path)
                            <a href="{{ asset('storage/' . $comment->file_path) }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white  border border-blue-500 hover:border-transparent rounded" target="_blank">View File</a>
                        @endif
                        <a href="" id="reply"></a>
                    </div>
                @else
                    <strong>@if($comment->user->userType=='doctor') Dr.{{  $comment->user->name }}@else {{  $comment->user->name }} @endif </strong>
                    @if($comment->body)<p class=" rounded-lg p-2 text-black">{{ $comment->body }}</p>@endif
                    @if($comment->file_path)
                        <a href="{{ asset('storage/' . $comment->file_path) }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white  border border-blue-500 hover:border-transparent rounded" target="_blank">View File</a>
                    @endif
                    <a href="" id="reply"></a>
                @endif
            
            </div>
        </div>
        @endforeach