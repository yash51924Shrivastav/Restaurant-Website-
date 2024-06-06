
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="Style.css">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
                <div class="wd">
                    <div>
                        <form action="SU.php" method="POST">
                        <h2 class="text-white text-lg font-medium title-font mb-5"><center>Sign Up</h2><br><br><br>
                        <div class="relative mb-4">
                          <label for="name" class="leading-7 text-sm text-gray-400">Full Name</label>
                          <input type="text" id="name" name="name" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                          <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                          <input type="email" id="email" name="email" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                            <label for="password" class="leading-7 text-sm text-gray-400">Create Password</label>
                            <input type="password" id="password" name="password" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          </div><br><br>
                        <center><button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Log in</button></center>
                        </form>
                      </div>
        </div>
        <img src="logo.png">
    </body>
    </html>