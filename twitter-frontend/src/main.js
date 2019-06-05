import Vue from 'vue'
import './plugins/vuetify'
import App from './App.vue'
import router from './router'
import store from './store'

import { ApolloClient } from 'apollo-client'
import { setContext } from 'apollo-link-context'
import { createHttpLink } from 'apollo-link-http'
import { InMemoryCache } from 'apollo-cache-inmemory'
import VueApollo from 'vue-apollo'

Vue.config.productionTip = false

Vue.use(VueApollo)
// createHttpLinkでエンドポイントの指定をします
const httpLink = createHttpLink({
  uri: 'http://localhost:8000/graphql'
})

// 今回はlocalstorageを用いてtokenを保持します
const authLink = setContext((_, { headers }) => {
  const token = localStorage.getItem('vue_token')
  return {
    headers: {
      ...headers,
      authorization: token ? `Bearer ${token}` : '',
    }
  }
})
// Apolloclientの初期化です
// linkとmemoryCacheを有効にします
const apolloClient = new ApolloClient({
  link: authLink.concat(httpLink),
  cache: new InMemoryCache(),
})
// apolloProviderを設定します。
const apolloProvider = new VueApollo({
  defaultClient: apolloClient,
  errorHandler (error) {
    store.commit('error')
  }
})

new Vue({
  router,
  store,
  apolloProvider,
  render: h => h(App)
}).$mount('#app')
