// Intropeksi.js
// Studi Kasus: Melakukan introspeksi diri sederhana

// Fungsi untuk bertanya dan menyimpan jawaban
function askQuestion(question) {
    const answer = prompt(question);
    return answer;
  }
  
  // Fungsi untuk memberikan saran berdasarkan jawaban
  function giveAdvice(name, goals, strengths, weaknesses) {
    console.log(`\nHalo, ${name}!`);
    console.log("Terima kasih telah berbagi tentang diri Anda. Berikut adalah saran untuk Anda:");
  
    // Saran berdasarkan tujuan hidup
    if (goals.toLowerCase().includes("sukses") || goals.toLowerCase().includes("bahagia")) {
      console.log("- Tujuan Anda untuk sukses atau bahagia adalah langkah yang bagus! Ingatlah bahwa kesuksesan adalah perjalanan yang panjang, jadi tetaplah konsisten dan nikmati prosesnya.");
    } else if (goals.toLowerCase().includes("menjadi lebih baik")) {
      console.log("- Anda ingin menjadi lebih baik? Fokus pada peningkatan diri setiap hari. Kecil namun konsisten akan membawa hasil besar.");
    } else {
      console.log("- Memiliki tujuan adalah hal yang penting. Jangan ragu untuk memecah tujuan besar menjadi langkah-langkah kecil yang dapat Anda capai setiap hari.");
    }
  
    // Saran berdasarkan kekuatan
    if (strengths.toLowerCase().includes("kerja keras") || strengths.toLowerCase().includes("disiplin")) {
      console.log("- Anda memiliki kekuatan dalam kerja keras atau disiplin. Manfaatkan ini untuk membangun kebiasaan positif yang mendukung tujuan Anda.");
    } else if (strengths.toLowerCase().includes("kreatif")) {
      console.log("- Kreativitas adalah kekuatan yang luar biasa. Terus kembangkan ide-ide kreatif Anda untuk menghadapi tantangan dengan cara yang unik.");
    } else {
      console.log("- Mengetahui kekuatan Anda adalah awal yang bagus. Ingatlah untuk menggunakan kekuatan ini dalam kehidupan sehari-hari.");
    }
  
    // Saran berdasarkan kelemahan
    if (weaknesses.toLowerCase().includes("malas") || weaknesses.toLowerCase().includes("menunda-nunda")) {
      console.log("- Jika Anda merasa malas atau sering menunda, cobalah membuat daftar tugas harian atau mengatur waktu untuk setiap kegiatan. Tindakan kecil bisa mengatasi kebiasaan menunda.");
    } else if (weaknesses.toLowerCase().includes("tidak percaya diri")) {
      console.log("- Tidak percaya diri? Cobalah berlatih self-affirmation dan terus berlatih dalam bidang yang ingin Anda kuasai. Percaya diri tumbuh seiring waktu.");
    } else {
      console.log("- Mengetahui kelemahan Anda adalah langkah awal untuk perbaikan. Lakukan perubahan kecil yang berkesinambungan.");
    }
  }
  
  // Fungsi utama untuk menjalankan introspeksi diri
  function startIntrospection() {
    console.log("Selamat datang di program introspeksi diri sederhana!");
  
    // Mengumpulkan data dari pengguna
    const name = askQuestion("Siapa nama Anda?");
    const goals = askQuestion("Apa tujuan hidup Anda?");
    const strengths = askQuestion("Apa kekuatan atau kelebihan Anda?");
    const weaknesses = askQuestion("Apa kelemahan atau hal yang ingin Anda perbaiki?");
  
    // Memberikan saran berdasarkan jawaban
    giveAdvice(name, goals, strengths, weaknesses);
  }
  
  // Menjalankan program introspeksi diri
  startIntrospection();
  