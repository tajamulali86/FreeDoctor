@extends('layouts.patient')
@section('content')
<form action="{{url('/patients')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed to doctors so be careful what you share.</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          
          <div class="sm:col-span-2 sm:col-start-1">
            <label for="number" class="block text-sm font-medium leading-6 text-gray-900">Number</label>
            <div class="mt-2">
              <input type="number" name="number" id="number"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('number')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
          </div>
  
          <div class="sm:col-span-2">
            <label for="age" class="block text-sm font-medium leading-6 text-gray-900">Age</label>
            <div class="mt-2">
              <input type="text" name="age" id="age"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('age')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
          </div>
  
          <div class="sm:col-span-2">
            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
            <div class="mt-2">
              <input type="text" name="country" id="country"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          @error('country')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
        </div>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
         
          
  
          <div class="col-span-full">
            <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
            <div class="mt-2">
              <input type="text" name="address" id="address"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('address')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
          </div>
  
         
          
          
  
          <div class="col-span-full">
            <label for="illness" class="block text-sm font-medium leading-6 text-gray-900">Illness</label>
            <div class="mt-2">
              <textarea id="illness" name="illness" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
            <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about your illness.</p>
          </div>
          @error('illness')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
  
     
  
          <div class="col-span-full">
            <label for="file" class="block text-sm font-medium leading-6 text-gray-900">Upload Files</label>

                
                  <label for="file" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                   
<input class="block w-1/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" aria-describedby="file_input_help" name='file' id="file" type="file">

                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
              </div>
              @error('file')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
        </div>
      </div>
  
      
  
     
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="{{url('/patients')}}"><button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button></a>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>

  @endsection