<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex">
        @include('components.sidebar')
        <div class="space-y-6 w-full">
            <div class="mb-2 border-b border-gray-200 p-6 flex justify-between items-center">
                <div class="flex flex-col gap-2">
                    <h1 class="font-semibold text-3xl">Welcome back, Sari!</h1>
                    <p>Ready to grow your F&B business today?</p>
                </div>
                <div class="profile-wrapper">
                    <div class="w-12 h-12 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/flower.jpg') }}" alt="" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
            @php
    $moduleData = [
        "id" => 1,
        "title" => "Basic Finance Management",
        "totalLessons" => 12,
        "completedLessons" => 4,
        "lessons" => [
            ["id"=>1,"title"=>"Introduction to F&B Finance","duration"=>"8 min","status"=>"Completed","type"=>"video"],
            ["id"=>2,"title"=>"Understanding Cash Flow","duration"=>"12 min","status"=>"Completed","type"=>"text"],
            ["id"=>3,"title"=>"Basic Accounting Principles","duration"=>"15 min","status"=>"Completed","type"=>"video","updated"=>true],
            ["id"=>4,"title"=>"Revenue vs Profit","duration"=>"10 min","status"=>"Completed","type"=>"text"],
            ["id"=>5,"title"=>"Creating Your First Budget","duration"=>"18 min","status"=>"In Progress","type"=>"video"],
            ["id"=>6,"title"=>"Tracking Daily Expenses","duration"=>"7 min","status"=>"Not Started","type"=>"text"],
            ["id"=>7,"title"=>"Managing Inventory Costs","duration"=>"14 min","status"=>"Not Started","type"=>"video"],
            ["id"=>8,"title"=>"Setting Financial Goals","duration"=>"9 min","status"=>"Not Started","type"=>"text"],
            ["id"=>9,"title"=>"Emergency Fund Planning","duration"=>"11 min","status"=>"Not Started","type"=>"video"],
            ["id"=>10,"title"=>"Tax Basics for F&B","duration"=>"13 min","status"=>"Not Started","type"=>"text"],
            ["id"=>11,"title"=>"Financial Reporting","duration"=>"16 min","status"=>"Not Started","type"=>"video"],
            ["id"=>12,"title"=>"Growth Investment Planning","duration"=>"20 min","status"=>"Not Started","type"=>"text"],
        ]
    ];

    $currentLesson = [
        "id" => 5,
        "title" => "Creating Your First Budget",
        "duration" => "18 min",
        "estimatedTime" => "15-20 min",
        "content" => [
            "type" => "video",
            "thumbnail" => "/api/placeholder/640/360",
            "description" => "Learn how to create an effective budget for your F&B business. We'll cover revenue forecasting, expense categorization, and setting realistic financial targets that will help you make informed business decisions."
        ],
        "keyTakeaways" => [
            "Understand the difference between fixed and variable costs in your F&B business",
            "Learn to forecast monthly revenue based on historical data and market trends",
            "Create expense categories that match your business operations",
            "Set realistic profit margins and growth targets",
            "Build contingency planning into your budget for unexpected expenses"
        ],
        "resources" => [
            ["id"=>1,"title"=>"Budget Template for F&B","type"=>"Excel"],
            ["id"=>2,"title"=>"Cost Calculation Worksheet","type"=>"PDF"],
            ["id"=>3,"title"=>"Monthly Tracking Sheet","type"=>"Google Sheets"],
        ]
    ];

    $progress = ($moduleData["completedLessons"] / $moduleData["totalLessons"]) * 100;
@endphp

<div
    class="min-h-screen bg-gray-50"
    x-data="{
        lessons: @js($moduleData['lessons']),
        currentLesson: @js($currentLesson),
        setLesson(lesson) { this.currentLesson = lesson }
    }"
