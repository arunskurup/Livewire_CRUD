<div class="flex flex-col">
    
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8 pt-20">
        <a href="{{route('create')}}">
        <button  type="button"  style="margin-left: 62%" class=" py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white mb-2">Register</button></a>
        <div class="overflow-x-auto"> 
            
          <table class="max-w-full  m-auto pt-20">
            
            <thead class="border-b bg-gray-800 text-white">
              <tr>
                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">
                  #
                </th>
                <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                  Name
                </th>
                <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                  Email
                </th>
                <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                  Phone
                </th>
                <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                  Address
                </th>
                <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                  Action
                </th>
                
              </tr>
            </thead>
            <tbody>

                @foreach ($data as $id=>$item)
                <tr class="border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$id+1}}</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{$item->name}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{$item->email}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                     {{$item->phone}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{$item->address}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <button wire:click="deleteUser({{$item->id}})">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                        </button>
                    </td>
                    
                  </tr>
                @endforeach
              
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>