@extends('layouts.main')
@section('content')

<div class="mx-auto  p-10 my-10 bg-slate-300 shadow-lg rounded-lg container">

<div class="mb-24">
    
<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Doctor message</label>
<textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>

</div>
<div class="mb-6">
    
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload your prescription here</label>
<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
<div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A prescription is required for the patients </div>

</div>
<div>
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Patient Reply</label>
    <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
</div>
<button class="flex mx-auto mt-20 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>

</div>
@endsection