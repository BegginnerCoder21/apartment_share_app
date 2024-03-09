<template>
    <div>
        <form @submit.prevent="submit_data" class="flex justify-center px-32 md:px-0 items-center mt-10 flex-col space-y-6">
            
            <div  class="flex flex-col space-y-6 md:space-y-0  md:flex-row md:space-x-16">
                <div class="flex flex-col space-y-1 items-start">
                    <label for="availability_date">Date de disponilité</label>
                    <input  type="date" v-model="data.availability_date" name="availability_date" id="availability_date"  class="w-[230px] rounded-md ">
                </div>
                <div class="flex flex-col space-y-1 items-start">
                    <label for="budget">Budget</label>
                    <input class="rounded-md w-[230px]" v-model="data.budget" type="number" name='budget' id="budget">
                </div>
            </div> 
            <div class="flex space-y-6 md:space-y-0 flex-col md:flex-row md:space-x-16">

                <div class="flex  flex-col space-y-1 "> 
                    <label for="coloc_gender">Type de logement souhaité</label>
                    <select name="appartment_type" v-model="data.appartment_type" class="w-[230px] rounded-md" id="appartment_type">
                        <option value="1">Imeuble</option>
                        <option value="2">Cour commune</option>
                        <option value="3">Peu importe</option>
                    </select>
                </div>
                <div class="flex flex-col space-y-1 "> 
                    <label for="coloc_gender">Genre du colocataire</label>
                    <select name="coloc_gender" v-model="data.coloc_gender" class="w-[230px] rounded-md" id="coloc_gender">
                        <option value="1">Masculin</option>
                        <option value="2">Feminin</option>
                    </select>
                </div>
            </div>
            <div class="flex w-[500px] flex-col space-y-1 px-32 md:px-0">
                <label for="">Communes souhaitée</label>
                <select class="border-black" v-model="data.communes" name="communes" id="communes" multiple>
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
            <div class="flex flex-col space-y-1 items-start px-32">
                <label for="description">Description</label>
                <textarea name="description" v-model="data.description"  id="description" class="rounded-md w-[235px] md:w-[510px]" ></textarea>
            </div>
            <button type="submit" class="px-5 py-2 hover:bg-indigo-600 text-white rounded-md bg-indigo-500">Soumettre</button>
        </form>
    </div>
</template>

<script setup >

import axios from "axios";
import { ref } from "vue";
import {onMounted } from "vue";

const data = ref({
    availability_date : '',
    budget : 0,
    coloc_gender : 1,
    appartment_type : 1,
    description : '',
    communes : []
});

const submit_data = async() => {
 
    await axios.post('http://127.0.0.1:8000/search-store-appartment',data.value);

    data.value.appartment_type = 1;
    data.value.availability_date = '';
    data.value.budget = 0;
    data.value.coloc_gender = 1;
    data.value.communes = [];
    data.value.description = "";
}
    
    onMounted(async () => {
        const options = {
        rounded: true, 
        shadow: true,      
        placeholder: 'Recherche', 
        tagColor: {
            textColor: '#FFF',
            borderColor: '#6366f1',
            bgColor: '#6366f1',
        },
        onChange: function (values) {
            data.value.communes = values;
        }
    };
    
        new MultiSelectTag('communes', options);
});

    
</script>

<style  scoped>


</style>