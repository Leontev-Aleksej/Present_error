
<x-app-layout>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-[20px]">
    <div>
    @foreach ($works as $work)
          <div class="flex flex-col mt-4">
                  <h5 class="mb-2 text-xl font-medium leading-tight">{{ $work->title }}</h5>
                  <p class="w-full border-b-2 border-blue-500 border-opacity-100 px-4 py-3">{{ $report->contact }}</p>
                  @foreach($categories as $category)
                  @if($category->id==$work ->category_id)
                  <p class="w-full border-b-2 border-blue-500 border-opacity-100 px-4 py-3">{{$category->title}}</p>
                  @endif
                  @endforeach
                  @if($work->score=="без оценки")
                  <form id="form-update-{{$work->id}}" action="{{route('works.update')}}" method="POST">
                  @csrf
                  @method('PUT')
                      <input type="hidden" name="id" value="{{$work->id}}">
                      <select name="score" onchange="document.getElementById('form-update-{{$work->id}}').submit()" class="mt-2">
                          <option value='Без оценки'>Без оценки</option>
                          <option value='Низкий балл'>Низкий балл</option>
                          <option value='Средний балл'>Средний балл</option>
                          <option value='Высший балл'>Высший балл</option>
                      </select>
                    </form>
                  @else
                    <p>{{$work->score}}</p>
                  @endif
            </div>
          @endforeach
    </div>
  </div>
</x-app-layout>  