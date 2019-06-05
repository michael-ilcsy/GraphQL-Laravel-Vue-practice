<template>
  <v-form @submit="createAccount" onSubmit="return false;">
    <v-container>
      <v-layout>
        <v-flex xs12 md4>
          <v-text-field
                  v-model="name"
                  label="name"
                  required
          ></v-text-field>
          <v-text-field
                  v-model="twitterId"
                  label="twitterId"
                  required
          ></v-text-field>
          <v-text-field
                  v-model="email"
                  label="E-mail"
                  required
          ></v-text-field>
          <v-text-field
                  v-model="pass"
                  label="password"
                  required
          ></v-text-field>
          <v-text-field
                  v-model="passConf"
                  label="password_confirm"
                  required
          ></v-text-field>
          <v-btn color="primary" type="submit">アカウント作成</v-btn>
        </v-flex>
      </v-layout>
    </v-container>
  </v-form>
</template>

<script>
import { CREATE_ACCOUNT } from '../graphql/mutation'
import store from '../store.js'

export default {
  name: 'Signup',
  data: () => ({
    name: '',
    twitterId: '',
    email: '',
    passConf: '',
    pass: ''
  }),
  methods: {
    createAccount (e) {
      // mutation
      this.$apollo.mutate({
        // GraphQL
        mutation: CREATE_ACCOUNT,
        // Variables
        variables: {
          name: this.name,
          twitter_id: this.twitterId,
          email: this.email,
          password: this.pass,
          password_confirmation: this.passConf,
        },
      }).then((data) => {
        // Sucess
        const token = localStorage.setItem('vue_token', data.data.CreateAccount.token.access_token)
        store.commit('logined')
        this.$router.push('/')
      }).catch((error) => {
        // Error
        console.error(error)
      })
    }
  }
}
</script>
