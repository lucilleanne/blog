$(function() {
 
    // Parse.$ = jQuery;
 
    // Replace this line with the one on your Quickstart Guide Page
    // Parse.initialize("gBvaylbDvIhY7f56oLEaZ8Rf4QEUgxS18BueGvGA", "wp2e2tdcot9lPrX7JjuuTqcB1bE5sqsMl1ZWFLnW");
 
	/*
    var TestObject = Parse.Object.extend("TestObject");
    var testObject = new TestObject();
    testObject.save({foo: "bar"}).then(function(object) {
      alert("yay! it worked");
    });
	*/
});

$("document").ready(function(){
	Parse.$ = jQuery;
 
    // Replace this line with the one on your Quickstart Guide Page
    Parse.initialize("gBvaylbDvIhY7f56oLEaZ8Rf4QEUgxS18BueGvGA", "wp2e2tdcot9lPrX7JjuuTqcB1bE5sqsMl1ZWFLnW");
})

$("#teacher-form-add").submit(function(){
    var Professors = Parse.Object.extend("Professors");
    var professors = new Professors();
    professors.save(
		{
			firstname: $("#firstname").val(), 
			lastname: $("#lastname").val(),
			username: $("#username").val(),
			password: $("#password").val(),
			email: $("#email").val(),
			country: $("#country").val(),
			age: parseInt($("#age").val()),
			major: $("#major").val(),
			degree: $("#degree").val(),
			employer: $("#employer").val(),
		}
	).then(function(object) {
		// alert(object.id);		
		alert("New Account Created: "+ $("#username").val());		
    });
	return false;
}); 