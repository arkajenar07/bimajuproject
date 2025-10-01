@php
$categories = ['Marketing', 'Finance', 'HPP', 'Operations', 'Menu Development', 'Customer Service'];
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
    <div class="flex w-full">
        @include('components.sidebar')
        <div class="flex flex-col">
          {{-- Header --}}
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
         <div>
             <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Tanya Advisor</h1>
            <p class="text-gray-600">Dapatkan jawaban dari mentor bisnis F&B</p>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            {{-- Form Ajukan Pertanyaan --}}
            <div class="bg-white rounded-2xl shadow p-6">
              <h2 class="text-xl font-semibold flex items-center gap-2 mb-2">
                <svg class="w-5 h-5 text-[#12B6D3]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16v16H4z"/></svg>
                Ajukan Pertanyaan
              </h2>
              <p class="text-gray-500 mb-4">Tanyakan apapun tentang bisnis F&B Anda</p>

              {{-- Form Ajukan Pertanyaan --}}
              <form id="questionForm" method="POST" action="#" enctype="multipart/form-data" class="space-y-4">
                {{-- Pertanyaan --}}
                <div>
                  <label class="text-sm font-medium mb-2 block">Pertanyaan Anda</label>
                  <textarea
                    name="question"
                    rows="4"
                    class="w-full border rounded-lg p-2 resize-none focus:ring-2 focus:ring-cyan-500 focus:outline-none"
                    placeholder="Tuliskan pertanyaan Anda secara detail..."
                    required
                  ></textarea>
                </div>

                {{-- Kategori --}}
                <div>
                  <label class="text-sm font-medium mb-2 block">Kategori</label>
                  <select
                    name="category"
                    class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-cyan-500 focus:outline-none"
                    required
                  >
                    <option value="">Pilih kategori pertanyaan</option>
                    @foreach($categories as $cat)
                      <option value="{{ $cat }}">{{ $cat }}</option>
                    @endforeach
                  </select>
                </div>

                {{-- Lampiran --}}
                <div>
                  <label class="text-sm font-medium mb-2 block">Lampiran (Opsional)</label>
                  <input
                    type="file"
                    name="attachment"
                    accept="image/*,audio/*"
                    class="w-full border rounded-lg p-2"
                  >
                </div>

                <button type="submit" class="w-full bg-[#12B6D3] text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                  Kirim Pertanyaan
                </button>
              </form>
            </div>

            {{-- Daftar Pertanyaan --}}
            {{-- Daftar Pertanyaan --}}
            <div class="space-y-4">
              <h2 class="text-xl font-semibold">Pertanyaan Saya</h2>
              <div id="questionsList">
                @forelse($questions as $question)
                  <div class="bg-white rounded-2xl shadow p-4 hover:shadow-md transition cursor-pointer">
                    <div class="flex items-start gap-3">
                      <div class="p-2 bg-blue-100 rounded-full">
                        <svg class="h-4 w-4 text-[#12B6D3]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 10h8M8 14h6M21 12c0 4.97-4.03 9-9 9-1.84 0-3.55-.56-4.97-1.52L3 21l1.52-4.03C3.56 15.55 3 13.84 3 12c0-4.97 4.03 9 9 9s9 4.03 9 9z"/></svg>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-medium text-sm leading-tight mb-2">{{ $question->title }}</h3>
                        <div class="flex flex-wrap items-center gap-2 text-xs text-gray-500 mb-2">
                          <span class="px-2 py-1 border rounded">{{ $question->category }}</span>
                          <span class="px-2 py-1 rounded bg-green-100 text-green-800">{{ $question->status }}</span>
                        </div>
                        <p class="text-xs text-gray-400">{{ $question->created_at->format('d M Y H:i') }}</p>
                      </div>
                      <a href="{{ url('/consultation/detail/'.$question->id) }}"" class="text-[#12B6D3] text-sm hover:underline">View Detail</a>
                    </div>
                  </div>
                @empty
                  <p class="text-gray-500">Belum ada pertanyaan</p>
                @endforelse
              </div>
            </div>

          </div>
         </div>
        </div>
    </div>
<script>
document.getElementById('questionForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const question = this.question.value.trim();
  const category = this.category.value;
  const now = new Date().toLocaleString('id-ID', { dateStyle: 'medium', timeStyle: 'short' });

  if (!question || !category) return;

  // Buat elemen baru
  const div = document.createElement('div');
  div.className = "bg-white rounded-2xl shadow p-4 hover:shadow-md transition cursor-pointer";
  div.innerHTML = `
    <div class="flex items-start gap-3">
      <div class="p-2 bg-blue-100 rounded-full">
        <svg class="h-4 w-4 text-[#12B6D3]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 10h8M8 14h6M21 12c0 4.97-4.03 9-9 9-1.84 0-3.55-.56-4.97-1.52L3 21l1.52-4.03C3.56 15.55 3 13.84 3 12c0-4.97 4.03 9 9 9s9 4.03 9 9z"/></svg>
      </div>
      <div class="flex-1 min-w-0">
        <h3 class="font-medium text-sm leading-tight mb-2">${question}</h3>
        <div class="flex flex-wrap items-center gap-2 text-xs text-gray-500 mb-2">
          <span class="px-2 py-1 border rounded">${category}</span>
          <span class="px-2 py-1 rounded bg-yellow-100 text-yellow-800">Pending</span>
        </div>
        <p class="text-xs text-gray-400">${now}</p>
      </div>
      <a href="#" class="text-[#12B6D3] text-sm hover:underline">View Detail</a>
    </div>
  `;

  // Tambahkan ke daftar
  document.getElementById('questionsList').prepend(div);

  // Reset form
  this.reset();
});
</script>
</body>
</html>
