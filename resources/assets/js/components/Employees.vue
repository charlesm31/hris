<template>
<div class="container-fluid">
    <div class="jumbotron">
        <div class="container">
            <h1>Employees</h1>
            <p>
                Employee list pulled from databse using <strong>Vue.js via axion with CRUD functionality</strong>
                <button type='button' class="btn btn-success pull-right" @click="toggleForm = true"  v-show="toggleForm == false">Create New User</button>
                <button class="btn btn-default btn-md pull-right" @click="toggleForm = false"  v-show="toggleForm == true">Cancel</button>
            </p>            
        </div>
    </div>

    <form v-on:submit.prevent="createUser"  method="post" class="container well" v-show="toggleForm == true">
        <h1 class="text-center">New Hire form </h1><hr>

        <h2>User Credentials</h2><hr>
        <div class="row">
            <div class="col-md-3">
                <div v-bind:class="{ 'form-group': true, 'has-error': errors.username }">
                    <label>Username</label>
                    <input type="text" v-model="user.username" class="form-control" placeholder="Username">
                    <span class="help-block" v-for="error in errors.username">{{ error }}</span>
                </div>
            </div>
            <div class="col-md-3">
                <div v-bind:class="{ 'form-group': true, 'has-error': errors.email }">
                    <label>Email</label>
                    <input type="email" v-model="user.email" class="form-control" placeholder="name@example.com">
                    <span class="help-block" v-for="error in errors.email">{{ error }}</span>
                </div>
            </div>
            <div class="col-md-3">
                <div v-bind:class="{ 'form-group': true, 'has-error': errors.password }">
                    <label>Password</label>
                    <input type="password" v-model="user.password" class="form-control" placeholder="#########">
                    <span class="help-block" v-for="error in errors.password">{{ error }}</span>
                </div>
            </div>
            <div class="col-md-3">
                <div v-bind:class="{ 'form-group': true, 'has-error': errors.type }">
                    <label>Account Type</label>
                    <select class="form-control" v-model="user.type">
                        <option :value="Admin">Admin</option>
                        <option :value="User">User</option>
                    </select>
                    <span class="help-block" v-for="error in errors.type">{{ error }}</span>
                </div>
            </div>
        </div><!-- row -->  

        <h2>Employee Information</h2>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div v-bind:class="{ 'form-group': true, 'has-error': errors.firstname }">
                    <label>Firstname</label>
                    <input type="text" v-model="user.firstname" class="form-control">
                    <span class="help-block" v-for="error in errors.firstname">{{ error }}</span>
                </div>
            </div>
            <div class="col-md-3">
                <div v-bind:class="{ 'form-group': true, 'has-error': errors.lastname }">
                    <label>Lastname</label>
                    <input type="text" v-model="user.lastname" class="form-control">
                    <span class="help-block" v-for="error in errors.lastname">{{ error }}</span>
                </div>
            </div>
            <div class="col-md-3">
                <div v-bind:class="{ 'form-group': true, 'has-error': errors.gender }">
                    <label>Gender</label>
                    <select class="form-control" v-model="user.gender">
                        <option :value="Male" >Male</option>
                        <option :value="Female">Female</option>
                    </select>
                    <span class="help-block" v-for="error in errors.gender">{{ error }}</span>
                </div>
            </div>
            <div class="col-md-3">
                <div v-bind:class="{ 'form-group': true, 'has-error': errors.mobile }"> 
                    <label>Mobile</label>
                    <input type="text" v-model="user.mobile" class="form-control">
                    <span class="help-block" v-for="error in errors.mobile">{{ error }}</span>
                </div>
            </div>
        </div><!-- row -->
        
                    
        <h2>Job Information</h2><hr>
        <div class="row">
            <div class="col-md-4">
                <div v-bind:class="{ 'form-group': true, 'has-error': errors.role }">
                    <label>Role</label>
                    <select class="form-control" v-model="user.role">
                        <option :value="Fulltime" >Fulltime</option>
                        <option :value="Casual">Casual</option>
                    </select>
                    <span class="help-block" v-for="error in errors.role">{{ error }}</span>
                </div>
            </div>
            <div class="col-md-4">
                <div v-bind:class="{ 'form-group': true, 'has-error': errors.store }">
                    <label>Store Assignment</label>
                    <select class="form-control" v-model="user.store">
                        <option :value="1" >Carindale GF</option>
                        <option :value="2">Carindale 1</option>
                        <option :value="3">Redbank</option>
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
                    <label>Hiring Manager</label>
                    <input type="text" v-model="user.hiring_manager" class="form-control">
                    <span class="help-block" v-for="error in errors.hiring_manager">{{ error }}</span>
                </div> 
            </div>                
        </div> 

        <div class="form-group pull-right">
            <button type="submit" class="btn btn-success btn-md">Save</button>
            <button class="btn btn-default btn-md pull-right" @click="toggleForm = false"  v-show="toggleForm == true">Cancel</button>
        </div>
    </form>            

    <div class="container">
        <table class="table table-stripped table-bordered table-condensed table-responsive">
            <thead>
                <tr>
                    <td>Password</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Type</td>
                    <td>Firstname</td>
                    <td>Lastname</td>
                    <td>Gender</td>
                    <td>Mobile</td>
                    <td>Role</td>
                    <td>Assigned Store</td>
                    <td>Pnumber</td>
                    <td>Salary</td>
                    <td>Starting Date</td>
                    <td>Hiring Manager</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <Employee v-for="user in users" :key="user.id" v-bind:user="user"></Employee>
            </tbody>
        </table>
    </div>
</div>
</template>

<script>
Vue.component('Employee', require('./Employee.vue'));

export default {
    data() {
        return {
            users:[],
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
            toggleForm: false,
            errors: [],
        }        
    },

    created(){        
        this.fetchUsers();
    },
    
    methods: {
        fetchUsers(){
            axios.get('/users').then(response => {
                this.users = response.data.users;           
                // console.log(response.data.users);
            });
        },

        createUser(){
            axios.post('/users/', this.user).then(response => {
                const data = response.data.user; 
                console.log(data);

                //  prepare new user
                this.user = {
                    username:   data.username,
                    email:      data.email,
                    type:       data.type,
                    firstname:  data.firstname,
                    lastname:   data.lastname,
                    gender:     data.gender,
                    mobile:     data.mobile,
                    role:       data.role,
                    store:      data.store,
                    pnumber:    data.pnumber,
                    salary:     data.salary,
                    start_date: data.start_date.date,
                    hiring_manager: data.hiring_manager
                };       

                console.log(this.user)

                // add new user to the users
                this.users.push(this.user);

                // reset the form
                this.user = {username: '',email: '', password: '', type: '', firstname: '', lastname: '',
                    gender: '', mobile: '', role: '', store: '', pnumber: '', salary: '', start_date: '',
                    hiring_manager: ''
                }

                this.toggleForm =  false;

            });
        }   
    }
}
</script>

<style scoped>
h2{
    margin-top: 5px;
    margin-bottom: 0px;
}

hr{
    margin-top: 10px;
    margin-bottom: 10px;
}

form{
    margin-bottom: 30px;
}
.container-fluid{
    padding: 0;
}

.table-wrapper{
    margin-left: 10%;
    margin-right: 10%;
}
</style>