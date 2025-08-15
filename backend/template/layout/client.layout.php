<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
  <title>Document</title>
</head>
<body class="p-0 m-0 box-border bg-[#E1EEBC] h-screen w-[100%] flex flex-col">

  <div class="w-full h-[150px]  flex flex-row gap-8">
    <div class="h-full w-[10%] flex items-center justify-center">
      <img src="../asset/images/logogram.png" alt="" srcset="">
    </div>
    <div class="h-[60px] w-[70%]  bg-[#FFFFFF] mt-7 rounded-2xl">
      <i class="fa-solid fa-magnifying-glass ml-3" style="color: #9a9a9a;"></i>
      <input type="text" class="h-full w-[90%] ml-5 outline-none border-none" placeholder="mettez le code de votre colis">
      
    </div>
    <a href="/?page=login"  class="h-[60px] w-[15%] bg-[#328E6E] mt-7 flex justify-center items-center rounded-2xl text-2xl font-bold  text-[#FFFFFF]">
        Se connecter
    </a>

  </div>
  <div class="w-full h-full  p-10">
    <?php echo $content ?>
       
  </div>
</body>
</html>

