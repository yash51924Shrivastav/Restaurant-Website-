
<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" type="text/css" href="Style.css">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
                <div class="wd">
                    <div><form action="LI.php" method="POST">
                        <h1 class="text-white text-lg font-medium title-font mb-5"><center>Welcome!</h1><br><br><br>
                
                        <div class="relative mb-4">
                          <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                          <input type="email" id="email" name="email" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                            <label for="password" class="leading-7 text-sm text-gray-400">Password</label>
                            <input type="password" id="password" name="password" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          </div><br><br>
                        <center><button type="submit" class="bg-white hover:bg-gray-300 text-gray-900 font-semibold py-2 px-6 border border-gray-400 rounded shadow">Log in</button></a></center></form>
                        <br>Don't have an account? <a href="Signup.php" style="color: red;">Register here!</a><br><br><br><br>Copyright &copy; Girl & The Goat 2021. All rights reserved.
                      </div>
        </div>
        <img src="logo.png">
    </body>
    </html>