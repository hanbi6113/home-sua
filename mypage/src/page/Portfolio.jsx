import { Link, Routes, Route} from 'react-router-dom';

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