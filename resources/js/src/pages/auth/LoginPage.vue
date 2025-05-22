<script setup>
import { App } from "../../api/api";
</script>


<template>
    <div class="flex flex-row justify-between mt-40">
        <div></div>
        <div class="w-[300px]">
            <h1 class="mb-3 text-3x1 ffont-semibold">Sign In</h1>
            <input type="text" placeholder="enter email"
            class=" mb-2 border rounded-md py-2 px-2 w-[100%]"
            >
            <button class= " mb-2 bg-indigo-700 text-white py-2 px-2 rounded-md shadow-md w-[100%]">
                Sign In</button>

                <div class="flex mb-2">
                    
                    

                </div>

 
        <div class="flex flex-column">
                <Router-link to="/signup" class="font-medium hover:underline"
                    >Sign up ?</Router-link
                >
        </div> 


           <div class="flex mb-2">
                <hr class="h-[1px] bg-black w-[48%] mt-3" />
                <div class="font-semibold">or</div>
                <hr class="h-[1px] bg-black w-[48%] mt-3" />
            </div>
            <button 
                class="flex justify-center bg-gray-300 rounded-md py-2 px-2 gap-2 w-[100%]">
                <img :src="App.baseUrl + '/img/google.svg'" alt="logo" />
                <span>Continue with Google</span>
            </button>
        </div>
        <div></div>
    </div>
</template>