//global function (getter & setter)
var getName, setName;

(function() {

        //variabel lokal, tidak bisa diakses langsung 
        var name = 'boss';

        //closure untuk mengakses local 
        getName = function(){
        return name;
    }; setName = function(value) {
        //name harus berupa string
        if (typeof value == 'string') {
            name = value;
        }
    };

}());

console.log(getName()); //boss

setName('bob');
console.log(getName()); //bob

setName("baso");

//name tidak berubah karena 123 bukan string 
console.log(getName());//bob