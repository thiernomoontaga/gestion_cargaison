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
  <div class="flex flex-row h-screen w-full ">
    <div class=" h-full w-[55%] bg-[#90C67C] ">
      <div class="h-[100px] w-full">
        <div class="flex items-center justify-center mt-30">
           <img src="../asset/images/Frame.png" alt="" srcset="" >
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
          <img src="../asset/images/image 4.png" alt="" srcset="">
        </div>


      </div>
    </div>
    <div class="bg-[#E1EEBC] h-screen w-[45%] ">
    
       <?php echo $content ?>

    </div>

  </div>
  
</body>
</html>


