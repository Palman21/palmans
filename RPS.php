<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rock Paper Scissors The Game</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
	<h1>Rock Paper Scissor</h1>
</header>

<div class="score-board">
<div id="user-label" class="badge">user</div>
<div id="comp-label" class="badge">comp</div>
<span id="user-score">0</span>:<span id="computer-score">0</span>
</div>


<div class="result">
<p>Test your Might!</p>

<div class="choices">
	<div class="choice" id="r">
		<img src="Rock.PNG" alt="rock">
	</div>

	<div class="choice" id="p">
		<img src="Paper.PNG" alt="paper">
	</div>

	<div class="choice" id="s">
		<img src="Scissors.PNG" alt="scissors">
	</div>


<p id="action-message">Make your move.</p>
<script src="app.js" charset="utf-8"></script>
</body>
</html>
