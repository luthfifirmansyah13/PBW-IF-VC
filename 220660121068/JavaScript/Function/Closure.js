function fn_A() {
    var b = 'hello';
    //closure
    return function() {
        return b;
    }
}
//simpan hasil eksekusi fn_A sebagai variabel 
//fn_B di global space
var fn_B = fn_A();
//fn_B sekarang memiliki akses ke
//variabel b dalam scope fn_A
console.log(fn_B()); //hello

console.log(b); //undefined

var fn_B;

function fn_A() {
    var b = 'hello';
    //buat closure & simpan sebagai fn_B
    fn_B = function() {
        return b;
    }
};

fn_A();
console.log(fn_B()); //hello

function fn() {
    var a = [];
    var i;
    for (i = 0; i < 3; i++) {
        //buat closure & simpan dalam array
        a[i] = function() {
            return i;
        }
    }

    return a;
}

var myArray = fn();
console.log(myArray[0]()); //3
console.log(myArray[1]()); //3
console.log(myArray[2]()); //3

function fn() {
    var a = [];
    var i;
    for (i = 0; i < 3; i++) {
        //buat closure & simpan dalam array
        a[i] = (function(x) {

            return function() {

                return x;

            };
        }(i)); //kirim i sebagai argumen
    }

    return a;
}

