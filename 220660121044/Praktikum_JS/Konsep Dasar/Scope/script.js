let greeting = 'Hello world!';

// code yang lain
// code yang lain

console.log(greeting);

// Output: Hello world!

function sayHello() {
  console.log(greeting);
}

sayHello();

// Output: Hello world!


alert()
console.log()
setTimeout()
setInterval()


window.alert('hello');
window.console.log('hello');

    alert('hello');
console.log('hello');



function checkScore() {
    let score = 70;
    
    function printScore() {
      console.log(score);
    }
  
    printScore();
  }
  
  checkScore();
  
  // Output: 70





  // Hoisting class
const myCar = new Car();
class Car {
  constructor() {
    this.make = 'Toyota';
  }
  displayMake() {
    console.log(this.make);
  }
}