<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div class="label">
<form action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
  <p class="title">Kies uit:</p>
</form></div>
<div class="dropdown">
<label for="artistName">Choose a artist name:</label> 
    <select name="artist-names" id="artist-names"> 
        <option value="Juice Wrld">Juice Wrld</option> 
        <option value="Travis Scott">Travis Scott</option> 
        <option value="Tyler the creator">Tyler the creator</option> 
    </select></div>
</body>
    <style>

        .title{
            font-size: 2rem;
        }

        .label{
            display: flex;
            justify-content: center;
        }

        .dropdown{
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
        }
    </style>
</html>