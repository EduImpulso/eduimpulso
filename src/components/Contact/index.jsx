import { useState } from 'react';

const Contact = () => {

    const [name, setName] = useState ('');
    const [email, setEmail] = useState ('');
    const [subject, setSubject] = useState ('');
    const [message, setMessage] = useState ('');

    const SentMessage = (e) => {
        e.preventDefault();
        let form = {name: name,
            msg: message,
            assunto: subject,
            email: email
            };
        const url = "https://eduimpulso-admin.herokuapp.com/messages";
        fetch(url, { 
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(form)
        }).then((res) => {
            if(res.ok){
                setName('');
                setEmail('');
                setSubject('');
                setMessage('');
                alert('Obrigado pelo contato! Aguarde nosso retorno')
            } else {
                alert('Ocorreu um erro ao enviar a mensagem!')
            }
        })
    }

    return(
        <>
            <div className="col-12 col-lg-6 m-auto pb-3">
                <img src='./imgs/fale_conosco/contato.jpeg' className="img-fluid border" alt="fale conosco" />
            </div>
            <div className="cardContato p-1 text-white col-12 col-lg-6 rounded">
                <div className="justify-content-center my-1 p-2">
                    <p className="text-center">Fala tu! Fique a vontade pra nos enviar dúvidas e sugestões 💬</p>
                    <form onSubmit={SentMessage}>
                        <div className="form-row">
                            <div className="form-group col-sm-6">
                                <label htmlFor="inputNome">Digite seu nome</label>
                                <input className="form-control" name="name" value={name} onChange={(e)=>{setName(e.target.value)}} name="name" id="inputNome" placeholder="Nome" required/>
                            </div>
                            <div className="form-group col-sm-6">
                                <label htmlFor="inputEmail">Digite seu e-mail</label>
                                <input className="form-control" name="name" value={email} onChange={(e)=>{setEmail(e.target.value)}} name="email" id="inputEmail" placeholder="e-mail" required/>
                            </div>
                            <div className="form-group col-sm-12">
                                <label htmlFor="inputAssunto"> Assunto </label>
                                <input className="form-control" name="name" value={subject} onChange={(e)=>{setSubject(e.target.value)}} name="assunto" id="inputAssunto" placeholder="Assunto" required/>
                            </div>
                            <div className="form-group col-sm-12">
                                <label htmlFor="formControlTextarea"> Mensagem: </label>
                                <textarea className="form-control" name="name" value={message} onChange={(e)=>{setMessage(e.target.value)}} name="msg" id="formControlTextatrea" rows={3} defaultValue={""} required/>
                            </div>
                            <button type="submit" className="buttonForm bottonContact btn col-sm-12 col-md-12 col-lg-12">Enviar</button>
                            {/* style={{backgroundColor: 'rgba(0, 0, 0, 0)', border: '3px solid white', color: 'white'}} */}
                        </div>
                    </form>
                </div>
                <div style={{width:"100%", height: "51px"}}></div>
            </div>
        </>
    )
}

export default Contact;
