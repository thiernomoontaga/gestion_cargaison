<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
</head>
<body>
  <div class="flex flex-row h-screen w-full">
    <div class="bg-[] h-full w-[55%] bg-[#90C67C]">
      <div class="h-[100px] w-full">
        <div class="flex items-center justify-center mt-30">
           <img src="/images/Frame.png" alt="" srcset="" >
        </div>
      </div>
      <div class="text-[#fff]   flex items-center flex justify-center mt-10 flex-col">
        <h1 class="text-4xl font-bold">
            Bienvenu dans gp du monde 
        </h1>
        <h2 class="mt-5 text-3xl">
          transferez vos colis 
        </h2>
                <h2 class="mt-5 text-3xl">
          En toute securite
        </h2>

        <div class="flex mt-10">
          <img src="/images/image 4.png" alt="" srcset="">
        </div>


      </div>
    </div>
    <div class="bg-[#E1EEBC] h-screen w-[45%]">
      <div class="text-[#328E6E] text-5xl flex flex-row justify-center items-center font-bold mt-60">
        connexion Gerant
      </div>
      <form action="" method="post" class="w-full h-[300px] mt-5 flex flex-col justify-center items-center">
                <div class="p-5 h-[20px] bg-[#F4F8F5] w-[600px] rounded-xl mt-10 flex flex-row items-center">

          <i class="fa-solid fa-envelope" style="color: #9a9a9a;"></i>
          <input type="text" name="" id="" class="border outline-none w-full border-none ml-4" placeholder="email">
        </div>
        <div class="p-5 h-[20px] bg-[#F4F8F5] w-[600px] rounded-xl mt-10 flex flex-row items-center">
          <i class="fa-solid fa-lock" style="color: #9a9a9a;"></i>
          <input type="password" name="" id="" class="border outline-none w-full border-none ml-4" placeholder="password">
        </div>
        <button  type="submit"  class="mt-10 bg-[#328E6E] text-xl text-[#fff] p-3 w-[200px] rounded-2xl cursor-pointer" >se connecter</button>
      </form>

    </div>

  </div>
  
</body>
</html>
