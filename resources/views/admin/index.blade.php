
<x-app-layout>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-[20px]">
<div>
      <div>
        <p class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Панель админитсратора</p>
          @csrf
          <div class="flex flex-col justify-between p-4 leading-normal">
            <select id="category" name="category" required>
              @foreach($categories as $categories)
              <option value='{{$categories->id}}'>{{$categories->title}}</option>
              @endforeach
            </select>
            <p>Название:</p>
            <textarea id="title" name="title" rows="1" required></textarea>
            <p>Файл:</p>
            <input type='file' id="path_img" class="block mt-1" name="path_img" required/>
          </div>
          <br>
          <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Отправить открытку</button>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>  