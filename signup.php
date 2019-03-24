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
                        <p>
                            Name:
                            <input type="text" name="matchname" maxlength="16"/>
                        </p>
                        <p>
                            Gender:
                            <input type="radio" name="gender" value="female" checked>Female/>
                            <input type="radio" name="gender" value="male">Male/>
                        </p>
                            Age:
                            <input type="text" name="age" size="6" maxlength="2"/>
                        </p>
                        </p>
                            Personality Type:
                            <input type="text" name="personality" size="6" maxlength="4"/>
                            <a href="http://www.humanmetrics.com/cgi-win/jtypes2.asp">(Don't know your type?)</a>
                        </p>
                        </p>
                            Favorite OS:
                            <select id="OS" name="operating-system">
                                <option value="windows">Windows</option>
                                <option value="mac">Mac OS X</option>
                                <option value="linux">Linux</option>
                              </select>
                        </p>
                        <p>
                            Seeking:
                            <input type="text" name="min" size="6" maxlength="2" placeholder="min"/>
                            to
                            <input type="text" name="max" size="6" maxlength="2" placeholder="max"/>
                        </p>
                        <p>
                            <input type="submit" value="Sign Up"/>
                        </p>
                </fieldset>
            </form>
	</body>
</html>