<x-app-layout>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-[20px]">
    <div>
      <div>
        <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Введите данные</h3>
        <form action="{{ route('works.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="flex flex-col justify-between p-4 leading-normal">
            <select id="category" name="category" required>
              @foreach($categories as $category)
              <option value='{{$category->id}}'>{{$category->title}}</option>
              @endforeach
            </select>
            <p>Название:</p>
            <textarea id="title" name="title" rows="1" required></textarea>
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
            <p>Файл:</p>
            <input type='file' id="path_img" class="block mt-1" name="path_img" required/>
            <x-input-error :messages="$errors->get('path_img')" class="mt-2" />            
          </div>
          <br>
          <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Отправить открытку</button>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>  