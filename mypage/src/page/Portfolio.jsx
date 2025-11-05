import { Link, Routes, Route} from 'react-router-dom';
import PortfolioIndex from './PortfolioIndex';

function Portfolio (){
    return(
        <div>
           <Routes>
                <Route path="/" element={<PortfolioIndex/>}/>
                           
            </Routes>
        </div>
    );
}

export default Portfolio;