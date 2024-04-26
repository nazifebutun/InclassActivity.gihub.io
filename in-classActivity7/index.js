var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };




window.onload = function () {
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("add").onclick = addScore;
	
	
};

function displayResults()
{
	var average = 0;
	var max = scores[0];
	var maxIndex = 0;
	var sum = 0;
	var lastIndex=0;
	for(var i=0;i<scores.length;i++)
	{
		sum += scores[i];
		if (scores[i] > max) {
            max = scores[i];
			maxIndex = i;
        }
		lastIndex = i+1;
		
	}
	average = (sum/lastIndex)
	document.getElementById("results").innerHTML="<h2> Results </h2> Average score = "+average + "<br\> High score = "+names[maxIndex] +" with a score of " +max;


}

function displayScores() {
	var table = "<tr><th style='text-align: left;'><h2>Scores</h2></th></tr>";
    table += "<tr><th style='text-align: left;'>Name</th><th style='text-align: left;'>Score</th></tr>";
    
    // Loop through names and scores arrays to create table rows
    for(var i = 0; i < names.length; i++) {
        table += "<tr><td>" + names[i] + "</td><td>" + scores[i] + "</td></tr>";
    }
    
    // Display table
    document.getElementById("scores_table").innerHTML = table;
}

function addScore() {
    var name = $("name").value;
    var score = parseFloat($("score").value);
    
    // Data validation
    if (name === "" || isNaN(score) || score < 0 || score > 100) {
        alert("You must enter a name and a valid score");
        return;
    }
    
    // Add name and score to arrays
    names.push(name);
    scores.push(score);
    
    // Clear input fields
    $("name").value = "";
    $("score").value = "";
    
    // Display scores table with the new entry

    
    // Move cursor to Name field
    $("name").focus();
}