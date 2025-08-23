@extends('app')

@section('content')
<section class="pt-28 pb-16">
    <div class="max-w-3xl mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-blue-700 mb-6">
            Contact Me
        </h1>
        <p class="text-gray-600 text-lg">
            Punya pertanyaan, peluang kerja sama, atau hanya ingin menyapa?  
            Silakan kirim pesan melalui form di bawah ini 👇
        </p>
    </div>
</section>

<section class="max-w-3xl mx-auto px-6 pb-20">
    <div class="bg-white/30 backdrop-blur-lg rounded-2xl shadow-xl p-8">
        {{-- Form Contact --}}
        <form action="#" method="POST" class="space-y-6">
            @csrf

            {{-- Nama --}}
            <div>
                <label for="name" class="block text-sm font-medium text-blue-700 mb-2">Nama</label>
                <input type="text" id="name" name="name" required
                       class="w-full px-4 py-3 rounded-xl border border-blue-200 focus:ring-2 focus:ring-blue-500 focus:outline-none bg-white/60 shadow-sm">
            </div>

            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm font-medium text-blue-700 mb-2">Email</label>
                <input type="email" id="email" name="email" required
                       class="w-full px-4 py-3 rounded-xl border border-blue-200 focus:ring-2 focus:ring-blue-500 focus:outline-none bg-white/60 shadow-sm">
            </div>

            {{-- Pesan --}}
            <div>
                <label for="message" class="block text-sm font-medium text-blue-700 mb-2">Pesan</label>
                <textarea id="message" name="message" rows="5" required
                          class="w-full px-4 py-3 rounded-xl border border-blue-200 focus:ring-2 focus:ring-blue-500 focus:outline-none bg-white/60 shadow-sm"></textarea>
            </div>

            {{-- Tombol Submit --}}
            <div class="text-center">
                <button type="submit"
                        class="px-8 py-3 bg-blue-600 text-white font-medium rounded-xl shadow-lg hover:bg-blue-700 transition">
                    Kirim Pesan
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
