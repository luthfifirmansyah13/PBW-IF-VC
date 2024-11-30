var Car = function() {

    this.brand = 'Honda';
    this.type = 'jazz';
    this.year = 2011;

    this.drive = function() {
        return 'driving';
    }

    this.stop = function() {
        return 'stopped';
    };

}

//buat objek Car
var car = new Car();
console.log(car.brand); //Honda
console.log(car.type); //jazz
console.log(car.year); //2011
console.log(car.drive()); //driving
console.log(car.stop()); //stopped

//buat objek Car baru
var car2 = new Car();
//ubah propertinya
car2.brand = 'Toyota';
car2.type = 'Fortuner';

console.log(car2.brand); //Toyota
console.log(car2.type); //Fortuner
console.log(car2.year); //2011
console.log(car2.drive()); //driving
console.log(car2.stop()); //stopped






var Car = function() {

    this.brand = 'Honda';
    this.type = 'jazz';
    this.year = 2011;

    //private property, gunakan keyword var, bukan 'this' 
    var odometer = 0;

    //public function
    this.drive = function() {
        odometer++;
        return 'driving';
    }

    this.stop = function() {
        //panggil private function
        brake();
        return 'stopped';
    };

    this.getOdo = function() {
        return odometer;
    }

    //private function, dalam bentuk
    //child function
    function brake() {
        console.log('braking');
    }
};

//TESTING

var car = new Car();
console.log(car.brand); //Honda
console.log(car.type); //jazz
console.log(car.year); //2011

console.log(car.getOdo()); //0 
console.log(car.drive()); //driving 
console.log(car.stop()); //braking, stopped

//setelah drive(), nilai odometer berubah 
console.log(car.getOdo()); //1


//coba ubah langsung odometer
car.odometer = 1000;
//odometer tetap 1
console.log(car.getOdo()); //1
//coba panggil brake()
car.brake(); //!ERROR undefined