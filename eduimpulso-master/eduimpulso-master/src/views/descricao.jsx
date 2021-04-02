import Descricao from '../components/DescricaoCursos'
import { useParams } from 'react-router-dom'

const DescricaoPage = () =>{

    const { id } = useParams();
    console.log(id)

    return(
        <Descricao id={id}/>
    )
}

export default DescricaoPage;