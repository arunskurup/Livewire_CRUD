<form wire:submit.prevent="submit" class="w-[400px] mx-auto py-16">

    @if (session()->has('message'))
        <div class="bg-emerald-500 text-white py-3 px-4 mb-4">
            {{ session('message') }}
        </div>
    @endif

   
    <input type="hidden"wire:model.debounce.500ms="data1" value="{{$data1}}">
    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="name" class="w-full border @error('name') border-red-500 @enderror"
               placeholder="First Name">
        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>


    <div class="mb-4">
        <input type="email" wire:model.debounce.500ms="email" class="w-full border @error('email') border-red-500 @enderror"
               placeholder="Email">
        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="phone" class="w-full border @error('phone') border-red-500 @enderror"
               placeholder="Phone">
        @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>


   
        <div class="mb-6">
            <input type="text" wire:model.debounce.500ms="address"
                   class="w-full border @error('address') border-red-500 @enderror" placeholder="Address" size="100" >
            @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
   

    <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">Update</button>
</form>