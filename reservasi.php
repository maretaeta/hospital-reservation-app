<?php
include_once("db/koneksi.php");
?>

<?php include("partials/header.php"); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<div class="items-center min-h-screen pb-6">
    <div class="lg:grid grid-cols-2">
        <div class="hidden lg:block">
            <img src="./img/book.jpg" class="h-full w-full" />
        </div>
        <div class="mx-auto px-10 grid justify-items-center pt-36">
            <div class="">
                <h1 class="md:text-3xl text-2xl font-bold text-cyan-900 text-center">
                    Reservation
                </h1>
                <p class="pb-5 lg:pb-7 text-center text-slate-400">
                    Cukup daftar online dari rumah untuk periksa hari ini, besok atau lusa.
                </p>
                <form class="mx-auto">
                    <div class="mb-3 lg:mb-7">
                        <label>
                            <p>Nama Lengkap</p>
                        </label>
                        <input value="" type="text" placeholder="Enter Full Name" name="email" class="mt-1 ml-2 w-full xl:w-[500px] rounded-md pl-2 h-10 text-lg bg-transparent border border-cyan-800" />
                    </div>
                    <div class="mb-3 lg:mb-7">
                        <label>
                            <p>Alamat</p>
                        </label>
                        <input value="" type="text" placeholder="Enter Address" name="email" class="mt-1 ml-2 w-full xl:w-[500px] rounded-md pl-2 h-10 text-lg bg-transparent border border-cyan-800" />
                    </div>
                    <div class="mb-3 lg:mb-7">
                        <label>
                            <p>Usia</p>
                        </label>
                        <input value="" type="text" placeholder="Enter " name="email" class="mt-1 ml-2 w-full xl:w-[500px] rounded-md pl-2 h-10 text-lg bg-transparent border border-cyan-800" />
                    </div>
                    <div class="mb-3 lg:mb-7">
                        <label>
                            <p>Pilih Layanan</p>
                        </label>
                        <select name="usia" class="mt-1 ml-2 w-full xl:w-[500px] rounded-md pl-2 h-10 text-lg bg-transparent border border-cyan-800">
                            <option value="">Pilih Poli</option>
                            <option value="gigi">Poli Gigi</option>
                            <option value="mata">Poli Mata</option>
                            <option value="anak">Poli Anak</option>
                            <option value="kandungan">Poli Kandungan & Kebidanan</option>
                            <option value="umum">Dokter Umum</option>
                            <option value="fisioterapi">Fisioterapi</option>
                        </select>
                    </div>

                    <div class="mb-3 lg:mb-7">
                        <label>
                            <p>Tanggal</p>
                        </label>
                        <input type="text" id="datepicker" placeholder="Select Date" class="mt-1 ml-2 w-full xl:w-[500px] rounded-md pl-2 h-10  text-lg bg-transparent border border-cyan-800">
                    </div>

                    <div class="mb-3 lg:mb-7">
                        <label>
                            <p>Waktu</p>
                        </label>
                        <select name="usia" class="mt-1 ml-2 w-full xl:w-[500px] rounded-md pl-2 h-10 text-lg bg-transparent border border-cyan-800">
                            <option value="">Pilih Jam</option>
                            <option value="">08.00 - 11.00 am</option>
                            <option value="">13.00 - 18.00 pm</option>
                            <option value="">19.00 - 22.00 pm</option>
                        </select>
                    </div>

                    <button type="submit" class="bg-cyan-800 text-white w-full rounded-full mx-auto py-2 ml-2 mt-3">
                        Reservasi
                    </button>

            </div>
        </div>
    </div>
</div>

<script>
    flatpickr("#datepicker", {
        dateFormat: "d/m/Y",
    });
</script>