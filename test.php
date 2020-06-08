<?php

// Complete the function below, The function is a recursive function
// that print all even numbers from 1 to 100.

function recurse($num) {
	//complete the function, write your code inside here
	for($i = 1; $i < $num; $i++){
		if($num %  $i == 0){
			echo $i.'<br>';
		}
	}
}

recurse(100);


// What will be the result of this laravel route command below,
// Share your conclusion

Route('login/24', function($id){
	
	echo $id;
	
});
/*
	The route above will not run because it has no http method attached to it, it will throw a 404 Http response or Not found http response.
	The correct way of writting the Route above will be:-
	
	Route::get('login/{id}', function($id){
		echo $id;
	});

	The modified version will print the value after the foward-slash (/) in the route, for example.
	if a user points his/her browser to 'http://exampledomain.com/login/25' then the clossure will print 25.
 */

?>

<!-- Write a simple javascript function to change the color of paragraph when user clicks the "Change Color" button. -->

<!-- Solution 1 -->
<div>
	<p id="paragraph" style="color:pink" >This is just a test chill out.</p>
	<button>Change Color</button>
</div>

<script>
	var button = document.getElementsByTagName("button"); // gets the button element
	// then listen for a click event on the botton element
	button.addEventListener('click', () => {
		document.getElementById('paragraph').style.color = 'black'; //now change the color to black from pink
	})
</script>

<!-- Solution 1 Ends -->

<!-- Solution 2 -->

<div>
	<p id="paragraph" style="color:pink" >This is just a test chill out.</p>
	<!-- Add another attribute "onclick" to the button to listen for click event. when clicked it calls the changeColor() function -->
	<button onclick="changeColor()">Change Color</button>
</div>

<script>
	// function to change the color of the paragraph to black from pink
	function changeColor(){
		document.getElementById('paragraph').style.color = 'black'; //now change the color to black from pink
	}
</script>

<!-- Solution 2 Ends -->

<!-- Both solutions will do the same thing upon execution -->








