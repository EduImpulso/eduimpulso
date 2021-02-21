const INITAL_STATE = {
    status: false,
    email: ''
}

export default function login(state = INITAL_STATE, action){
    if (action.type === 'LOGIN'){
        return{
            ...state,
            status: true,
            email: action.email
        }
    }
    else if (action.type === 'LOGOUT'){
        return{
            ...state,
            status: false,
            email: ''
        }
    }
    return state
}
