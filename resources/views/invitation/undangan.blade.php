@extends('partials.invitationPartial')
@section('main')
    <audio id="myAudio" src="{{ asset('Robin Thicke - The Sweetest Love(Lyrics).mp3') }}" >
    </audio>
    <!-- modal cover undangan -->
        <div class="modal fade" data-bs-backdrop='static' id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Add this line to your code -->
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                        <div class="modal-body cover-undangan">
                            <div class="content">
                                <div class="wedding-of">
                                    <p>The Wedding of</p>
                                </div>
                                <div class="title_wedding">
                                    <p>Vania <span>&</span> Leonardo</p>
                                </div>
                                <p class="invite">Dear Mr./Mrs./Ms.</p>
                                <div class="nama_tamu">
                                    <p>{{ $tamu->nama }}</p>
                                </div>
                                <p>You are cordially invited to our wedding.</p>
                                <a class="button close" href="#" data-bs-dismiss="modal">Open Invitation</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modalShowImage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <img id="imageShow" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00535.jpg?updatedAt=1693664582612" alt="" >
                </div>
            </div>
        </div>

        <div class="elemen_1" id="main_content">
            <div class="main">
                <div class="wedding-of">
                    <p>The Wedding of</p>
                </div>
                <div class="leoVania">
                    <p>Vania<span>&</span>Leonardo</p>
                </div>
                <!-- <div class="container">
                    <div id="countdown">
                        <ul>
                            <li><span id="days"></span>days</li>
                            <li><span id="hours"></span>Hours</li>
                            <li><span id="minutes"></span>Minutes</li>
                            <li><span id="seconds"></span>Seconds</li>
                        </ul>
                    </div>
                </div> -->
                <div class="wedding-of">
                    <p>28.10.2023</p>
                </div>
            </div>
        </div>
        <div class="quote_1 ">
            <div class="quote_text reveal fade-bottom">
                <p>I would rather share one lifetime with you than face all the ages of this world alone.</p>
            </div>
            <div class="quote_author reveal fade-bottom">
                <p>J. R. R. Tolkien</p>
            </div>
            <div class="the_beloved reveal fade-bottom">
                <p>The Beloved</p>
            </div>
            <div class="groom_bride reveal fade-bottom">
                <p>Groom & Bride</p>
            </div>
        </div>
        <!-- <div class="wedding">

        </div> -->

        <div class="container_groom">
            <div class="groom_text">
                <h1 class="text1">The Groom</h1>
            </div>
            <div class="groom_photo">
                <div class="text_groom reveal fade-bottom">
                    <h2 class="text3">Leonardo Pohan</h2>
                    <p class="text4">Son of Mr. Porten Pohan & Mrs. Pasti Sitepu</p>
                </div>
            </div>

        </div>

        <div class="container_groom">
            <div class="bride_photo">
                <div class="text_groom reveal fade-bottom" >
                    <h2 class="text3">Vania Putri</h2>
                    <p class="text4">Daughter of The Late Mr. Jubel Simatupang & Mrs. Aniroh Sianturi</p>
                </div>
            </div>
            <div class="groom_text">
                <h1 class="text1_bride">The Bride</h1>
            </div>
        </div>

        <div class="quote_2 ">
            <div class="quote_text2 reveal fade-bottom">
                <p>Faith make all things possible. Love make all thing easy.</p>
            </div>
            <div class="quote_author2 reveal fade-bottom">
                <p>Dwight Moody</p>
            </div>
        </div>

        <div class="wedding_day">
            <div class="card_wedding shadow-lg">
                <div class="card_header ">
                    <div class="wed_text reveal fade-bottom">
                        <p>The</p>
                    </div>
                    <div class="wed_text reveal fade-bottom">
                        <p>Wedding Day</p>
                    </div>
                </div>
                <div class="card_body">
                    <div class="pemberkatan">
                        <div class="text_pemberkatan">
                            <h2>Holy Matrimony</h2>
                        </div>
                        <div class="card_content">
                            <div class="line"></div>
                            <div class="tanggal">
                                <p><i class="fa-regular fa-calendar"></i>Saturday, 28 October 2023</p>
                            </div>
                            <div class="jam">
                                <p><i class="fa-regular fa-clock"></i>08.00 WIB</p>
                            </div>
                             <div class="place">
                                <p><i class="fa-solid fa-location-dot"></i><span class="fw-bold">GKPA Bekasi Raya</span>  <br>
                                </span></p>
                                <p class="alamat">
                                    Jl. P. Sumatera Raya, Jl. Perumnas 3 Bekasi No. 4 RT.001/RW.015, Aren Jaya, Kec. Bekasi Timur, Kota Bks, Jawa Barat 17111
                                </p>

                            </div>
                        </div>
                        <div class="button_group">
                            <a href="https://www.google.com/maps/place/GKPA+Setia+Mekar/@-6.2427934,107.0349843,17z/data=!3m1!4b1!4m6!3m5!1s0x2e698ef2399fe505:0x17e6939e46e73cce!8m2!3d-6.2427934!4d107.0349843!16s%2Fg%2F11f01pfx0f?entry=ttu" target="_blank"><i class="fa-solid fa-map-location-dot"></i>Open Map</a>
                            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=The Holy Matrimony of Vania and Leonardo&details=You are invited!!&dates=20231028T080000/20231028T100000&location=GKPA Bekasi Raya" target="_blank"><i class="fa-regular fa-calendar-days"></i>Add to Calender</a>
                        </div>
                    </div>
                    <div class="resepsi">
                        <div class="text_resepsi">
                            <h2>Wedding Reception</h2>
                        </div>
                        <div class="line"></div>
                        <div class="card_content">
                            <div class="tanggal">
                                <p><i class="fa-regular fa-calendar"></i>Saturday, 28 October 2023</p>
                            </div>
                            <div class="jam">
                                <p><i class="fa-regular fa-clock"></i>11.00 WIB s/d selesai</p>
                            </div>
                             <div class="place">
                                <p><i class="fa-solid fa-location-dot"></i><span class="fw-bold">Gedung Pertemuan Graha <span class="over_word"> Bintang</span></span>  <br>
                                 </p>
                                 <p class="alamat">
                                    Jl. WR. Supratman No.63, RT.004/RW.007, Cimuning, Kec. Mustika Jaya, Kota Bks, Jawa Barat 17155
                                </p>

                            </div>
                        </div>
                        <div class="button_group">
                            <a href="https://www.google.com/maps/place/Gedung+Pertemuan+Graha+Bintang/@-6.3154319,107.023986,17z/data=!3m1!4b1!4m6!3m5!1s0x2e6991945f15b651:0xc8c58f720b988d48!8m2!3d-6.3154372!4d107.0265609!16s%2Fg%2F11g02s_zqm?entry=ttu" target="_blank"><i class="fa-solid fa-map-location-dot"></i>Open Map</a>
                            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=The Wedding of Vania and Leonardo&details=You are invited!!&dates=20231028T110000/20231028T170000&location=Gedung Pertemuan Graha Bintang"target="_blank"><i class="fa-regular fa-calendar-days"></i>Add to Calender</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wed-gallery">
            <div class="gallery-text reveal fade-bottom">
                <span>A Glimpse of</span>
                <span>Our Moments</span>
                    <div id="player"></div>
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/pyv4JNSWxss?si=zla19oc5LIta8Wsu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                </div>
                <div class="gallery-text2">
                    <span>Our Gallery</span>
                </div>
                <!-- Slider main container -->
                <div class="swiper mySwiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00541.jpg?updatedAt=1693664589574" data-fancybox>
                                <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00541.jpg?updatedAt=1693664589574" alt="" >
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00535.jpg?updatedAt=1693664582612" data-fancybox>
                                <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00535.jpg?updatedAt=1693664582612" alt="" >
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00539.jpg?updatedAt=1693664581577" data-fancybox>
                                <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00539.jpg?updatedAt=1693664581577" alt="" >
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00510.jpg?updatedAt=1693664578481" data-fancybox>
                                <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00510.jpg?updatedAt=1693664578481" alt="" >
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00510.jpg?updatedAt=1693664578481" data-fancybox>
                                <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00488.jpg?updatedAt=1693664569681" alt="" >
                            </a>

                        </div>
                        <div class="swiper-slide">
                            <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00510.jpg?updatedAt=1693664578481" data-fancybox>
                                <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00510.jpg?updatedAt=1693664578481" alt="" >
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-content">
                                <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC09994.JPG?updatedAt=1693664592685" data-fancybox>
                                    <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC09994.JPG?updatedAt=1693664592685" alt="" >
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-content">
                                <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00132.JPG?updatedAt=1693664553395" data-fancybox>
                                    <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00132.JPG?updatedAt=1693664553395" alt="" >
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00121.JPG?updatedAt=1693664550021" data-fancybox>
                                <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00121.JPG?updatedAt=1693664550021" alt="" >
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-content">
                                <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00004.JPG?updatedAt=1693664548189" data-fancybox>
                                    <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00004.JPG?updatedAt=1693664548189" alt="" >
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00393.jpg?updatedAt=1693664564465" data-fancybox>
                                <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00393.jpg?updatedAt=1693664564465" alt="" >
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00334.jpg?updatedAt=1693664556370" data-fancybox>
                                <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00334.jpg?updatedAt=1693664556370" alt="" >
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00282.jpg?updatedAt=1693664555066" data-fancybox>
                                <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00282.jpg?updatedAt=1693664555066" alt="" >
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-content">
                                <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00274.jpg?updatedAt=1693664552229" data-fancybox>
                                    <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00274.jpg?updatedAt=1693664552229" alt="" >
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00039.webp?updatedAt=1693664528745" data-fancybox>
                                <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00039.webp?updatedAt=1693664528745" alt="" >
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00118-2.webp?updatedAt=1693664527846" data-fancybox>
                                <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00118-2.webp?updatedAt=1693664527846" alt="" >
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://ik.imagekit.io/u1ds9zj1i/image/DSC00169-2.webp?updatedAt=1693664524890" data-fancybox>
                                <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/image/DSC00169-2.webp?updatedAt=1693664524890" alt="" >
                            </a>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
                <div class="arrow">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="swiper-container">
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper swiper2">
                            <div class="swiper-slide">
                                <a href="https://ik.imagekit.io/u1ds9zj1i/new%20prewed/DSC09473.JPG?updatedAt=1696333801791" data-fancybox>
                                    <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/new%20prewed/DSC09473.JPG?updatedAt=1696333801791" alt="" >
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="https://ik.imagekit.io/u1ds9zj1i/new%20prewed/DSC09435.JPG?updatedAt=1696333801348" data-fancybox>
                                    <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/new%20prewed/DSC09435.JPG?updatedAt=1696333801348" alt="" >
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="https://ik.imagekit.io/u1ds9zj1i/new%20prewed/DSC09521.JPG?updatedAt=1696333800637" data-fancybox>
                                    <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/new%20prewed/DSC09521.JPG?updatedAt=1696333800637" alt="" >
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="https://ik.imagekit.io/u1ds9zj1i/new%20prewed/DSC09602.JPG?updatedAt=1696333800588" data-fancybox>
                                    <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/new%20prewed/DSC09602.JPG?updatedAt=1696333800588" alt="" >
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="https://ik.imagekit.io/u1ds9zj1i/new%20prewed/DSC09545.JPG?updatedAt=1696333799682" data-fancybox>
                                    <img id="myImg" src="https://ik.imagekit.io/u1ds9zj1i/new%20prewed/DSC09545.JPG?updatedAt=1696333799682" alt="" >
                                </a>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
        </div>


        <div class="rsvp_makewish">
            <div class="card card_rsvp">
                <div class="card-body shadow">
                    <div class="header">
                        <h1>RSVP</h1>
                        <P>Please Confirm Your Attendance</P>
                    </div>
                    <form class="form" action="{{ route('undangan.add-rsvp') }}" method="POST">
                        @csrf
                        <div class="name">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="nama" class="nama" placeholder="Name">
                        </div>
                        <label for="kehadiran">Presence</label>
                        <div class="form-check">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <input class="form-check-input" type="radio" value="Attend" name="kehadiran" id="attend" required>
                                Attend
                            </label>
                        </div>
                        <div class="form-check ">
                            <label class="form-check-label" for="flexRadioDefault2">
                                <input class="form-check-input" type="radio" value="Not Attend" name="kehadiran" id="notAttend" required>
                                Not Attend
                            </label>
                        </div>
                        <div class="kehadiran" id="formAttendance">
                            <label class="form-label">Total Attendance</label>
                            <input type="number" class="form-control" placeholder="total attendance">
                        </div>
                        <button type="submit" class="button">Submit</button>
                    </form>
                </div>
            </div>
            <div class="card card_wish ">
                <div class="card-body shadow">
                    <div class="header">
                        <h1>Make a Wish</h1>
                        <P>It is an honor and pleasure for us, if you can attend and give us your blessing</P>
                    </div>
                    <form class="form" action="{{ route('undangan.add-wishes') }}" method="POST">
                        @csrf
                        <div class="name">
                            <p>Name</p>
                            <input type="text" class="form-control" name="nama" placeholder="Name">
                        </div>
                        <label for="nama">Your Wish</label>
                        <textarea class="form-control mb-4" name="wishes" placeholder="Input Your Wish" style="height: 100px"></textarea>
                        <button type="submit" class="button">Submit</button>

                        <div class="wish_section .mySwiper">
                            @foreach ($wishes as $wish)
                                <div class="wish_comment">
                                    <div class="side_name">
                                        <div class="side_logo">
                                            <h2>LV</h2>
                                            <p class="invitations">INVITATIONS</p>
                                        </div>
                                        <div class="line_wish"></div>
                                    </div>
                                    <div>
                                        <div class="wish_name">
                                            <h2>{{ $wish->nama }}</h2>
                                        </div>
                                        <div class="wish_content">
                                            <p>"{{ $wish->wishes }}"</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="gift">
            <div class="text_gift">
                <h2>Share Love</h2>
                <p>Your prayers & blessings at our wedding is enough as a gift, but if you want to give more, we are happy to <br> receive it and it will complement our happiness even more</p>
            </div>

            <div class="card_gift">
                <div class="card_gift_body shadow-lg">
                    <img src="https://ik.imagekit.io/u1ds9zj1i/image/logobni.png?updatedAt=1696169042042" alt="" >
                    <h2>Bank BNI</h2>
                    <p>Vania Putri Simatupang</p>
                    <p id="noRek">0240678254</p>
                    <div class="button_gift">
                        <button href="" class="button_copy" onclick="copyContent()"><i class="fa-regular fa-copy"></i>Copy</button>
                        <a href="//api.whatsapp.com/send?phone=62813803027154&text=Halo, Hanya ingin memberitahu kamu bahwa aku sudah mengirimkan hadiah untukmu. Aku harap kamu menyukainya! Semoga hadiah tersebut bisa memberikan kebahagiaan untuk kamu sekeluarga." target="_blank" class="button_confirm"><i class="fa-brands fa-whatsapp"></i>Confirm</a>
                    </div>
                </div>
            </div>
            <div class="card_gift2">
                <div class="card_gift_body shadow-lg">
                    <img src="https://ik.imagekit.io/u1ds9zj1i/image/bri_logo-removebg-preview.png?updatedAt=1696168952558" alt="" >
                    <h2>Bank BRI</h2>
                    <p>Leonardo Pohan</p>
                    <p id="noRek">093501035920531</p>
                    <div class="button_gift">
                        <button href="" class="button_copy" onclick="copyContent()"><i class="fa-regular fa-copy"></i>Copy</button>
                        <a href="//api.whatsapp.com/send?phone=62813803027154&text=Halo, Hanya ingin memberitahu kamu bahwa aku sudah mengirimkan hadiah untukmu. Aku harap kamu menyukainya! Semoga hadiah tersebut bisa memberikan kebahagiaan untuk kamu sekeluarga." target="_blank" class="button_confirm"><i class="fa-brands fa-whatsapp"></i>Confirm</a>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="content_footer">
                <p>Thank You</p>
                <h2>Vania & Leonardo</h2>
            </div>
        </footer>
@endsection
