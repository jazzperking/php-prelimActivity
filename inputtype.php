<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Types Demo</title>
</head>
<body>
    <form action="">
<!-- ===========input type differents ============-->
        <label for="txtFirstName">Enter First Name: </label>
        <input type="text" name="txtName" id="txtFirstName" placeholder="Enter First Name" autofocus required><br><br> 
        
        <label for="txtLastName">Enter Last Name: </label>
        <input type="text" name="txtLast" id="txtLastName" placeholder="Enter Last Name"><br><br>
    
        <label for="txtPasssword">Enter Password: </label>
        <input type="password" name="txtLast" id="txtPasssword" placeholder="Enter Password"><br><br>
        
        <input type="submit" name="btnSave1" value="Send 1">
        
        <!-- customizable
         <button type="submit" name="btnSave2">Send 2</button>  -->

        <input type="reset" name=""><br><br>

        <!-- radiobuttons -->
        <input type="radio" name="radSex" id="radMale" value="Male">
        <label for="radMale">Male</label>

        <input type="radio" name="radSex" id="radFemale" value="Female"checked>
        <label for="radFemale">Female</label>
        <br><br>
        <!-- checkboxes -->
        <input type="checkbox" name="chkBike" id="chkBike" value="Bike">
        <label for="chkBike">I have a Bike</label><br><br>

        <input type="checkbox" name="chkCar" id="chkCar" value="Car">
        <label for="chkCar">I have a Car</label><br><br>

        <input type="checkbox" name="chkBoat" id="chkBoat" value="Boat">
        <label for="chkBoat">I have a Boat</label><br><br>
        <!-- color pick -->
        <label for="clrTheme">Pick a Color Theme</label>
        <input type="color" name="clrTheme" id="clrTheme">
        <br><br>
        <!-- date -->
        <label for="dtpBirthday">Birthday:</label>
        <input type="date" name="dtpBirthday" id="dtpBirthday" value="2004-14-04">
        <br><br>
        <!-- email -->
        <label for="txtEmail">Email Address: </label>
        <input type="email" name="txtEmail" id="txtEmail">

        <br><br>
        <!-- file upload -->
        <label for="filePhoto">Select a File:</label>
        <input type="file" name="filePhoto" id="filePhoto">
        <br><br>
        <!-- number -->
        <label for="txtNumber">Enter Quantity:</label>
        <input type="number" name="txtNumber" id="txtNumber" min="1" max="5">
        <br><br>
        <!-- range -->
        <label for="txtVolume">Select Volume:</label>
        <input type="range" name="txtVolume" id="txtVolume" min="0" max="50">
        <br><br>
        <!-- telephone number wit pattern 094-54-545 -->
        <label for="txtTelephone">Enter Telephone Number:</label>
        <input type="tel" name="txtTelephone" id="txtTelephone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" maxlength="11">
        <br><br>
        <!-- time -->
        <label for="txtTime">Select Time:</label>
        <input type="time" name="txtTime" id="txtTime">
        <br><br>
        <!-- url -->
        <label for="txtURL">Add URL:</label>
        <input type="url" name="txtURL" id="txtURL">
    </form>
</body>
</html>