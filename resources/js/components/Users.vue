<template>
        <ul>
            <li></li>
        </ul>
</template>

<script>
export default {
    data() {
        return {
            users: {
                id: 0,
                name: '',
                email: '',
            },
            url: '/api/users',
        }
    },
    mounted(){
        this.getUsers()
    },
    methods: {
        getUsers(){
            let $this = this
            axios.get(this.url).then(response=>{
                console.log(response);
                this.users = response.data.data
            })
        }
    }

}
</script>
