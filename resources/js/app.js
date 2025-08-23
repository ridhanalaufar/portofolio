import "./bootstrap";
import AOS from "aos";
import "aos/dist/aos.css";

// Hanya impor modul AOS, inisialisasi dilakukan di app.blade.php

// Jika konten dinamis ditambahkan (misalnya dari Alpine.js atau Livewire)
document.addEventListener("alpine:initialized", () => {
    // Refresh AOS setelah Alpine selesai inisialisasi
    setTimeout(() => {
        if (typeof AOS !== "undefined") {
            AOS.refresh();
        }
    }, 100);
});
