<template>
    <v-container>
            <v-form @submit.prevent="login">
            <v-text-field
                    label="E-mail"
                    v-model="form.email"
                    type="email"
                    required
            ></v-text-field>
            <v-text-field
                    label="Password"
                    v-model="form.password"
                    type="password"
                    required
            ></v-text-field>

            <v-btn color="green" type="submit" dark>Login</v-btn>

            <router-link to="/signup">
                <v-btn color="blue" type="submit" dark>Signup</v-btn>
            </router-link>

        </v-form>
    </v-container>
</template>

<script>

    export default {
        components: {},
        data () {
            return {
                form: {
                    email: null,
                    password: null
                }
            }
        },
        created() {
          if(User.loggedIn()) {
              this.$router.push({name: 'forum'})
          }
        },
        methods:{
            login(){
                User.login(this.form)

            }
        }
    }
</script>