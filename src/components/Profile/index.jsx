import { useState, useEffect } from 'react';
import { useSelector } from 'react-redux';

const EditUser = () => {

    const [name, setName] = useState ('');
    const [username, setUsername] = useState ('');
    const [email, setEmail] = useState ('');
    const [user, setUser] = useState([]);
    const [render, setRender] = useState(false);

    const emailUser = useSelector(state => state.login.email);

    useEffect(async() =>{
        const url = `https://eduimpulso-admin.herokuapp.com/${emailUser}`;
        const res = await fetch(url);
        setUser(await res.json());
    }, [])

    const Edit = (e) => {
        e.preventDefault();
        let form = {
            name: name,
            username: username,
            email: email};
        const url = `https://eduimpulso-admin.herokuapp.com/user/${user.id_user}`;
        fetch(url, { 
            method: "PUT",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(form)
        }).then((res) => {
            if(res.ok){
                alert('Dados alterados com sucesso')
            }
        })
    }

    return (
        <div className="col-12 col-lg-5">
            <h2>Editar perfil</h2>
            <small>*preencha todos os campos</small>
            <div className="col-lg-12 py-2" style={{backgroundColor: 'hsla(275, 46%, 64%, 0.562)', borderRadius: 20}}>
                <form onSubmit={Edit}>
                <div className="input-group my-3 col-lg-12 d-flex align-items-center">
                    <div className="input-group-prepend">
                    <span className="input-group-text"> Nome </span>
                        </div>
                    <input type="text" className="form-control" aria-label="Small" name="name" value={name} onChange={(e)=>{setName(e.target.value)}} aria-describedby="inputGroup-sizing-sm" required/>
                </div>
                <div className="input-group my-3 col-lg-12 d-flex align-items-center">
                    <div className="input-group-prepend">
                    <span className="input-group-text"> User </span>
                    </div>
                    <input type="text" className="form-control" aria-label="Small" name="username" value={username} onChange={(e)=>{setUsername(e.target.value)}} aria-describedby="inputGroup-sizing-sm" required/>
                </div>
                <div className="input-group my-3 col-lg-12 d-flex align-items-center">
                    <div className="input-group-prepend">
                    <span className="input-group-text"> E-mail </span>
                    </div>
                        <input type="text" className="form-control" aria-label="Small" name="email" value={email} onChange={(e)=>{setEmail(e.target.value)}} aria-describedby="inputGroup-sizing-sm" required/>
                </div>
                <button className="btn btn-secondary" style={{borderRadius: 5}}>Alterar</button>
                </form>
            </div>
        </div>
    )
}

export default EditUser;
