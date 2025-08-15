<div>
  <form action="h-full w-full  flex">
     <div class="h-[500px] w-full bg-[#FFFFFF] rounded-2xl mt-20 p-5">
        <div class="text-3xl text-[#328E6E]  flex font-bold">
            <div >Informations </div>
            <div class="ml-[530px]">Trajet</div>
        </div>
        <div class="w-full h-[350px] flex gap-10">
          <div class="w-[48%] border-1 border-[#328E6E] h-[330px] mt-5 rounded-xl p-5">
            <div class="flex flex-col">
              <label for="" class="text-[#328E6E] text-2xl">Type</label>
              <div class="bg-[#E5F0E1] mt-5 w-[630px] rounded-xl h-[50px] flex items-center text-[#637087] text-2xl p-3">
                <select id="cars" class=" outline-none">
                    <option value="saab" class="">Maritime</option>
                    <option value="vw" class="">Routiere</option>
                    <option value="vw" class="">Aerienne</option>
                    <option value="audi" selected>Selectionner le type de cargaison </option>
                </select>
              </div>
            </div>
            <div class="flex flex-col mt-3">
              <label for="" class="text-2xl text-[#328E6E]">Numero cargaison</label>
              <input type="text" class="border-[#DBDEE5] border-1 w-[630px] rounded-xl mt-2 h-10 p-2 outline-none" placeholder="mettez le numero de cargaison ">
            </div>
            <div class="flex flex-col mt-3">
              <label for="" class="text-2xl text-[#328E6E]">Poids cargaison maximum</label>
              <input type="text" class="border-[#DBDEE5] border-1 w-[630px] rounded-xl mt-2 h-10 p-2 outline-none" placeholder="mettez le poids maximum du cargaison ">
            </div>

          </div>
          <div class="w-[48%] border-1 border-[#328E6E] h-[330px] mt-5 rounded-xl flex flex-col p-5">
            <div class="flex flex-col mt-3">
              <label for="" class="text-2xl text-[#328E6E]">Numero cargaison</label>
              <input type="text" class="border-[#DBDEE5] border-1 w-[630px] rounded-xl mt-2 h-10 p-2 outline-none" placeholder="mettez le numero de cargaison ">
            </div>
            <div class="flex flex-col mt-3">
              <label for="" class="text-2xl text-[#328E6E]">Poids cargaison maximum</label>
              <input type="text" class="border-[#DBDEE5] border-1 w-[630px] rounded-xl mt-2 h-10 p-2 outline-none" placeholder="mettez le poids maximum du cargaison ">
            </div>
            <div>
              
            </div>
           

          </div>

        </div>
        <div class="w-[200px] h-[50px] bg-[#328E6E] rounded-2xl flex justify-center items-center text-2xl text-[#FFFFFF] cursor-pointer font-bold mt-5">+ Ajouter colis </div>
     </div>
     <button type="submit" class="bg-[#328E6E] p-2 w-full mt-10 cursor-pointer font-bold rounded-2xl text-2xl text-[#fff]">Creer cargaison</button>
  </form>


</div>

