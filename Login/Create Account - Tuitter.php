<html>

<head>
    <title>Create Account - Tuitter</title>
    <link href="../styles.css" rel="stylesheet" />
</head>

<body>
    <h1>Welcome to the new world!</h1><br /><br /><br />
    <div class="refIndexBlock">
        <p class="refIndexBlockTitle">Create Account</p>
        <p class="refIndex"><a href="../About us/About us - Tuitter.php">About us</a></p>
        <p class="refIndex"><a href="../Contact us/Contact us - Tuitter.php">Contact us</a></p>
        <p class="refIndex"><a href="../Work with us/Work with us - Tuitter.php">Work with us</a></p>
        <p class="refIndex"><a href="../Partner Companies/Partner Companies - Tuitter.php">Partner Companies</a></p>
        <p class="refIndex"><a href="../index.php">Get back to main page</a></p>
    </div>
    <form id="createAccount">
        <p>Name:
            <input type="text" name="name" size="15" maxlength="40">
        </p>
        <p>Subname:
            <input type="text" name="name" size="15" maxlength="40">
        </p>
        <p>E-mail:
            <input type="email" name="email" size="15" maxlength="40">
        </p>
        <p>Telephone:
            <input type="text" name="telephone" size="11" maxlength="11">
        </p>
        <p>Password:
            <input type="password" name="password" size="8" maxlength="8">
        </p>
        <p>Birth Date:
            <input type="date" name="birth date">
        </p>
        <p>Country:
            <select name="countrys">
                <option value="brazil">Brazil</option>
                <option value="australia">Australia</option>
                <option value="united states">United States</option>
                <option value="canada">Canada</option>
                <option value="france">France</option>
                <option value="germany">Germany</option>
                <option value="south africa">South Africa</option>
                <option value="argentina">Argentina</option>
                <option value="england">England</option>
                <option value="italy">Italy</option>
            </select>
        </p>
        <p>Gender:
            <select name="genders">
                <option value="masculine">Masculine</option>
                <option value="feminine">Feminine</option>
                <option value="other">Other</option>
            </select>
        </p>
        <p>Photo:
            <input type="file" name="photoProfile"><input type="submit" value="Upload">
        </p>
        <p>Interests:
            <br />
            <input type="checkbox" name="interests" value="Bussiness" checked="checked" />Bussiness
            <input type="checkbox" name="interests" value="Bussiness" /> Comunication
            <input type="checkbox" name="interests" value="Bussiness" /> Friends
            <input type="checkbox" name="interests" value="Bussiness" /> Relationchips
        </p>
        <p><input class="submit" type="submit" name="subscribe" value="Submit"></p>
    </form>
    <div class="refIndexBlock">
        <p class="refIndex"><a href="../About us/About us - Tuitter.php">About us</a></p>
        <p class="refIndex"><a href="../Contact us/Contact us - Tuitter.php">Contact us</a></p>
        <p class="refIndex"><a href="../Work with us/Work with us - Tuitter.php">Work with us</a></p>
        <p class="refIndex"><a href="../Partner Companies/Partner Companies - Tuitter.php">Partner Companies</a></p>
        <p class="refIndex"><a href="../index.php">Get back to main page</a></p>
    </div>
    <?php

    ?>
</body>

</html>