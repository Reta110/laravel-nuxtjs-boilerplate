export default function ({ store, redirect }) {
  console.log('store.state.auth', store.state.auth)
  if (store.state.auth.loggedIn) {
    return redirect('/')
  }
}
