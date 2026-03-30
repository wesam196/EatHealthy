<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Eat Healthy</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "error-container": "#f95630",
                        "background": "#f9f6f5",
                        "on-secondary-container": "#40555f",
                        "outline": "#787676",
                        "error-dim": "#b92902",
                        "inverse-on-surface": "#9e9c9c",
                        "secondary-container": "#cfe6f2",
                        "surface-container-high": "#e5e2e1",
                        "tertiary": "#00656f",
                        "surface-variant": "#dfdcdc",
                        "on-secondary-fixed": "#2d424c",
                        "primary": "#176a21",
                        "on-error": "#ffefec",
                        "surface-container": "#eae7e7",
                        "inverse-primary": "#9df197",
                        "secondary": "#495f69",
                        "on-primary-fixed-variant": "#12661e",
                        "on-surface": "#2f2e2e",
                        "surface-container-highest": "#dfdcdc",
                        "on-tertiary-fixed-variant": "#005c64",
                        "primary-fixed-dim": "#90e28a",
                        "on-background": "#2f2e2e",
                        "tertiary-fixed": "#10eafe",
                        "tertiary-dim": "#005861",
                        "surface-dim": "#d6d4d3",
                        "on-primary": "#d1ffc8",
                        "on-secondary-fixed-variant": "#495f69",
                        "error": "#b02500",
                        "on-secondary": "#e4f5ff",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f3f0ef",
                        "inverse-surface": "#0e0e0e",
                        "on-tertiary-container": "#005159",
                        "surface": "#f9f6f5",
                        "on-error-container": "#520c00",
                        "on-surface-variant": "#5c5b5b",
                        "primary-container": "#9df197",
                        "secondary-dim": "#3e535c",
                        "on-tertiary-fixed": "#003d43",
                        "surface-tint": "#176a21",
                        "surface-bright": "#f9f6f5",
                        "tertiary-container": "#10eafe",
                        "outline-variant": "#afacac",
                        "on-tertiary": "#d4f9ff",
                        "primary-fixed": "#9df197",
                        "primary-dim": "#025d16",
                        "on-primary-fixed": "#00460e",
                        "secondary-fixed": "#cfe6f2",
                        "on-primary-container": "#005c15",
                        "secondary-fixed-dim": "#c1d8e4",
                        "tertiary-fixed-dim": "#00dbee"
                    },
                    fontFamily: {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .bg-primary-gradient {
            background: linear-gradient(135deg, #176A21 0%, #025D16 100%);
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9f6f5;
            color: #2f2e2e;
        }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
    </style>
</head>
<body class="bg-background min-h-screen">
<!-- TopAppBar Shared Component -->
<header class="fixed top-0 w-full z-40 bg-stone-50/80 dark:bg-zinc-950/80 backdrop-blur-md">
<div class="flex justify-between items-center px-8 py-4 w-full">
<div class="flex items-center gap-4">
<span class="text-2xl font-black text-green-900 dark:text-green-100 font-headline">Eat Healthy</span>
</div>
<div class="flex items-center gap-6">
<div class="hidden md:flex items-center gap-8 text-stone-500 dark:text-zinc-500 font-manrope font-semibold">
<a class="text-green-700 dark:text-green-400 font-bold hover:bg-stone-200/50 dark:hover:bg-zinc-800/50 transition-colors px-2 py-1 rounded-lg" href="#">Home</a>
<a class="hover:bg-stone-200/50 dark:hover:bg-zinc-800/50 transition-colors px-2 py-1 rounded-lg" href="/goals">Goals</a>
<a class="hover:bg-stone-200/50 dark:hover:bg-zinc-800/50 transition-colors px-2 py-1 rounded-lg" href="/dashboard">Dashboard</a>
</div>
<div class="flex items-center gap-3">

<a href="/user/profile" class="p-2 text-stone-500 hover:bg-stone-200/50 rounded-full transition-all active:scale-95 duration-150">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
</a>
<div class="w-10 h-10 rounded-full overflow-hidden ml-2 border-2 border-primary-container">
<img alt="User profile avatar" class="w-full h-full object-cover" data-alt="close-up portrait of a smiling young man with clear skin and short dark hair in soft natural light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAl9XjSVgBwli53s0_q4q3dbO6x_uSR3udVFDhMBlv5qrMXIbthgTG2X9xM2E2hAabu6nU4y-ChhBGOEcZXxv1_w_xavBdSCkkeFKDp3FNtB7xykCfoD4lUAc9UVC7TWM_Se-FLOJWhBQp7U0zQQsRRljyoBC81ctrtUW8zypKSQdAeJi-2Nd6_BNTDrmCYGdiFYgZWd0WdRL86En64FOr5kjQf7Gob-lnxgN-SkIQy4FU0N54DrhYLI58m9gQwN9VInCGjhiUMlUPy"/>
</div>
</div>
</div>
</div>
</header>
<!-- Main Content Canvas -->
<main class="pt-24  min-h-screen">
<div class="max-w-7xl mx-auto px-8 py-12">
<!-- Dashboard Hero Section -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
<!-- Left Column: Summary & Actions -->
<div class="lg:col-span-8 space-y-12">
<!-- Editorial Header -->
<div class="space-y-2">
<p class="text-primary font-bold tracking-widest uppercase text-sm font-label">Daily Apothecary Report</p>
<h1 class="text-on-surface font-headline font-extrabold text-5xl md:text-6xl tracking-tight">Fueling Your <span class="text-primary italic">Vitality</span>.</h1>
</div>
<!-- Add to Your Log Section (Updated with Toggle) -->
<div class="bg-surface-container-low rounded-3xl p-8 shadow-sm" id="log-section">
<div class="flex flex-col gap-6">
<div class="flex justify-between items-center">
<label class="font-headline font-bold text-xl text-on-surface">Add to Your Log</label>
<div class="flex bg-surface-container rounded-xl p-1">
<button class="px-4 py-2 rounded-lg text-sm font-bold transition-all bg-primary text-white" onclick="document.getElementById('ai-form').classList.remove('hidden'); document.getElementById('manual-form').classList.add('hidden'); this.classList.add('bg-primary', 'text-white'); this.nextElementSibling.classList.remove('bg-primary', 'text-white');">AI Add</button>
<button class="px-4 py-2 rounded-lg text-sm font-bold transition-all" onclick="document.getElementById('manual-form').classList.remove('hidden'); document.getElementById('ai-form').classList.add('hidden'); this.classList.add('bg-primary', 'text-white'); this.previousElementSibling.classList.remove('bg-primary', 'text-white');">Manual</button>
</div>
</div>
<!-- AI Add Form (Default) -->
 <form action="{{ url('/generateMeals') }}" method="get">
    @csrf
<div class="space-y-4" id="ai-form">
<div class="flex flex-col md:flex-row gap-3">
<div class="relative flex-grow">
<input name="describe" class="w-full bg-surface-container-lowest border-none rounded-2xl py-5 pl-6 pr-6 text-lg focus:ring-2 focus:ring-primary/30 transition-all shadow-sm font-body" placeholder="Describe your meal (e.g., '2 eggs and toast')" type="text"/>
</div>
<button 
    type="submit"
class="flex items-center justify-center gap-2 bg-primary text-white px-8 py-4 rounded-2xl font-bold hover:bg-primary-dim transition-all active:scale-95 shadow-md">
<span class="material-symbols-outlined" data-icon="auto_awesome">auto_awesome</span>
<span>AI Add</span>
</button>
</div>
<p class="text-on-surface-variant text-sm font-medium italic">
<span class="material-symbols-outlined text-xs align-middle" style="font-size: 14px">info</span>
                                    "Use natural language for AI, and our system will estimate the nutritional value."
                                </p>
</div>
 </form>

  @php
    $generatedMeal = session('generatedMeal');
@endphp

@isset($generatedMeal)

    <form  action="{{url('/addMeal')}}" method="POST" enctype ="multipart/form-data">
        @csrf
         <!-- Name -->
    <div>
      
      <input
        type="text"
        name="name"
        value="{{ old('describe') }}"
        style="display: none;"
      />
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">
        Calories
      </label>
      <input
        type="text"
        name="calories"
        class="w-full bg-surface-container-lowest border-none rounded-2xl py-5 pl-6 pr-6 text-lg focus:ring-2 focus:ring-primary/30 transition-all shadow-sm font-body"        value="{{ $generatedMeal['calories']  }}"
        />
    </div>

    
        <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
            Protein
        </label>
        <input
            type="text"
            name="protien"
            class="w-full bg-surface-container-lowest border-none rounded-2xl py-5 pl-6 pr-6 text-lg focus:ring-2 focus:ring-primary/30 transition-all shadow-sm font-body"            value="{{ $generatedMeal['protein'] }}"
        />
    </div>

    <!-- Submit -->
<button 
    type="submit"
class="flex items-center justify-center gap-2 bg-primary text-white px-8 py-4 rounded-2xl font-bold hover:bg-primary-dim transition-all active:scale-95 shadow-md mt-4">
<span class="material-symbols-outlined" data-icon="auto_awesome">auto_awesome</span>
<span>Add</span>
</button>
  </form>
@endisset



<!-- Manual Add Form (Initially Hidden) -->
 <form  action="{{url('/addMeal')}}" method="POST" enctype ="multipart/form-data">
    @csrf
<div class="hidden space-y-4" id="manual-form">
<div class="grid grid-cols-1 md:grid-cols-12 gap-4">
<div class="md:col-span-7">
<input name="name" class="w-full bg-surface-container-lowest border-none rounded-2xl py-5 px-6 text-lg focus:ring-2 focus:ring-primary/30 transition-all shadow-sm font-body" placeholder="Meal Name (e.g., 'Chicken Salad')" type="text"/>
</div>
<div class="md:col-span-3">
<input name="calories" class="w-full bg-surface-container-lowest border-none rounded-2xl py-5 px-6 text-lg focus:ring-2 focus:ring-primary/30 transition-all shadow-sm font-body" placeholder="Calories" type="number"/>
</div>
<div class="md:col-span-3">
<input name="protien" class="w-full bg-surface-container-lowest border-none rounded-2xl py-5 px-6 text-lg focus:ring-2 focus:ring-primary/30 transition-all shadow-sm font-body" placeholder="Protein (g)" type="number"/>
</div>

<div class="md:col-span-2">
<button class="w-full h-full flex items-center justify-center gap-2 bg-primary text-white py-4 rounded-2xl font-bold hover:bg-primary-dim transition-all active:scale-95 shadow-md">
<span>Add</span>
</button>
</div>
</div>
<p class="text-on-surface-variant text-sm font-medium italic">
<span class="material-symbols-outlined text-xs align-middle" style="font-size: 14px">info</span>
                                    "Manually enter precise figures for accurate tracking."
                                </p>
</div>
</div>
</div>
<!-- Meal Log Bento Grid -->
<section class="space-y-6">
<div class="flex justify-between items-end">
<h3 class="text-on-surface font-headline font-bold text-3xl">Today's Log</h3>
<span class="text-outline font-label text-sm" id="date-span">October 24, 2023</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Breakfast -->
@foreach ($data as $meals)
<div class="bg-surface-container-lowest rounded-3xl p-6 flex flex-col justify-between min-h-[160px] group transition-all hover:bg-surface-bright border border-transparent hover:border-outline-variant/10">
<div class="flex justify-between items-start">
<div>
<h4 class="text-on-surface font-headline font-bold text-xl">{{ $meals->name }}</h4>

</div>
<a href="{{url('/deleteMeal/'.$meals->id)}}" class="text-outline-variant/40 hover:text-error transition-colors p-2 rounded-full hover:bg-error/5">
  

    <span class="material-symbols-outlined" data-icon="delete">delete</span>
    </a>
</a>
</div>
<div class="flex items-baseline gap-1 mt-4">
<span class="text-3xl font-headline font-extrabold text-on-surface">{{ $meals->calories }}</span>
<span class="text-outline font-label text-sm uppercase">kcal</span>
</div>
<div class="flex items-baseline gap-1 mt-4">
<span class="text-3xl font-headline font-extrabold text-on-surface">{{ $meals->protien }}</span>
<span class="text-outline font-label text-sm uppercase">protein (g)</span>
</div>
</div>
@endforeach
</div>
</section>
</div>
<!-- Right Column: Nutritional Insights -->
<div class="lg:col-span-4 sticky top-28 space-y-8">
<!-- Calorie Progress Summary Card -->
<div class="bg-on-surface text-background rounded-[2.5rem] p-10 relative overflow-hidden shadow-2xl">
<!-- Background Decorative Element -->
<div class="absolute -right-10 -top-10 w-40 h-40 bg-primary/20 rounded-full blur-3xl"></div>
<div class="relative z-10 flex flex-col items-center text-center space-y-8">
<h2 class="font-headline font-bold text-2xl">Daily Balance</h2>

@php
    $goals = $goal->calories_goal;
    $remaining = $data->sum('calories');

    $completed = $goals - $remaining;

    $percentage = $goals > 0 ? ($completed / $goals) * 100 : 0;

    $radius = 100;
    $circumference = 2 * pi() * $radius;

    $offset = $circumference - ($percentage / 100) * $circumference;
@endphp

<!-- Asymmetric Calorie Ring -->
<div class="relative w-56 h-56 flex items-center justify-center">
<svg class="w-full h-full -rotate-90">
<circle cx="112" cy="112" fill="transparent" r="{{ $radius }}" stroke="#40555f" stroke-width="12"></circle>
<circle cx="112" cy="112" fill="transparent" r="{{ $radius }}" stroke="#176a21" stroke-dasharray="{{ $circumference }}  " stroke-dashoffset="{{ $offset }}" stroke-linecap="round" stroke-width="12"></circle>
</svg>
<div class="absolute inset-0 flex flex-col items-center justify-center">
<span class="text-5xl font-extrabold font-headline leading-none">{{ $remaining }}</span>
<span class="text-inverse-on-surface font-label text-sm uppercase tracking-tighter">Consumed</span>
</div>
</div>
<div class="w-full grid grid-cols-2 gap-4 border-t border-secondary/20 pt-8">
<div class="text-left">
<p class="text-inverse-on-surface text-xs font-label uppercase">Goal</p>
<p class="text-xl font-headline font-bold">{{ $goals }}</p>
</div>
<div class="text-right">
<p class="text-inverse-on-surface text-xs font-label uppercase">Remaining</p>
<p class="text-xl font-headline font-bold text-primary-fixed">{{ $completed }}</p>
</div>
</div>
</div>
</div>
<!-- Macro Breakdown Card -->
<div class="bg-surface-container-low rounded-3xl p-8 space-y-6">
<h4 class="text-on-surface font-headline font-bold text-xl">Macro Distribution</h4>
<div class="space-y-4">
<!-- Protein -->
<div class="space-y-1">
<div class="flex justify-between text-sm">
<span class="font-semibold text-on-surface">Protein</span>
<span class="text-on-surface-variant">{{ $data->sum('protien') }} / {{ $goal->protien_goal }}</span>
</div>
<div class="h-2 bg-surface-container-highest rounded-full overflow-hidden">
<div class="h-full bg-tertiary w-[{{ $goal->protien_goal > 0 ? ($data->sum('protien') / $goal->protien_goal) * 100 : 0 }}%] rounded-full"></div>
</div>
</div>
<!-- Carbs -->
<div class="space-y-1">
<div class="flex justify-between text-sm">
<span class="font-semibold text-on-surface">Carbs</span>
<span class="text-on-surface-variant">{{ $data->sum('carbs') }} / {{ $goal->carbs_goal }}</span>
</div>
<div class="h-2 bg-surface-container-highest rounded-full overflow-hidden">
<div class="h-full bg-primary-container w-[{{ $goal->carbs_goal > 0 ? ($data->sum('carbs') / $goal->carbs_goal) * 100 : 0 }}%] rounded-full"></div>
</div>
</div>
<!-- Fats -->
<div class="space-y-1">
<div class="flex justify-between text-sm">
<span class="font-semibold text-on-surface">Fats</span>
<span class="text-on-surface-variant">{{ $data->sum('fats') }} / {{ $goal->fats_goal }}</span>
</div>
<div class="h-2 bg-surface-container-highest rounded-full overflow-hidden">
<div class="h-full bg-secondary-fixed-dim w-[{{ $goal->fats_goal > 0 ? ($data->sum('fats') / $goal->fats_goal) * 100 : 0 }}%] rounded-full"></div>
</div>
</div>
</div>
</div>
<!-- Daily Quote -->
<div class="relative rounded-3xl overflow-hidden aspect-video group">
<img alt="Healthy salad bowl" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="vibrant mediterranean salad bowl with fresh greens, tomatoes, and chickpeas in soft morning sunlight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsp6HGl04AVZ_5eMo-ZwGgfI4V4PFppvwhZN7uy99UWOvK0cV9r054p_phjHBWGNwk9PujiUviCD5ypTgS1d4aYWA_tEAVCAB7MaWyujAKsiGHTryBpii-GjdeJ6X3Qv-61IE847Y5KSrXYq3-Jvhpq73XJH6s7RrmjBOc7-dgRIHeDrn_3wACOzJ9cOkwdTyewHfDU2wKAZry5HdGNqowQ9_APW2THlcyr2byU6wx0Ad56Q8UVwsGj3p9DR86N5papk8b__chFpMT"/>
<div class="absolute inset-0 bg-black/40 backdrop-blur-[2px] flex items-center justify-center p-8 text-center">
<p class="text-white font-headline font-semibold italic text-lg leading-relaxed">"Let food be thy medicine and medicine be thy food."</p>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Contextual FAB -->
<button class="md:hidden fixed bottom-8 right-8 bg-primary-gradient text-white w-16 h-16 rounded-full shadow-2xl flex items-center justify-center z-50 active:scale-90 transition-transform">
<span class="material-symbols-outlined" data-icon="add">add</span>
</button>


<script>
const today = new Date().toISOString().split('T')[0];
    document.getElementById('date-span').textContent = today;
</script>
</body></html>