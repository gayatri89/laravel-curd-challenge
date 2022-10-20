<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('layouts.head')
</head>
<body>

<div class="flex flex-col h-screen">

@include('layouts.header')

<div class="overflow-x-auto flex-1">
  <div class="min-w-screen min-h-scree flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
    <div class="w-full max-w-3xl">
    

      <div class="bg-white shadow-md rounded my-6 overflow-scroll">

        <table class="min-w-max w-full table-auto ">

          @include('layouts.theader')
         
          <tbody class="text-gray-600 text-sm font-light">
            @foreach($users as $value)
              <tr class="border-b border-gray-200 hover:bg-gray-100">
              <td class="py-3 px-6 text-left whitespace-nowrap">{{$value->id}}</td>
              <td class="py-3 px-6 text-left whitespace-nowrap">{{$value->first_name}}</td>
              <td class="py-3 px-6 text-left whitespace-nowrap">{{$value->last_name}}</td>
              <td class="py-3 px-6 text-left whitespace-nowrap">{{$value->email_address}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> 
</div>

@include('layouts.footer')

</div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
