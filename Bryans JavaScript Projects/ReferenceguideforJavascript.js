/**
 * Created by Bryan on 8/12/14.
 */
confirm("Confirm This"); // This gives you a pop-up box asking for an "ok" or a "cancel".  Selecting "ok" will return "true", but selecting "cancel" will return "false".

prompt("and prompt this"); // This gives the user the ability to fill in an answer to a question.  It will return the <string> that the user entered.

"test".length // This will return the length of a string

console.log() /* This will print out whatever is in the () to the console, just like System.out.println(); in Java and echo(); in PHP

 === is equal to and !== is not equal to, but it looks like == worked too in CodeAcademy

 % is modulo to find a remainder, like 10%2=0*/

"hello".substring(0,3);  //This starts chopping a substring at position 0 and stops at position 3 (it does NOT include whatever is at position 3).
// So the result is "hel" for the substring at the 0, 1, and 2 index.  Spaces count as index numbers, too!

var myNum=35; //This is how you declare a variable

var randomNum = Math.random();  //This is how you get a random number between 0 and 1

//This is how you declare a function
var myFunctionName = function(parameter){
    return "Hello World";
}

//Here’s an array and a for loop to print out all the elements
var cities = ["Melbourne", "Amman", "Helsinki", "NYC", 9];
for (var i = 0; i < cities.length; i++) {
    console.log("I would like to visit " + cities[i]);
}

// How to prompt a dialogue box for user input:
var lunch = prompt("What do you want for lunch?", "Type your lunch choice here");

// How to declare a variable, and an array:
var myVariableName = [];

// How to declare an associative array:
var bob = {
    firstName: "Bob",
    lastName: "Jones",
    phoneNumber: "(650) 777-777",
    email: "bob.jones@example.com"
};

console.log(bob.firstName);
console.log(bob.lastName);
console.log(bob.email);

// If you call isNaN on something, it checks to see if that thing is not a number. So:
isNaN('berry'); // => true
isNaN(NaN); // => true
isNaN(undefined); // => true
isNaN(42);  // => false

// A simple switch statement
var favColor = prompt("What’s your favorite color?", "Enter your fav color here");
switch(color) {
    case 'red':
        console.log("Red's a good color!");
        break;
    case 'blue':
        console.log("That's my favorite color, too!");
        break;
    default:
        console.log("I don't think that's a primary color!");
}

// To make something all caps or all lowercase
myVariable = myVariable.toUpperCase();
myVariable = myVariable.toLowerCase();


// A random number between 0 and 1
myVar =Math.random();  // Results in something between 0 or 1

// How to get a random number that rounds down:
myVar =Math.floor(Math.random()+.5);  // Results in 0 or 1

/* Two ways to create an object:  Either literal notation or constructor notation.
 Literal notation creates a single object. Literal notation uses curly brackets { } and the object's default properties are defined within the brackets using property:value notation.
 Constructor notation involves defining an object constructor. And like defining a function, we use the function keyword. You can think of this constructor as a "template" from which you can create multiple objects. To create a new object from a constructor, we use the new keyword.
 Literal (makes a single object that you don’t have to instantiate later on)*/
var objectName = {
    //properties and methods go here
};

// Constructor (makes a class of objects available that you have to instantiate every time you want a new one):
function Person(job, married) {
    this.job = job;
    this.married = married;
}

/* Two ways to add properties to an object:  Dot notation or via key/value JSON-like pairs in the Constructor (see example below).  JSON (which stands for Java Script Object Notation) is an alternative to XML. It gets its name from the fact that its data format resembles JavaScript objects, and it is often more succinct than the equivalent XML*/
// Dot notation with Object constructor
var objectName = new Object();
objectName.name="Bryan";

// Via "literal" notation.  This only makes 1 unique object (can’t make multiple objects with it).
// Notice the key/value pairs and commas:
var objectName = {
    name: "Bryan",
    age: 35,
// You can also add methods with this JSON-like colon/comma scheme:
    someMethod: function(some, params) { }
};

// An object of objects:
var friends = {};
friends.bill = {
    firstName: "Bill",
    lastName: "Gates",
    number: "(206) 555-5555",
    address: ['One Microsoft Way','Redmond','WA','98052']
};
friends.steve = {
    firstName: "Steve",
    lastName: "Jobs",
    number: "(408) 555-5555",
    address: ['1 Infinite Loop','Cupertino','CA','95014']
};

