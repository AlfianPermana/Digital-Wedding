<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')


    <style>
        .atas-bawah {
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 3s ease, transform 1s ease;
        }

        .bawah-atas {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 3s ease, transform 1s ease;
        }

        .kiri-kanan {
            opacity: 0;
            transform: translateX(-20px);
            transition: opacity 3s ease, transform 1s ease;
        }

        .kanan-kiri {
            opacity: 0;
            transform: translateX(20px);
            transition: opacity 3s ease, transform 1s ease;
        }

        .bawah-atas.visible,
        .kiri-kanan.visible,
        .kanan-kiri.visible,
        .atas-bawah.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 2s forwards;
        }

        .fade-in2 {
            opacity: 0;
            animation: fadeIn 7s forwards;
        }

        .fade-in3 {
            opacity: 0;
            animation: fadeIn 10s forwards;
        }

        .daun {
            animation: shake 10s infinite;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        @keyframes shake {

            0%,
            100% {
                transform: rotate(15deg);
                animation-timing-function: ease-in-out;
            }


            50% {
                transform: rotate(50deg);
            }


        }
    </style>
</head>

<body class="bg-white ">


    <div class="h-screen flex flex-col justify-between items-end bg-cover bg-center fade-in"
        style="background-image: url('{{ asset('gambar/hero-awal.jpg') }}');">
        <!-- Overlay untuk kegelapan -->
        <div class="absolute h-screen w-full bg-gray-900 opacity-50"></div>

        <div class="w-full mt-5 z-10 fade-in2">
            <div class="flex flex-col justify-center items-center text-center px-4">
                <!-- Judul -->
                <div class="font-dancing text-4xl sm:text-5xl lg:text-[5rem] text-white mb-2">
                    Suep & Romlah
                </div>

                <!-- Subjudul dengan border bawah -->
                <div class="font-garamond text-2xl sm:text-3xl text-white mb-5 relative">
                    <div
                        class="absolute bottom-[-5px] left-1/2 transform -translate-x-1/2 w-3/4 border-b-[3px] border-white">
                    </div>
                    We are getting married
                </div>
            </div>
        </div>

        <div class="z-10 w-full mb-5 fade-in2">
            <div class="flex flex-col justify-center items-center text-center px-4">
                <div class="grid grid-cols gap-1 mb-3 bg-crime bg-opacity-25 p-3 rounded-md">
                    <div class="text-xs sm:text-lg font-garamond text-white z-10 font-semibold">Dear Mr/Mrs/Ms</div>
                    <div class="text-sm sm:text-xl font-garamond text-white z-10 font-light">
                        {{ $tamu->name ?? 'Nama tidak ditemukan' }}
                    </div>


                    <div class="text-xs sm:text-lg font-garamond text-coklatemas z-10 font-semibold">You are cordially
                        invited to our wedding</div>
                </div>

                <button id="toggleButton"
                    class="flex text-xs sm:text-base items-center justify-center bg-transparent border-[2px] border-white hover:bg-black hover:bg-opacity-20 text-white font-bold py-2 px-4 rounded-full w-1/2 sm:w-[30%] lg:w-[20%]">
                    Open Invitation
                    <!-- SVG Ikon Amplop -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 200 150"
                        class="ml-2 envelope">
                        <rect x="20" y="30" width="160" height="90" fill="#f0f0f0" stroke="#333" stroke-width="2" />
                        <polygon points="20,30 100,80 180,30" fill="#f0f0f0" stroke="#333" stroke-width="2" />
                        <line x1="20" y1="30" x2="180" y2="30" stroke="#333" stroke-width="2" />
                        <text x="100" y="70" font-family="Arial" font-size="20" text-anchor="middle"
                            fill="#333">Surat</text>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="newSections" class="hidden opacity-0 transition-opacity duration-1000 ease-in-out overflow-x-hidden">
        <!-- Section 1 -->
        <div class="h-screen flex flex-col justify-between items-center bg-center bg-cover"
            style="background-image: url('{{ asset('gambar/undangan1.jpg') }}');">
            <div class="absolute h-screen w-full bg-black bg-opacity-[28%]"></div>
            <div class="text-lg mt-[5rem] font-garamond text-white font-medium fade-in3">"A Love Story That Never Ends"
            </div>
            <div class="text-3xl font-bold mb-5 w-[75%] z-10 fade-in3">
                <div class="flex flex-col items-center mb-5">
                    <div class="text-xl text-white font-dancing">Suep</div>
                    <div class="text-xl text-white font-dancing">&</div>
                    <div class="text-xl text-white font-dancing">Romlah</div>
                </div>
                <div class="grid grid-cols-1 border-t-white border-t-2">
                    <div class="border-b-2 text-sm grid grid-cols-2">
                        <div class="flex flex-col justify-between text-center p-1">
                            <div class="text-[10px] text-white text-bold font-garamond tracking-widest">Save The Date
                            </div>
                            <div class="text-[12px] text-white font-garamond tracking-[2px] font-light">12 12 2025</div>
                        </div>
                        <div class="relative grid grid-rows-2 text-center py-1 px-2">
                            <div class="text-[10px] text-white text-semibold font-garamond tracking-widest mb-[-5px]">
                                Location
                            </div>
                            <div class="text-[10px] text-white font-garamond font-light leading-4 tracking-[1px]">
                                Jalan Kemunging Raya, di Masjid Al Barokah
                            </div>
                            <div
                                class="absolute left-0 top-0 h-3/4 border-l-2 translate-y-[15%] border-l-white opacity-35">
                            </div>
                        </div>
                    </div>
                    <div class="text-center text-sm py-1 border-b-white border-b-[2px]">
                        <div class="flex justify-center gap-4">
                            <div class="text-white font-bold text-2xl">
                                <div id="days" class="text-lg">0</div>
                                <div class="text-xs font-medium">Days</div>
                            </div>
                            <div class="text-white font-bold text-2xl">
                                <div id="hours" class="text-lg">0</div>
                                <div class="text-xs font-medium">Hours</div>
                            </div>
                            <div class="text-white font-bold text-2xl">
                                <div id="minutes" class="text-lg">0</div>
                                <div class="text-xs font-medium">Minutes</div>
                            </div>
                            <div class="text-white font-bold text-2xl">
                                <div id="seconds" class="text-lg">0</div>
                                <div class="text-xs font-medium">Seconds</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section2" class="h-fit grid bg-crime pb-5 pt-7 px-5 relative">
            <div class="absolute h-[5rem] w-[7rem] bg-cover bg-center -right-[4rem] top-[0.8rem] daun"
                style="background-image: url('{{ asset('gambar/daun.png') }}');">
            </div>

            <!-- Section Content with fade effect -->
            <div class="bawah-atas">
                <div class="text-3xl font-garamond font-medium text-biru mb-5">Bridge & Groom</div>
                <div class="text-sm font-garamond text-biru font-light tracking-wide">
                    ٱلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ ٱللَّهِ وَبَرَكَاتُ
                </div>
                <div class="text-sm font-garamond text-biru font-light tracking-wide">
                    With the blessing and mercy from Allah SWT
                </div>
                <div class="text-sm font-garamond text-biru font-light tracking-wide">
                    We cordially invite you to the wedding of
                </div>
            </div>
        </div>

        <div id="section3" class="h-screen relative bg-cover bg-center flex  items-end"
            style="background-image: url('{{ asset('gambar/pria.jpg') }}');">

            <!-- Overlay -->
            <div class="absolute h-screen w-full bg-black bg-opacity-[28%]"></div>

            <!-- Rotated Text -->
            <div class="absolute text-white text-3xl font-poppins font-light top-[7.5rem] right-[-3.5rem]"
                id="fadeInSection">
                <div class="rotate-[90deg] text-[36px] text-crime">The Groom</div>
            </div>

            <div class="h-[25%] bg-crime bg-opacity-[50%] w-full flex justify-between py-10 px-5 z-10">

                <div class="kiri-kanan">
                    <div class="text-biru text-2xl font-garamond font-semibold">Suep Setiawan</div>
                    <div class="text-biru text-lg font-garamond font-light leading-[1.2]">Putra kedua dari</div>
                    <div class="text-biru text-lg font-garamond font-light leading-[1.2]">Bapak Setiawan Ade</div>
                    <div class="text-biru text-lg font-garamond font-light leading-[1.2]">&</div>
                    <div class="text-biru text-lg font-garamond font-light leading-[1.2]">Ibu Reni Kartika</div>
                </div>
                <div class="flex justify-end items-end text-biru z-10 kanan-kiri">
                    <a href="https://instagram.com/suepsetiawan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37a4 4 0 1 0-4.63 4.63 4 4 0 0 0 4.63-4.63z"></path>
                            <line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line>
                        </svg>
                    </a>
                </div>

            </div>

        </div>

        <div id="section4" class="h-screen relative bg-cover bg-center flex  items-end"
            style="background-image: url('{{ asset('gambar/wanita.webp') }}');">

            <!-- Overlay -->
            <div class="absolute h-screen w-full bg-black bg-opacity-[28%]"></div>

            <!-- Rotated Text -->
            <div class="absolute text-crime text-3xl font-poppins font-light top-[7.5rem] left-[-3.5rem]"
                id="fadeInSection">
                <div class="rotate-[-90deg] text-[36px] ">The Bridge</div>
            </div>

            <div class="h-[25%] bg-crime bg-opacity-[50%] w-full flex justify-between py-10 px-5 z-10">

                <div class="flex justify-start items-end text-biru z-10 kiri-kanan">
                    <a href="https://instagram.com/suepsetiawan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37a4 4 0 1 0-4.63 4.63 4 4 0 0 0 4.63-4.63z"></path>
                            <line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line>
                        </svg>
                    </a>
                </div>
                <div class="kanan-kiri text-end">
                    <div class="text-biru text-2xl font-garamond font-semibold">Romlah Romadhon</div>
                    <div class="text-biru text-lg font-garamond font-light leading-[1.2]">Putra kedua dari</div>
                    <div class="text-biru text-lg font-garamond font-light leading-[1.2]">Bapak Romlah Puta Buana</div>
                    <div class="text-biru text-lg font-garamond font-light leading-[1.2]">&</div>
                    <div class="text-biru text-lg font-garamond font-light leading-[1.2]">Ibu Susi Astuti</div>
                </div>

            </div>

        </div>

        <div id="section5" class="h-fit bg-cover bg-center bg-crime ">
            <div class="grid gap-4 p-6 z-10 text-white">
                <div class="mt-4 flex flex-col gap-3 text-biru font-garamond font-medium">
                    <div class="text-xl mb-5">
                        <div class="text-base atas-bawah">Q.S. Ar Rum: 21</div>
                        <div class="mb-5 atas-bawah">
                            مِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا
                            لِّتَسْكُنُوْٓا اِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَّوَدَّةً وَرَحْمَةً ۗاِنَّ فِيْ ذٰلِكَ
                            لَاٰيٰتٍ لِّقَوْمٍ يَّتَفَكَّرُوْنَ
                        </div>
                    </div>
                    <div class="text-base bawah-atas">Artinya</div>
                    <div class="italic mb-5 bawah-atas">
                        “Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari
                        jenismu sendiri,
                        agar kamu cenderung dan merasa tentram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan
                        sayang.
                        Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum
                        yang berpikir.”
                    </div>
                </div>

                <!-- Video Section -->
                <div class="text-center text-2xl font-dancing font-semibold mt-3 text-biru atas-bawah">Our Gallery</div>
                <div class="mt-3 mb-5 video-container flex justify-center bawah-atas">
                    <video class="w-full md:w-3/4 max-w-full h-fit" controls autoplay muted>
                        <source src="{{ asset('storage/videos/video.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="flex items-center justify-center">
                    <div class="flex-grow bg-biru h-[2px] kiri-kanan"></div>
                    <div class="w-3/4 text-center text-xs font-garamond font-semibold text-biru bawah-atas">
                        Hidup adalah kumpulan kenangan, dan hari ini kita memulai babak baru untuk menciptakan memori
                        indah bersama.
                        Mari hadir dan berbagi kebahagiaan dalam momen tak terlupakan ini.
                    </div>
                    <div class="flex-grow bg-biru h-[2px] kanan-kiri"></div>
                </div>


            </div>
        </div>

        <div id="section6" class="h-fit bg-crime px-6 pb-10 flex justify-center items-center w-full kiri-kanan">
            <div class="owl-carousel">
                <img src="{{asset('gambar/undangan1.jpg')}}"
                    class="w-[400px] h-[300px] sm:w-[500px] sm:h-[400px] object-cover rounded"
                    style="  margin-right: 30px;" alt="">
                <img src="{{asset('gambar/undangan1.jpg')}}"
                    class="w-[400px] h-[300px] sm:w-[500px] sm:h-[400px] object-cover rounded"
                    style="  margin-right: 30px;" alt="">
                <img src="{{asset('gambar/undangan1.jpg')}}"
                    class="w-[400px] h-[300px] sm:w-[500px] sm:h-[400px] object-cover rounded"
                    style="  margin-right: 30px;" alt="">
                <img src="{{asset('gambar/undangan1.jpg')}}"
                    class="w-[400px] h-[300px] sm:w-[500px] sm:h-[400px] object-cover rounded"
                    style="  margin-right: 30px;" alt="">
                <img src="{{asset('gambar/undangan1.jpg')}}"
                    class="w-[400px] h-[300px] sm:w-[500px] sm:h-[400px] object-cover rounded"
                    style="  margin-right: 30px;" alt="">
            </div>
        </div>

        <div id="section7" class="h-fit bg-crime bg-cover bg-fixed bg-center pt-5 pb-8"
            style="background-image: url({{ asset('gambar/undangan1.jpg') }});">
            <div class="px-5 py-[3rem]">
                <div class=" text-center text-3xl font-garamond font-medium text-crime atas-bawah">Venue</div>
                <div
                    class="text-crime w-full flex justify-center text-center text-xs font-garamond font-light  mb-4 atas-bawah">
                    IF YOU WILL
                    ATTEND THE VANUE, PLEASE MAKE A RESERVATION ON THE FORM BELOW.
                </div>
            </div>

            <div class="w-full h-fit px-5 py-3 bg-gradient-to-bottom-left text-center kiri-kanan">
                <div class="text-center text-2xl font-dancing font-semibold text-crime ">Wedding Ceremony</div>
                <div class="flex gap-2 justify-center font-garamond text-crime">
                    <h1 class="text-7xl font-medium">28</h1>
                    <div class="text-left my-auto text-lg">
                        <h3>Saturday</h3>
                        <h3>December 2024</h3>
                    </div>
                </div>
                <h3 class="text-lg tracking-[3px] font-garamond text-crime">11:00 - 16:00 WIB</h3>
            </div>

            <div class="my-10 mx-3 h-fit bg-biru rounded p-3 flex flex-col mb-10 bawah-atas">
                <div class="w-full h-[20rem] mb-5">
                    <iframe class="w-full h-full roounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.40601984!2d113.21551250000005!3d-7.7466863999999935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7ad95f38f686f%3A0xb8398970027fff9!2sPaseban%20Sena%20(Ballroom%2C%20Hotel%20%26%20Restaurant)!5e0!3m2!1sid!2sid!4v1735807376125!5m2!1sid!2sid"
                        class="" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="mt-3 text-center font-garamond text-crime">
                    <div class="text-2xl font-medium">Aula Ganesa Satria</div>
                    <div class="text-sm font-light tracking-wider">Jl. H. Japat I No.25, Abadijaya, Kec. Sukmajaya, Kota
                        Depok, Jawa
                        Barat 16417</div>
                </div>
                <div></div>
            </div>

            <a href="https://maps.app.goo.gl/59o1DZ2S87K99ZCD7">
                <div
                    class="bg-biru hover:bg-gray-900 px-5 py-2 w-fit mx-auto rounded-full translate-y-[3.3rem] text-base  text-crime">
                    SEE LOCATION
                </div>
            </a>


        </div>

        <div id="section8" class="h-fit bg-crime pt-11 pb-5">
            <div class="h-fit p-3 w-[70%] flex justify-end bg-biru kiri-kanan">
                <div class="text-xl text-crime font-garamond">RESERVATION</div>
            </div>
            <form action="{{ route('rsv.tambah') }}" method="POST" class="flex flex-col gap-3 mt-5 p-4 atas-bawah">
                @csrf
                <input type="text" name="name" id="" placeholder="Name" class="p-2 px-4 rounded-xl">
                <input type="email" name="email" id="" placeholder="Email" class="p-2 px-4 rounded-xl">
                <input type="number" name="phone" id="" placeholder="Phone Number" class="p-2 px-4 rounded-xl">
                <select name="status" id="" class="p-2 px-4 rounded-xl text-sm mb-5">
                    <option value="default" disabled selected>Pilih Konfirmasi Kehadiran</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                    <option value="Belum Tahu">Belum Tahu</option>
                </select>
                <button type="submit" class="bg-biru p-2 px-4 rounded-xl text-crime text-base">Send</button>
            </form>
        </div>

        <div id="section9" class="h-fit  bg-cover bg-center bg-fixed px-3 pt-10 pb-10"
            style="background-image: url({{ asset('gambar/undangan1.jpg') }});">
            <div class="text-3xl text-center text-crime font-dancing mb-5 bawah-atas">Wedding Wishes</div>
            <form action="{{route('wish.tambah')}}" method="POST">
                @csrf
                <input type="text" placeholder="Name" name="name" class="block w-full p-2 px-4 rounded-xl mb-5">
                <textarea id="wish" name="wish" cols="30" rows="6" placeholder="Write your wishes"
                    class="block w-full p-2 px-4 rounded-xl mb-10"></textarea>
                <button type="submit" class="bg-biru text-crime p-2 px-4 rounded-xl w-full">Send</button>
            </form>
        </div>
        <div id="section10" class="h-fit bg-gradient-to-b from-crime to-biru py-8 px-3">
            <div class="h-[80vh] w-full  grid grid-cols-1 gap-4 overflow-y-scroll p-5 mb-10">
                @foreach ($wish as $value)
                    <div class="bg-white rounded-xl p-3">
                        <h1 class="text-lg font-semibold">{{ $value->name}}</h1>
                        <p class="w-3/4">{{ $value->wish}}
                            <br>6 hours ago at 07:37
                        </p>
                    </div>
                @endforeach


            </div>
            <div class="px-3 py-5 atas-bawah">
                <div class="text-2xl text-center text-crime font-dancing underline">Wedding Gifts</div>
                <div class="text-lg text-center text-crime font-garamond mt-3 text-light tracking-wider leading-5">Your
                    blessing
                    and coming to
                    our wedding are enough for us. However, if you want to give a gift we provide a Digital Envelope to
                    make it easier for you. </div>
                <div class="font-xs text-center text-crime mt-5">
                    <h3 class="flex justify-center gap-2">
                        BCA 1641361297
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-copy" viewBox="0 0 16 16" onclick="copyToClipboard('BCA 1641361297')">
                            <path fill-rule="evenodd"
                                d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                        </svg>
                    </h3>
                    <h3>
                        an. Suep Setiawan
                    </h3>
                    <br>
                    <h3 class="flex justify-center gap-2">
                        BRI 0422 0503 2387 199
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-copy" viewBox="0 0 16 16" onclick="copyToClipboard('BRI 0422 0503 2387 199')">
                            <path fill-rule="evenodd"
                                d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                        </svg>
                    </h3>
                    <h3>
                        an. Romlah Romadhon
                    </h3>

                </div>
            </div>



        </div>
        <div id="section11" class="h-fit bg-cover bg-center"
            style="background-image: url({{ asset('gambar/tamat.jpg')}}">
            <div class="absolute h-full w-fit bg-black bg-opacity-25"></div>
            <div class="px-3 py-5 ">
                <div class="text-center text-crime font-garamond text-2xl mb-8 atas-bawah">Thank You</div>
                <div class="text-center text-crime font-garamond text-sm leading-[15px] tracking-wide mb-3 bawah-atas">
                    We cherish
                    our
                    loved
                    ones, and this
                    wedding
                    wouldn’t be complete without you by our side. Your presence and support mean the world to us. Thank
                    you
                    from the bottom of our hearts for celebrating this special day with us. Here’s to creating more
                    wonderful memories together!</div>
                <div class="text-center text-crime font-garamond text-sm leading-[15px] tracking-wide mb-7 bawah-atas">
                    Wassalamu'alaikum Warahmatullahi Wabarakatuh</div>
                <div class="flex flex-col items-center mb-5 bawah-atas">
                    <div class="text-xl text-white font-dancing">Suep</div>
                    <div class="text-xl text-white font-dancing">&</div>
                    <div class="text-xl text-white font-dancing">Romlah</div>
                </div>
            </div>

        </div>
    </div>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            stagePadding: 50,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>
    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function () {
                alert('Copied to clipboard!');
                // Optionally, you can set a success message here
            }).catch(function (err) {
                console.error('Could not copy text: ', err);
            });
        }

        document.addEventListener("DOMContentLoaded", () => {
            const sections1 = document.querySelectorAll(".bawah-atas");
            const sections2 = document.querySelectorAll(".kiri-kanan");
            const sections3 = document.querySelectorAll(".kanan-kiri");
            const sections4 = document.querySelectorAll(".atas-bawah");
            const videos = document.querySelectorAll("video"); // Menargetkan elemen video

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("visible");

                            // Jika elemen adalah video, jalankan autoplay
                            if (entry.target.tagName === "VIDEO") {
                                entry.target.play();
                            }
                        } else {
                            entry.target.classList.remove("visible");

                            // Jika elemen adalah video, hentikan playback
                            if (entry.target.tagName === "VIDEO") {
                                entry.target.pause();
                            }
                        }
                    });
                },
                { threshold: 0.5 } // Aktif saat 50% elemen terlihat
            );

            // Observasi elemen video
            videos.forEach((video) => {
                observer.observe(video);
            });

            // Observasi elemen lain
            sections1.forEach((section1) => {
                observer.observe(section1);
            });
            sections2.forEach((section2) => {
                observer.observe(section2);
            });
            sections3.forEach((section3) => {
                observer.observe(section3);
            });
            sections4.forEach((section4) => {
                observer.observe(section4);
            })
        });

        const button = document.getElementById('toggleButton');
        const newSections = document.getElementById('newSections');
        const initialSection = document.querySelector('.h-screen');

        button.addEventListener('click', () => {
            // Hide the button and the initial section
            document.querySelector('.h-screen').classList.add('hidden');
            button.classList.add('hidden');

            // Show the new sections with fade transition
            newSections.classList.remove('hidden');

            // Trigger fade-in by adding opacity class
            setTimeout(() => {
                newSections.classList.add('opacity-100');
            }, 50); // small delay for the transition to take effect
        });

        const countdownDate = new Date("April 29, 2025 00:00:00").getTime();

        // Update the countdown every 1 second
        const countdownFunction = setInterval(() => {
            // Get the current date and time
            const now = new Date().getTime();

            // Find the time remaining
            const timeLeft = countdownDate - now;

            // Time calculations for days, hours, minutes, and seconds
            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            // Display the result in the respective elements
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            // If the countdown is finished, display a message
            if (timeLeft < 0) {
                clearInterval(countdownFunction); document.getElementById("days").innerHTML = "0";
                document.getElementById("hours").innerHTML = "0"; document.getElementById("minutes").innerHTML = "0";
                document.getElementById("seconds").innerHTML = "0"; document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000); </script>

    </script>


</body>

</html>