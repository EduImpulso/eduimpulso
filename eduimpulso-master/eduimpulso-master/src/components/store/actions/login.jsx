const Login = (email) => {
    return{
        type: 'LOGIN',
        email
    }
}

const Logout = () => {
    return{
        type: 'LOGOUT',
    }
}

export default {
    Login,
    Logout
}