// Another example:
// help us make snoopy using literal notation
// Remember snoopy is a "beagle" and is 10 years old.
var snoopy ={
    species: "beagle",
    age: 19
};

// help make buddy using constructor notation
// buddy is a "golden retriever" and is 5 years old
var buddy = new Object();
buddy.species="golden retriever";
buddy.age=5;

// How to add a method to an objection via "function":
// this time we have added a method, setAge
snoopy.setAge = function (newAge){
    snoopy.age = newAge;
};

// You can use the keyword "this" to allow a method to work for any object.  The keyword "this" will refer to whatever object calls the method with "this" in it.  So here we define our method using "this", before we even introduce the Object bob, but the Object bob can use the method because of the "this" keyword.
var setAge = function (newAge) {
    this.age = newAge;
};
// now we make bob
var bob = new Object();
bob.age = 30;
// The below line creates a method for the "bob" Object that is EQUAL TO the
// method that was already created.  So this step kind of "clones" the method
// and allows the bob Object to have it/use it as well.
bob.setAge = setAge;

// Finally, we can use that method to set Bob’s age to 50:
bob.setAge(50);

// In the below case, the setHeight method/function can only be used with rectangle because it was defined as such.  The benefit of using "this" in this case is…?
var rectangle = new Object();
rectangle.height = 3;
rectangle.width = 4;
// here is our method to set the height
rectangle.setHeight = function (newHeight) {
    this.height = newHeight;
};

// Creating a custom constructor for an object:
function Circle (radius) {
    this.radius = radius;
    this.area = function () {
        return Math.PI * this.radius * this.radius;

    };
    // define a perimeter method here
    this.perimeter = function () {
        return 2*Math.PI*this.radius;
    };
};

// Two ways to access an Object’s properties, "dot notation" and "bracket notation"::
var snoopy = new Object();
snoopy.species = "beagle";
snoopy.age = 10;

// save Snoopy's age and species into variables
// Dot notation for snoopy's species
var species = snoopy.species;

// Bracket notation for snoopy's age.
var age = snoopy["age"];

// An advantage of bracket notation is that we are not restricted to just using strings in the
// brackets. We can also use variables whose values are property names:
var someObj = {propName: someValue};
var myProperty = "propName";
someObj[myProperty];
// The last line is exactly the same as using someObj["propName"];.

// Here is an example of a phone book that can add infinitely more contacts using the "add" function and an auto-increasing array:
var bob = {
    firstName: "Bob",
    lastName: "Jones",
    phoneNumber: "(650) 777-7777",
    email: "bob.jones@example.com"
};

var mary = {
    firstName: "Mary",
    lastName: "Johnson",
    phoneNumber: "(650) 888-8888",
    email: "mary.johnson@example.com"
};

var contacts = [bob, mary];

function printPerson(person) {
    console.log(person.firstName + " " + person.lastName);
}

function list() {
    var contactsLength = contacts.length;
    for (var i = 0; i < contactsLength; i++) {
        printPerson(contacts[i]);
    }
}

/*Create a search function
 then call it passing "Jones"*/
function search(lastName){
    var contactsLength = contacts.length;
    for (var i = 0; i < contactsLength; i++) {
        if(contacts[i].lastName===lastName){
            printPerson(contacts[i]);
        }
    }
}

search("Jones");

function add(firstName, lastName, phoneNumber, email){
    // The below line keeps on making the array bigger and bigger with each new contact
    // every time that add() is called
    contacts[contacts.length] = {
        firstName: firstName,
        lastName: lastName,
        phoneNumber: phoneNumber,
        email: email
    };
}

add("Bryan", "Miller", "bmiller@wow.com", "303-303-3030");
list();

// The typeof() built-in method tells you what kind of object or data type a variable is:
var anObj = { job: "I'm an object!" };
var aNumber = 42;
var aString = "I'm a string!";

console.log(typeof anObj); // should print "object"
console.log(typeof aNumber  ); // should print "number"
console.log(typeof aString  ); // should print "string"

// The hasOwnProperty() built-in method tells you if an object has a certain property:
var myObj = {
    name: "Bry"
};

console.log(myObj.hasOwnProperty('name') ); // should print true
console.log(myObj.hasOwnProperty('nickname') ); // should print false

