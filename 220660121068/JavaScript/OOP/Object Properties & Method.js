// Membuat objek Car dengan properti brand, type, dan year
var Car = {
    brand: 'honda',
    type: 'jazz',
    year: 2011
};

console.log(Car);

// Memperbarui properti objek yang telah dibuat
Car.brand = 'Toyota';
Car.type = 'Fortuner';

// Menghapus properti year
delete Car.year;

// Menambah properti baru
Car.odometer = 100000;

console.log(Car);

var car = {
    brand: 'honda',
    type: 'jazz',
    year: 2011,
    drive: function() {
        console.log('driving');

        //object tidak memiliki scope-chain //jadi kita perlu menggunakan 'this' //sebagai referensi ke objek ini sendiri 
        this.odometer++;
    },
    stop: function() {
        console.log('stopped');
    }
};

car.drive(); //driving
car.stop(); //stopped
console.log(car.odometer); //100001