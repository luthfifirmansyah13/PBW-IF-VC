/*
  ini adalah untuk check kondisi status usia berdasarkan umur
  dari seseorang.
    
  Outputnya hanya ada 2 yatu *kecil* atau *besar* saja
*/
if (umur < 12) {
    console.log('Kamu masih kecil');
  } else {
    console.log('Kamu sudah besar');
  }
  
  // check kondisi cuaca
  if (cuaca === 'hujan') {
    console.log('Dirumah sajalah');
  }
  
  // contoh comment yang lebih advance, untuk dokumentasi internal
  
  /**
  * fungsi untuk menghitung luas persegi
  * 
  * @param {number} panjang, panjang dari persegi
  * @param {number} lebar, lebar dari persegi
  * @return {number} luas persegi
  */
  function luasPersegi(panjang, lebar) {
    return panjang * lebar;
  }


  // non-aktifkan sementara, kita ganti dengan yg baru

/*
function luasPersegi(panjang, lebar) {
  return panjang * lebar;
}
*/

// tanggal update: 3 Jan 2023 oleh Budi K

function luasPersegiPanjang(panjang, lebar) {
    return panjang * lebar;
  }