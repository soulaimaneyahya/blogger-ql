import './bootstrap';
import { createApp } from 'vue';
import moment from "moment";
import router from './router';
import { ApolloClient, HttpLink, InMemoryCache } from '@apollo/client/core'
import { createApolloProvider } from '@vue/apollo-option'

const httpLink = new HttpLink({
    // You should use an absolute URL here
    uri: 'http://127.0.0.1:8000/graphql',
})

// Create the apollo client
const apolloClient = new ApolloClient({
    link: httpLink,
    cache: new InMemoryCache(),
    connectToDevTools: true,
})

// Create a provider
const apolloProvider = createApolloProvider({
    defaultClient: apolloClient,
})

import App from './components/App.vue'
const app = createApp(App)

app.config.globalProperties.$filters = {
    longdate(value) {
      return moment(value).format("MMMM Do YYYYY")
    },
    timeago(value) {
      return moment(value).fromNow()
    }
}

// Use the provider
app.use(apolloProvider)
app.use(router)

app.mount('#app');
