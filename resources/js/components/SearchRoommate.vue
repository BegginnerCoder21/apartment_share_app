<template>
    <div>
        <form @submit.prevent="submit_data" class="flex justify-center px-32 md:px-0 items-center mt-10 flex-col space-y-4">
            <div class="flex items-center space-y-6 md:space-y-0 flex-col md:flex-row md:space-x-36">
                <div class="flex flex-col space-y-1 "> 
                    <label for="commune">Commune de l'appartement(*)</label>
                    <select name="commune" v-model="data.commune" class="w-[230px] rounded-md" id="commune">
                        <option value="1">Treichville</option>
                        <option value="2">Marcory</option>
                        <option value="3">Koumassi</option>
                        <option value="4">Attecoubé</option>
                        <option value="5">Port bouet</option>
                        <option value="6">Yopougon</option>
                        <option value="7">Cocody</option>
                        <option value="8">Plateau</option>
                        <option value="9">Bingerville</option>
                        <option value="10">Abobo</option>
                    </select>
                </div>
                <div class="flex space-x-2 items-center">
                   
                    <label for="is_furnished" class="relative text-xl text-gray-500 flex mt-6 cursor-pointer items-center rounded-full p-3" data-ripple-dark="true"
                    >Est meublé</label>
                    <input
                        type="checkbox"
                        class="before:content[''] mt-6 peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-indigo-300 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-indigo-600 before:opacity-0 before:transition-opacity checked:border-indigo-500 checked:bg-indigo-500 checked:before:bg-indigo-500 hover:before:opacity-10"
                        id="is_furnished"
                        name="is_furnished"
                        v-model="data.is_furnished"
                    />
                <!-- <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-white opacity-0 transition-opacity peer-checked:opacity-100">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3.5 w-3.5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    stroke="currentColor"
                    stroke-width="1"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                    ></path>
                    </svg>
                </div> -->
            
                </div>
                
            </div>
            <div  class="flex flex-col space-y-6 md:space-y-0  md:flex-row md:space-x-16">
                <div class="flex flex-col space-y-1 items-start">
                    <label for="security_deposit">Caution</label>
                    <input  type="number" v-model="data.security_deposit" name="security_deposit" id="security_deposit"  class="w-[230px] rounded-md ">
                </div>
                <div class="flex flex-col space-y-1 items-start">
                    <label for="rent">Loyer(*)</label>
                    <input class="rounded-md w-[230px]" v-model="data.rent" type="number" name='rent' id="rent">
                </div>
            </div> 
            <div class="flex space-y-6 md:space-y-0 flex-col md:flex-row md:space-x-16">

                <div class="flex  flex-col space-y-1 "> 
                    <label for="roommate_gender">Type de logement proposé(*)</label>
                    <select name="housing_type" v-model="data.housing_type" class="w-[230px] rounded-md" id="housing_type">
                        <option value="1">Imeuble</option>
                        <option value="2">Cour commune</option>
                        <option value="3">Peu importe</option>
                    </select>
                </div>
                <div class="flex flex-col space-y-1 "> 
                    <label for="roommate_gender">Genre du colocataire(*)</label>
                    <select name="roommate_gender" v-model="data.roommate_gender" class="w-[230px] rounded-md" id="roommate_gender">
                        <option value="1">Masculin</option>
                        <option value="2">Feminin</option>
                        <option value="3">Peu importe</option>
                    </select>
                </div>
            </div>
            <div class="flex space-x-3 ">
                <label class="text-lg">Image d'appartment: </label>
                <input @input="(e) => data.image = e.target.files[0]" type="file" name="image" id="image">
            </div>
            <div class="flex flex-col space-y-1 items-start px-32">
                <label for="description">Description(*)</label>
                <textarea name="description" v-model="data.description"  id="description" class="rounded-md w-[235px] md:w-[510px]" ></textarea>
            </div>
            <button type="submit" class="px-5 py-2 hover:bg-indigo-600 text-white rounded-md bg-indigo-500">Soumettre</button>
        </form>
    </div>
</template>

<script setup>
import axios from "axios";
import { ref } from "vue";
const data = ref({
    security_deposit : 0,
    rent : 0,
    is_furnished : true,
    roommate_gender : 1,
    housing_type : 1,
    description : '',
    commune : 1,
    image : ''
});

const submit_data = async() => {
   
    await axios.post('http://127.0.0.1:8000/search-store-roommate',data.value,{
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          })
    .then((res) => {
        console.log('success',res);
    }).catch((error) =>  {
        console.log('error',error);
    });
   
    data.value.housing_type = 1;
    data.value.security_deposit = 0;
    data.value.rent = 0;
    data.value.roommate_gender = 1;
    data.value.commune = 1;
    data.value.description = "";
}
</script>

<style scoped>

</style>