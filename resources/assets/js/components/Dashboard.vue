<template>
    <div class="container">
        <h1>Welcome on Dashboard</h1>
        <p>you are now login</p>
    </div>
</template>

<script>
export default {       
    data() {
        return {
            names: []
        }        
    },

    mounted(){
        console.log('Dasboard mounted.')                    
        axios.get('/test').then(response => this.names = response.data);
    },   
    
}
</script>

<style scoped>

</style>