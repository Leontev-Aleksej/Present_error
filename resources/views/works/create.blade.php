<x-app-layout>
<body class="">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-[20px] ">
  <a class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href={{ route('works.create') }}>Отправить работу</a>
  <div class="flex gap-20">
    @foreach ($reports as $report)
    <div class="flex flex-col mt-4">
    <h5 class="mb-2 text-xl font-medium leading-tight">{{ $report->address }}</h5>
    <p class="w-full border-b-2 border-blue-500 border-opacity-100 px-4 py-3">{{ $report->contact }}</p>
    <p class="w-full border-b-2 border-blue-500 border-opacity-100 px-4 py-3">{{ $report->date }}</p>
    <p class="w-full border-b-2 border-blue-500 border-opacity-100 px-4 py-3">{{ $report->time }}</p>
    @foreach($services as $service)
    @if($service->id==$report->service_id)
        <p class="w-full border-b-2 border-blue-500 border-opacity-100 px-4 py-3">{{$service->title}}</p>
    @endif
    @endforeach
    <p class="w-full border-b-2 border-blue-500 border-opacity-100 px-4 py-3">{{ $report->payment }}</p>
    <p class="w-full border-b-2 border-blue-500 border-opacity-100 px-4 py-3">{{ $report->status }}</p>
  </div>
  @endforeach
  </div>
</div>
</body>
</x-app-layout>