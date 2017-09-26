<template>
<div class="container">
    <div class="row">
        <div class="jumbotron">
            <div class="container">
                <h1>New Hire form</h1>
                <p>Create login and information for new Staff</p>
                <a href="/employees" class="btn btn-default">Cancel</a>
            </div>
        </div>

        <div class="col-md-8">
            <form method="post" v-on:submit.prevent="createUser">
                <div v-bind:class="{ 'form-group': true, 'has-error': errors.firstname }">
                    <label>Firstname</label>
                    <input type="text" v-model="user.firstname" class="form-control">
                    <span class="help-block" v-for="error in errors.firstname">{{ error }}</span>
                </div>

                <div v-bind:class="{ 'form-group': true, 'has-error': errors.lastname }">
                    <label>Lastname</label>
                    <input type="text" v-model="user.lastname" class="form-control">
                    <span class="help-block" v-for="error in errors.lastname">{{ error }}</span>
                </div>

                <div v-bind:class="{ 'form-group': true, 'has-error': errors.username }">
                    <label>Username</label>
                    <input type="text" v-model="user.username" class="form-control">
                    <span class="help-block" v-for="error in errors.username">{{ error }}</span>
                </div>

                <div v-bind:class="{ 'form-group': true, 'has-error': errors.email }">
                    <label>Email</label>
                    <input type="email" v-model="user.email" class="form-control">
                    <span class="help-block" v-for="error in errors.email">{{ error }}</span>
                </div>

                <div v-bind:class="{ 'form-group': true, 'has-error': errors.password }">
                    <label>Password</label>
                    <input type="password" v-model="user.password" class="form-control">
                    <span class="help-block" v-for="error in errors.password">{{ error }}</span>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-md">Create New User</button>
                </div>
            </form>     
        </div>  <!-- col-8 -->
    </div><!-- row --> 
</div><!-- container -->
</template>

<script>

export default {
    data() {
        return {
            user: [],
            errors: [],
        }        
    },

    mounted(){
        console.log('Employee form mounted.');       
    }   
}

</script>

<style scoped>

</style>