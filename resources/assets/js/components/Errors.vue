<template>
<div>
    <div class="alert alert-danger  validation-alert" style="position: relative;">
        <ul>            
            <li v-for="error in errors" v-text="error"></li>            
        </ul>
    </div>
</div>
</template>

<script>
    export default {
        props: errors
    }
</script>

<style scoped>

</style>