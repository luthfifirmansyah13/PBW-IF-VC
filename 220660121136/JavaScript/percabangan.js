// Percabangan menggunakan if-else
let nilai = 80;

if (nilai >= 90) {
    console.log("Grade: A");
} else if (nilai >= 80) {
    console.log("Grade: B");
} else if (nilai >= 70) {
    console.log("Grade: C");
} else if (nilai >= 60) {
    console.log("Grade: D");
} else {
    console.log("Grade: F");
}

// Percabangan menggunakan switch-case
let hari = "Senin";

switch (hari) {
    case "Senin":
        console.log("Hari ini adalah Senin");
        break;
    case "Selasa":
        console.log("Hari ini adalah Selasa");
        break;
    case "Rabu":
        console.log("Hari ini adalah Rabu");
        break;
    case "Kamis":
        console.log("Hari ini adalah Kamis");
        break;
    case "Jumat":
        console.log("Hari ini adalah Jumat");
        break;
    default:
        console.log("Hari ini adalah akhir pekan");
        break;
}