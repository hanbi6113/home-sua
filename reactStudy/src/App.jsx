// import { useState } from 'react'
import { BrowserRouter as Router, Routes, Route} from "react-router-dom"
import './App.css'

// 컴포넌트 import
import MainMenu from './component/MainMenu';
import Info from "./component/study1/Info";
import Board from "./component/study1/Board";
import Member from "./component/study1/Member";
function App() {
  return (
    
      <Router>
        <Routes>
          <Route path="/" element={<MainMenu/>}/>
          <Route path="/propstate" element={<Info/>}/>
          <Route path="/boardMake" element={<Board/>}/>
          <Route path="/Member" element={<Member/>}/>
        </Routes>
      </Router>
    
  )
}

export default App
