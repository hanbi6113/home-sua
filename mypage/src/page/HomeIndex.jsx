import a from '../img/a.png'
import {Link} from 'react-router-dom'
export default function HomeIndex(){
    return(
        <>
            <div style={{width:"100%", display:"flex"}}>
                <Link to="/portfolio" style={{color: "black",fontWeight: "bold", backgroundColor:"pink"}}>포트폴리오</Link>
            </div>
            <div style={{width:"100%"}}>
                <img src={a} style={{width:"100%"}}/>
            </div>
        </>
    );
}




// import a from '../img/a.png';
// import { Navigate, useNavigate } from 'react-router-dom';
// import Portfolio from './Portfolio';

// export default function HomeIndex(){
//     return(
//         <>
//             <div>
//                 <img src={a}/>
//                 <button onClick={()=>Navigate("/Portfolio")}>포트폴리오</button>
//             </div>
//         </>
//     );
// }