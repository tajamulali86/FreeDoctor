@extends('layouts.main');
@section('content')
<!-- component -->
<h1 class="text-4xl text-center mx-auto mt-2">Fill this form to consult the doctor</h1>
<div class="container mx-auto mt-24 p-8 w-1/2 bg-slate-100 shadow-lg  rounded-lg ">
  <div class="flex items-center justify-center p-2 ">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
  
    <div class=" w-full ">
      <form class="mx-auto " action="" method="">
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
      placeholder="Enter your Phone"
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
          placeholder="example@domain.com"
            rows="6"
            name="message"
            id="message"
          
            class="w-full  rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
          </textarea>
            <label class="block mt-4 text-base font-mediumtext-[#07074D] dark:text-white" for="file_input">Upload file</label>
            <input class="block mt-5 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file"/>
            
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
            
           
        
      </form>
     
      <button class="flex mx-auto mt-20 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>



    </div>

  </div>
</div>

<div>
  @endsection