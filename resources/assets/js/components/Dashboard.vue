<template>
    <div class="container">
        <h1>Welcome on Dashboard</h1>
        <p>you are now login, I am a simple <strong>vue component</strong></p>
    </div>
</template>

<script>
export default {       
    data() {
        return {
            names: []
        }        
    },

    created(){
        console.log('Dasboard mounted.')                    
    },   
    
}
</script>

<style scoped>

</style>