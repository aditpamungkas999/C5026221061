<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('indexStyle/asset/Logo_Apps-removebg-preview.png') }}" rel="shortcut icon">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PKM-KC ITS</title>
    <link rel="stylesheet" href="{{ asset('indexStyle/style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <nav>
        <div class="layar-dalam">
            <div class="logo">
                <a href=""><img src="{{ asset('indexStyle/asset/Logo_Apps-removebg-preview.png') }}"
                        class="putih" /></a>
                <a href=""><img src="{{ asset('indexStyle/asset/Logo_Apps-removebg-preview.png') }}"
                        class="hitam" /></a>
            </div>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="#support">Support</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="layar-penuh">
        <header id="home">
            <div class="overlay"></div>
            <video autoplay muted loop>
                <source src="{{ asset('indexStyle/asset/lv_0_20231022192509.mp4') }}" type="video/mp4" />
            </video>
            <div class="intro">
                <h3>PKM-KC ITS</h3>
                <p style="margin-top: 30px;">
                    TERCEFOG "Water Resource From Fog" Merupakan Prototipe Penyerap Kabut Air Sebagai Alternatif Solusi
                    Kekurangan Air di Dataran Tinggi
                </p>
                <p>
                    <a href="" class="tombol">MORE INFO</a>
                </p>
            </div>
        </header>
        <main>
            <section id="aboutus">
                <div class="layar-dalam">
                    <h3>About Us</h3>
                    <p class="ringkasan">
                        Tercefog (Water Resource From Fog) merupakan (PKM-KC) dari Institut Teknologi Sepuluh Nopember.
                        Prototipe ini memiliki beberapa keunggulan, termasuk sistem otomasi untuk mengontrol alat,
                        menampung air, dan menyirami tanaman saat kelembapan tanah menurun. Selain itu, Tercefog
                        dilengkapi dengan teknologi komunikasi LongRange yang memudahkan operasionalnya di dataran
                        tinggi. Prototipenya juga dilengkapi dengan sistem monitor dan pemantauan real-time melalui
                        aplikasi, memungkinkan penggunaan yang efektif dan efisien. Harapannya, Tercefog dapat menjadi
                        solusi bagi permasalahan kekurangan air di dataran tinggi.
                    </p>
                </div>
    </div>
    </section>
    <section class="abuabu" id="support">
        <div class="layar-dalam support">
            <div>
                <img src="{{ asset('indexStyle/asset/matahari.png') }}" />
                <h6>Dapat Alternatif Kekurangan Air Ketika Musim Kemarau</h6>
                <p>
                    Prototipe Tercefog dapat dijadikan alternatif di dataran tinggi yang mengalami bencana kekurangan
                    air. Namun, mempunyai kelebihan kondisi kabut yang melimpah
                </p>
            </div>
            <div>
                <img src="{{ asset('indexStyle/asset/tas.png') }}" />
                <h6>Portable Prototipe</h6>
                <p>
                    Prototipe Tercefog Didesain portable agar mudah diaplikasikan dan dibawa kemanapun.
                </p>
            </div>
            <div>
                <img src="{{ asset('indexStyle/asset/kompas.png') }}" />
                <h6>Berstandar Internasional</h6>
                <p>
                    Prototipe Tercefog sudah teruji dan tersertifikasi oleh lembaga uji prototipe yang berstandar
                    internasional
                </p>
            </div>
        </div>
    </section>
    <section id="gallery">
        <div><img src="{{ asset('indexStyle/asset/IMG_20230720_123248.jpg') }}" /></div>
        <div><img src="{{ asset('indexStyle/asset/Screenshot 2023-10-15 103922.png') }}" /></div>
        <div><img src="{{ asset('indexStyle/asset/Screenshot 2023-10-22 203943.png') }}" /></div>
        <div><img src="{{ asset('indexStyle/asset/IMG-20230902-WA0011.jpg') }}" /></div>
        <div><img src="{{ asset('indexStyle/asset/IMG-20230908-WA0028.jpg') }}" /></div>
        <div><img src="{{ asset('indexStyle/asset/IMG-20230908-WA0029.jpg') }}" /></div>
        <div><img src="{{ asset('indexStyle/asset/IMG_20231006_092702.jpg') }}" /></div>
        <div><img src="{{ asset('indexStyle/asset/IMG12.jpeg') }}" /></div>
    </section>
    <section class="quote">
        <div class="layar-dalam">
            <p>"Adhitakarya Mahatvavirya Nagarabhakti”, Yang Bermakna Dengan Gagah Perkasa Menuntut Ilmu Untuk
                Diaplikasikan, Demi Kejayaan Bangsa</p>
        </div>
    </section>
    <section id="team">
        <div class="layar-dalam">
            <h3>Our Team</h3>
            <p class="ringkasan">
                Berikut adalah Tim PKM-KC TERCEFOG Institut Teknologi Sepuluh Nopember
            </p>
            <div class="tim">
                <div style="width: 850px; margin: 0 auto;">
                    <img src="{{ asset('indexStyle/asset/Tambahkan judul.png') }}" style="height: auto; width: 100%;"
                        alt="Judul Gambar">
                </div>
            </div>

        </div>
        <br>
        <br>
        <div class="container">
            <ul class="list-unstyled">
                <h3>Kumpulan Materi Dan Tugas Mata Kuliah Pemrograman Website</h3>
                <li class="d-md-inline d-block p-3"><a class="btn btn-success btn-md" href="http://127.0.0.1:8000/Materi 1"
                        role="button">Materi 1</a></li>
                <li class="d-md-inline d-block p-3"><a class="btn btn-success btn-md" href="http://127.0.0.1:8000/Materi 2"
                        role="button">Materi 2</a></li>
                <li class="d-md-inline d-block p-3"><a class="btn btn-success btn-md" href="http://127.0.0.1:8000/Materi 3"
                        role="button">Materi 3</a></li>
                <li class="d-md-inline d-block p-3"><a class="btn btn-success btn-md" href="http://127.0.0.1:8000/Materi 4"
                        role="button">Materi 4</a></li>
                <li class="d-md-inline d-block p-3"><a class="btn btn-success btn-md" href="http://127.0.0.1:8000/Materi 5"
                        role="button">Materi 5</a></li>
                <li class="d-md-inline d-block p-3"><a class="btn btn-success btn-md" href="http://127.0.0.1:8000/Materi 6"
                        role="button">Materi 6</a></li>
                <li class="d-md-inline d-block p-3"><a class="btn btn-success btn-md" href="http://127.0.0.1:8000/Materi 7"
                        role="button">Materi 7</a></li> <br> <br>
                <li class="d-md-inline d-block p-3"><a class="btn btn-primary btn-md" href="http://127.0.0.1:8000/Tugas 1"
                        role="button">Tugas 1</a></li> 
                <li class="d-md-inline d-block p-3"><a class="btn btn-primary btn-md" href="http://127.0.0.1:8000/Tugas 2"
                        role="button">Tugas 2</a></li>
                <li class="d-md-inline d-block p-3"><a class="btn btn-primary btn-md" href="http://127.0.0.1:8000/Tugas 3"
                        role="button">Tugas 3</a></li>

            </ul>
        </div>

        </main>
        <footer id="contact Us">
            <div class="layar-dalam">
                <div>
                    <h2>Info</h2>
                    TERCEFOG "Water Resource From Fog" Merupakan Prototipe Penyerap Kabut Air Sebagai Alternatif Solusi
                    Kekurangan Air di Dataran Tinggi
                </div>
                <div>
                    <h2>Contact</h2>
                    Jl. Aditya Aji Pamungkas No.9, Jakarta. 10110
                    (021)3452841
                    TERCEFOG@gmail.go.id
                </div>
                <div>
                    <h2>Tentang Kami</h2>
                    Spesifikasi<br>
                    Sistem Automation <br>
                    Sistem Long Range <br>
                    Alat dan Bahan<br>
                    Tata Cara Perakitan<br>
                </div>

                <div>
                    <h2>Contact Us </h2>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required />
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" id="subject" name="subject" required />
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan:</label>
                        <textarea id="pesan" name="pesan" required></textarea>
                    </div>
                    <button type="submit">Kirim Pesan</button>
                    </form>
    </section>

    </div>
    </div>
    <div class="layar-dalam">
        <div class="copyright" style="text-align: center;">&copy; 2023 PKM-KC TERCEFOG Institut Teknologi Sepuluh
            Nopember</div>
    </div>
    </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('indexStyle/javascript.js') }}"></script>
</body>

</html>
