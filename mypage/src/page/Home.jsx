import React from "react";
import { Link, Routes, Route} from 'react-router-dom';
import About from './About';
import Contact from "./Contact";
import HomeIndex from "./HomeIndex";
import './Home.css';
function Home (){
    return(
        <div>
            <div className="nav">
                <Link to="" className="link">HOME</Link> 
                <Link to="/About" className="link">ABOUT</Link>
                <Link to="/Contact" className="link">CONTACT</Link>
            </div>
            <Routes>
                <Route path="/" element={<HomeIndex/>}/>
                
            </Routes>
        </div>
    );
}

export default Home;