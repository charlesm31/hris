<template>
<div class="container-fluid">
    <div class="jumbotron">
        <div class="container">
            <h1>Employees</h1>
            <p>Below are the list of employees pulled from <strong>Vue.js via axion</strong></p>
            <a href="/employee/create" class="btn btn-success">Create New</a>
        </div>
    </div>    

    <div class="table-wrapper">
        <table class="table table-stripped table-bordered table-condensed table-responsive">
            <thead>
                <tr>
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
                <tr v-for="user in users">
                    <td>{{ user.username }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.type }}</td>
                    <td>{{ user.firstname }}</td>
                    <td>{{ user.lastname }}</td>
                    <td>{{ user.gender }}</td>
                    <td>{{ user.mobile }}</td>
                    <td>{{ user.role }}</td>
                    <td>{{ user.store }}</td>
                    <td>{{ user.pnumber }}</td>
                    <td>{{ user.salary }}</td>
                    <td>{{ user.start_date }}</td>
                    <td>{{ user.hiring_manager }}</td>
                    <td>
                        <button type="button" class="btn btn-primary"  v-if="user.type != 'admin'">Update</button>
                        <button type="button" class="btn btn-danger"  v-if="user.type != 'admin'">Update</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</template>

<script>

export default {
    data() {
        return {
            users:[],
        }        
    },

    mounted(){
        console.log('Profile mounted.');
        
        axios.get('/users').then( (response) => {
            this.users = response.data.users;           
            console.log(response.data.users);
        });
    }   
}
</script>

<style scoped>
.container-fluid{
    padding: 0;
}

.table-wrapper{
    margin-left: 10%;
    margin-right: 10%;
}
</style>