@extends('layouts.patient')
@section('content')             
                  
                      <div class="">
                        <div class="border-b border-gray-900/10 pb-12">
                          <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
                    
                          <div class=" grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-6">
                            <div class="sm:col-span-2 sm:col-start-1">
                              <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                              <div class="mt-2">
                                <input type="text" name="city" id="city" value="{{$patient->user->name}}" autocomplete="address-level2" disabled class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                            </div>
                            <div class="sm:col-span-2 ">
                              <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                              <div class="mt-2">
                                <input type="text" name="city" id="city" value="{{$patient->user->email}}" autocomplete="address-level2" disabled class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                            </div>

                            <div class="sm:col-span-2 sm:col-start-1">
                              <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Number</label>
                              <div class="mt-2">
                                <input type="text" name="city" id="city" value="{{$patient->number}}" autocomplete="address-level2" disabled class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                            </div>
                    
                            <div class="sm:col-span-2">
                              <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Age</label>
                              <div class="mt-2">
                                <input type="text" name="region" id="region" value="{{$patient->age}}" autocomplete="address-level1" disabled class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                            </div>
                    
                            <div class="sm:col-span-2">
                              <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                              <div class="mt-2">
                                <input type="text" name="postal-code" id="postal-code" value="{{$patient->country}}" autocomplete="postal-code" disabled class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                            </div>
                          </div>
                          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-6">
                           
                            
                    
                            <div class="col-span-full">
                              <label for="street-address" class="block text-sm font-medium leading text-gray-900">Street address</label>
                              <div class="mt-2">
                                <input type="text" name="street-address" id="street-address" value="{{$patient->Address}}" autocomplete="street-address" disabled class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                            </div>
                    
                           
                            
                            
                    
                            <div class="col-span-full">
                              <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Illness</label>
                              <div class="mt-2">
                                <textarea id="about" name="about" rows="3" disabled class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"> {{$patient->illness}}"</textarea>
                              </div>
                              <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
                            </div>
                    
                    
                            <div class="">
                              <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Upload Files</label>
                              <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 ">
                                 <a target="_blank" href="{{asset('/storage/'.$patient->file_path)}}"> <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                  </svg></a>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                    
                        
                       
                      </div>
                      <hr />
                      <h4 class="block text-sm w-full font-medium leading-6 text-gray-900">Display Comments</h4>
    
                      <hr /> 
                      @include('comments', ['comments' => $patient->comments, 'patient_id' => $patient->id])
     
                      <h4 class="block text-xl mt-3 w-full font-medium leading-6 text-gray-900">Add comment</h4>
                      <form method="post" action="{{ route('comments.store') }}">
                          @csrf
                          <div class="form-group w-full">
                              <textarea class="form-control mt-2  w-1/2 flex justify-center rounded-lg border border-dashed border-gray-900/25" name="body"></textarea>
                              <input type="hidden" name="patient_id" value="{{ $patient->id }}" />
                          </div>
                          <div class="form-group mt-4">
                              <input type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" value="Add Comment" />
                          </div>
                      </form> 
  
                     
                    
                      
                
  @endsection