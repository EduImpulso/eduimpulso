import { lazy, Suspense } from 'react';
const EditUser = lazy(() => import('../components/Profile/'));
const DeleteCount = lazy(() => import('../components/Profile/DeleteCount'));

const Perfil = () => {
    return(
        <main className="container-fluid d-flex justify-content-center align-items-center my-5">
            <div className="row d-flex justify-content-center">
                <Suspense fallback={
                    <div className="spinner-border text-success" role="status">
                        <span className="sr-only">Loading...</span>
                    </div>
                }>
                    <EditUser />
                </Suspense>
                <div id="phone" style={{height: 20}} />
                <div className="row col-12 col-lg-5 p-3 d-flex justify-content-around my-3 mx-3" style={{backgroundColor: 'rgb(37, 37, 37, 0.5)'}}>
                <div className="col-12 col-lg-6 my-auto d-block alert alert-danger mx-2 text-center d-flex align-items-center h-50" role="alert">
                    Cuidado! ao remover a conta, não poderá ser recuperada!
                </div>
                <Suspense fallback={
                    <div className="spinner-border text-success" role="status">
                        <span className="sr-only">Loading...</span>
                    </div>
                }>
                    <DeleteCount />
                </Suspense>
                </div>
            </div>
        </main>

    )
}

export default Perfil;
