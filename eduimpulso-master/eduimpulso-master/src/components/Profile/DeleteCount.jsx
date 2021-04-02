import { useSelector, useDispatch } from 'react-redux';
import { useNavigate } from 'react-router-dom';
import loginActions from '../store/actions/login';

const DeleteCount = () => {

    const removeEmail = useSelector(state => state.login.email)
    const dispatch = useDispatch();
    const navigate = useNavigate();

    console.log(removeEmail)
    
    const Delete = () => {
        const url = `https://eduimpulso-admin.herokuapp.com/user/${removeEmail}`;
        fetch(url, { 
            method: "DELETE",
            headers: {
                "Content-Type": "application/json"
            }
        }).then((res) => {
            if(res.ok){
                alert('Conta deletada');
                dispatch(loginActions.Logout())
                navigate('/')
            }
        })
    }
    
    return(
        <>
        {/* Button trigger modal */}
        <button type="button" className="btn btn-danger my-auto" data-toggle="modal" data-target="#staticBackdrop">
        Remover a conta
        </button>
        {/* Modal */}
        <div className="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabIndex={-1} aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div className="modal-dialog">
            <div className="modal-content d-flex m-auto">
                <div className="modal-header">
                <h5 className="modal-title" id="staticBackdropLabel">Deseja remover a conta?</h5>
                <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>
                <div className="modal-footer m-auto">
                <button type="button" className="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancelar</button>
                <button type="button" className="btn btn-danger" onClick={Delete}>Deletar conta</button>
                </div>
            </div>
            </div>
        </div>
        </>
    )
}

export default DeleteCount;
