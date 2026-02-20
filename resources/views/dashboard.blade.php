<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>لوحة التحكم</title>
</head>
<body>
    
  

    
   


    <div class="flex justify-center mt-10">
    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">
                <a href="{{ url('/') }}" class="text-2xl font-semibold text-gray-800 mb-4 text-center">
                    الرئيسية
                </a>
              </div>
    </div>

    <div class="flex justify-center mt-10">
    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">
                <a href="{{url ('/goals') }}" class="text-2xl font-semibold text-gray-800 mb-4 text-center">
    الأهداف
  </a>
              </div>
    </div>


<!--
    <div class="flex justify-center mt-10">
    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">
                <a href="{{ url('/logout') }} " class="text-2xl font-semibold text-gray-800 mb-4 text-center">
        تسجيل الخروج
    </a>
              </div>
    </div>
-->

    <div class="flex justify-center mt-10">
    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">
                 <a href="{{ url('user/profile') }}" class="text-2xl font-semibold text-gray-800 mb-4 text-center">
        الملف الشخصي
    </a>
              </div>
    </div>


</body>
</html>
