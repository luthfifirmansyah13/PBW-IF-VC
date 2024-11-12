var car = {};

//notasi objek, lebih disukai

//setiap properti dipisahkan oleh koma & key-value dipisahkan //oleh titik-dua.

//Tidak boleh menggunakan keyword var 
var myCar = {
    brand: 'Honda',
    year: 2011
};

//cara yg sama dengan sintaks associative-array
var yourCar = {};
yourCar['brand'] = 'Toyota';
yourCar['year'] = 2012;

console.log(yourCar.brand);
console.log(yourCar['brand']);

//contoh implementasi objek

//notasi objek
var person = {
    nama: 'John Doe',
    umur: 25,
    alamat: 'Jl. Raya No. 1'
};

//associative-array
var orang = {};
orang['nama'] = 'Jane Doe';
orang['umur'] = 30;
orang['alamat'] = 'Jl. Raya No. 2';

console.log(person);
console.log(orang);
