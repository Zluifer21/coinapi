<template>
   <div class="row principal" >
       <div class="col-md-12">
           <spinner-component v-show="load"></spinner-component>
       </div>
       <div class="col-md-3" v-for="coin in coins">
            <div class="card">
                <div class="card-body">
                    {{ coin.asset_id }}
                </div>
               <button  class="btn btn-primary" @click="show(coin)"> ver </button>
            </div>
        </div>
       <div class="col-md-12">
           <show-component :coin="showcoin" >

           </show-component>
       </div>
    </div>

</template>


<style src="./coin-component.css"></style>
<script src="./coin-component.js"></script>
