<template>
        <div class="column is-12">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Users Listing
                    </p>
                    <a href="/users/create" class="card-header-icon">
                        <span class="icon">
                            <i class="fas fa-plus" aria-hidden="true"></i>
                        </span>
                    </a>
                </header>
                <div class="card-content">
                    <div class="content">
                        <table class="table is-hoverable">
                            <thead>
                                <tr>
                                    <th class="has-text-centered">ID</th>
                                    <th class="has-text-centered">First Name</th>
                                    <th class="has-text-centered">Last Name</th>
                                    <th class="has-text-centered">Email</th>
                                    <th class="has-text-centered">Country</th>
                                    <th class="has-text-centered">Company</th>
                                    <th class="has-text-centered" colspan="2">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(user, index) in users">
                                    <td class="has-text-centered">{{ user.id }}</td>
                                    <td class="has-text-centered">{{ user.first_name}}</td>
                                    <td class="has-text-centered">{{ user.last_name }}</td>
                                    <td class="has-text-centered">{{ user.email }}</td>
                                    <td class="has-text-centered">{{ user.country }}</td>
                                    <td class="has-text-centered">{{ user.company }}</td>
                                    <td class="has-text-centered">
                                        <button class="button is-danger is-outlined">
                                            <span class="icon is-small">
                                            <i class="fas fa-times"></i>
                                            </span>
                                        </button>
                                    </td>
                                    <td class="has-text-centered">
                                         <button class="button is-info is-outlined">
                                            <span class="icon is-small">
                                            <i class="fas fa-edit"></i>
                                            </span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
export default {
    data() {
        return {
            users: [],
            user: {
                id: 0,
                first_name: '',
                last_name: '',
                email: '',
                country: '',
                company: '',
            },
            url: '/api/users',
            pagination: []
        }
    },
    mounted(){
        this.getUsers()
    },
    methods: {
        getUsers(){
            let $this = this
            axios.get(this.url).then(response => {
                //console.log(response);
                this.users = response.data.data
            })
        }
    }

}
</script>
