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

 <a href="{{url('/')}}" class="bg-blue-500 text-white px-4 py-2 rounded absolute top-4 right-4">
    الرئيسية
  </a>
  <a href="{{url ('/goals') }}" class="bg-green-500 text-white px-4 py-2 rounded absolute top-16 right-4">
    الأهداف
  </a>
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

    <h1 class="text-2xl font-semibold text-gray-800 mb-4 mt-10 text-center"  >تعديل الأهداف</h1>

<div class=" flex justify-center" >
       <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md" >
    <h1 class="text-2xl font-semibold text-gray-800 mb-4  text-center" onclick="toggleDropdown2()" > إضافة الهدف يدوياً</h1>

    <form action="{{ url('/updateGoals') }}" method="post" id="dropdown2" class="hidden bg-white rounded-lg  p-6 w-full max-w-md">

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
       </div>
    <br/>
     <!-- auto calculate goal by gender, age... , and make it drop down-->
    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md" >
        
        <h1 class="text-2xl font-semibold text-gray-800 mb-4 text-center" onclick="toggleDropdown()" >حساب الأهداف تلقائيًا</h1>
        <div class="hidden" id="dropdown">
        <form action="{{ url('/autoCalculateGoals') }}" method="post">
            @csrf
            <label for="gender">الجنس</label>
            <div class="flex space-x-4 mt-2">
                <label class="inline-flex items-center">
                    <input type="radio" name="gender" value="male" class="form-radio text-blue-500" required>
                    <span class="ml-2">ذكر</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="gender" value="female" class="form-radio text-pink-500" required>
                    <span class="ml-2">أنثى</span>
                </label>
            </div>
                <div class="mb-4 mt-4">
            <label for="age" class="block text-sm font-medium text-gray-700 mb-1">العمر</label>
            <input type="number" name="age" id="age"
                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
        </div>

        <div class="mb-4 mt-4">
            <label for="height" class="block text-sm font-medium text-gray-700 mb-1">الطول (سم)</label>
            <input type="number" name="height" id="height"
                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
        </div>

        <div class="mb-4 mt-4">
            <label for="weight" class="block text-sm font-medium text-gray-700 mb-1">الوزن (كجم)</label>
            <input type="number" name="weight" id="weight"
                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
        </div>


        <div class="mb-4 mt-4">
            <label for="activity_level" class="block text-sm font-medium text-gray-700 mb-1">مستوى النشاط</label>
            <select name="activity_level" id="activity_level" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="">اختر مستوى النشاط</option>
                <option value="sedentary">غير نشط</option>
                <option value="light">نشاط خفيف</option>
                <option value="moderate">نشاط متوسط</option>
                <option value="active">نشط</option>
                <option value="very_active">نشط جداً</option>
            </select>
               
        </div>

            <button type="button" class="calculate bg-yellow-500 text-white px-4 py-2 rounded w-full">احسب الأهداف تلقائيًا</button>
        </form>

        


        </div>  
    </div>
</div>
   

     <div class="flex justify-center mt-10" style="display:none;" id="results">
    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">السعرات الحرارية الحالية</h2>
        <p class="text-gray-600 text-center text-lg" id="calories"></p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md mx-4">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">مؤشر كتلة الجسم (BMI)</h2>
        <p class="text-gray-600 text-center text-lg" id="bmi"></p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md mx-4">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">الوزن المثالي</h2>
        <p class="text-gray-600 text-center text-lg" id="perfectWeight"></p>
    </div>

     <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md mx-4">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">السعرات الحرارية المثالية</h2>
        <p class="text-gray-600 text-center text-lg" id="perfectcalories"></p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md mx-4">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">هدف البروتين</h2>
        <p class="text-gray-600 text-center text-lg" id="protienGoal"></p>
    </div>

   
   
     
</div>



    <script>
        document.querySelector('.calculate').addEventListener('click', function() {
            const gender = document.querySelector('input[name="gender"]:checked').value;
            const age = document.getElementById('age').value;
            const height = document.getElementById('height').value;
            const weight = document.getElementById('weight').value;
            const activityLevel = document.getElementById('activity_level').value;

            // Example calculation logic (you would replace this with your actual calculation)
            let bmr = 0;
            if (gender === "male") {
                bmr = 10 * weight + 6.25 * height - 5 * age + 5;
            } else {
                bmr = 10 * weight + 6.25 * height - 5 * age - 161;
            }

            let activityMultiplier = 1.2; // Default for sedentary
            switch(activityLevel) {
                case 'sedentary': activityMultiplier = 1.2; break;
                case 'light': activityMultiplier = 1.375; break;
                case 'moderate': activityMultiplier = 1.55; break;
                case 'active': activityMultiplier = 1.725; break;
                case 'very_active': activityMultiplier = 1.9; break;
            }

            let tdee = bmr * activityMultiplier;

            let protienGoalStart = weight * 1.6;
            let protienGoalEnd = weight * 2.2;
            let bmi = weight / ((height / 100) ** 2);
            
            let perfectWeight = 22 * ((height / 100) ** 2);

            perfectBmr = 10 * perfectWeight + 6.25 * height - 5 * age + (gender === "male" ? 5 : -161);
            perfectTdee = perfectBmr * activityMultiplier;


   

            document.getElementById('calories').textContent = `${tdee.toFixed(2)} سعرة حرارية`;
            document.getElementById('bmi').textContent = ` ${bmi.toFixed(2)}`;
            document.getElementById('perfectWeight').textContent = `${perfectWeight.toFixed(2)}`;
            document.getElementById('perfectcalories').textContent = ` ${perfectTdee.toFixed(2)} سعرة حرارية`;
            document.getElementById('protienGoal').textContent = ` ${protienGoalStart.toFixed(2)} - ${protienGoalEnd.toFixed(2)} جرام`;
                document.getElementById('results').style.display = 'flex';
        });

        function toggleDropdown() {
  document.getElementById("dropdown").classList.toggle("hidden");
}


function toggleDropdown2() {
  document.getElementById("dropdown2").classList.toggle("hidden");
}

    </script>

</body>
</html>