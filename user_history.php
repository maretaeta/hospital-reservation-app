<?php
session_start();

include_once("db/koneksi.php");

$counter = 1;
$query = "SELECT * FROM reservasi";
$result = mysqli_query($conn, $query);
$reservasiData = mysqli_fetch_all($result, MYSQLI_ASSOC);

function deleteReservation($reservasi_id)
{
    global $conn;
    $query = "DELETE FROM reservasi WHERE reservasi_id = '$reservasi_id'";
    mysqli_query($conn, $query);
}

if (isset($_POST['delete_reservation'])) {
    $reservasi_id = $_POST['reservation_id'];
    deleteReservation($reservasi_id);
}
?>

<?php include("partials/header.php"); ?>
<?php include("partials/navbar.php"); ?>

<div class="container mx-auto p-8 items-center pt-36">
    <h3 class="text-2xl text-cyan-900 font-semibold mb-9">History Reservasi</h3>

    <?php foreach ($reservasiData as $data) : ?>
        <div class="bg-white shadow rounded-lg p-6 mb-7">
            <div class="flex flex-col space-y-4 md:px-7">
                <div class="flex items-center gap-2 justify-between">
                    <!-- <span class="bg-gray-200 rounded-full p-2 mr-3"><?php echo $data['id']; ?></span> -->
                    <div>
                        <div class="bg-yellow-500 rounded-full w-32 text-white p-1 text-center"><?php echo $data['layanan']; ?></div>
                        <p class="text-lg font-semibold pl-3 pt-2"><?php echo $data['nama']; ?></p>
                        <p class="pl-3 text-sm"><?php echo $data['usia']; ?> tahun</p>
                        <p class="pl-3 text-xs text-gray-500 pb-3"><?php echo $data['alamat']; ?></p>
                        <table>
                            <tr class="text-sm">
                                <td class="pl-3">Tanggal Periksa</td>
                                <td>:</td>
                                <td class="pl-3"><?php echo $data['tanggal']; ?></td>
                            </tr>
                            <tr class="text-sm">
                                <td class="pl-3">Jam Periksa</td>
                                <td>:</td>
                                <td class="pl-3"><?php echo $data['waktu']; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <form method="POST" action="">
                            <input type="hidden" name="reservation_id" value="<?php echo $data['reservasi_id']; ?>">
                            <button type="submit" name="delete_reservation" class="delete-button">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" fill="red" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include("partials/footer.php"); ?>