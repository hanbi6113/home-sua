import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import { BrowserRouter as Router, Routes, Route } from "react-router-dom"
import Home from './page/Home';
import About from './page/About';
import Contact from './page/Contact';
import Portfolio from './page/Portfolio';

function App() {
  return (
    <div>
      <Router>
        <Routes>
          <Route path="/*" element={ <Home />} />
          <Route path="/About" element={ <About/>} />
          <Route path="/Contact" element={ <Contact/>} />
          <Route path="/Portfolio" element={ <Portfolio/>} />
        </Routes>
      </Router>
    </div>
  )
}

export default App
