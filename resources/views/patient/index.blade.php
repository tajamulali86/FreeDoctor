@extends('layouts.main');
@section('content')
<!-- component -->
<div class="mx-auto  p-80 m-20 bg-slate-300 shadow-lg rounded-lg container">
  <div class="flex items-center justify-center p-12 ">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto  ">
      <form class="" action="" method="">
        <div class="">
          <label
            for="name"
            class=" mt-10 block text-base font-medium text-[#07074D]"
          >
            Full Name
          </label>
          <input
            type="text"
            name="name"
            id="name"
            placeholder="Full Name"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="">
          <label
            for="email"
            class="mt-10 block text-base font-medium text-[#07074D]"
          >
            Email Address
          </label>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="example@domain.com"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mt-10">
          <label
            for="subject"
            class=" block text-base font-medium text-[#07074D]"
          >
            Subject
          </label>
          <input
            type="text"
            name="subject"
            id="subject"
            placeholder="Enter the subject number"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <label
        for="name"
        class=" mt-10 block text-base font-medium text-[#07074D]"
      >
        Phone Number
      </label>
      <input
      type="text"
      name="subject"
      id="subject"
      placeholder="Enter your subject"
      class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
      />
      <label
      for="name"
      class="mb-3  block text-base font-medium text-[#07074D]"
    >
    

      
    </label>
        
          <label
            for="message"
            class="mt-10 block text-base font-medium text-[#07074D]">
            Patient Medical history
          </label>
          <textarea
            rows="4"
            name="message"
            id="message"
            placeholder="Type your message"
            class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
          </textarea>
            <label class="block mt-10 text-base font-mediumtext-[#07074D] dark:text-white" for="file_input">Upload file</label>
            <input class="block mt-5 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file"/>
            
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
            
           
        
      </form>
     
      <button type="submit" class="text-black bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium text-sm rounded-lg px-5 py-2.5 text-center mr-2 mb-2">Submit</button>


    </div>

  </div>
</div>

<div>
  @endsection