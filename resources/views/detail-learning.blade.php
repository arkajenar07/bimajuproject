@php
$moduleData = [
    "id" => 1,
    "title" => "Manajemen Keuangan Dasar",
    "totalLessons" => 12,
    "completedLessons" => 4,
    "lessons" => [
        [
            "id" => 1,
            "title" => "Pengantar Keuangan F&B",
            "duration" => "8 menit",
            "estimatedTime" => "5-10 menit",
            "content" => [
                "type" => "video",
                "thumbnail" => "/api/placeholder/640/360",
                "description" => "Dapatkan gambaran umum tentang manajemen keuangan di industri Food & Beverage. Pelajari kenapa keuangan sangat penting untuk keberlangsungan bisnis."
            ],
            "keyTakeaways" => [
                "Memahami pentingnya keuangan dalam F&B",
                "Mengenali istilah-istilah keuangan dasar",
                "Mengetahui bagaimana keuangan memengaruhi keputusan bisnis"
            ],
            "resources" => [
                ["id"=>1,"title"=>"Dasar-dasar Keuangan (PDF)","type"=>"PDF"],
                ["id"=>2,"title"=>"Catatan Video Intro","type"=>"Doc"]
            ],
            "status" => "Selesai"
        ],
        [
            "id" => 2,
            "title" => "Memahami Arus Kas",
            "duration" => "12 menit",
            "estimatedTime" => "10-15 menit",
            "content" => [
                "type" => "text",
                "thumbnail" => "/api/placeholder/640/360",
                "description" => "Pelajari bagaimana uang masuk dan keluar dari bisnis F&B Anda, serta kenapa arus kas lebih penting dari sekadar angka keuntungan."
            ],
            "keyTakeaways" => [
                "Membedakan arus kas masuk dan keluar",
                "Memahami arus kas operasional vs investasi",
                "Cara menjaga arus kas tetap positif"
            ],
            "resources" => [
                ["id"=>1,"title"=>"Template Arus Kas","type"=>"Excel"]
            ],
            "status" => "Selesai"
        ],
        [
            "id" => 3,
            "title" => "Prinsip Dasar Akuntansi",
            "duration" => "15 menit",
            "estimatedTime" => "15-20 menit",
            "content" => [
                "type" => "video",
                "thumbnail" => "/api/placeholder/640/360",
                "description" => "Pelajari prinsip-prinsip akuntansi dasar yang harus diketahui setiap pengusaha F&B untuk mencatat laporan keuangan dengan benar."
            ],
            "keyTakeaways" => [
                "Memahami aset, kewajiban, dan ekuitas",
                "Belajar tentang debit dan kredit",
                "Mengenali pentingnya neraca keuangan"
            ],
            "resources" => [
                ["id"=>1,"title"=>"Ringkasan Dasar Akuntansi","type"=>"PDF"]
            ],
            "status" => "Selesai",
            "updated" => true
        ],
        [
            "id" => 4,
            "title" => "Pendapatan vs Laba",
            "duration" => "10 menit",
            "estimatedTime" => "10-15 menit",
            "content" => [
                "type" => "text",
                "thumbnail" => "/api/placeholder/640/360",
                "description" => "Pahami perbedaan antara pendapatan dan laba, serta kenapa keduanya penting untuk menilai kesuksesan bisnis."
            ],
            "keyTakeaways" => [
                "Definisi pendapatan dan laba",
                "Perbedaan laba kotor dan laba bersih",
                "Kesalahan umum dalam margin keuntungan"
            ],
            "resources" => [
                ["id"=>1,"title"=>"Panduan Pendapatan vs Laba","type"=>"Doc"]
            ],
            "status" => "Selesai"
        ],
        [
            "id" => 5,
            "title" => "Membuat Anggaran Pertama Anda",
            "duration" => "18 menit",
            "estimatedTime" => "15-20 menit",
            "content" => [
                "type" => "video",
                "thumbnail" => "/api/placeholder/640/360",
                "description" => "Pelajari cara membuat anggaran yang efektif untuk bisnis F&B Anda. Mulai dari proyeksi pendapatan, kategori biaya, hingga target keuangan yang realistis."
            ],
            "keyTakeaways" => [
                "Memahami perbedaan biaya tetap dan variabel",
                "Membuat proyeksi pendapatan bulanan",
                "Mengelompokkan pengeluaran sesuai kategori",
                "Menetapkan margin laba dan target pertumbuhan",
                "Menyusun rencana darurat untuk pengeluaran tak terduga"
            ],
            "resources" => [
                ["id"=>1,"title"=>"Template Anggaran F&B","type"=>"Excel"],
                ["id"=>2,"title"=>"Worksheet Perhitungan Biaya","type"=>"PDF"],
                ["id"=>3,"title"=>"Sheet Pemantauan Bulanan","type"=>"Google Sheets"],
            ],
            "status" => "Sedang Berjalan"
        ],
        [
            "id" => 6,
            "title" => "Mencatat Pengeluaran Harian",
            "duration" => "7 menit",
            "estimatedTime" => "5-10 menit",
            "content" => [
                "type" => "text",
                "thumbnail" => "/api/placeholder/640/360",
                "description" => "Pelajari cara sederhana untuk mencatat dan mengelola pengeluaran harian agar arus kas bisnis tetap sehat."
            ],
            "keyTakeaways" => [
                "Mencatat pengeluaran harian dengan konsisten",
                "Mengategorikan pengeluaran dengan benar",
                "Mengidentifikasi pola pengeluaran berlebihan"
            ],
            "resources" => [
                ["id"=>1,"title"=>"Tracker Pengeluaran Harian","type"=>"Excel"]
            ],
            "status" => "Belum Dimulai"
        ]
    ]
];

