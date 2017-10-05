<template>
<div>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="/">HRIS</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">                   
            <!-- Right Side Of Navbar -->                            
            <ul class="nav navbar-nav navbar-right" v-if="!isLoggedIn">        
                <!-- Authentication Links -->
                <form method="post" class="navbar-form navbar-right" @submit.prevent="login">
                    <div class="form-group">
                        <input type="text" name="user" placeholder="Email or Username" class="form-control" v-model="user">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control" v-model="password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </div>
                </form>
            </ul>

            <ul class="nav navbar-nav navbar-right" v-else>
                <li><a href="/dashboard">Home</a></li>
                <li><a href="/employees">Employees</a></li>
                <li><a href="/profile">Profile</a></li>                                                      
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        username <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">    
                        <li><a href="/"></a></li>                                
                        <li>
                            <a href="logout">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>                
        </div><!--/.navbar-collapse -->                
    </div>
</nav>     

<div class="alert alert-danger  validation-alert" style="position: relative;" v-if="errors">
    <ul>            
        <li v-for="error in errors" v-text="error"></li>            
    </ul>
</div>

<div class="alert alert-danger  validation-alert" :class="{ 'alert-success' : isLoggedIn }" style="position: relative;" v-if="message">
    <ul>            
        <li v-text="message"></li>            
    </ul>
</div>

</div>
</template>

<script>
export default {
    data() {
        return {
            user: '',
            password: '',
            errors: '',            
            message: '',
            isLoggedIn: false,
        }
    },

    methods: {
        login(){
            axios.post('/login', {
                user: this.user,
                password: this.password
            })
            .then(response => {
                console.log(response);
                this.message = response.data.message;

                if (this.message == 'success'){
                    this.isLoggedIn = true;
                }

                this.errors = ''
            })
            .catch(error => {
                this.errors = error.response.data.errors;
                this.message = '';
                console.log(this.errors);
            });
        }
    }       
        
}
</script>

<style scoped >
.navbar{
    border-radius: 0px;
}
</style>