// import { useState } from 'react'
import { BrowserRouter as Router, Routes, Route} from "react-router-dom"
import './App.css'

// 컴포넌트 import
import MainMenu from './component/MainMenu';
import Info from "./component/study1/Info";
import Board from "./component/study1/Board";
import Member from "./component/study1/Member";
import Store from "./component/study1/store";
import MyStudy from "./component/study1/MyStudy";
function App() {
  return (
    
      <Router>
        <Routes>
          <Route path="/" element={<MainMenu/>}/>
          <Route path="/propstate" element={<Info/>}/>
          <Route path="/boardMake" element={<Board/>}/>
          <Route path="/Member" element={<Member/>}/>
          <Route path="/store/*" element={<Store/>}/>
          <Route path="/MyStudy/*" element={<MyStudy/>}/>
          
        </Routes>
      </Router>
    
  )
}

export default App
