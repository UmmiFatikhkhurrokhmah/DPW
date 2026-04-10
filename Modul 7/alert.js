// File: alert.js
// Program Alert - JavaScript terpisah untuk menampilkan alert box

function tampilkanAlert() {
    alert(" Halo! Selamat datang di Praktikum JavaScript \n\nIni adalah program Alert Box.\nJavaScript berhasil dijalankan!");
}

function tampilkanAlertDenganPesan(pesan) {
    alert(pesan);
}

// Event listener ketika halaman selesai dimuat
document.addEventListener("DOMContentLoaded", function() {
    console.log("alert.js berhasil dimuat - Soft Pink Theme");
    
    // Cek apakah tombol dengan id tertentu ada di halaman
    const tombolAlert = document.getElementById("tombolAlert");
    if (tombolAlert) {
        tombolAlert.addEventListener("click", function() {
            tampilkanAlert();
        });
    }
    
    const tombolAlertCustom = document.getElementById("tombolAlertCustom");
    if (tombolAlertCustom) {
        tombolAlertCustom.addEventListener("click", function() {
            tampilkanAlertDenganPesan(" Ini adalah pesan kustom dari JavaScript!\n\nTerima kasih telah belajar bersama kami.");
        });
    }
});

// Ekspor fungsi (untuk penggunaan modular)
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { tampilkanAlert, tampilkanAlertDenganPesan };
}