<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Screen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Include Tailwind CSS -->
    <link
      href="https://unpkg.com/tailwindcss@latest/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body class="bg-slate-50 m-8">
  <form action="loginprocess.php" method="post">

      <div class="w-full  max-w-md mx-auto">
        <div class="header mb-4 flex">
            <p class="text-3xl font-bold "> Sign Up</p>
        </div>
        <div class="tag"> Free Forever. No credit card needed</div>
        <br>
        
        <div class="username mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="name">
            Username
          </label>
          <input
            class="shadow bg-slate-50 border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline"
            id="name" name="uName"
            type="name"
            placeholder="Enter your Name"
          />
        </div>
        
        <div class="pw mb-6">
          <label class="block text-gray-700 font-bold mb-2" for="password">
            Password
          </label>
          <input name="pass"
            class="shadow border border-gray-400 bg-slate-50 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline"
            id="password"
            type="password"
            placeholder="Enter your password"
          />
        </div>

        
        <div class="flex items-center mb-8 justify-between">
          <button
            class="bg-blue-500 w-full hover:bg-blue-300 text-white font-bold py-2 px-4 rounded-full focus:shadow-outline"
            type="submit"
          >
            Register 
          </button>
          
        </div>
        
        <p class="text-center text-gray-500 text-xs">
          &copy;2023 Sisnovate Inc. All rights reserved.
        </p>

    </form>
  </body>
</html>
