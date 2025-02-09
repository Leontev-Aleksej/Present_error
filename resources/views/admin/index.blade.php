
<x-app-layout>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-[20px]">
  <div class='flex flex-wrap gap-4'>
          @foreach($works as $work)
          <div class='div-col border bg-gray-200 rounded-md p-6 mt-4 w-80'>
            <p class='text-xl font-mb	'>{{$work->user->title}}</p>
            <span class="text-sm text-black"> {{$work->user->name}}</span>
            <span class="text-sm text-black"> {{$work->user->middlename}}</span>
            <span class="text-sm text-black"> {{$work->user->lastname}}</span>
            <p class="text-sm text-black">Школа: {{$work->user->school}}</p>
            <p class="text-sm text-black">Класс: {{$work->user->class}}</p>
            @isset($work->path_img)
            <img src="/images/{{$work->path_img}}" alt="" class='rounded-lg mt-2'>
            @endisset
            @if($work->score=="Без оценки")
            <form id="form-update-{{$work->id}}" action="{{route('works.update')}}" method="POST">
            <div>
            @csrf
            @method('PUT')
                <input type="hidden" name="id" value="{{$work->id}}">
                <select name="score" onchange="document.getElementById('form-update-{{$work->id}}').submit()" class="border-none rounded-xl bg-green-300 mt-3 font-medium">
                  <option value='Низкий балл'>Низкий балл</option>
                  <option value='Средний балл'>Средний балл</option>
                  <option value='Высший балл'>Высший балл</option>
                </select>
            </div>
            </form>
            @else
              <p id="statusColor" class='statusColor font-medium text-s bg-gray-300 pt-2 pb-2 pl-5 pr-5 rounded-xl	mt-3 w-min border-none'>{{$work->score}}</p>
            @endif
            </div>
        @endforeach
    </div>
  </div>
</x-app-layout>  