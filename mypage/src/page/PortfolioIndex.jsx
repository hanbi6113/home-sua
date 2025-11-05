
import a1 from '../img/a1.png';
import a2 from '../img/a2.png';
import a3 from '../img/a3.png';
import a4 from '../img/a4.png';
import a5 from '../img/a5.png';
import a6 from '../img/a6.png';

export default function PortfolioIndex(){
    return(
        <div>
            <div style={{fontSize: "25px", fontWeight: "bold" }}>나의 작품</div>
        <div style={{width: "100%"}}>
                <img src={a1} style={{width: "400px", height: "400px"} }/>
                <img src={a2} style={{width: "400px", height: "400px"} }/>
                <img src={a3} style={{width: "400px", height: "400px"} }/>
                <img src={a4} style={{width: "400px", height: "400px"} }/>
                <img src={a5} style={{width: "400px", height: "400px"} }/>
                <img src={a6} style={{width: "400px", height: "400px"} }/>
            </div>
        </div>
    );
}