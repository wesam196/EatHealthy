<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>

    <title>تحديد الهدف</title>
</head>
<body>
    
الهدف اليومي

<!-- create cards to show the goals -->
<div class="flex justify-center mt-10">
    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">السعرات الحرارية</h2>
        <p class="text-gray-600 text-center text-lg">{{ $data->calories_goal }} سعرة حرارية</p>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md mx-4">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">البروتين</h2>
        <p class="text-gray-600 text-center text-lg">{{ $data->protien_goal }} جرام</p>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md
">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">الكربوهيدرات</h2>
        <p class="text-gray-600 text-center text-lg">{{ $data->carbs_goal }} جرام</p>
    </div>
</div>


<h1 class="text-2xl font-semibold text-gray-800 mb-4 mt-10 text-center">تعديل الأهداف</h1>
<div class="flex justify-center">
    <form action="{{ url('/updateGoals') }}" method="post" class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">
        @csrf
        <div class="mb-4">
            <label for="calories_goal" class="block text-sm font-medium text-gray-700 mb-1">السعرات الحرارية</label>
            <input type="number" name="calories_goal" id="calories_goal"
                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="{{ $data->calories_goal }}" required>
        </div>
        <div class="mb-4">
            <label for="protien_goal" class="block text-sm font-medium text-gray-700 mb-1">البروتين</label>
            <input type="number" name="protien_goal" id="protien_goal"
                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="{{ $data->protien_goal }}" required>
        </div>
        <div class="mb-4">
            <label for="carbs_goal" class="block text-sm font-medium text-gray-700 mb-1">الكربوهيدرات</label>
            <input type="number" name="carbs_goal" id="carbs_goal"
                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="{{ $data->carbs_goal }}" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">تحديث الأهداف</button>
    </form>



</body>
</html>