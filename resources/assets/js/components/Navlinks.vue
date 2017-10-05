<template>
<div>
    <ul class="nav navbar-nav navbar-right" v-if="!type">        
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
</div>
</template>

<script>
export default {

    props: ['user', 'password']
    
}
</script>

<style scoped>

</style>