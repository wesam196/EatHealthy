<!DOCTYPE html>

<html lang="ar" dir="rtl">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>
    الرئيسة
    </title>


</head>

<body class="bg-gray-50 p-6 " >
  

  <form action="{{ url('/logout') }} " method="POST">
    @csrf
    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded absolute top-4 left-4">
        تسجيل الخروج
    </button>
  
  </form>


  <a href="{{url('/')}}" class="bg-blue-500 text-white px-4 py-2 rounded absolute top-4 right-4">
    الرئيسية
  </a>
  <a href="{{url ('/goals') }}" class="bg-green-500 text-white px-4 py-2 rounded absolute top-16 right-4">
    الأهداف
  </a>


   <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">
    تطبيق تتبع الوجبات
   </h1>
   <img src="logo.png" alt="" class="mx-auto mb-6 w-32 h-32">
   
    <div class="flex justify-center mb-6">
     <form class=" p-6 rounded-2xl shadow-md w-full max-w-md space-y-4" action="{{url('/addMeal')}}" method="POST" enctype ="multipart/form-data">
        @csrf
        <h2 class="text-2xl font-semibold text-gray-800 text-center">
     اضف وجبة جديدة
    </h2>

    <!-- Name -->
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">
        الوجبة
      </label>
      <input
        type="text"
        name="name"
        class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">
        السعرات
      </label>
      <input
        type="text"
        name="calories"
        class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
    </div>

    
        <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
            البروتين
        </label>
        <input
            type="text"
            name="protien"
            class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
    </div>

    <!-- Submit -->
    <button
      type="submit"
      class="w-full bg-blue-600 text-white py-2 rounded-lg font-medium hover:bg-blue-700 transition"
    >
        اضف الوجبة
    </button>
  </form>
    </div>


<br/>

    <table class="min-w-full border border-gray-300">
    <thead class="bg-gray-100">
        <tr>
            <th class="border px-4 py-2 text-center">اسم الوجبة</th>
            <th class="border px-4 py-2 text-center">السعرات</th>
            <th class="border px-4 py-2 text-center">البروتين</th>
            <th class="border px-4 py-2 text-center">الإجراءات</th>
        </tr>
    </thead>


    <tbody>
     @foreach ($data as $data)
        

  
    
        <tr>
            <td class="border px-4 py-2">{{$data->name}}</td>
            <td class="border px-4 py-2">{{$data->calories}}</td>
            <td class="border px-4 py-2">{{$data->protien}}</td>
            <td class="border px-4 py-2">
                <a href="{{url('/deleteMeal/'.$data->id)}}" class="bg-red-500 text-white px-4 py-2 rounded">حذف</a>
            </td>

        </tr>
    

      @endforeach
        <tr>
            <td class="border px-4 py-2 font-bold">المجموع</td>
            <td class="border px-4 py-2 font-bold">{{ $data->sum('calories') }}</td>
            <td class="border px-4 py-2 font-bold">{{ $data->sum('protien') }}</td>
        </tr>
     
    </tbody>
</table>






</body>
</html>