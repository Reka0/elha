@extends('user.layout')

@section('title', 'Home')

@section('content')
    <!-- Carousel for School Images -->
    <div id="schoolCarousel" class="carousel slide mt-4" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('storage/photos/A1.jpg') }}" class="d-block w-100" alt="School Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/photos/2.jpg') }}" class="d-block w-100" alt="School Image 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/photos/A3.jpeg') }}" class="d-block w-100" alt="School Image 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#schoolCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#schoolCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Latest Uploads Section -->
    <div class="container mt-4">
        <h2>Latest Uploads</h2>
        <div class="row">
            @foreach ($homes as $home)
                <div class="col-md-4">
                    <div class="post card mb-4" style="height: 350px; overflow: hidden;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $home->title }}</h5>
                        </div>
                        <div class="card-img-wrapper" style="height: 200px; overflow: hidden;">
                            <img src="{{ Storage::url('photos/' . $home->photo) }}" alt="{{ $home->title }}"
                                class="card-img-top" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ Str::limit($home->description, 100, '...') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bagian Tentang Kami -->
    <div class="container mt-5">
        <h2 class="text-center font-weight-bold mb-4">About Us</h2>

        <div class="row text-center mb-4">
            <!-- Kolom Visi dan Misi -->
            <div class="col-md-6">
                <div class="p-4 shadow-sm rounded" style="background-color: #f7f9fc;">
                    <i class="fas fa-bullseye fa-3x mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Visi dan Misi Kami</h4>
                    <p class="text-justify">SMK ELHAKU berkomitmen untuk membentuk siswa yang tidak hanya berpengetahuan,
                        tetapi juga memiliki karakter yang baik serta keterampilan relevan untuk menghadapi masa depan.</p>

                    <ul class="list-unstyled mt-3 text-left">
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-brain text-secondary mr-3"></i>
                            <span><strong>Smart</strong>: Menciptakan siswa yang pintar dan soleh.</span>
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-lightbulb text-secondary mr-3"></i>
                            <span><strong>Enterpreneurship</strong>: Menciptakan siswa yang memiliki jiwa
                                berwirausaha.</span>
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-user-tie text-secondary mr-3"></i>
                            <span><strong>Leadership</strong>: Menciptakan siswa yang memiliki jiwa kepemimpinan.</span>
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-cogs text-secondary mr-3"></i>
                            <span><strong>Inovasi dan Kreatif</strong>: Menciptakan siswa yang dapat membuat karya berupa
                                aplikasi web dan game.</span>
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-trophy text-secondary mr-3"></i>
                            <span><strong>Prestasi</strong>: Menciptakan siswa yang berbakat dan berprestasi.</span>
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-quran text-secondary mr-3"></i>
                            <span><strong>Akhlaqul Karimah</strong>: Menciptakan siswa yang berakhlaqul karimah sesuai
                                dengan Al Quran dan Hadist.</span>
                        </li>
                    </ul>

                    <div class="text-center mt-3">
                        {{-- <img src="{{ asset('storage/images/visi_misi.jpg') }}" class="img-fluid rounded"
                            style="max-height: 200px; object-fit: cover;" alt="Gambar Visi Misi"> --}}
                    </div>
                </div>
            </div>

            <!-- Kolom Fasilitas -->
            <div class="col-md-6">
                <div class="p-4 shadow-sm rounded" style="background-color: #f7f9fc;">
                    <i class="fas fa-building fa-3x mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Fasilitas Kami</h4>
                    <p class="text-justify">Kami menyediakan berbagai fasilitas untuk mendukung perkembangan akademik dan
                        pribadi siswa. Kampus kami dilengkapi dengan fasilitas modern dan nyaman untuk pengalaman belajar
                        yang optimal.</p>

                    <ul class="list-unstyled mt-3 text-left">
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-chalkboard-teacher text-secondary mr-3"></i>
                            <span>Ruang Kelas</span>
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-desktop text-secondary mr-3"></i>
                            <span>Lab Komputer</span>
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-mosque text-secondary mr-3"></i>
                            <span>Masjid</span>
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-bed text-secondary mr-3"></i>
                            <span>Asrama</span>
                        </li>
                    </ul>

                    <div class="text-center mt-3">
                        {{-- <img src="{{ asset('storage/images/fasilitas.jpg') }}" class="img-fluid rounded"
                            style="max-height: 200px; object-fit: cover;" alt="Gambar Fasilitas"> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Information Section -->
    <div class="container mt-5 mb-5">
        <h2 class="text-center font-weight-bold mb-4">Contact Information</h2>
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="p-4 bg-light rounded shadow-sm">
                    <h5><i class="fas fa-map-marker-alt mr-2"></i>Our Location</h5>
                    <p>Jl. Raya Pendidikan No. 123, Jakarta</p>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="p-4 bg-light rounded shadow-sm">
                    <h5><i class="fas fa-envelope mr-2"></i>Email Us</h5>
                    <p>info@smkelhaku.sch.id</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 text-center">
                <div class="p-4 bg-light rounded shadow-sm">
                    <h5><i class="fab fa-facebook-f mr-2"></i>Facebook</h5>
                    <p><a href="#">SMK ELHAKU</a></p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="p-4 bg-light rounded shadow-sm">
                    <h5><i class="fab fa-instagram mr-2"></i>Instagram</h5>
                    <p><a href="#">@smkelhaku</a></p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="p-4 bg-light rounded shadow-sm">
                    <h5><i class="fab fa-youtube mr-2"></i>YouTube</h5>
                    <p><a href="#">@smkelhaku</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
