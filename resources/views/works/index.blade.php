<x-app-layout>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-[20px]">
    <div>
      <div>
        <a class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href={{ route('works.create') }}>Принять участие</a>
        @if((auth()->user()->isAdmin()===true))
            <a class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"  href="{{ route('admin.index') }}">
                {{ __('Перейти в панель администратора') }}
            </a>
        @endif
      </div>
    </div>
  </div>
</x-app-layout>  