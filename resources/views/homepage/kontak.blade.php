<x-homepage menu="kontak">
        <!-- Hero Start -->
        <div class="container-fluid pt-5 bg-primary hero-header">
            <div class="container pt-5">
                <div class="row g-5 pt-5">
                    <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                        <h1 class="display-4 text-white mb-4 animated slideInRight">Kontak Kami</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                                <li class="breadcrumb-item"><a class="text-white" href="{{ url('/')}}">Beranda</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Kontak</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 align-self-end text-center text-lg-end">
                        <img class="img-fluid" src="{{ asset('template/img/hero-img.png')}}" alt="" style="max-height: 300px;">
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

            <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Hubungi Kami</div>
                <h1 class="mb-4">Jika ada pertanyaan, Silahkan melalui formulir dibawah ini</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <form method="post" id="form-pesan">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nama" id="name" placeholder="Nama" maxlength="25" required>
                                        <label for="name">Nama</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="email" placeholder=" Email" maxlength="100" required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="no_wa" class="form-control" id="no_wa" placeholder="No Whatsapp" maxlength="20" required>
                                        <label for="email">No whatsapp</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" name="perihal" class="form-control" id="subject" placeholder="Perihal" maxlength="150" required>
                                        <label for="subject">Perihal</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="deskripsi pertanyaan (opsinal)" name="pesan" id="pesan" style="height: 150px"></textarea>
                                        <label for="message">Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

  <!-- Modal -->
  <div class="modal fade" id="modal-info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        {{-- <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> --}}
        <div class="modal-body text-center">
          <section class="alert alert-info">
                <strong>Terima Kasih</strong> <span id="nama-pengirim"></span>, telah memberikan pesan kepada kami. Kami akan membaca dan memproses pesan tersebut.
          </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">TUTUP</button>
        </div>
      </div>
    </div>
  </div>



    <x-slot name="kodejs">
        <script>
            $('#form-pesan').submit(function (e) {
               e.preventDefault();
               
               let formData = $(this).serialize();
               $("#form-pesan")[0].reset();
               $.post("{{ url('pesan')}}", formData, function (response) {
                    $('#modal-info').modal('show');
                    $('#nama-pengirim').text(response.nama);
               });
            });
        </script>
    </x-slot>
</x-homepage>