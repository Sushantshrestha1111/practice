import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import { useQuery } from '@tanstack/react-query'
import {fetchPosts} from './api/api'

import CardPost from './components/CardPost'



function App() {
  
  

  return (
    <>
      <div>
        tanstact query demo
 
  <CardPost/>
       
      </div>
      
    </>
  )
}

export default App
