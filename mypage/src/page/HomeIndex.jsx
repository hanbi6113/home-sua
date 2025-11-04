import a from '../img/a.png';
import { Navigate, useNavigate } from 'react-router-dom';
import Portfolio from './Portfolio';

export default function HomeIndex(){
    return(
        <>
            <div>
                <img src={a}/>
                <button onClick={()=>Navigate("/Portfolio")}>포트폴리오</button>
            </div>
        </>
    );
}