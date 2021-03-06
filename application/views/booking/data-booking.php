<section class="sm:my-10 w-4/5 mx-auto py-10">
  <div class="flex items-center">
    <a href="<?= base_url(); ?>" class="w-10 h-10 rounded-full bg-white shadow-2xl flex justify-center items-center hover:shadow transition-shadow">
      <svg width="8.164" height="17.328" viewBox="0 0 10.164 18.328">
        <path id="Path_11" data-name="Path 11" d="M12.75,20.5,5,12.75,12.75,5" transform="translate(-4 -3.586)" fill="none" stroke="#1B1C1E" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
      </svg>
    </a>
    <h1 class="text-2xl font-bold ml-5 text-secondary-100">Daftar Buku yang Anda Booking</h1>
  </div>

  <div class="w-full overflow-x-auto">
    <table class="table-auto w-full my-5">
      <thead>
        <tr class="text-left">
          <th class="p-2">#</th>
          <th class="p-2">Buku</th>
          <th class="p-2">Penulis</th>
          <th class="p-2">Penerbit</th>
          <th class="p-2">Tahun Terbit</th>
          <th class="p-2">Aksi</th>
        </tr>
      </thead>
      <tbody id="loadDataBooking">

      </tbody>
    </table>
  </div>

  <div class="mt-10 flex sm:flex-row flex-col">
    <a href="<?= base_url() . 'home'; ?>" class="px-6 py-2 booking flex justify-center items-center rounded text-white sm:mr-5 sm:mb-0 mb-3">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
        <circle cx="12" cy="12" r="10"></circle>
        <polygon points="10 8 16 12 10 16 10 8"></polygon>
      </svg>
      Lanjutkan Booking
    </a>

    <a href="<?= base_url() . 'booking/bookingSelesai/' . $this->session->userdata('id_user'); ?>" class="px-6 py-2 detail flex justify-center items-center rounded text-white konfirmasiSelesai">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
        <circle cx="12" cy="12" r="10"></circle>
        <rect x="9" y="9" width="6" height="6"></rect>
      </svg>
      Selesaikan Booking
    </a>
  </div>
</section>