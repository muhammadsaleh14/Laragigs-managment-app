Skip to content
Product
Solutions
Open Source
Pricing
Search
Sign in
Sign up
bradtraversy
/
laragigs
Public
Code
Issues
3
Pull requests
5
Actions
Projects
Security
Insights
laragigs/_laragigs_theme/manage.html
@bradtraversy
bradtraversy Added doc and theme
Latest commit fc8c853 on Apr 24, 2022
History
1 contributor
174 lines (167 sloc) 7.24 KB


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="icon" href="images/favicon.ico" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdn.tailwindcss.com"></script>

   <script>
   tailwind.config = {
      theme: {
         extend: {
            colors: {
               laravel: "#ef3b2d",
            },
         },
      },
   };
   </script>
   <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>

<body class="mb-48">
   <nav class="flex justify-between items-center mb-4">
      <a href="index.html"><img class="w-24" src="images/logo.png" alt="" class="logo" /></a>
      <ul class="flex space-x-6 mr-6 text-lg">
         <li>
            <a href="manage.html" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Gigs</a>
         </li>
         <li>
            <form action="index.html">
               <button>
                  <i class="fa-solid fa-door-closed"></i> Logout
               </button>
            </form>
         </li>
      </ul>
   </nav>

   <main>
      <!-- Search -->
      <form action="/">
         <div class="relative border-2 border-gray-100 m-4 rounded-lg">
            <div class="absolute top-4 left-3">
               <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
            </div>
            <input type="text" name="search"
               class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
               placeholder="Search Laravel Gigs..." />
            <div class="absolute top-2 right-2">
               <button type="submit" class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
                  Search
               </button>
            </div>
         </div>
      </form>

      <div class="mx-4">

      </div>
   </main>

   <footer
      class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
      <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

      <a href="create.html" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
   </footer>
</body>

</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
laragigs/_laragigs_theme/manage.html at main · bradtraversy/laragigs · GitHub