// Here is a way to cycle through/print out all of the properties in an object using the for-in loop:
var nyc = {
    fullName: "New York City",
    mayor: "Bill de Blasio",
    population: 8000000,
    boroughs: 5
};

for(var property in nyc){
    console.log(property);
}

// You can also cycle through/print out all of the values in an object if you assign a variable to just one bracket notation and then use a for-in loop:
var nyc = {
    fullName: "New York City",
    mayor: "Bill de Blasio",
    population: 8000000,
    boroughs: 5
};

// write a for-in loop to print the value of nyc's properties
var x = "fullName";
for(var x in nyc){
    console.log(nyc[x]);
}

// If you want to add a method to a class such that all members of the class can use it, we use
// the following syntax to extend the prototype:
function Dog (breed) {
    this.breed = breed;
};

// here we make buddy and teach him how to bark
var buddy = new Dog("golden Retriever");
Dog.prototype.bark = function() {
    console.log("Woof");
};
buddy.bark();

// You can do the same thing by simply putting a method in the constructor in the object’s class
// declaration:
function Cat(name, breed) {
    this.name = name;
    this.breed = breed;
    this.meow = function(){
        console.log("Meow!");
    }
}

var cheshire = new Cat("Cheshire Cat", "British Shorthair");
cheshire.meow();

// Use the keyword "this" when using a prototype to create a new class method:
// create your Animal class here
function Animal(name){
    this.name = name;
};

Animal.prototype.sayName = function(){
    console.log("Hi my name is " + this.name);
};

var penguin = new Animal("Captain Cook");
penguin.sayName();

// One way to do inheritance is by using the prototype keyword:
// Here is the parent Animal class and its sayName method
function Animal(name, numLegs) {
    this.name = name;
    this.numLegs = numLegs;
}
Animal.prototype.sayName = function() {
    console.log("Hi my name is " + this.name);
};

// Define a Penguin class/constructor
function Penguin(name){
    this.name=name;
    this.numLegs=2;
};

// Set its prototype to be a new instance of Animal.  Now the Penguin class shares
// all the methods and values that belong to the Animal class.
Penguin.prototype = new Animal();
var penguin = new Penguin("Eek");
penguin.sayName();

// Class variables are public by default.  If you want to make them private, use the "var" keyword instead of the this.variable format:
function Person(first,last,age) {
    this.firstname = first;
    this.lastname = last;
    this.age = age;
    var bankBalance = 7500;  // Because "var" is used, this is a private value now.
}

// The right way to do things is usually to make class variables/values private and then let
// methods be public.  You can get or set values through making getter or setter methods:
function Person(first,last,age) {
    this.firstname = first;
    this.lastname = last;
    this.age = age;
    var bankBalance = 7500;

    this.getBalance = function() {
        // your code should return the bankBalance
        return bankBalance
    };
}

var john = new Person('John','Smith',30);
console.log(john.bankBalance);

// create a new variable myBalance that calls getBalance()
var myBalance = john.getBalance();
console.log(myBalance);

// You can also make a private method.  In order to use a private method, you have to
// call a public method that makes use of the private method:
function Person(first,last,age) {
    this.firstname = first;
    this.lastname = last;
    this.age = age;
    var bankBalance = 7500;

// Here is how you define a private method in a class:
    var returnBalance = function() {
        return bankBalance;
    };

// Here is how you define a public method in a class that makes use of a private method:
    this.askTeller = function(){
        return returnBalance;
    };
}

var john = new Person('John','Smith',30);
console.log(john.returnBalance);
var myBalanceMethod = john.askTeller();
var myBalance = myBalanceMethod();
console.log(myBalance);

// Here’s how to print out only one typeof variable from a class:
var languages = {
    english: "Hello!",
    french: "Bonjour!",
    notALanguage: 4,
    spanish: "Hola!"
};

// print hello in the 3 different languages
var words = "english";
for(words in languages){
    var myTest = typeof languages[words];  /*Tricky part.  If you did typeof words, all 4 variables have strings as values (english, french, notALanguage, spanish), but not all 4 have strings as keys (only "Hello!", "Bonjour", and "Hola!" are strings). */
    if(myTest=="string"){
        console.log(languages[words]);
    }
}

