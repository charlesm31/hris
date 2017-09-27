<template>
<tr>
    <td><button type="button" class="btn btn-warning">Reset</button></td>
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
        <button type="button" class="btn" v-bind:class="{ 'btn-primary': user.type=='user' }" :disabled="user.type == 'admin'">Update</button>
        <button type="button" class="btn" v-bind:class="{ 'btn-danger': user.type=='user' }" :disabled="user.type == 'admin'">Delete</button>
    </td>
</tr>
</template>

<script>
export default {
    props:['user']
    
}
</script>

<style scoped>

</style>