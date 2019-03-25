<!DOCTYPE html>
<html>
    <head>
            <title>Signup</title>
            <meta charset="utf-8" />
            <link href="heart.gif" type="image/gif" rel="shortcut icon" />
            <link href="match.css" type="text/css" rel="stylesheet" />
    </head>
	<body>
            <form action="/matches-submit.php" method="get">
                <fieldset>
                    <legend>Returning User:</legend>
                    <ul class="match">
                        <li class="match">
                            <strong>Name:</strong>
                            <input type="text" name="matchname" maxlength="16"/>
                        </li>
                        <li class="match">
                            <input type="submit" value="View My Matches"/>
                        </li>
                    </ul>
                </fieldset>
            </form>
	</body>
</html>