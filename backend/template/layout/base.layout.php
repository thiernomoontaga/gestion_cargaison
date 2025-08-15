<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

  <title>Document</title>
</head>
<body class="p-0 m-0 box-border">
  <div class="flex flex-row h-screen w-full bg-[#E1EEBC]">
    <div class="flex flex-col bg-[#FFFFFF] h-full w-[18%] rounded-r-[100px] shadow-[-6px_-6px_10px_-2px_rgba(50,142,110,0.4),-6px_0_10px_-2px_rgba(50,142,110,0.4),-6px_6px_10px_-2px_rgba(50,142,110,0.4)] border-r-5  border-b-2 border-[#328E6E]">
      <div class="h-[100px] w-full flex items-center justify-center  mt-8">
        <img src="../asset/images/logogram.png" alt="" srcset="">
      </div>
      <div class="text-2xl text-center text-[#90C67C] font-bold">
        Gp du monde 
      </div>
      <div class="h-full w-full  p-10">
        <a href="/dashbord" class="h-[50px] w-full  flex flex-row items-center gap-4 rounded-2xl mt-5 hover:bg-[#ADDA9C] text-[#90C67C] text-2xl font-bold hover:text-[#FFFFFF]">
          <i class="fa-solid fa-house text-3xl ml-5 " style="color: #328e6e;"></i>
          <span>Dashbord</span>
        </a>
        <a href="/cargaison" class="h-[50px] w-full  flex flex-row items-center gap-6 rounded-2xl mt-5 hover:bg-[#ADDA9C] text-[#90C67C] text-2xl font-bold hover:text-[#FFFFFF]">
          <i class="fa-solid fa-truck ml-5" style="color: #328e6e;"></i>
          <span>Cargaison</span>
        </a>
        <a href="/colis" class="h-[50px] w-full  flex flex-row items-center gap-6 rounded-2xl mt-5 hover:bg-[#ADDA9C] text-[#90C67C] text-2xl font-bold hover:text-[#FFFFFF]">
          <i class="fa-solid fa-layer-group ml-5" style="color: #328e6e;"></i>
          <span>Colis</span>
        </a>
        <a href="" class="h-[50px] w-full  flex flex-row items-center gap-6 rounded-2xl mt-5 hover:bg-[#ADDA9C] text-[#90C67C] text-2xl font-bold hover:text-[#FFFFFF]">
          <i class="fa-solid fa-chart-simple ml-5" style="color: #328e6e;"></i>
          <span>Suivi</span>
        </a>
        <a href="" class="h-[50px] w-full  flex flex-row items-center gap-6 rounded-2xl mt-5 hover:bg-[#ADDA9C] text-[#90C67C] text-2xl font-bold hover:text-[#FFFFFF]">
          <i class="fa-solid fa-gear ml-5" style="color: #328e62;"></i>
          <span>parametre</span>
        </a>
        <a href="" class="h-[50px] w-full  flex flex-row items-center gap-6 rounded-2xl mt-5 hover:bg-[#ADDA9C] text-[#90C67C] text-2xl font-bold hover:text-[#FFFFFF] mt-70">
          <i class="fa-solid fa-right-from-bracket ml-5" style="color: #328e6e;"></i>
          <span>Deconnexion</span>
        </a>
        

      </div>
    </div>
    <div class="flex bg-[#E1EEBC] h-full w-[80%] pt-5 pl-6 flex-col">
      <div class="h-[100px] w-full bg-[#FFFFFF] rounded-2xl flex flex-row items-center p-4 gap-4">
        <div class="text-3xl text-[#328e62] font-bold ">Dashbord</div>
        <div class="h-[50px] w-[1000px] bg-[#F4F8F5] rounded-2xl items-center flex">
          <i class="fa-solid fa-magnifying-glass  ml-4" style="color: #9a9a9a;"></i>
          <input type="text" class="w-full h-full outline-none border-none ml-4" placeholder="search">
        </div>
        <div class="h-full w-[70px] bg-[#328e62] rounded-2xl flex items-center justify-center">
          <i class="fa-solid fa-bell fa-2xl" style="color: #ffffff;"></i>
        </div>
         <div class="h-full w-[70px]  rounded-2xl flex items-center justify-center">
          <i class="fa-solid fa-user fa-2xl" style="color: #328e62;"></i>
        </div>
         <div class="h-full w-[70px]  rounded-2xl flex items-center justify-center text-[#328e62] font-bold text-2xl">
          Gerant
        </div>
      </div>
      <div class="h-full w-full  mt-5">
          <?php echo $content ?>
      </div>

    </div>

  </div>



  
</body>
</html>

