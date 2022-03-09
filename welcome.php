<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
      
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WYDRN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background: rgb(27, 0, 36);
            background: linear-gradient(40deg, rgba(27, 0, 36, 1) 0%, rgba(45, 14, 68, 1) 50%, rgba(117, 0, 129, 1) 100%);
            color: rgba(255, 255, 255, 0.904)
        }
        
        h3 {
            color: rgba(255, 255, 255, 0.904);
        }
    </style>


</head>

<body>

    <!--LOGOUT-->
    <div style="background-color: black; font-size:20px; position: absolute; top: 0.5em; right: 1em; padding:5px;">
        <a style="color:white" href="logout.php">Logout</a>
    </div>

    <!--PROFILE-->
    <div style="  background-color: black; font-size:20px; position: absolute; top: 0.5em; right: 5em; padding:5px;">
        <a style="color:white" href="profile.php?user_name=<?php echo $user_data['user_name']?>">Profile</a> 
    </div>

    <!--WELCOME TO WRYDRN-->
    <div style="font-size:20px; position:absolute; color:white; top: 0.5em; right:10em; padding:5px;">
        <b>Welcome to WRYDN</b>
    </div>

    

    <form class="ms-5 mt-5" method="POST" action="profile.php" name="userinput">
        <div class="col-md-6">
            <!--Video Games-->
            <h3 class="mb-3">Video Game</h3>
            <div class="mb-3 ms-3" name="videogame">
                Watchu playing son? <input class="form-control" type="text" name="Videogame" placeholder="Elden Ring"><br> Platform <input type="text" class="form-control" name="Platform" placeholder="PC"><br>
            </div>

            <!--Music-->
            <h3 class="mb-3">Music</h3>
            <div class="mb-3 ms-3" name="album">
                What Album you spinnin'? <input type="text" class="form-control" name="Album" placeholder="Cavalcade"><br> Who's the Artist? <input type="text" class="form-control" name="Artist" placeholder="Black Midi"><br>
            </div>

            <!--Books-->
            <h3 class="mb-3">Books</h3>
            <div class="mb-3 ms-3" name="book">
                What is an intellectual like yourself Reading? <input type="text" name="Book" class="form-control" placeholder="Royal Assassin"><br> Drop the name of the Author bro <input type="text" class="form-control" name="Author" placeholder="Robin Hobb"><br>
            </div>

            <!--Movies-->
            <h3 class="mb-3">Movies</h3>
            <div class="mb-3 ms-3" name="movie">
                What movie we watchin' today matey? <input type="text" class="form-control" name="Movie" placeholder="The Batman"><br> Release Year <input type="text" class="form-control" name="MovieRelease" placeholder="2022"><br>
            </div>

            <!--TV-->
            <h3 class="mb-3">TV/Streaming</h3>
            <div class="mb-3 ms-3" name="TV">
                What TV series you watching RN hon? <input type="text" class="form-control" name="TV" placeholder="Peaky Blinders"><br> Where is it streaming/broadcasting? <input type="text" class="form-control" name="StreamPlatform" placeholder="BBC"><br>
            </div>
        </div>

        <hr>
        <div class="text-center mb-lg-3">
            <button type="submit" class="btn btn-outline-primary btn-light btn-lg">Submit</button>
        </div>
        <form>
</body>

</html>