<!DOCTYPE html>
<html>
    <head>
            <title>Signup</title>
            <meta charset="utf-8" />
            <link href="heart.gif" type="image/gif" rel="shortcut icon" />
            <link href="match.css" type="text/css" rel="stylesheet" />
            <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
    </head>
	<body>
		<div id="bannerarea">
			<img src="match.png" alt="banner logo" /> <br />
			where meek geeks meet
		</div>
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
            <div>
			<p>
				This page is for single nerds to meet and date each other!  Type in your personal information and wait for the geek love to begin!  Thank you for using our site.
			</p>

			<p>
				Results and page (C) Copyright Match Inc.
			</p>

			<ul>
				<li>
					<a href="index.php">
						<img src="back.gif" alt="icon" />
						Back to front page
					</a>
				</li>
			</ul>
		</div>
	</body>
</html>