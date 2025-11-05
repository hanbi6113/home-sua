import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import { BrowserRouter as Router, Routes, Route } from "react-router-dom"
import Home from './page/Home';
import About from './page/About';
import Contact from './page/Contact';
import Portfolio from './page/Portfolio';
import Welcome from './page/Welcome'
import Count from './page/Count'
import ProfileCard from './page/ProfileCard'
import LikeButoon from './page/LikeButton'

function App() {
  return (
    <>
      <Welcome name="이순신" age="24"/>
      <ProfileCard name="조수아" age="21" hobby="춤"/>
      <Count/>
      <LikeButoon/>
      <Router>
        <Routes>
          <Route path="/*" element={ <Home />} />
          <Route path="/About" element={ <About/>} />
          <Route path="/Contact" element={ <Contact/>} />
          <Route path="/Portfolio" element={ <Portfolio/>} />
        </Routes>
      </Router>
    </>
  )
}

export default App
