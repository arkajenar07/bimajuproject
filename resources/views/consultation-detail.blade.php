@php
  $questions = [
    (object)[
      'id' => 1,
      'title' => 'Bagaimana cara menghitung harga jual yang tepat untuk produk minuman saya?',
      'category' => 'Finance',
      'status' => 'Answered',
      'created_at' => now()->subDays(3),
      'content' => 'Harga jual. Modal untuk satu cup sekitar 8000, tapi saya tidak yakin berapa margin yang wajar. Mohon saran untuk strategi pricing yang tepat.',
      'answer' => 'Halo, terima kasih sudah mencoba fitur layanan konsultasi kami. Saat ini, kami sedang dalam tahap pengembangan untuk menyempurnakan fitur ini agar dapat memberikan pengalaman yang lebih baik, cepat, dan sesuai dengan kebutuhan Anda. Kami sangat menghargai setiap masukan dan saran dari Anda, karena hal tersebut akan membantu kami meningkatkan kualitas layanan. Nantikan pembaruan berikutnya, dan semoga fitur ini bisa menjadi solusi praktis yang bermanfaat bagi Anda.',
    ],
    (object)[
      'id' => 2,
      'title' => 'Strategi marketing digital untuk UMKM F&B pemula',
      'category' => 'Marketing',
      'status' => 'Answered',
      'created_at' => now()->subDay(),
      'content' => 'Apa strategi digital marketing yang efektif untuk UMKM baru?',
      'answer' => 'Halo, terima kasih sudah mencoba fitur layanan konsultasi kami. Saat ini, kami sedang dalam tahap pengembangan untuk menyempurnakan fitur ini agar dapat memberikan pengalaman yang lebih baik, cepat, dan sesuai dengan kebutuhan Anda. Kami sangat menghargai setiap masukan dan saran dari Anda, karena hal tersebut akan membantu kami meningkatkan kualitas layanan. Nantikan pembaruan berikutnya, dan semoga fitur ini bisa menjadi solusi praktis yang bermanfaat bagi Anda.',
    ],
    (object)[
      'id' => 3,
      'title' => 'Apakah perlu izin khusus untuk jualan online?',
      'category' => 'Answered',
      'status' => 'Closed',
      'created_at' => now()->subDays(2),
      'content' => 'Saya ingin mulai jualan makanan online, apakah ada izin khusus?',
      'answer' => 'Halo, terima kasih sudah mencoba fitur layanan konsultasi kami. Saat ini, kami sedang dalam tahap pengembangan untuk menyempurnakan fitur ini agar dapat memberikan pengalaman yang lebih baik, cepat, dan sesuai dengan kebutuhan Anda. Kami sangat menghargai setiap masukan dan saran dari Anda, karena hal tersebut akan membantu kami meningkatkan kualitas layanan. Nantikan pembaruan berikutnya, dan semoga fitur ini bisa menjadi solusi praktis yang bermanfaat bagi Anda.',
    ],
  ];

  $question = collect($questions)->firstWhere('id', $id);
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
         <div class="container mx-auto p-6">

      {{-- Back link --}}
      <a href="/consultation" class="text-[#12B6D3] text-sm flex items-center gap-1 mb-4 hover:underline">
        ← Kembali ke Daftar Pertanyaan
      </a>

      {{-- Header --}}
      <h1 class="text-2xl font-bold mb-2">{{ $question->title }}</h1>
      <div class="flex items-center gap-3 text-sm text-gray-600 mb-6">
        <span class="px-2 py-1 border rounded">{{ $question->category }}</span>
        <span class="px-2 py-1 rounded bg-green-100 text-green-800">{{ $question->status }}</span>
        <span>{{ $question->created_at->format('Y-m-d H:i') }}</span>
      </div>

      {{-- Chat Section --}}
      <div class="space-y-6">

        {{-- User Question --}}
        <div class="flex justify-end">
          <div class="max-w-md bg-blue-500 text-white p-3 rounded-lg shadow">
            <p>{{ $question->content }}</p>
            <p class="text-xs text-white/80 mt-1 text-right">{{ $question->created_at->format('Y-m-d H:i') }}</p>
          </div>
        </div>

        {{-- Status Info --}}
        <div class="flex justify-center">
          <span class="bg-green-50 text-green-700 px-4 py-2 rounded-full text-sm">
            Pertanyaan terkirim ke advisor
          </span>
        </div>

        {{-- Advisor Answer --}}
        <div class="flex items-start gap-2">
          <div class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 font-semibold text-sm">A</div>
          <div class="max-w-md bg-white border p-3 rounded-lg shadow">
            <p class="font-semibold text-gray-700 mb-1">Advisor</p>
            <p class="text-gray-700">{{ $question->answer }}</p>
            <p class="text-xs text-gray-400 mt-2">{{ $question->created_at->format('Y-m-d H:i') }}</p>
          </div>
        </div>

        {{-- Status Akhir --}}
        <div class="flex justify-center">
          <span class="bg-purple-50 text-purple-700 px-4 py-2 rounded-full text-sm">
            Advisor telah membalas pertanyaan Anda
          </span>
        </div>

      </div>
    </div>
        </div>
    </div>
</div>
</body>
</html>
