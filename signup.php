<!DOCTYPE html>
<html>
    <head>
            <title>Signup</title>
            <meta charset="utf-8" />
            <link href="heart.gif" type="image/gif" rel="shortcut icon" />
            <link href="match.css" type="text/css" rel="stylesheet" />
    </head>
	<body>
            <form action="/signup-submit.php" method="post">
                <fieldset>
                    <legend>New User Signup:</legend>
                    <ul class="match">
                        <li class="match">
                            <strong>Name:</strong>
                            <input type="text" name="matchname" maxlength="16"/>
                        </li>
                        <li class="match">
                            <strong>Gender:</strong>
                            <input type="radio" name="gender" value="female" checked>Female
                            <input type="radio" name="gender" value="male">Male
                        </li>
                        <li class="match">
                            <strong>Age:</strong>
                            <input type="text" name="age" size="6" maxlength="2"/>
                        </li>
                        <li class="match">
                            <strong>Personality Type:</strong>
                            <input type="text" name="personality" size="6" maxlength="4"/>
                            <a href="http://www.humanmetrics.com/cgi-win/jtypes2.asp">(Don't know your type?)</a>
                        </li>
                        <li class="match">
                            <strong>Favorite OS:</strong>
                            <select id="OS" name="operating-system">
                                <option value="windows">Windows</option>
                                <option value="mac">Mac OS X</option>
                                <option value="linux">Linux</option>
                              </select>
                            </li>
                        <li class="match">
                            <strong>Seeking age:</strong>
                            <input type="text" name="min" size="6" maxlength="2" placeholder="min"/>
                            to
                            <input type="text" name="max" size="6" maxlength="2" placeholder="max"/>
                        </li>
                        <li class="match">
                            <input type="submit" value="Sign Up"/>
                        </li>
                    </ul>
                </fieldset>
            </form>
	</body>
</html>