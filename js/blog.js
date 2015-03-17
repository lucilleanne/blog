$(function() {
 
    Parse.$ = jQuery;
 
    // Replace this line with the one on your Quickstart Guide Page
    Parse.initialize("gBvaylbDvIhY7f56oLEaZ8Rf4QEUgxS18BueGvGA", "wp2e2tdcot9lPrX7JjuuTqcB1bE5sqsMl1ZWFLnW");
 
    var TestObject = Parse.Object.extend("TestObject");
    var testObject = new TestObject();
    testObject.save({foo: "bar"}).then(function(object) {
      alert("yay! it worked");
    });
 
});