>
    {{-- Header --}}
    <div class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <a href="{{ url('learning') }}" class="flex items-center gap-2 text-gray-500 hover:text-gray-800">
                    ← Back to Learning
                </a>
                <div>
                    <h1 class="text-xl font-semibold text-gray-900">{{ $moduleData['title'] }}</h1>
                    <p class="text-sm text-gray-500">
                        Lesson <span x-text="currentLesson.id"></span> of {{ $moduleData['totalLessons'] }}
                    </p>
                </div>
            </div>
            <div>
                <div class="text-sm font-medium text-gray-700">
                    {{ $moduleData['completedLessons'] }}/{{ $moduleData['totalLessons'] }} completed
                </div>
                <div class="w-32 bg-gray-200 rounded-full h-2 mt-1">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: {{ $progress }}%"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Body --}}
    <div class="container mx-auto px-6 py-6 grid grid-cols-12 gap-6">
        {{-- Sidebar Lessons --}}
        <div class="col-span-3 bg-white shadow rounded-lg p-4 space-y-2">
            <h2 class="font-semibold mb-3">Lessons</h2>
            <template x-for="lesson in lessons" :key="lesson.id">
                <button
                    @click="setLesson(lesson)"
                    class="w-full text-left p-2 rounded"
                    :class="lesson.id === currentLesson.id ? 'bg-blue-100 text-blue-700 font-semibold' : 'hover:bg-gray-100'"
                >
                    <span x-text="lesson.id + '. ' + lesson.title"></span>
                    <span class="text-xs text-gray-500 block" x-text="lesson.duration + ' • ' + lesson.status"></span>
                </button>
            </template>
        </div>

        {{-- Main Content --}}
        <div class="col-span-6 space-y-6">
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-bold mb-3" x-text="currentLesson.title"></h2>
                <template x-if="currentLesson.content?.thumbnail">
                    <img :src="currentLesson.content.thumbnail" class="rounded mb-4">
                </template>
                <p class="text-gray-700 leading-relaxed" x-text="currentLesson.content?.description"></p>
            </div>

            <div class="bg-white shadow rounded-lg p-6" x-show="currentLesson.keyTakeaways">
                <h3 class="font-semibold mb-3">Key Takeaways</h3>
                <ul class="list-disc pl-5 space-y-1 text-gray-700">
                    <template x-for="takeaway in currentLesson.keyTakeaways" :key="takeaway">
                        <li x-text="takeaway"></li>
                    </template>
                </ul>
            </div>

            {{-- Navigation --}}
            <div class="flex justify-between">
                <button class="px-4 py-2 border rounded hover:bg-gray-100">← Previous Lesson</button>
                <button class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Mark as Complete</button>
                <button class="px-4 py-2 border rounded hover:bg-gray-100">Next Lesson →</button>
            </div>
        </div>

        {{-- Right Sidebar --}}
        <div class="col-span-3 space-y-6">
            <div class="bg-white shadow rounded-lg p-4" x-show="currentLesson.resources">
                <h3 class="font-semibold mb-3">Resources</h3>
                <ul class="space-y-2">
                    <template x-for="res in currentLesson.resources" :key="res.id">
                        <li class="flex justify-between items-center p-2 hover:bg-gray-50 rounded">
                            <span x-text="res.title"></span>
                            <span class="text-xs text-gray-500" x-text="res.type"></span>
                        </li>
                    </template>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-blue-100 border border-blue-200 rounded-lg p-4">
                <h3 class="font-semibold text-blue-700 mb-2">🏆 Achievement Goal</h3>
                <p class="text-sm text-gray-700">Complete 3 more lessons to earn the <strong>"Finance Starter"</strong> badge!</p>
                <div class="w-full bg-gray-200 rounded-full h-2 mt-3">
                    <div class="bg-blue-600 h-2 rounded-full" style="width:33%"></div>
                </div>
                <p class="text-xs text-gray-500 mt-2">1 of 3 lessons completed</p>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
</body>
</html>
