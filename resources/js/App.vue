<template>
<div>
<div class="row">   Hi {{ thisTime }}</div>
</div>
</template>
<script setup>
import { ref } from 'vue';
let thisTime=ref('');
let currentDate = new Date();
            console.log(currentDate);
setInterval(
    () => {
        thisTime.value = new Date().toLocaleString().replace(/-/g,'-');
        // thisTime.value = new Date().toJSON().slice(0,19).replace(/-/g,'/').replace('T',' ');
},1000
)
           // thisTime.value = new Date().toJSON();//.slice(0,10).replace(/-/g,'/');
            //console.log(thisTime);
</script>
