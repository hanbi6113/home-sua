import { useState } from 'react'
import './App.css'
import TestLineChart from './component/testLineChart';
import TestLineChart2 from './component/TestLineChart2';
function App() {
  const [show, setShow] = useState(null);
  const btClass = (name) =>
  `px-4 py-2 rounded-lg text-white font-bold transition cursor-pointer
  ${show === name ? "bg-pink-600": "bg-pink-400 hover:bg-pink-500"}`;

  return (
    <>
      <div className='flex gap-3'>
          <button onClick={()=> setShow("A")} className={btClass("A")}>2020</button>
          <button onClick={()=> setShow("B")} className={btClass("B")}>2021</button>
          
          </div>
      
          <div className='mt-8'>
           { show === "A" && <TestLineChart/>} 
           { show === "B" && <TestLineChart2/>} 
           
          </div>
    </>
  )
}

export default App
