<template>
<div>
    <div class="jumbotron">
        <div class="container">
            <h1>New Hire form </h1>
            <p>Create login and information for new Staff</p>            
        </div>
    </div>

    <div class="container">
        <form v-on:submit.prevent="createUser"  method="post" >
            <div class="row">
                <div class="col-md-6">
                    <h2>User Credentials</h2><hr>
                    <div class="row">           
                        <div class="col-md-6">
                            <div v-bind:class="{ 'form-group': true, 'has-error': errors.username }">
                                <label>Username</label>
                                <input type="text" v-model="user.username" class="form-control" placeholder="Username">
                                <span class="help-block" v-for="error in errors.username">{{ error }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div v-bind:class="{ 'form-group': true, 'has-error': errors.email }">
                                <label>Email</label>
                                <input type="email" v-model="user.email" class="form-control" placeholder="name@example.com">
                                <span class="help-block" v-for="error in errors.email">{{ error }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div v-bind:class="{ 'form-group': true, 'has-error': errors.password }">
                                <label>Password</label>
                                <input type="password" v-model="user.password" class="form-control" placeholder="#########">
                                <span class="help-block" v-for="error in errors.password">{{ error }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div v-bind:class="{ 'form-group': true, 'has-error': errors.type }">
                                <label>Account Type</label>
                                <select class="form-control" v-model="user.type">
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
                                <span class="help-block" v-for="error in errors.type">{{ error }}</span>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- col-6 -->

                <div class="col-md-offset-1 col-md-5">
                    <h2>Employee Information</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div v-bind:class="{ 'form-group': true, 'has-error': errors.firstname }">
                                <label>Firstname</label>
                                <input type="text" v-model="user.firstname" class="form-control">
                                <span class="help-block" v-for="error in errors.firstname">{{ error }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div v-bind:class="{ 'form-group': true, 'has-error': errors.lastname }">
                                <label>Lastname</label>
                                <input type="text" v-model="user.lastname" class="form-control">
                                <span class="help-block" v-for="error in errors.lastname">{{ error }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div v-bind:class="{ 'form-group': true, 'has-error': errors.gender }">
                                <label>Gender</label>
                                <select class="form-control" v-model="user.gender">
                                    <option value="Male" >Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <span class="help-block" v-for="error in errors.gender">{{ error }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div v-bind:class="{ 'form-group': true, 'has-error': errors.mobile }"> 
                                <label>Mobile</label>
                                <input type="text" v-model="user.mobile" class="form-control">
                                <span class="help-block" v-for="error in errors.mobile">{{ error }}</span>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- col-6 --> 
            </div><!-- row -->  
                        
            <h2>Job Information</h2><hr>
            <div class="row">
                <div class="col-md-4">
                    <div v-bind:class="{ 'form-group': true, 'has-error': errors.role }">
                        <label>Role</label>
                        <select class="form-control" v-model="user.role">
                            <option value="Fulltime" >Fulltime</option>
                            <option value="Casual">Casual</option>
                        </select>
                        <span class="help-block" v-for="error in errors.role">{{ error }}</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div v-bind:class="{ 'form-group': true, 'has-error': errors.store }">
                        <label>Store Assignment</label>
                        <select class="form-control" v-model="user.store">
                            <option value="1" >Carindale GF</option>
                            <option value="2">Carindale 1</option>
                            <option value="3">Redbank</option>
                        </select>
                        <span class="help-block" v-for="error in errors.store">{{ error }}</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div v-bind:class="{ 'form-group': true, 'has-error': errors.pnumber }">
                        <label>Pnumber</label>
                        <input type="text" v-model="user.pnumber" class="form-control">
                        <span class="help-block" v-for="error in errors.pnumber">{{ error }}</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div v-bind:class="{ 'form-group': true, 'has-error': errors.salary }">
                        <label>salary</label>
                        <input type="text" v-model="user.salary" class="form-control">
                        <span class="help-block" v-for="error in errors.salary">{{ error }}</span>
                    </div>  
                </div>
                <div class="col-md-4">
                    <div v-bind:class="{ 'form-group': true, 'has-error': errors.start_date }">
                        <label>Starting Date</label>
                        <input type="date" v-model="user.start_date" class="form-control">
                        <span class="help-block" v-for="error in errors.start_date">{{ error }}</span>
                    </div>    
                </div>
                <div class="col-md-4">
                    <div v-bind:class="{ 'form-group': true, 'has-error': errors.hiring_manager }">
                        <label>Hiring</label>
                        <input type="text" v-model="user.hiring_manager" class="form-control">
                        <span class="help-block" v-for="error in errors.hiring_manager">{{ error }}</span>
                    </div> 
                </div>                
            </div> 

            <div class="form-group">
                <button type="submit" class="btn btn-success btn-md">Create New User</button>
            </div>
        </form>     
    </div><!-- container -->
</div>
</template>

<script>

export default {
    data() {
        return {
            user: {
               username: '',
               email: '',
               password: '',
               type: '',
               firstname: '',
               lastname: '',
               gender: '',
               mobile: '',
               role: '',
               store: '',
               pnumber: '',
               salary: '',
               start_date: '',
               hiring_manager: ''
            },
            errors: [],
        }        
    },

    mounted(){
        console.log('Employee form mounted.');         
    },
    
    methods: {
        createUser(){
            axios.post('/users/', this.user).then(response => {
                console.log(response);           
            }).catch(error => {
                console.log(error);
            });
        }       
    }
}

</script>

<style scoped>

</style>