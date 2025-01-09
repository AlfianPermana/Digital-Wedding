@extends('layout.app')

@section('content')
<div class="container px-15 py-6 flex justify-center items-center h-[220vh]">
    <div class="text-gray-800 text-3xl font-semibold text-center">
        Dashboard Wedding
    </div>
</div>






<audio id="audioPlayer" loop controls>
    <source src="{{ asset('musics/48.mp3') }}" type="audio/mp3">
    Your browser does not support the audio element.
</audio>


<script>document.addEventListener("DOMContentLoaded", () => {
        const audioPlayer = document.getElementById('audioPlayer');  // Menargetkan elemen audio

        // Cek apakah ada status penyimpanan dari sebelumnya
        const isAudioPaused = localStorage.getItem('audioPaused') === 'true';

        if (!isAudioPaused) {
            // Autoplay saat halaman pertama kali dimuat
            audioPlayer.play().catch((error) => {
                console.log('Autoplay audio blocked:', error);
            });
        } else {
            // Jika audio sebelumnya dipause, lanjutkan dari status pause
            audioPlayer.play();
        }

        // Menangani pause dan play audio
        audioPlayer.addEventListener('pause', () => {
            // Simpan status pause ke localStorage
            localStorage.setItem('audioPaused', 'true');
        });

        audioPlayer.addEventListener('play', () => {
            // Simpan status play ke localStorage
            localStorage.setItem('audioPaused', 'false');
        });

        // IntersectionObserver untuk elemen lainnya (untuk contoh sebelumnya)
        const audios = document.querySelectorAll("audio");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");

                        // Jika elemen adalah audio, jalankan autoplay
                        if (entry.target.tagName === "AUDIO") {
                            entry.target.play().catch((error) => {
                                console.log('Autoplay audio blocked:', error);
                            });
                        }
                    } else {
                        entry.target.classList.remove("visible");

                        // Jika elemen adalah audio, hentikan playback
                        if (entry.target.tagName === "AUDIO") {
                            entry.target.pause();
                        }
                    }
                });
            },
            { threshold: 0.5 }
        );

        // Observasi elemen audio
        audios.forEach((audio) => {
            observer.observe(audio);
        });
    });

</script>





<!-- Tombol untuk Play/Pause -->






@endsection