$currentLesson = $moduleData["lessons"][4]; // default lesson = id 5
$progress = ($moduleData["completedLessons"] / $moduleData["totalLessons"]) * 100;
@endphp
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
            <div
                class="min-h-screen bg-gray-50"
                x-data="{
                    lessons: @js($moduleData['lessons']),
                    currentLesson: @js($currentLesson),
                    setLesson(lesson) { this.currentLesson = lesson },
                    markComplete() {
                        this.currentLesson.status = 'Selesai'
                    },
                    nextLesson() {
                        const idx = this.lessons.findIndex(l => l.id === this.currentLesson.id)
                        if (idx < this.lessons.length - 1) {
                            this.currentLesson = this.lessons[idx + 1]
                        }
                    },
                    prevLesson() {
                        const idx = this.lessons.findIndex(l => l.id === this.currentLesson.id)
                        if (idx > 0) {
                            this.currentLesson = this.lessons[idx - 1]
                        }
                    }
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
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/L1_SX54Xc3A?si=uDX_c7sOT5RtNr4y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="w-full mb-6"></iframe>
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
                            <button
                                class="px-4 py-2 border rounded hover:bg-gray-100 disabled:opacity-50"
                                @click="prevLesson"
                                :disabled="currentLesson.id === 1"
                            >
                                ← Previous Lesson
                            </button>

                            <button
                                class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                                @click="markComplete"
                            >
                                Mark as Complete
                            </button>

                            <button
                                class="px-4 py-2 border rounded hover:bg-gray-100 disabled:opacity-50"
                                @click="nextLesson"
                                :disabled="currentLesson.id === lessons.length"
                            >
                                Next Lesson →
                            </button>
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
                        <!-- Notes -->
                        <div class="bg-white p-4 rounded-lg shadow">
                            <div class="flex justify-between items-center mb-3">
                                <h3 class="font-semibold text-gray-800 flex items-center gap-2">
                                    <span class="material-icons text-gray-500 text-lg">note</span>
                                    Notes
                                </h3>
                                <div class="flex gap-2 text-gray-500">
                                    <button><i class="material-icons text-sm">content_copy</i></button>
                                    <button><i class="material-icons text-sm">file_download</i></button>
                                    <button><i class="material-icons text-sm">print</i></button>
                                </div>
                            </div>
                            <textarea class="w-full border rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm"
                                      rows="4"></textarea>
                        </div>

                        <!-- Action Checklist -->
                        <div class="bg-white p-4 rounded-lg shadow">
                            <div class="flex justify-between items-center mb-3">
                                <h3 class="font-semibold text-gray-800">Action Checklist</h3>
                                <button class="text-blue-500 text-xl leading-none">+</button>
                            </div>
                            <ul class="space-y-2 text-sm text-gray-700">
                                <li class="flex items-start gap-2">
                                    <input type="checkbox" checked class="mt-1 text-blue-500">
                                    <span>List all your fixed monthly expenses <br><span class="text-gray-500 text-xs">(rent, utilities, salaries)</span></span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <input type="checkbox" checked class="mt-1 text-blue-500">
                                    <span>Calculate average variable costs per month <br><span class="text-gray-500 text-xs">(ingredients, supplies)</span></span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <input type="checkbox" checked class="mt-1 text-blue-500">
                                    <span>Review last 3 months of sales to forecast revenue</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <input type="checkbox" checked class="mt-1 text-blue-500">
                                    <span>Set aside 10-15% for emergency expenses</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <input type="checkbox" class="mt-1 text-blue-500">
                                    <span>Create a simple tracking system (spreadsheet or app)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