// To work with private member variables of a class, you don’t use the "this" (this.variable) keyword syntax in methods:
function StudentReport() {
// Private variables since we used <var grade1> instead of the public format <this.grade1>
    var grade1 = 4;
    var grade2 = 2;
    var grade3 = 1;
    this.getGPA = function() {
// Notice, no "this" keywords used below with grade1, grade2, or grade 3)
        return (grade1 + grade2 + grade3) / 3;
    };
}
console.log("Your overall GPA is " + myStudentReport.getGPA());

// When declaring an object using the value/key pair declaration format, don’t forget to separate values (including methods) with colons AND commas:
var cashRegister = {
// Note the below comma
    total: 0,

    add: function(itemCost){
        this.total+=itemCost;
        return this.total;
// Note the below comma
    },

    scan: function (item) {
        switch (item) {
            case "eggs":
                this.add(0.98);
                break;
            case "milk":
                this.add(1.23);
                break;
            case "magazine":
                this.add(4.99);
                break;
            case "chocolate":
                this.add(0.45);
                break;
        }
        return true;
    }
};

//Scan 2 eggs and 3 magazines
cashRegister.scan("eggs");
cashRegister.scan("eggs");
cashRegister.scan("magazine");
cashRegister.scan("magazine");
cashRegister.scan("magazine");

//Show the total bill
console.log('Your bill is '+cashRegister.total);

//Here is a cash register project with two objects that interact with each other.  One object gets
// passed into the other one, and one of its parameters gets used.
function StaffMember(name,discountPercent){
    this.name = name;
    this.discountPercent = discountPercent;
}

var sally = new StaffMember("Sally",5);
var bob = new StaffMember("Bob",10);
var me = new StaffMember("Bryan", 20);

var cashRegister = {
    total:0,
    lastTransactionAmount: 0,
    add: function(itemCost){
        this.total += (itemCost || 0);
        this.lastTransactionAmount = itemCost;
    },
    scan: function(item,quantity){
        switch (item){
            case "eggs": this.add(0.98 * quantity); break;
            case "milk": this.add(1.23 * quantity); break;
            case "magazine": this.add(4.99 * quantity); break;
            case "chocolate": this.add(0.45 * quantity); break;
        }
        return true;
    },
    voidLastTransaction : function(){
        this.total -= this.lastTransactionAmount;
        this.lastTransactionAmount = 0;
    },
    // Create a new method applyStaffDiscount here
    applyStaffDiscount : function(employee){
        this.total=this.total-this.total*employee.discountPercent/100;
    }
};

cashRegister.scan('eggs',1);
cashRegister.scan('milk',1);
cashRegister.scan('magazine',3);
// Apply your staff discount by passing the 'me' object
// to applyStaffDiscount
cashRegister.applyStaffDiscount(me);

// Show the total bill
console.log('Your bill is '+cashRegister.total.toFixed(2));

/*What is REST?  For an API or web service to be RESTful, it must do the following:
 Separate the client from the server
 Not hold state between requests (meaning that all the information necessary to respond to a request is available in each individual request; no data, or state, is held by the server from request to request)
 Use HTTP and HTTP methods (as explained below).
 There are some other requirements, but these are the basics.  The HTTP methods you'll use is quite small—there are just four HTTP "verbs" you'll need.  They are:
 GET: retrieves information from the specified source (you just saw this one!)
 POST: sends new information to the specified source.
 PUT: updates existing information of the specified source.
 DELETE: removes existing information from the specified source.
 So when we sent our GET request to codecademy.com, we retrieved information. When you add to or update your blog, you're sending POST or PUT requests; when you delete a tweet, there goes a DELETE request.*/

// Here’s how to make a “XML HTTP Request” to Code Academy:
var xhr = new XMLHttpRequest();
xhr.open("GET", "http://www.codecademy.com/", false);  // The “false” means it will wait until it gets a response from the server.
xhr.send();
console.log(xhr.status);  //Returns 200 if everything is ok
console.log(xhr.statusText);  //Returns OK if everything is ok

// Here’s how to make a JSON request:
var demo = '{"pets": {"name": "Jeffrey", "species": "Giraffe"}}';
var json = JSON.parse(demo);
console.log(json);

/*This leads us to wonder, though: how do we know whether an API will reply with XML or JSON?
 The only way you'll know what type of data an API will send you is to read that API's documentation!
 Some will reply with one, and some will reply with the other. Documentation is a programmer's best friend,
 and it's always in your best interest to read it so you understand that what the API expects from you and
 what the API intends to send you when you make a request.*/




