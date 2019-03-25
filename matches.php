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
            <form action="/matches-submit.php" method="get">
                <fieldset>
                    <legend>Returning User:</legend>
                    <ul class="match">
                        <li class="match">
                            <strong>Name:</strong>
                            <input type="text" name="name" maxlength="16"/>
                        </li>
                        <li class="match">
                            <input type="submit" value="View My Matches"/>
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