<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                        <div v-for="user in users">
                            <p>{{user.name}}</p>
                        </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            this.getUsers();
        },
        data() {
            return {
                users: [],
            };
        },
        methods:
            {
                getUsers() {
                    axios.get('/users/list')
                        .then((response) => {
                            this.users = response.data;
                            console.log(this.users[0])
                        });
                }
            }
    }
</script>
